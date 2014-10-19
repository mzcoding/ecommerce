<?php
class base{

	public static function success($message){
	  tmp::params(array('success' => $message));
	}	
	public static function error($message){
	 tmp::params(array('error' => $message));
	} 
	public static function to($path, $duration = null){
		if($duration != null) @header("Refresh:".$duration."; url=".$path);
		else @header("Location: " . $path);
	}
	public static function reload(){
		@header("Location: " . $_SERVER['PHP_SELF']);
	}

}
