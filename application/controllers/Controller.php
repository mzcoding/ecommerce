<?php
abstract class Controller{
	public function __construct(){
		tmp::params(array('isLogin' => auth::login() , 'uri' => $_SERVER['REQUEST_URI']));
	}
	abstract function index();
	 protected function view($params){
		view::set($params['method'], $params['modelname'], $params['model'], $params['params']);
	} 
}
