<?php

setlocale(LC_ALL, 'en_US.UTF-8');

//DIR
define('DIR_APP', dirname(__DIR__).DIRECTORY_SEPARATOR); // полный путь к корневой папке OpenCart
define('DIR_INC', DIR_APP.'ukrsklad_inc/');  // полный путь к папке с скриптами OpenCart
define('DIR_UPL', DIR_APP.'ukrsklad_upl/');  // полный путь к папке с вложениями OpenCart, сюда будут записываться временные файлы
//Примечание: не изменяйте пути, если вам не надо особые настройки по размещению файлов

//CON
define('CON_LOGIN', 'Hiloy');  // логин для доступа к скриптам из программы
define('CON_PASS', 'Mn4NQrtmQXqrv7t');  // пароль для доступа к скриптам из программы

//OpenCard
define('MAIN_LANG_ID', '1'); // ID языка в OpenCart, можно посмотреть список ID через программу кнопкой "Информация о сайте"
define('SEC_LANG_ID', '-1');  // ID дополнительного языка в OpenCart, если используется один язык, оставьте параметр '-1'
define('STORE_ID', '0');  // ID магазина в OpenCart, обычно не надо менять

//SPEC
define('SPEC_USE_FGETS', 0); // Установите параметр равным 1 если есть ограничения по объему памяти на хостинге, памяти будет использовать намного меньше, но может работать медленней