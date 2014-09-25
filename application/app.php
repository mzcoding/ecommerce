<?php
class app{
	public static function init(){
		require_once CONF.'/conf.php';
		
		$tmp = tmp::init();
		$tmp->load('index');
	}
}
