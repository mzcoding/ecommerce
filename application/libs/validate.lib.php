<?php
class validate{
	public static function clear($str){
		return strip_tags($str);
	}
	public static function int($int){
		return intval($int);
	}
	public static function hash($str){
		return hash("sha256", $str);
	}
}
