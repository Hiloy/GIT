<?php

/*
Модуль экспорта/импорта данных программы УкрСклад
http://www.ukrsklad.com/
 */

set_time_limit(3600);
//date_default_timezone_set('Europe/Kiev');
error_reporting(E_ERROR | E_WARNING | E_PARSE);

require_once('ukrsklad_inc/config.php');
require_once('ukrsklad_inc/opencart.php');

$_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);

/* Удалите эту строку для работы под CGI
//Если PHP работает как CGI и выдает status=error_auth удалите 2 строки где написано: Удалите эту строку для работы под CGI
if(isset($_SERVER['HTTP_AUTHORIZATION']) AND !empty($_SERVER['HTTP_AUTHORIZATION'])) 
{
  list($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW']) = explode(':', base64_decode(substr($_SERVER['HTTP_AUTHORIZATION'], 6)), 2);
} 
elseif (isset($_SERVER['REDIRECT_HTTP_AUTHORIZATION']) AND !empty($_SERVER['REDIRECT_HTTP_AUTHORIZATION'])) 
{
  list($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW']) = explode(':', base64_decode(substr($_SERVER['REDIRECT_HTTP_AUTHORIZATION'], 6)), 2);
}
Удалите эту строку для работы под CGI */
/*
Также для работы в CGI добавьте в конец файла файл .htaccess текст ниже, если такого файл нет создайте его, файл должен быть там где и import_ukrsklad.php:
<IfModule mod_rewrite.c>
	RewriteEngine On
	RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization},L]
</IfModule>
*/


if(($_SERVER['PHP_AUTH_PW']!= CON_PASS || $_SERVER['PHP_AUTH_USER'] != CON_LOGIN)|| !$_SERVER['PHP_AUTH_USER'])
{
    header('WWW-Authenticate: Basic realm="UkrSklad authorization"');
    header('HTTP/1.0 401 Unauthorized');
    echo "status=error_auth\n";
    exit;
}

/*
$_GET['action'] = 'upload';
$_GET['filename'] = "test.zip";
*/

$mag = new OpenCart();
$mag->connect();
$mag->check_struct();

if($_GET['action'] == 'check_ver')
{
    $us_ver = intval($_GET['version']);
    if($us_ver == US_TOVAR_VER && $us_ver  == OPENCART_VER && $us_ver == IMAGAZ_VER)
        echo "ver=".$us_ver;
    else
        echo "ver=-1";
}
else
if($_GET['action'] == 'upload')
{
    //print_r($_FILES);
    $filename = $_GET['filename'];
    $path_parts = pathinfo($filename);
    $isUpload = move_uploaded_file($_FILES['attachement']['tmp_name'], DIR_UPL.$filename);
    if($isUpload == false)
    {
        if(isset($_FILES['attachement']['error']))
        {
            switch ($_FILES['attachement']['error'])
            {
                case UPLOAD_ERR_OK:
                    echo "status=error:".";filename=$filename\n"; break;
                case UPLOAD_ERR_NO_FILE:
                    echo "status=error:Файл не отправлен".";filename=$filename\n"; break;
                case UPLOAD_ERR_INI_SIZE:
                case UPLOAD_ERR_FORM_SIZE:
                    echo "status=error:Превышен размер файла".";filename=$filename\n"; break;
                default:
                    echo "status=error:Неизвестная ошибка".";filename=$filename\n"; break;
            }
        }
        else
        {
            echo "status=error\n";
        }
        //echo "filename=$filename\n";
    }
    else
    if($path_parts['extension'] == 'zip')
    {
        $filelist = $mag->unzip_filelist($filename);
        if($filelist != false)
        {
            $mag->_import_tovar_continue = 0;
            $mag->parse_filelist($filelist);
            echo "status=ok\n";
            echo "file_upload=$filename\n";
            echo "import_tovar_continue=$mag->_import_tovar_continue\n";
            if($mag->_import_tovar_continue)
            {
                echo "import_tovar_filename=$mag->_import_tovar_filename\n";
                echo "import_groups_filename=$mag->_import_groups_filename\n";
                echo "last_params_filename=$mag->_last_params_filename\n";
            }
        }
        else
        {
            echo "status=error\n";
        }
    }
    else
    {
        echo "status=ok\n";
        echo "file_upload=$filename\n";
    }
}
else
if($_GET['action'] == 'upload_continue_tovar')
{
    $mag->_import_tovar_continue = $_GET['import_tovar_continue'];
    $mag->load_params_from_file($_GET['last_params_filename']);
    $mag->load_category_from_file($_GET['import_groups_filename']);
    $mag->load_tovar_from_file($_GET['import_tovar_filename']);
    echo "status=ok\n";
    echo "import_tovar_continue=$mag->_import_tovar_continue\n";
    if($mag->_import_tovar_continue)
    {
        echo "import_tovar_filename=$mag->_import_tovar_filename\n";
        echo "import_groups_filename=$mag->_import_groups_filename\n";
        echo "last_params_filename=$mag->_last_params_filename\n";
    }
}
else
if($_GET['action'] == 'download')
{
    $filelist = array();
    if(!empty($_GET['last_date_mod_from_im']))
    {
        $tmp_date = DateTime::createFromFormat('Y-m-d H:i:s', $_GET['last_date_mod_from_im']);
        $mag->_last_date_mod_from_im = $tmp_date->format('Y-m-d H:i:s');
    }
    $filelist['filename_cat'] = $mag->save_category_to_file();
    if((!empty($_GET['is_ignore_tovars']) && $_GET['is_ignore_tovars'] != '1') || empty($_GET['is_ignore_tovars']))
    {
        $filelist['filename_tov'] = $mag->save_tovar_to_file();
        if((!empty($_GET['is_ignore_photos']) && $_GET['is_ignore_photos'] != '1') || empty($_GET['is_ignore_photos']))    
        {
            $filelist['filename_tim'] = $mag->save_tovar_images_to_file();
        }
    }
    $filelist['filename_clr'] = $mag->save_client_to_file();
    $filelist['filename_clu'] = $mag->save_unreg_client_to_file();
    $filelist['filename_ord'] = $mag->save_order_to_file();
    if(file_exists(DIR_UPL.$mag->get_im_request_filename()))
        $filelist['filename_imr'] = $mag->get_im_request_filename();
    $zipfile = $mag->zip_filelist($filelist);
    if($zipfile != false)
    {
        echo "status=ok\n";
        echo "dir_download=".basename(DIR_UPL)."\n";
        echo "http_images=".basename($mag->get_image_dir_http())."\n";
        echo "file_download=$zipfile\n";
    }
    else
    {
        echo 'status=error';
    }
    //print_r($filelist);
    $mag->del_filelist($filelist);
}
else
if($_GET['action'] == 'get_info')
{
    echo $mag->get_info();
}
else
if($_GET['action'] == 'clear_folder')
{
    $mag->clear_upl_folder();
}
else
if($_GET['action'] == 'test')
{
    //$mag->test_check_tovars_tree();
    echo 'status=Тест ОК';
}
else
    echo "status=ok_auth\n";