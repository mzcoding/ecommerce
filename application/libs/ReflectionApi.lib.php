<?php
class ReflectionApi extends Reflection{
	public function __construct(){
		parent::__construct();
	}
	public static function ViewClass($class){
		self::export($class);
	}
	public static function MethodType($className, $methodName, $type){
		$class = new ReflectionClass($className);
		$method = $class->getMethod($methodName);
		switch($type){
			case "abstract":
			 $check = "isAbstract";
			break;
			case "public":
			 $check = "isPublic";
			break;	
			case "protected":
			 $check = "isProtected";
			break;		
			case "private":
			 $check = "isPrivate";
			break;	
			case "static":
			 $check = "isStatic";
			break;	
		}
		if($method->$check()){
			return true;
		}
		return false;
	}
}
