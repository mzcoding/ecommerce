<?php
class mail{
	public static function newMail($mail){
		$headers = "From: robot@".$_SERVER['SERVER_NAME'];
		$headers .= "Content-type: text/plain; charset=utf8\n\r";
		if(mail($mail['to'], $mail['subject'], $mail['message'], $headers)){
			return true;
		}
		return false;
	}
}
