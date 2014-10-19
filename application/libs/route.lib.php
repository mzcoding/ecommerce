<?php
class route{
	private static $_self = null;
	private $_params = array();
	private function __construct(){
		$this->route();
	}
	public static function init(){
		if(self::$_self == null){
			self::$_self = new self();
		}
		
		return self::$_self;
	}
	public function setParams($params){
		foreach($params as $key => $value){
			$thiis->_params[$key] = $value;
		}
	}
	public function getParams(){
		return $this->_params;
	}
	private function route(){
		
		if(isset($_GET['route'])){
			$route = explode("/", $_GET['route']);
			if(count($route) == 1){
				self::setController(ucfirst($route[0]), 'index');
			}elseif(count($route) == 2){
				self::setController(ucfirst($route[0]), $route[1]);
			}elseif(count($route) >= 3){
				$params = $route; unset($params[0], $params[1]);
				foreach($params as $key => $value){
					if($params[$key] !== "" || !empty($value)) $param[] = $value;
				}
				self::setController(ucfirst($route[0]), $route[1], $param);
			}else{
				self::setController('Home', 'index');
			}
		}else{
				self::setController('Home', 'index');
			}
	}
	private static function setController($controller, $action, $params = null){
	  $controller = $controller."Controller";
	  if(!file_exists(APPLICATION.'/controllers/'. $controller . ".php") || !class_exists($controller))	$controller = new ErrorController();
	  else $controller = new $controller();
	  if(empty($action)) $action = "index";
	  try{
	  	if(method_exists($controller, $action) && !ReflectionApi::MethodType($controller, $action, 'private')){
	  		$count_params = count($params);
			
			if($count_params == 1){
				$params = validate::int($params[0]);
			}
			if($params !== null) $controller->$action($params);
			else $controller->$action();
	  	}else{
	  		return self::setController('Error', 'index');
	  	}
	  }catch(Exception $e){
	  	error::ErrLog("Error:\n" . date('d-mY(H:i)'). ":" . $e->getMessage() . ":" . $e->getCode());
		die($e->getMessage());
	  }
	}
}
