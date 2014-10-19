<?php
class app{
	public static function init(){
		require_once CONF.'/conf.php';
		route::init();
	}
}
