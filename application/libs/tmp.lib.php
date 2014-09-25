<?php
class tmp{
	private $_path;
	private $_root_tmp;
	private $tmp_ext;
	
	private $twig;
	private static $_init = null; 
	private static $params = array();
	
	private function __construct(){
		$this->_path = TMP;
		//установка расширения файлов шаблона
		$this->tmp_ext = '.tpl';
	}
	private function __clone(){}
	public static function init(){
		if(self::$_init == null){
			self::$_init = new self();
		}
		return self::$_init;
	}
	 /**
	 * Инициализация твига
	 * */
	public function twig_start($path_to_twig){
		if(class_exists('Twig_Autoloader')){
			Twig_Autoloader::register();
		}
		//Подгружаем нужный шаблоны
		$loader = new Twig_Loader_Filesystem($this->_root_tmp);
		//Настройки твига
		$this->twig = new Twig_Environment($loader, array(
		  'cache' => STORAGE . '/cache/compilation_cache',
		  'charset' => 'UTF-8',
		  'debug' => true,
		  'autoescape' => false,
		));
	} 
	/**
	 * Путь до шаблона
	 * */
	 public function pathTemplater($twig_path, $template_name = 'default'){
	 	$this->_root_tmp = $this->_path . '/' . $template_name;
		if(!is_dir($this->_root_tmp)){
			throw new Exception("Path directory ". $this->_root_tmp . " not found");
		}
		$this->twig_start($twig_path);
	 }
	 public function load($file_name){
	 	$tmp = self::init();
		$tmp->pathTemplater(LIBS.'/Twig/', 'default');
	 	echo $this->twig->loadTemplate($file_name.$this->tmp_ext)->render(self::$params);
	 }
	 public static function params($param){
	 	if(empty(self::$params)){
	 		self::$params = $param;
	 	}else{
	 		foreach($param as $key => $value){
	 			self::$params[$key] = $value;
	 		}
	 	}
	 }
	 public function exit_to_display(){
	 	exit();
	 }
}
