<?php
class error{
	public static function ErrLog($error){
	 $date = date('d-mY (H:i:s)');
	 if(file_exists(ROOT_DIR . '/storage/logs/errLog.dat')){
	 	$file = file_put_contents(ROOT_DIR.'/storage/logs/errLog.dat', $date . "::" . $error, FILE_APPEND);
	 }else{
	 	$file = file_put_contents(ROOT_DIR.'/storage/logs/errLog.dat', $date . "::" . $error);
	 }	
	}
}
