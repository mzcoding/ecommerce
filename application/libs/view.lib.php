<?php
class view{
	private static $_data;
	public static function set($action, $modelName, $model, $params = array()){
		require_once APPLICATION . '/views/' . $modelName . '/' . $action . ".php";
	}
}
