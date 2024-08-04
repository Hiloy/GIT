<?php

define('IMAGAZ_VER', 305);

class Magazin
{
    const FROM_SITE = 0;
    const FROM_PROG = 1;

    /** @var \PDO */
    protected $db;
    protected $db_pref;

    protected $_is_convert_to_htmlchars = true;
    protected $_tovar_category;
    protected $_im_count;
    protected $_im_count_max;
    protected $_im_tovar_max;
    protected $_im_request_filename;
    protected $_is_ignore_tovars;
    protected $_is_ignore_photos;    
    public $_import_tovar_continue;
    public $_import_tovar_filename;
    public $_import_groups_filename;
    public $_last_params_filename;
    public $_last_date_mod_from_im;

    protected function gen_filename($pref, $ext = 'csv')
    {
        $filename = $pref.'_' . date('Ymd_His_') . substr((string)microtime(), 2, 6) . '.' .$ext;
        return $filename;
    }

    public function get_im_request_filename()
    {
        return $this->_im_request_filename;
    }

    public function get_image_dir_http()  {}

    public function connect() {}

    public function check_struct()  {}

    public function save_tovar_to_file() {}

    public function load_tovar_from_file($filename) {}

    public function find_tovar($tovar) {}

    public function find_tovar_by_im($tovar) {}

    public function update_tovar($tovar) {}

    public function insert_tovar($tovar) {}

    public function compare_tovar($tovar1, $tovar2) {}

    public function set_tovar_params($row, $type = self::FROM_SITE) {}

    public function save_category_to_file() {}

    public function load_category_from_file($filename) {}

    public function build_category_tree() {}

    public function sort_category_tree($pid, $category) {}

    public function find_category($name, $pid_name = '') {} //deprecated

    public function find_category_one($name, $pid_name = '') {} //deprecated

    public function find_category_main($category) {} //deprecated

    public function find_category_by_im($category) {} //deprecated

    public function update_category($category) {}

    public function insert_category($category) {}

    public function set_category_params($row, $type = self::FROM_SITE) {}

    public function load_params_from_file($filename) {}

    public function get_info() {}

    public function load_tovar_images_from_file($filename)  {}

    public function check_tovar_images($tovar_image, $file)  {}

    public function set_tovar_images_params($row, $type = self::FROM_SITE)  {}

    public function save_tovar_images_to_file()  {}

    public function set_client_params($row, $type = self::FROM_SITE)  {}

    public function save_client_to_file()   {}

    public function save_unreg_client_to_file() {}

    public function set_order_params($row, $type = self::FROM_SITE)   {}

    public function save_order_to_file()    {}

    public function zip_filelist($filelist)
    {
        $zip = new ZipArchive();
        $zip_filename =  $this->gen_filename('dl', 'zip');
        if($zip->open(DIR_UPL.$zip_filename, ZipArchive::CREATE | ZipArchive::OVERWRITE) == true)
        {
            foreach($filelist as $filename)
            {
                $zip->addFile(DIR_UPL.$filename, $filename);
                //unlink(DIR_UPL.$filename);
            }
            $zip->close();
        }
        if(file_exists(DIR_UPL.$zip_filename) && filesize(DIR_UPL.$zip_filename) > 0)
            return $zip_filename;
        else
            return false;
    }

    public function unzip_filelist($zip_filename)
    {
        $zip = new ZipArchive();
        $filelist = array();
        if($zip->open(DIR_UPL.$zip_filename, ZipArchive::CHECKCONS) == true)
        {
            for($i = 0; $i < $zip->numFiles; $i++ )
            {
                $stat = $zip->statIndex( $i );
                //print_r($stat);
                //print_r( basename( $stat['name'] ) . PHP_EOL );
                $filelist[$i] = $stat['name'];
            }
            if($zip->numFiles > 0)
            {
                $zip->extractTo(DIR_UPL);
                $zip->close();
                return $filelist;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
        /*
        if(file_exists(DIR_UPL.$zip_filename) && filesize(DIR_UPL.$zip_filename) > 0)
            return $zip_filename;
        else
            return false;
        */
    }

    public function clear_upl_folder()
    {
        $d = dir(DIR_UPL);
        while (false !== ($filename = $d->read())) {
            if($filename != "." && $filename !="..")
                unlink(DIR_UPL.$filename);
        }
        $d->close();
    }

    public function del_filelist($filelist)
    {
        if($filelist)
        {
            foreach($filelist as $filename)
            {
                if($filename)
                    unlink(DIR_UPL.$filename);
            }
        }
    }

    public function parse_filelist($filelist)
    {
        $it_file = "";
        $ic_file = "";
        $ip_file = "";
        $ii_file = "";
        for($i = 0; $i < count($filelist); $i++)
        {
            $filename = $filelist[$i];
            $path_parts = pathinfo($filename);
            if(strpos($filename,'it') === 0 && $path_parts['extension'] == 'csv')
            {
                $it_file = $filename;
            }
            else
            if(strpos($filename,'ci') === 0 && $path_parts['extension'] == 'csv')
            {
                $ic_file = $filename;
            }
            else
            if(strpos($filename,'ip') === 0 && $path_parts['extension'] == 'ini')
            {
                $ip_file = $filename;
            }
            else
            if(strpos($filename,'ii') === 0 && $path_parts['extension'] == 'csv')
            {
                $ii_file = $filename;
            }
        }
        if(!empty($ip_file))
          $this->load_params_from_file($ip_file);
        if(!empty($ic_file))
            $this->load_category_from_file($ic_file);
        if(!empty($it_file))
          $this->load_tovar_from_file($it_file);
        if(!empty($ii_file))
            $this->load_tovar_images_from_file($ii_file);
    }

    public function compare_as_float($str1, $str2)
    {
        $epsilon = 0.00001; // PHP_FLOAT_EPSILON только с версии 7.2.0
        if(abs(floatval($str1)-floatval($str2)) < $epsilon)
            return true;
        else
            return false;
    }
    
    public function conv_html($str)
    {
        if($this->_is_convert_to_htmlchars == true)
            return htmlspecialchars ($str);
        else
            return $str;
    }    
}