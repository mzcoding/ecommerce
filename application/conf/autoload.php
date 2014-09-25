<?php
class Autoload{
	private static $_path = array();
	public static function setPath($pathArray){
		if(!is_array($pathArray)) return false;
		self::$_path = array_merge(self::$_path, $pathArray);
	}
	public static function getPath(){
		return self::$_path;
	}
	public static function start(){
		$pathResult = "";
		foreach(self::$_path as $path){
		  $pathResult .= PATH_SEPARATOR.$path;	
		}
		set_include_path(get_include_path().$pathResult);
		spl_autoload_extensions(".php,.lib.php");
		spl_autoload_register();
	}
}
