<?php
session_start();

//Проверка версии PHP
if(version_compare(phpversion(), '5.3.0', '<') == true){
	die("Ваша версия PHP старее 5.3. 
	    Для корректной работы скрипта, требуется PHP 5.3 и выше!");
}
/**
 * Константы
 * */
 define("ROOT_DIR", __DIR__);
 define("APPLICATION", ROOT_DIR.'/application');
 define("LIBS", APPLICATION.'/libs');
 define("CONF", APPLICATION.'/conf');
 define("STORAGE", ROOT_DIR.'/storage');
 define("TMP", ROOT_DIR.'/templates');

 require_once APPLICATION.'/app.php';
 app::init();
 ?>
