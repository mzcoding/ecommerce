<?php
class auth{
	public static function login(){	
	  if(isset($_SESSION['login']) && !empty($_SESSION['login'])){
	  	return true;
	  }
	  return false;
	}
	public static function admin(){
		if(self::login()){
			$key = $_SESSION['login'];
			$query = connect::_self()->mysql()->prepare("SELECT `isAdmin` FROM `users` WHERE `key` = :key");
			if($query->execute(array('key' => $key))){
				return $query->fetch()->isAdmin;
			}
			
			
		}
		return false;
	}
	public static function idUser(){
		if(self::login()){
			$key = $_SESSION['login'];
			$query = connect::_self()->mysql()->prepare("SELECT `idusers` FROM `users` WHERE `key` = :key");
			if($query->execute(array('key' => $key))){
				return $query->fetch()->idusers;
			}
			
			
		}
		return false;
	}

}
