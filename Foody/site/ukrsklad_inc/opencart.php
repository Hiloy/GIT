<?php

define('OPENCART_VER', 305);

mb_internal_encoding("UTF-8");
require_once(DIR_INC.'imagaz.php');
require_once(DIR_INC.'us_tovar.php');

class OpenCart extends Magazin
{
    private $_cena_fieldname;
    private $_stock_status_exist_id;
    private $_stock_status_miss_id;
    private $_is_manufacturer_description;
    private $_is_category_path;
    private $_im_tovar_category_tree;
    private $_us_tovar_category_tree;
    private $_max_tovar_category_tree_level;
    private $_find_tovar_type;

    public function connect()
    {
        require_once('./config.php');
        $db_driver = DB_DRIVER;
        if($db_driver == 'mysqli' || $db_driver == 'mpdo')
          $db_driver = 'mysql';
        $con_string = $db_driver.':dbname='.DB_DATABASE.';host='.DB_HOSTNAME;
        $con_user = DB_USERNAME;
        $con_pass = DB_PASSWORD;
        $this->db_pref = DB_PREFIX;
        $this->_im_request_filename = "ri_from_site.csv";
        $this->db = new PDO($con_string, $con_user, $con_pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    public function check_struct()
    {
        $query = $this->db->query("SELECT main_category FROM ".DB_PREFIX."product_to_category LIMIT 1", PDO::FETCH_ASSOC);
        if($query == false)
            $this->db->exec("ALTER TABLE ".DB_PREFIX."product_to_category ADD main_category BOOL NOT NULL DEFAULT '0'");

        $query = $this->db->query("SELECT ean FROM ".DB_PREFIX."product LIMIT 1", PDO::FETCH_ASSOC);
        if($query == false)
          $this->db->exec("ALTER TABLE ".DB_PREFIX."product ADD ean varchar(14) NOT NULL");

        $query = $this->db->query("SELECT meta_title FROM ".DB_PREFIX."product_description LIMIT 1", PDO::FETCH_ASSOC);
        if($query == false)
        {
          $this->db->exec("ALTER TABLE ".DB_PREFIX."product_description ADD meta_title VARCHAR(255)");
          $this->db->exec("UPDATE TABLE ".DB_PREFIX."product_description SET meta_title = name");
        }
        $query = $this->db->query("SHOW TABLES LIKE '".DB_PREFIX."manufacturer_description'", PDO::FETCH_ASSOC);
        $this->_is_manufacturer_description = false;
        if($query != false)
        {
          $row = $query->fetch();
          if($row)
            $this->_is_manufacturer_description = true;
        }
        $query = $this->db->query("SHOW TABLES LIKE '".DB_PREFIX."category_path'", PDO::FETCH_ASSOC);
        $this->_is_category_path = false;
        if($query != false)
        {
            $row = $query->fetch();
            if($row)
                $this->_is_category_path = true;
        }
    }

    public function save_tovar_to_file()
    {
        $query = $this->db->query("SELECT p.*, pd.name, pd.description, p2c.category_id, m.name AS manuf FROM ".DB_PREFIX."product p LEFT JOIN ".DB_PREFIX."manufacturer m ON (p.manufacturer_id = m.manufacturer_id)  LEFT JOIN ".DB_PREFIX."product_to_category p2c ON (p.product_id = p2c.product_id AND p2c.category_id = (SELECT p2c1.category_id FROM ".DB_PREFIX."product_to_category p2c1 WHERE p.product_id = p2c1.product_id ORDER BY p2c1.main_category DESC, p2c1.category_id LIMIT 1)) LEFT JOIN ".DB_PREFIX."product_description pd ON (p.product_id = pd.product_id AND pd.language_id = '".MAIN_LANG_ID."')", PDO::FETCH_ASSOC);
        $filename = $this->gen_filename('st');
        $file = fopen(DIR_UPL.$filename,'w');

        $tovar = new TovarName(array(), ArrayObject::STD_PROP_LIST);

        $csv_fields = '';
        foreach((array)$tovar as $fname => $fvalue)
        {
            $csv_fields .= "$fname;";
        }
        $csv_fields = rtrim($csv_fields, ';');
        fputs($file, $csv_fields."\n");

        foreach ($query as $row)
        {
            $tovar = $this->set_tovar_params($row);
            $tovar->tov_descr_big = base64_encode($row['description']);
            fputcsv($file,(array)$tovar,';');
        }
        fclose($file);
        if(file_exists(DIR_UPL.$filename) && filesize(DIR_UPL.$filename) > 0)
            return $filename;
        else
            return false;
    }


    public function load_tovar_from_file($filename)
    {
        //echo "Строк: ".count(file(DIR_UPL.$filename))."</br>\n";
        $file = fopen(DIR_UPL.$filename,'r');
        $csv_fields = fgetcsv($file, 0, ';');
        //print_r($csv_fields);
        $count_fields = count($csv_fields);
        $tovar_array = array();

        $c_index_start = $this->_import_tovar_continue*$this->_im_tovar_max;
        $c_index = 0;
        while(($row = fgetcsv($file, 0, ';')) !== false)
        {
            if($c_index_start <= $c_index && $c_index <= $c_index_start+$this->_im_tovar_max)
            {
                if($count_fields != count($row))
                {
                    continue;
                }
                for($i = 0; $i < count($csv_fields); $i++)
                {
                    $row[$csv_fields[$i]] = $row[$i];
                }
                $tovar = $this->set_tovar_params($row, 1);
                $tovar_array[$c_index] = $tovar;
            }
            if($c_index >= ($c_index_start+$this->_im_tovar_max-1))
            {
                //print_r($row);
                break;
            }
            ++$c_index;
        }

        if(($row = fgetcsv($file, 0, ';')) !== false)
        {
            $this->_import_tovar_continue = ++$this->_import_tovar_continue;
            $this->_import_tovar_filename = $filename;
        }
        else
        {
            $this->_import_tovar_continue = 0;
            $this->_import_tovar_filename = "";
            $this->_import_groups_filename = "";
            $this->_last_params_filename = "";
            --$c_index;
        }
        echo "Строк обработано с ".($c_index_start+1)." по ".($c_index+1)."</br>\n";
        fclose($file);

        $this->build_category_tree();
        //print_r($this->_us_tovar_category_tree);
        foreach($tovar_array as $i => $tovar)
        {
            $category_find = $this->find_category_by_num($tovar->tip, $this->_us_tovar_category_tree);
            if($category_find === NULL)
            {
                echo "Не найдена группа для товара (num=$tovar->tip): $tovar->name </br>\n";
                continue;
            }
            $category_find = $this->find_category_by_fullname($this->_us_tovar_category_tree[$category_find]->full_pid_name, $this->_im_tovar_category_tree);
            //print_r($this->_im_tovar_category_tree[$category_find]);
            if($category_find === NULL)
            {
                echo "Не найдена группа для товара: $tovar->name </br>\n";
                continue;
            }
            else
            {
                $tovar->im_grupa_num = $this->_im_tovar_category_tree[$category_find]->im_num;
                $tovar->im_main_grupa_num = $this->_im_tovar_category_tree[$category_find]->im_pid_num;
            }

            $tovar_find = $this->find_tovar_by_im($tovar);
            if($tovar_find == false)
            {
                $tovar_find = $this->find_tovar($tovar);
                if($tovar_find == false)
                {
                    $this->insert_tovar($tovar);
                }
            }
            else
            {
                if($this->compare_tovar($tovar_find, $tovar) == false)
                {
                    $this->update_tovar($tovar);
                    continue;
                }
            }
        }
    }

    public function find_tovar($tovar)
    {
        switch($this->_find_tovar_type)
        {
            case TOVAR_CMP_KOD:
                $sql_where_tovar_type = "p.model = ".$this->db->quote($tovar->kod);
                break;
            case TOVAR_CMP_NAME_KOD:
                $sql_where_tovar_type = "p.model = ".$this->db->quote($tovar->kod). " AND pd.name = ".$this->db->quote($tovar->name);
                break;
            default:
                $sql_where_tovar_type = "pd.name = ".$this->db->quote($tovar->name);
        }
        $sqls = "SELECT p.*, pd.name, pd.description, p2c.category_id, cd.name AS category, m.name AS manuf FROM ".DB_PREFIX."product p LEFT JOIN ".DB_PREFIX."manufacturer m ON (p.manufacturer_id = m.manufacturer_id) JOIN ".DB_PREFIX."product_to_category p2c ON (p.product_id = p2c.product_id AND p2c.category_id = (SELECT p2c1.category_id FROM ".DB_PREFIX."product_to_category p2c1 WHERE p.product_id = p2c1.product_id ORDER BY p2c1.main_category DESC, p2c1.category_id LIMIT 1)) LEFT JOIN ".DB_PREFIX."product_description pd ON (p.product_id = pd.product_id AND pd.language_id = ".MAIN_LANG_ID.")  LEFT JOIN ".DB_PREFIX."category_description cd ON (p2c.category_id = cd.category_id AND cd.language_id = ".MAIN_LANG_ID.") WHERE ".$sql_where_tovar_type." AND p2c.category_id = ".$tovar->im_grupa_num;
        $query = $this->db->query($sqls, PDO::FETCH_ASSOC);
        $row_count = 0;
        if($query)
        {
            foreach($query as $row)
            {
                $tovar_find = $this->set_tovar_params($row);
                if(++$row_count > 1)
                    echo "Найдено несколько одинаковых товаров в одной группе: $tovar->name</br>\n";
                return $tovar_find;
            }
        }

        return false;
    }

    public function find_tovar_by_im($tovar)
    {
        $sqls = "SELECT p.*, pd.name, pd.description, p2c.category_id, m.name AS manuf FROM ".DB_PREFIX."product p LEFT JOIN ".DB_PREFIX."manufacturer m ON (p.manufacturer_id = m.manufacturer_id) LEFT JOIN ".DB_PREFIX."product_to_category p2c ON (p.product_id = p2c.product_id AND p2c.category_id = (SELECT p2c1.category_id FROM ".DB_PREFIX."product_to_category p2c1 WHERE p.product_id = p2c1.product_id ORDER BY p2c1.main_category DESC, p2c1.category_id LIMIT 1)) LEFT JOIN ".DB_PREFIX."product_description pd ON (p.product_id = pd.product_id AND pd.language_id = ".MAIN_LANG_ID.") WHERE p.product_id = '$tovar->im_num'";
        $query = $this->db->query($sqls, PDO::FETCH_ASSOC);
        if($query)
        {
            foreach ($query as $row)
            {
                //print_r($row);
                $tovar_find = $this->set_tovar_params($row);
                return $tovar_find;
            }
        }
        return false;
    }

    public function update_tovar($tovar)
    {
        $product_id = $tovar->im_num;
        if($product_id == -1)
            return;
        $manuf_id = $this->check_tovar_manuf($tovar);
        $this->db->exec("UPDATE ".DB_PREFIX."product SET model = '$tovar->kod', ean = '$tovar->tov_scancode', quantity = '$tovar->kolvo', stock_status_id = $this->_stock_status_miss_id, manufacturer_id = '$manuf_id', price = '$tovar->tov_cena', weight = '$tovar->tov_ves', length = '$tovar->tov_length', width = '$tovar->tov_width', height = '$tovar->tov_height', date_modified = NOW() WHERE product_id = '$product_id'");
        //$this->db->exec("UPDATE ".DB_PREFIX."product SET image = 'data/test.jpg' WHERE product_id = '$product_id'");
        $this->db->exec("UPDATE ".DB_PREFIX."product_description SET name = ".$this->db->quote($tovar->name).", description = ".$this->db->quote($tovar->tov_descr_big)." WHERE product_id = '$product_id' AND language_id = '".MAIN_LANG_ID."'");
        //if(SEC_LANG_ID > 0)
        //    $this->db->exec("UPDATE ".DB_PREFIX."product_description SET name = ".$this->db->quote($tovar->name).", description = ".$this->db->quote($tovar->tov_descr_big)." WHERE product_id = '$product_id' AND language_id = '".SEC_LANG_ID."'");
        $this->db->exec("UPDATE ".DB_PREFIX."product_to_store SET store_id = '".STORE_ID."' WHERE product_id = '$product_id'");
        $this->db->exec("UPDATE ".DB_PREFIX."product_to_category SET category_id = '$tovar->im_grupa_num' WHERE product_id = '$product_id' AND main_category = 1");
        //$this->db->exec("UPDATE ".DB_PREFIX."product_reward SET customer_group_id = '1' WHERE product_id = '$product_id'");
        echo "Обновление товара: $tovar->name (цена: $tovar->tov_cena)</br>\n";
    }

    public function insert_tovar($tovar)
    {
        $manuf_id = $this->check_tovar_manuf($tovar);
        $this->db->exec("INSERT INTO ".DB_PREFIX."product SET model = '$tovar->kod', sku = '', ean = '$tovar->tov_scancode', location = '', quantity = '$tovar->kolvo', minimum = '1', subtract = '1', stock_status_id = $this->_stock_status_miss_id, date_available = '2007-01-01', manufacturer_id = '$manuf_id', shipping = '1', price = '$tovar->tov_cena', points = '0', weight = '$tovar->tov_ves', weight_class_id = '1', length = '$tovar->tov_length', width = '$tovar->tov_width', height = '$tovar->tov_height', length_class_id = '1', status = '1', tax_class_id = '0', sort_order = '1', date_added = NOW()");
        $product_id = $this->db->lastInsertId('product_id');
        $this->db->exec("UPDATE ".DB_PREFIX."product SET image = '' WHERE product_id = '$product_id'");
        $this->db->exec("INSERT INTO ".DB_PREFIX."product_description SET product_id = '$product_id', language_id = '".MAIN_LANG_ID."', name = ".$this->db->quote($tovar->name).", meta_title = ".$this->db->quote($tovar->name).", meta_keyword = '', meta_description = '', tag = '', description = ".$this->db->quote($tovar->tov_descr_big));
        if(SEC_LANG_ID > 0)
            $this->db->exec("INSERT INTO ".DB_PREFIX."product_description SET product_id = '$product_id', language_id = '".SEC_LANG_ID."', name = ".$this->db->quote($tovar->name).", meta_title = ".$this->db->quote($tovar->name).", meta_keyword = '', meta_description = '', tag = '', description = ".$this->db->quote($tovar->tov_descr_big));
        $this->db->exec("INSERT INTO ".DB_PREFIX."product_to_store SET product_id = '$product_id', store_id = '".STORE_ID."'");
        $this->db->exec("INSERT INTO ".DB_PREFIX."product_to_category SET product_id = '$product_id', category_id = '$tovar->im_grupa_num', main_category = '1'");
        $this->db->exec("INSERT INTO ".DB_PREFIX."product_reward SET product_id = '$product_id', customer_group_id = '1', points = '0'");
        //$this->db->exec("INSERT INTO ".DB_PREFIX."product_tag SET product_id = '$product_id', language_id = '".MAIN_LANG_ID."', tag = 'Теги товара:'");
        echo "Добавление товара: $tovar->name</br>\n";
    }

    public function compare_tovar($tovar1, $tovar2)
    {
        if(
            $tovar1->name == $tovar2->name &&
            $tovar1->kod == $tovar2->kod &&
            $this->compare_as_float($tovar1->tov_cena, $tovar2->tov_cena) &&
            $this->compare_as_float($tovar1->kolvo, $tovar2->kolvo) &&
            $tovar1->tov_descr_big == $tovar2->tov_descr_big &&
            $tovar1->tov_scancode == $tovar2->tov_scancode &&
            $tovar1->tov_proizv == $tovar2->tov_proizv &&
            $tovar1->im_grupa_num == $tovar2->im_grupa_num &&
            $this->compare_as_float($tovar1->tov_ves, $tovar2->tov_ves) &&
            $this->compare_as_float($tovar1->tov_length, $tovar2->tov_length) &&
            $this->compare_as_float($tovar1->tov_width, $tovar2->tov_width) &&
            $this->compare_as_float($tovar1->tov_height, $tovar2->tov_height)
        )
        {
            return true;
        }
        else
        {
            //print_r($tovar1);
            //print_r($tovar2);
            return false;
        }
    }

    public function compare_category($category1, $category2)
    {
        if(
            $category1->full_pid_name == $category2->full_pid_name &&
            //$category1->grupa == $category2->grupa &&
            $category1->descr_big == $category2->descr_big
        )
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function save_category_to_file()
    {
        $this->build_category_tree();
        $filename = $this->gen_filename('ce');
        $file = fopen(DIR_UPL.$filename,'w');
        $category = new CategoryName(array(), ArrayObject::STD_PROP_LIST);

        $csv_fields = '';
        foreach((array)$category as $fname => $fvalue)
        {
            $csv_fields .= "$fname;";
        }
        $csv_fields = rtrim($csv_fields, ';');
        fputs($file, $csv_fields."\n");

        foreach($this->_im_tovar_category_tree as $category)
        {
            $category->descr_big = base64_encode($category->descr_big);
            fputcsv($file,(array)$category,';');
        }
        fclose($file);
        if(file_exists(DIR_UPL.$filename) && filesize(DIR_UPL.$filename) > 0)
            return $filename;
        else
            return false;
    }

    public function build_category_tree()
    {
        $query = $this->db->query("SELECT c.*, cd.name, cd_pid.name AS pid_name, cd.description FROM ".DB_PREFIX."category c JOIN ".DB_PREFIX."category_description cd ON (c.category_id = cd.category_id AND cd.language_id = '".MAIN_LANG_ID."')  LEFT JOIN ".DB_PREFIX."category_description cd_pid ON (c.parent_id = cd_pid.category_id AND cd_pid.language_id = '".MAIN_LANG_ID."')", PDO::FETCH_ASSOC);
        $this->_im_tovar_category_tree = array();
        foreach ($query as $row)
        {
            $category = $this->set_category_params($row);
            $this->_im_tovar_category_tree[$category->im_num] = $category;
        }
        $this->sort_category_tree(0, -1);
        uasort
        (
            $this->_im_tovar_category_tree,
            function($a, $b)
            {
                if($a->level == $b->level)
                    return 0;
                return ($a->level < $b->level) ? -1 : 1;
            }
        );
        //print_r($this->_im_tovar_category_tree);
    }

    public function sort_category_tree($pid, $pid_cat)
    {
        foreach($this->_im_tovar_category_tree as $category)
        {
            if($category->im_pid_num == $pid)
            {
                $category->full_pid_name = $category->name;
                $category->full_im_num = $category->im_num;
                if($pid_cat == -1)
                {
                    $category->level = 0;
                }
                else
                {
                    $category->full_pid_name = $this->_im_tovar_category_tree[$pid_cat]->full_pid_name . '###' . $category->full_pid_name;
                    $category->full_im_num = $this->_im_tovar_category_tree[$pid_cat]->full_im_num . '###' . $category->full_im_num;
                    $category->level =  $this->_im_tovar_category_tree[$pid_cat]->level + 1;
                }
                $this->sort_category_tree($category->im_num, $category->im_num);
            }
        }
    }

    public function load_category_from_file($filename)
    {
        $this->_import_groups_filename = $filename;
        $this->_max_tovar_category_tree_level = 0;
        $file = fopen(DIR_UPL . $filename, 'r');
        if($file === false)
        {
            echo "Ошибка открытия файла:'" . $filename . " </br>\n";
            return false;
        }
        //$category = new CategoryName(array(), ArrayObject::STD_PROP_LIST);
        $csv_fields = fgetcsv($file, 0, ';');
        $count_fields = count($csv_fields);
        $this->_us_tovar_category_tree = array();
        $c_index = 0;
        while(($row = fgetcsv($file, 0, ';')) !== false)
            //while(($row = fgets($file)) !== false)
        {
            //$row = explode(';', $row);
            //print_r($row);
            if($count_fields != count($row)) continue;
            for($i = 0; $i < count($csv_fields); $i++)
            {
                $row[$csv_fields[$i]] = $row[$i];
            }
            $category = $this->set_category_params($row, 1);
            $this->_us_tovar_category_tree[$c_index++] = $category;
        }
        fclose($file);
        for($c_level = 0; $c_level <= $this->_max_tovar_category_tree_level; ++$c_level)
        {
            $this->build_category_tree();
            foreach($this->_us_tovar_category_tree as $cat)
            {
                if($c_level != $cat->level)
                    continue;
                //группа была синхронизирована с УС т.к. передается im_num
                if($cat->im_num > 0)
                {
                    //находим есть ли такой im_num в OC и совпадает ли он по дереву групп
                    if(array_key_exists($cat->im_num, $this->_im_tovar_category_tree))
                    {
                        //echo "Найдена группа по im_num:'" .$cat->full_pid_name . "'=" . $cat->im_num . " </br>\n";
                        //if($this->_tovar_category_tree[$cat->im_num]->full_pid_name != $cat->full_pid_name)
                        if($this->compare_category($this->_im_tovar_category_tree[$cat->im_num], $cat) ==  false)
                        {
                            echo "Группы не равны:'" .$cat->full_pid_name . "'=" . $this->_im_tovar_category_tree[$cat->im_num]->full_pid_name . " </br>\n";
                            if($cat->grupa == 0)
                            {
                                $this->update_category($cat);
                            }
                            else
                            {
                                $full_pid_name = str_replace("###".$cat->name,"",$cat->full_pid_name);
                                $find_key = $this->find_category_by_fullname($full_pid_name, $this->_im_tovar_category_tree);
                                if($find_key == FALSE)
                                {
                                    //echo "ПРОХОД: Ищем главную группу '" . $full_pid_name . "', ОШИБКА: группа НЕ найдена</br>\n";
                                }
                                else
                                {
                                    //echo "ПРОХОД: Найдена главная группа '".$full_pid_name."''</br>\n";
                                    $cat->im_pid_num = $this->_im_tovar_category_tree[$find_key]->im_num;
                                    $this->update_category($cat);
                                }
                            }
                        }
                    }
                    //не найден im_num, почему его передает УС, возможно группа была удалена в OC
                    else
                    {
                        $this->parse_category_level($cat, $c_level);
                    }
                }
                else
                {
                    //echo "Группа товара не была синхронизирована ранее im_num:'" .$cat->full_pid_name . "'=" . $cat->im_num . "</br>\n";
                    $this->parse_category_level($cat, $c_level);
                }
            }
        }
        if($this->_is_category_path == true)
            $this->repair_categories(0);
        return true;
    }

    function parse_category_level($cat, $c_level)
    {
        $key = $this->find_category_by_fullname($cat->full_pid_name, $this->_im_tovar_category_tree);
        if($key == FALSE)
        {
            //echo $cat->full_pid_name . '=' . $cat->im_num . " НЕ найден</br>\n";
            $this->parse_category_level_and_insert($cat, $c_level);
        }
        else
        {
            //echo "Группа товара найдена'".$cat->full_pid_name."', но im_num другой, УС=". $cat->im_num ."; OC=". $this->_tovar_category_tree[$key]->im_num ." </br>\n";
        }
    }

    function parse_category_level_and_insert($category, $c_level)
    {
        //Если группа первого уровня, добавлять без проверки групп
        if($category->grupa == 0 && $c_level == 0)
        {
            $this->insert_category($category);
        }
        //Группа имеет главную группу, надо искать
        else
        if($category->level == $c_level)
        {
            $full_pid_name = substr_replace($category->full_pid_name,"",strrpos($category->full_pid_name,"###".$category->name),strlen("###".$category->name));
            $find_key = $this->find_category_by_fullname($full_pid_name, $this->_im_tovar_category_tree);
            if($find_key == FALSE)
            {
                //echo "ПРОХОД: Ищем главную группу '" . $full_pid_name . "', ОШИБКА: группа НЕ найдена</br>\n";
                /*
                if($category->grupa == 0)
                {
                    $category->im_pid_num = $pid;
                    $pid = $this->insert_category($category);
                }
                else
                {
                    echo "ПРОХОД:Группа уровня= " . $category->grupa . "</br>\n";
                    echo "ПРОХОД:Надо искать в= " . $category->full_pid_name . "</br>\n";
                }
                */
            } else
            {
                //echo "ПРОХОД: Найдена главная группа '".$full_pid_name."''</br>\n";
                $category->im_pid_num = $this->_im_tovar_category_tree[$find_key]->im_num;
                $this->insert_category($category);
            }
        }
    }

    function find_category_by_fullname($fullname, $array)
    {
        foreach ($array as $key => $val)
        {
            if ($val->full_pid_name == $fullname)
            {
                return $key;
            }
        }
        return NULL;
    }

    function find_category_by_num($num, $array)
    {
        foreach ($array as $key => $val)
        {
            if ($val->num == $num)
            {
                return $key;
            }
        }
        return NULL;
    }

    //из скрипта обновления OpenCart
    public function repair_categories($parent_id = 0)
    {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "category_path` LIMIT 1", PDO::FETCH_ASSOC);
        if($query == false)
            return false;
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "category` WHERE `parent_id` = '" . (int)$parent_id . "'", PDO::FETCH_ASSOC);
        if($query == false)
            return false;
        foreach ($query as $category)
        {
            // Delete the path below the current one
            $this->db->exec("DELETE FROM `" . DB_PREFIX . "category_path` WHERE `category_id` = '" . (int)$category['category_id'] . "'");
            // Fix for records with no paths
            $level = 0;
            $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "category_path` WHERE `category_id` = '" . (int)$parent_id . "' ORDER BY `level` ASC", PDO::FETCH_ASSOC);
            foreach ($query as $result)
            {
                $this->db->exec("INSERT INTO `" . DB_PREFIX . "category_path` SET `category_id` = '" . (int)$category['category_id'] . "', `path_id` = '" . (int)$result['path_id'] . "', `level` = '" . (int)$level . "'");
                $level++;
            }
            $this->db->exec("REPLACE INTO `" . DB_PREFIX . "category_path` SET `category_id` = '" . (int)$category['category_id'] . "', `path_id` = '" . (int)$category['category_id'] . "', `level` = '" . (int)$level . "'");
            $this->repair_categories($category['category_id']);
        }
        return false;
    }

    public function find_category_one($name, $pid_name = '') //deprecated
    {
        //если ищем без подгруппы для товара
        if($pid_name == '')
        {
            $sqls_count = "SELECT COUNT(*) FROM ".DB_PREFIX."category c JOIN ".DB_PREFIX."category_description cd ON (c.category_id = cd.category_id AND cd.language_id = ".MAIN_LANG_ID.")  LEFT JOIN ".DB_PREFIX."category_description cd_pid ON (c.parent_id = cd_pid.category_id AND cd_pid.language_id = ".MAIN_LANG_ID.") WHERE cd.name = ".$this->db->quote($name)." AND cd_pid.name IS NULL";
            $sqls = "SELECT c.*, cd.name, cd_pid.name AS pid_name, cd.description FROM ".DB_PREFIX."category c JOIN ".DB_PREFIX."category_description cd ON (c.category_id = cd.category_id AND cd.language_id = ".MAIN_LANG_ID.")  LEFT JOIN ".DB_PREFIX."category_description cd_pid ON (c.parent_id = cd_pid.category_id AND cd_pid.language_id = ".MAIN_LANG_ID.") WHERE cd.name = ".$this->db->quote($name)." AND cd_pid.name IS NULL";
        }
        else
        {
            $sqls_count = "SELECT COUNT(*) FROM ".DB_PREFIX."category c JOIN ".DB_PREFIX."category_description cd ON (c.category_id = cd.category_id AND cd.language_id = ".MAIN_LANG_ID.")  LEFT JOIN ".DB_PREFIX."category_description cd_pid ON (c.parent_id = cd_pid.category_id AND cd_pid.language_id = ".MAIN_LANG_ID.") WHERE cd.name = ".$this->db->quote($name)." AND cd_pid.name = ".$this->db->quote($pid_name);
            $sqls = "SELECT c.*, cd.name, cd_pid.name AS pid_name, cd.description FROM ".DB_PREFIX."category c JOIN ".DB_PREFIX."category_description cd ON (c.category_id = cd.category_id AND cd.language_id = ".MAIN_LANG_ID.")  LEFT JOIN ".DB_PREFIX."category_description cd_pid ON (c.parent_id = cd_pid.category_id AND cd_pid.language_id = ".MAIN_LANG_ID.") WHERE cd.name = ".$this->db->quote($name)." AND cd_pid.name = ".$this->db->quote($pid_name);
        }
        $query = $this->db->query($sqls_count, PDO::FETCH_ASSOC);
        if($query == false)
            return false;
        $row_count = $query->fetchColumn();
        //$query->rowCount() не работает нормально
        if($row_count == 1)
        {
            $query = $this->db->query($sqls, PDO::FETCH_ASSOC);
            foreach ($query as $row)
            {
                $category_find = $this->set_category_params($row);
                return $category_find;
            }
        }
        return false;
    }

    public function update_category($category)
    {
        $category_id = $category->im_num;
        if($category_id == -1)
            return;
        echo 'Обновление группы товаров: '. $category->name."</br>\n";
        $this->db->exec("UPDATE ".DB_PREFIX."category c SET c.parent_id = '$category->im_pid_num' WHERE c.category_id = '$category_id'");
        $this->db->exec("UPDATE ".DB_PREFIX."category_description cd SET cd.name = ".$this->db->quote($category->name).", cd.description = ".$this->db->quote($category->descr_big)." WHERE cd.category_id = '$category_id' AND cd.language_id = '".MAIN_LANG_ID."'");
        //if(SEC_LANG_ID > 0)
        //    $this->db->exec("UPDATE ".DB_PREFIX."category_description cd SET cd.name = ".$this->db->quote($category->name).", cd.description = ".$this->db->quote($category->descr_big)." WHERE cd.category_id = '$category_id' AND cd.language_id = '".SEC_LANG_ID."'");

    }

    public function insert_category($category)
    {
         $this->db->exec("INSERT INTO ".DB_PREFIX."category SET parent_id = '$category->im_pid_num', `top` = 0, `column` = 1, sort_order = 0, status = 1, date_modified = NOW(), date_added = NOW()");
         $category_id = $this->db->lastInsertId('category_id');
         $this->db->exec("UPDATE ".DB_PREFIX."category SET image = '' WHERE category_id = '$category_id'");
         $this->db->exec("INSERT INTO ".DB_PREFIX."category_description SET category_id = '$category_id', language_id = '".MAIN_LANG_ID."', name = ".$this->db->quote($category->name).", meta_keyword = '', meta_description = '', description = ".$this->db->quote($category->descr_big));
         if(SEC_LANG_ID > 0)
            $this->db->exec("INSERT INTO ".DB_PREFIX."category_description SET category_id = '$category_id', language_id = '".SEC_LANG_ID."', name = ".$this->db->quote($category->name).", meta_keyword = '', meta_description = '', description = ".$this->db->quote($category->descr_big));
         $this->db->exec("INSERT INTO ".DB_PREFIX."category_to_store SET category_id = '$category_id', store_id = '".STORE_ID."'");
         echo 'Добавление группы товаров: '. $category->name."</br>\n";
         return $category_id;
    }

    public function set_tovar_params($row, $type = self::FROM_SITE)
    {
        $tovar = new TovarName(array(), ArrayObject::STD_PROP_LIST);
        if($type == self::FROM_PROG)
        {
            $tovar->name = $row['name'];
            $tovar->im_num = $row['im_num'];
            $tovar->num = $row['num'];
            $tovar->ed_izm = $row['ed_izm'];
            $tovar->tip = $row['tip'];
            $tovar->cena = floatval($row['cena']);
            $tovar->visible = $row['visible'];
            $tovar->kod = $row['kod'];
            $tovar->garan = $row['garan'];
            //$tovar->cena_r = number_format($row['cena_r']);
            $tovar->cena_r = floatval($row['cena_r']);
            $tovar->cena_o = floatval($row['cena_o']);
            $tovar->cena_curr_id = $row['cena_curr_id'];
            $tovar->cena_out_curr_id = $row['cena_out_curr_id'];
            $tovar->dopoln = $row['dopoln'];
            $tovar->is_usluga = $row['is_usluga'];
            $tovar->cena_1 = floatval($row['cena_1']);
            $tovar->cena_2 = floatval($row['cena_2']);
            $tovar->tov_fasovka = $row['tov_fasovka'];
            $tovar->tov_upakovka_count = $row['tov_upakovka_count'];
            $tovar->tov_ves = $row['tov_ves'];
            $tovar->tov_length = $row['tov_length'];
            $tovar->tov_width = $row['tov_width'];
            $tovar->tov_height = $row['tov_height'];
            $tovar->tov_scancode = $row['tov_scancode'];
            $tovar->tov_scancode_in = $row['tov_scancode_in'];
            $tovar->is_price_invisible = $row['is_price_invisible'];
            $tovar->is_pdv = $row['is_pdv'];
            $tovar->kolvo_min = $row['kolvo_min'];
            $tovar->dopoln1 = $row['dopoln1'];
            $tovar->dopoln2 = $row['dopoln2'];
            $tovar->dopoln3 = $row['dopoln3'];
            $tovar->cena_3 = floatval($row['cena_3']);
            $tovar->dopoln4 = $row['dopoln4'];
            $tovar->dopoln5 = $row['dopoln5'];
            $tovar->tov_descr_big = base64_decode($row['tov_descr_big']);
            $tovar->is_compl = $row['is_compl'];
            $tovar->kod_ukt_zed = $row['kod_ukt_zed'];
            // Кол-во в ОпенКарте только целое число без дроби, округляем
            $tovar->kolvo = intval($row['kolvo']);
            $tovar->im_grupa_num = $row['im_grupa_num'];
            $tovar->im_grupa_name = $row['im_grupa_name'];
            $tovar->grupa_pid = $row['grupa_pid'];
            $tovar->grupa_pid_name = $row['grupa_pid_name'];
            $tovar->tov_proizv = $row['tov_proizv'];
            $tovar->tov_cena = floatval($row['tov_cena']);
        }
        else
        {
            $tovar->name = $row['name'];
            $tovar->im_num = $row['product_id'];
            $tovar->kod = $row['model'];
            //$tovar->tov_descr_big = base64_encode($row['description']);
            $tovar->tov_descr_big = $row['description'];
            $tovar->kolvo = $row['quantity'];
            //$tovar->kolvo_min = 0//$row['minimum'];
            $tovar->cena_r = $row['price'];
            $tovar->tov_ves = $row['weight'];
            $tovar->tov_length = $row['length'];
            $tovar->tov_width = $row['width'];
            $tovar->tov_height = $row['height']; // высота в будущей версии УкрСклад
            $tovar->tov_scancode = $row['ean'];
            $tovar->im_grupa_num = $row['category_id'];
            $tovar->tov_proizv = $row['manuf'];
            $tovar->tov_cena = $row['price'];
        }
        /*
        if(empty($tovar->tov_scancode))
            $tovar->tov_scancode = $tovar->tov_scancode_in;
        */
        //echo 'Штрих-код: '. $tovar->tov_scancode."</br>\n";
        if($type == self::FROM_PROG)
        {
            $tovar->name = mb_substr($tovar->name, 0, 255);
            $tovar->kod = mb_substr($tovar->kod, 0, 64);
            $tovar->tov_scancode = mb_substr($tovar->tov_scancode, 0, 64);
            $tovar->tov_scancode_in = mb_substr($tovar->tov_scancode_in, 0, 64);
            $tovar->tov_proizv = mb_substr($tovar->tov_proizv, 0, 255);

            $tovar->name = $this->conv_html($tovar->name);
            $tovar->kod = $this->conv_html($tovar->kod);
            $tovar->tov_proizv = $this->conv_html($tovar->tov_proizv);
            $tovar->tov_descr_big = $this->conv_html($tovar->tov_descr_big);
        }
        if(empty($tovar->tov_descr_big))
            $tovar->tov_descr_big = $tovar->name;
        
        //if(strpos($tovar->name,'Зірка') !== false)
        //    echo "$tovar->name</br>\n";            
        return $tovar;
    }

    public function set_category_params($row, $type = self::FROM_SITE)
    {
        $category = new CategoryName(array(), ArrayObject::STD_PROP_LIST);
        if($type == self::FROM_PROG)
        {
            $category->num = $row['num'];
            $category->grupa = $row['grupa'];
            $category->im_num = $row['im_num'];
            $category->im_pid_num = 0;
            $category->descr_big = base64_decode($row['descr_big']);
            $category->full_pid_name = $row['full_name'];
            $category->full_im_num = $row['full_pid'];
            $category->level = $row['level'];
            if($this->_max_tovar_category_tree_level < $row['level'])
                $this->_max_tovar_category_tree_level = $row['level'];
        }
        else
        {
            $category->im_num = $row['category_id'];
            $category->im_pid_num = $row['parent_id'];
            $category->grupa = 0;
            $category->descr_big = $row['description'];
            $category->pid_name = $row['pid_name'];            
        }
        $category->name = $row['name'];
        //if(empty($category->descr_big))
        //    $category->descr_big = $category->name;
        return $category;
    }

    public function find_manuf($manuf_name)
    {
        if(empty($manuf_name))
        {
            return 0;
        }
        $query = $this->db->query("SELECT m.* FROM ".DB_PREFIX."manufacturer m WHERE m.name = ".$this->db->quote($manuf_name), PDO::FETCH_ASSOC);
        if($query)
        {
            foreach ($query as $row)
            {
                return $row['manufacturer_id'];
            }
        }
        return 0;
    }

    public function insert_manuf($manuf_name)
    {
        //Для версии PHP 5.4: ##empty(anything)
        $manuf_name = trim($manuf_name);
        if(empty($manuf_name))
        {
            return 0;
        }
        $this->db->exec("INSERT INTO ".DB_PREFIX."manufacturer SET name = ".$this->db->quote($manuf_name).", sort_order = '0'");
        $manufacturer_id = $this->db->lastInsertId('manufacturer_id');
        $this->db->exec("UPDATE ".DB_PREFIX."manufacturer SET image = '' WHERE manufacturer_id = '$manufacturer_id'");
        if($this->_is_manufacturer_description)
        {
          $this->db->exec("INSERT INTO ".DB_PREFIX."manufacturer_description SET manufacturer_id = '$manufacturer_id', language_id = '".MAIN_LANG_ID."', meta_keyword = '', meta_description = '', description = ".$this->db->quote($manuf_name).", name = ".$this->db->quote($manuf_name));
          if(SEC_LANG_ID > 0)
              $this->db->exec("INSERT INTO ".DB_PREFIX."manufacturer_description SET manufacturer_id = '$manufacturer_id', language_id = '".SEC_LANG_ID."', meta_keyword = '', meta_description = '', description = ".$this->db->quote($manuf_name).", name = ".$this->db->quote($manuf_name));
        }
        echo 'Добавление производителя: '. $manuf_name."</br>\n";
        return $manufacturer_id;
    }

    public function check_tovar_manuf($tovar)
    {
        $manuf_id = $this->find_manuf($tovar->tov_proizv);
        if($manuf_id > 0)
        {
            //echo "Производитель: $manuf_id :  $manuf_name</br>\n";
            return $manuf_id;
        }
        else
        {
            return $this->insert_manuf($tovar->tov_proizv);
        }
    }

    public function load_params_from_file($filename)
    {
        $ini = parse_ini_file(DIR_UPL . $filename);
        $this->_cena_fieldname = $ini["CenaFieldName"];
        $this->_im_count_max = $ini["ImageMax"];
        $this->_im_tovar_max = $ini["TovarMax"];
        $this->_is_ignore_tovars = $ini["IsIgnoreTovars"];
        $this->_is_ignore_photos = $ini["IsIgnorePhotos"];
        $this->_stock_status_exist_id = $ini["StatusStockExist"];
        $this->_stock_status_miss_id = $ini["StatusStockMiss"];
        $this->_find_tovar_type = $ini["FindTovarType"];
        //PHP 5.3
        $tmp_date = new DateTime($ini["LastDateModFromIm"]);
        $this->_last_date_mod_from_im = $tmp_date->format('Y-m-d H:i:s');
        //
        if(empty($this->_im_count_max))
            $this->_im_count_max = 20;
        if(empty($this->_im_tovar_max))
            $this->_im_tovar_max = 500;
        $this->_last_params_filename = $filename;
    }

    public function get_info()
    {
        $ret = "</br>\nЯзык(language):</br>\n";
        $query = $this->db->query("SELECT * FROM ".DB_PREFIX."language", PDO::FETCH_ASSOC);
        if($query)
        {
            foreach ($query as $row)
            {
                $ret .= $row["language_id"]."=".$row['name']."</br>\n";
            }
        }
        $ret .= "</br>\nСтатусы заказов(order_status):</br>\n";
        $query = $this->db->query("SELECT * FROM ".DB_PREFIX."order_status WHERE language_id = ".MAIN_LANG_ID." ORDER BY name", PDO::FETCH_ASSOC);
        if($query)
        {
            foreach ($query as $row)
            {
                $ret .= $row["order_status_id"]."=".$row['name']."</br>\n";
            }
        }
        $ret .= "</br>\nСостояние на складе(stock_status):</br>\n";
        $query = $this->db->query("SELECT * FROM ".DB_PREFIX."stock_status WHERE language_id = ".MAIN_LANG_ID." ORDER BY name", PDO::FETCH_ASSOC);
        if($query)
        {
            foreach ($query as $row)
            {
                $ret .= $row["stock_status_id"]."=".$row['name']."</br>\n";
            }
        }

        if(class_exists('ZipArchive') == false)
        {
            $ret .= "</br>\nСостояние ZipArchive:</br>\n";
            $ret .= "класс ZipArchive отсутствует </br>\n";
        }
        return $ret;
    }

    public function load_tovar_images_from_file($filename)
    {
        $file = fopen(DIR_UPL.$filename,'r');
        $csv_fields = fgetcsv($file, 0, ';');
        //print_r($csv_fields);
        $count_fields = count($csv_fields);
        $tovar_image_array = array();
        $c_index = 0;
        while(($row = fgetcsv($file, 0, ';')) !== false)
        {
            if($count_fields != count($row))
                continue;
            for($i = 0; $i < count($csv_fields); $i++)
            {
                $row[$csv_fields[$i]] = $row[$i];
            }
            $tovar_image = $row;
            $tovar_image_array[$c_index++] = $tovar_image;
        }
        fclose($file);

        //print_r($tovar_image_array);
        $file = fopen(DIR_UPL.$this->_im_request_filename,'w');
        $csv_fields = 'num;tov_num;tov_im_num;tov_image;tov_image_type;isort;tov_image_size;is_upload;doc_type';
        fputs($file, $csv_fields."\n");
        foreach($tovar_image_array as $i => $tovar_image)
        {
            //print_r($tovar_image);
            //Если это фото товара
            if($tovar_image['doc_type'] == "102")
                $this->check_tovar_images($tovar_image, $file);
            else
            //Если это фото группы товара и брать только основное фото, т.к. дополнительных нет
            if($tovar_image['doc_type'] == "1020" && $tovar_image['isort'] == "0")
                $this->check_tovar_group_images($tovar_image, $file);

            if($this->_im_count >= $this->_im_count_max)
                break;
        }
        fclose($file);
    }

    public function check_tovar_images($tovar_image, $file)
    {
        //print_r($tovar_image);
        $main_image_exist = false;
        $im_filelist = array();
        $query = $this->db->query("SELECT p.product_id, p.image FROM ".DB_PREFIX."product p WHERE p.product_id = " .$tovar_image['tov_im_num'], PDO::FETCH_ASSOC);
        if($query)
        {
            foreach ($query as $row)
            {
                if(!empty($row["image"]))
                {
                    $im_filelist[0] = $row["image"];
                    $main_image_exist = true;
                }
            }
        }
        $query = $this->db->query("SELECT pi.product_image_id, pi.image FROM ".DB_PREFIX."product_image pi WHERE pi.product_id = ".$tovar_image['tov_im_num'], PDO::FETCH_ASSOC);
        if($query)
        {
            foreach ($query as $row)
            {
                if(!empty($row["image"]))
                {
                    $im_filelist[$row["product_image_id"]] = $row["image"];
                }
            }
        }
        if(empty($im_filelist))
        {
            if($tovar_image["is_upload"] == "1")
            {
                if($main_image_exist == false)
                {
                    $this->insert_tovar_main_image($tovar_image);
                }
            }
            else
            {
                $this->add_tovar_images_request($tovar_image, $file);
            }
        }
        else
        {
            $is_find = false;
            foreach($im_filelist as $img_name => $img_value)
            {
                if(file_exists(DIR_IMAGE.$img_value))
                    if(filesize(DIR_IMAGE.$img_value) == $tovar_image['tov_image_size'])
                        $is_find = true;
                //echo "Размер рисунока: $img_name => $img_value : ".filesize(DIR_IMAGE.$img_value)." = ". $tovar_image['tov_image_size']."</br>\n";
            }
            if($is_find == false)
            {
                if($tovar_image["is_upload"] == "1")
                {
                    if($main_image_exist == false)
                    {
                        $this->insert_tovar_main_image($tovar_image);
                    }
                    else
                    {
                        $this->insert_tovar_sec_image($tovar_image);
                    }
                }
                else
                {
                    $this->add_tovar_images_request($tovar_image, $file);
                }
            }
        }
    }

    public function add_tovar_images_request($tovar_image, $file)
    {
        //print_r($tovar_image);
        fputs($file, $tovar_image["num"].";".$tovar_image["tov_num"].";".$tovar_image["tov_im_num"].";".$tovar_image["tov_image"].";".$tovar_image["tov_image_type"].";".$tovar_image["isort"].";".$tovar_image["tov_image_size"].";".$tovar_image["is_upload"].";".$tovar_image["doc_type"]."\n");
        $this->_im_count++;
    }

    public function insert_tovar_main_image($tovar_image)
    {
        $filename = "us_tovar_img_".$tovar_image["num"].".".$tovar_image["tov_image_type"];
        if(file_exists(DIR_UPL.$filename))
        {
            rename(DIR_UPL . $filename, DIR_IMAGE . $filename);
            $this->db->exec("UPDATE " . DB_PREFIX . "product SET image = '" . $filename . "' WHERE product_id = '" . $tovar_image["tov_im_num"] . "'");
            //echo 'Добавляем основной рисунок: '. $filename."</br>\n";
        }
        else
        {
            echo 'Файл не найден '. DIR_UPL . $filename."</br>\n";
        }
    }

    public function insert_tovar_sec_image($tovar_image)
    {
        $filename = "us_tovar_img_".$tovar_image["num"].".".$tovar_image["tov_image_type"];
        if(file_exists(DIR_UPL.$filename))
        {
            rename(DIR_UPL.$filename, DIR_IMAGE.$filename);
            $this->db->exec("INSERT INTO ".DB_PREFIX."product_image SET product_id = '".$tovar_image["tov_im_num"]."', image = '".$filename."', sort_order = '0'");
            //echo 'Добавляем доп. рисунок: '. $filename."</br>\n";
        }
        else
        {
            echo 'Файл не найден '. DIR_UPL . $filename."</br>\n";
        }
    }

    public function set_tovar_images_params($row, $type = self::FROM_SITE)
    {
        $tovar_image = new TovarImage(array(), ArrayObject::STD_PROP_LIST);
        if($type == self::FROM_PROG)
        {
            $tovar_image->num = $row['num'];
            $tovar_image->tov_num = $row['tov_num'];
            $tovar_image->tov_im_num = $row['tov_im_num'];
            $tovar_image->tov_image = $row['tov_image'];
            $tovar_image->tov_image_type = $row['tov_image_type'];
            $tovar_image->isort = $row['isort'];
            $tovar_image->tov_image_size = $row['tov_image_size'];
            $tovar_image->is_upload = $row['is_upload'];
        }
        else
        {
            $tovar_image->im_num = $row['product_image_id'];
            $tovar_image->tov_im_num = $row['product_id'];
            $tovar_image->tov_image = $row['image'];
            $tovar_image->isort = $row['sort_order'];
            $tovar_image->doc_type = $row['doc_type'];
        }
        return $tovar_image;
    }

    public function save_tovar_images_to_file()
    {
        //Основное фото товара
        $query = $this->db->query("SELECT 0 AS product_image_id, p.product_id, p.image, 0 AS sort_order, 102 AS doc_type FROM ".DB_PREFIX."product p WHERE p.image != '' AND p.image IS NOT NULL", PDO::FETCH_ASSOC);
        $filename = $this->gen_filename('si');
        $file = fopen(DIR_UPL.$filename,'w');
        $tovar_image = new TovarImage(array(), ArrayObject::STD_PROP_LIST);

        $csv_fields = '';
        foreach((array)$tovar_image as $fname => $fvalue)
        {
            $csv_fields .= "$fname;";
        }
        $csv_fields = rtrim($csv_fields, ';');
        fputs($file, $csv_fields."\n");

        foreach ($query as $row)
        {
            $tovar_image = $this->set_tovar_images_params($row);
            if(file_exists(DIR_IMAGE.$tovar_image->tov_image))
            {
                $tovar_image->tov_image_size = filesize(DIR_IMAGE.$tovar_image->tov_image);
                //echo "Размер рисунка: ".$tovar_image->tov_image_size."</br>\n";
                fputcsv($file,(array)$tovar_image,';');
            } 
            else
            {
                echo "Рисунок не найден: ".DIR_IMAGE.$tovar_image->tov_image."</br>\n";
            }   
        }

        //Доп. фото товаров
        $query = $this->db->query("SELECT pi.product_image_id, pi.product_id, pi.image, pi.sort_order, 102 AS doc_type FROM ".DB_PREFIX."product_image pi WHERE pi.image != '' AND pi.image IS NOT NULL", PDO::FETCH_ASSOC);
        foreach ($query as $row)
        {
            $tovar_image = $this->set_tovar_images_params($row);
            if(file_exists(DIR_IMAGE.$tovar_image->tov_image))
            {
                $tovar_image->tov_image_size = filesize(DIR_IMAGE.$tovar_image->tov_image);
                //echo "Размер рисунка: ".$tovar_image->tov_image_size."</br>\n";
                fputcsv($file,(array)$tovar_image,';');
            }
            else
            {
                echo "Рисунок не найден: ".DIR_IMAGE.$tovar_image->tov_image."</br>\n";    
            }   
        }

        //Основное фото категории товара
        $query = $this->db->query("SELECT 0 AS product_image_id, c.category_id AS product_id, c.image, 0 AS sort_order, 1020 AS doc_type FROM ".DB_PREFIX."category c WHERE c.image != '' AND c.image IS NOT NULL", PDO::FETCH_ASSOC);
        foreach ($query as $row)
        {
            $tovar_image = $this->set_tovar_images_params($row);
            if(file_exists(DIR_IMAGE.$tovar_image->tov_image))
            {
                $tovar_image->tov_image_size = filesize(DIR_IMAGE.$tovar_image->tov_image);
                //echo "Размер рисунка: ".$tovar_image->tov_image_size."</br>\n";
                fputcsv($file,(array)$tovar_image,';');
            }
            else
            {
                echo "Рисунок не найден: ".DIR_IMAGE.$tovar_image->tov_image."</br>\n";    
            } 
        }

        fclose($file);
        if(file_exists(DIR_UPL.$filename) && filesize(DIR_UPL.$filename) > 0)
            return $filename;
        else
            return false;
    }


    public function check_tovar_group_images($tovar_image, $file)
    {
        //print_r($tovar_image);
        $main_image_exist = false;
        $im_filelist = array();
        $query = $this->db->query("SELECT c.category_id AS product_id, c.image FROM ".DB_PREFIX."category c WHERE c.category_id = " .$tovar_image['tov_im_num'], PDO::FETCH_ASSOC);
        if($query)
        {
            foreach ($query as $row)
            {
                if(!empty($row["image"]))
                {
                    $im_filelist[0] = $row["image"];
                    $main_image_exist = true;
                }
            }
        }
        if(empty($im_filelist))
        {
            if($tovar_image["is_upload"] == "1")
            {
                if($main_image_exist == false)
                {
                    $this->insert_tovar_group_main_image($tovar_image);
                }
            }
            else
            {
                $this->add_tovar_images_request($tovar_image, $file);
            }
        }
        else
        {
            $is_find = false;
            foreach($im_filelist as $img_name => $img_value)
            {
                if(file_exists(DIR_IMAGE.$img_value))
                    if(filesize(DIR_IMAGE.$img_value) == $tovar_image['tov_image_size'])
                        $is_find = true;
                //echo "Размер рисунка: $img_name => $img_value : ".filesize(DIR_IMAGE.$img_value)." = ". $tovar_image['tov_image_size']."</br>\n";
            }
            if($is_find == false)
            {
                if($tovar_image["is_upload"] == "1")
                {
                    if($main_image_exist == false)
                    {
                        $this->insert_tovar_main_image($tovar_image);
                    }
                }
                else
                {
                    $this->add_tovar_images_request($tovar_image, $file);
                }
            }
        }
    }

    public function insert_tovar_group_main_image($tovar_image)
    {
        $filename = "us_tovar_img_".$tovar_image["num"].".".$tovar_image["tov_image_type"];
        if(file_exists(DIR_UPL.$filename))
        {
            rename(DIR_UPL.$filename, DIR_IMAGE.$filename);
            $this->db->exec("UPDATE ".DB_PREFIX."category SET image = '".$filename."' WHERE category_id = '".$tovar_image["tov_im_num"]."'");
        }
        else
        {
            echo 'Файл не найден '. DIR_UPL . $filename."</br>\n";
        }
    }

    public function set_client_params($row, $type = self::FROM_SITE)
    {
        $client = new ClientName(array(), ArrayObject::STD_PROP_LIST);
        if($type == self::FROM_PROG)
        {
            $client->num = $row['num'];
            $client->fio = $row['fio'];
        }
        else
        {
            $client->num = -1;
            $client->im_num = $row['customer_id'];
            $client->fio = $row['lastname'].' '.$row['firstname'];
            $client->adr = $row['city'].' '.$row['address_1'].' '.$row['address_2'];
            $client->adr = str_replace(";",",",$client->adr);
            $client->adr_ur = $client->adr;
            $client->tel = $row['telephone'];
            $client->email = $row['email'];
        }
        return $client;
    }

    public function save_client_to_file()
    {
        $query = $this->db->query("SELECT  c.*,  ca.* FROM  ".DB_PREFIX."customer c,  ".DB_PREFIX."address ca WHERE  c.address_id = ca.address_id", PDO::FETCH_ASSOC);
        $filename = $this->gen_filename('sl');
        $file = fopen(DIR_UPL.$filename,'w');

        $client = new ClientName(array(), ArrayObject::STD_PROP_LIST);

        $csv_fields = '';
        foreach((array)$client as $fname => $fvalue)
        {
            $csv_fields .= "$fname;";
        }
        $csv_fields = rtrim($csv_fields, ';');
        fputs($file, $csv_fields."\n");

        foreach ($query as $row)
        {
            $client = $this->set_client_params($row);
            fputcsv($file,(array)$client,';');
        }
        fclose($file);
        if(file_exists(DIR_UPL.$filename) && filesize(DIR_UPL.$filename) > 0)
            return $filename;
        else
            return false;
    }

    public function save_unreg_client_to_file()
    {
        $query = $this->db->query("SELECT o.payment_city AS city, o.payment_address_1 AS address_1, o.payment_address_2 AS address_2,  o.* FROM `".DB_PREFIX."order` o WHERE o.date_modified > '".$this->_last_date_mod_from_im."' AND o.customer_id = 0", PDO::FETCH_ASSOC);
        if($query)
        {
            $filename = $this->gen_filename('su');
            $file = fopen(DIR_UPL.$filename,'w');

            $client = new ClientName(array(), ArrayObject::STD_PROP_LIST);

            $csv_fields = '';
            foreach((array)$client as $fname => $fvalue)
            {
                $csv_fields .= "$fname;";
            }
            $csv_fields = rtrim($csv_fields, ';');
            fputs($file, $csv_fields."\n");

            foreach ($query as $row)
            {
                $client = $this->set_client_params($row);
                fputcsv($file,(array)$client,';');
            }
            fclose($file);
            if(file_exists(DIR_UPL.$filename) && filesize(DIR_UPL.$filename) > 0)
                return $filename;
            else
                return false;
        }
        else
            return false;
    }

    public function set_order_params($row, $type = self::FROM_SITE)
    {
        $order = new Order(array(), ArrayObject::STD_PROP_LIST);
        if($type == self::FROM_PROG)
        {
            $order->num = $row['num'];
            $order->client = $row['fio'];
        }
        else
        {
            $order->num = -1;
            $order->nu = $row['order_id'];//$row['invoice_prefix'].' '.$row['invoice_no'];
            $date = new DateTime($row['date_added']);
            $date_mod = new DateTime($row['date_modified']);
            $order->date_dok = $date->format('d.m.Y');
            $order->client = $row['lastname'].' '.$row['firstname'];
            $order->dopoln = '';
            $order->doc_mark_type = $row['order_status_id'];
            $order->doc_descr = base64_decode($row['comment']);
            $order->tov_name = $row['name'];
            $order->tov_kod = $row['model'];
            $order->tov_kolvo = $row['quantity'];
            $order->tov_cena = $row['price'];
            $order->tov_ed = '';
            $order->tov_cena_pdv = $row['price'];
            $order->tov_suma = $row['total'];
            //
            $order->im_num = $row['order_id'];
            $order->im_tovar_id = $row['product_id'];
            $order->im_date_add = $date->format('Y.m.d H:i:s');
            $order->im_date_mod = $date_mod->format('Y.m.d H:i:s');
        }
        return $order;
    }

    public function save_order_to_file()
    {
        $query = $this->db->query("SELECT  o.*,  op.* FROM  `".DB_PREFIX."order` o LEFT JOIN ".DB_PREFIX."order_product op ON (o.order_id = op.order_id) WHERE o.date_modified > '".$this->_last_date_mod_from_im."' ORDER BY o.order_id", PDO::FETCH_ASSOC);
        if($query)
        {
            $filename = $this->gen_filename('so');
            $file = fopen(DIR_UPL.$filename,'w');

            $order = new Order(array(), ArrayObject::STD_PROP_LIST);

            $csv_fields = '';
            foreach((array)$order as $fname => $fvalue)
            {
                $csv_fields .= "$fname;";
            }
            $csv_fields = rtrim($csv_fields, ';');
            fputs($file, $csv_fields."\n");

            foreach ($query as $row)
            {
                $order = $this->set_order_params($row);
                $order->doc_descr = base64_encode($row['comment']);
                fputcsv($file,(array)$order,';');
            }
            fclose($file);
            if(file_exists(DIR_UPL.$filename) && filesize(DIR_UPL.$filename) > 0)
                return $filename;
            else
                return false;
        }
        else
            return false;
    }

    public function get_image_dir_http()
    {
        return HTTP_SERVER.'image/';
    }

    public function test_check_tovars_tree()
    {
        $this->build_category_tree();
        $file = fopen(DIR_UPL."groups_tovars.log",'w');
        foreach($this->_im_tovar_category_tree as $cat)
        {
            fputs($file,$cat->full_pid_name."\n");
            $sqls = "SELECT pd.name FROM ".DB_PREFIX."product p JOIN ".DB_PREFIX."product_to_category p2c ON (p.product_id = p2c.product_id AND p2c.category_id = (SELECT p2c1.category_id FROM ".DB_PREFIX."product_to_category p2c1 WHERE p.product_id = p2c1.product_id ORDER BY p2c1.main_category DESC, p2c1.category_id LIMIT 1)) LEFT JOIN ".DB_PREFIX."product_description pd ON (p.product_id = pd.product_id AND pd.language_id = ".MAIN_LANG_ID.")  LEFT JOIN ".DB_PREFIX."category_description cd ON (p2c.category_id = cd.category_id AND cd.language_id = ".MAIN_LANG_ID.") WHERE  p2c.category_id = ".$cat->im_num." ORDER BY pd.name";
            $query = $this->db->query($sqls, PDO::FETCH_ASSOC);
            if($query)
            {
                foreach($query as $row)
                {
                    fputs($file,$cat->full_pid_name."###".$row['name']."\n");
                }
            }
        }
        fclose($file);
    }
}