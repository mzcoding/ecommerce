<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once LIBS.'/Twig/Autoloader.php';
require_once __DIR__.'/autoload.php';
Autoload::setPath(array(LIBS . '/', APPLICATION . '/controllers/', APPLICATION . '/models/'));
Autoload::start();

//http путь от корня
$root_url = explode("/", filter_input(INPUT_SERVER, "PHP_SELF"));
$dirname = empty($root_url[1]) ? '/' : '/'.$root_url[1].'/';
if($root_url[1] != 'index.php') define("DIR", $root_url[1]);
define("HTTP_PATH", 'http://' . filter_input(INPUT_SERVER, "HTTP_HOST"));

require ROOT_DIR .'/connect.php';