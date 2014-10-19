<?php
class Users{
 public $idusers; 	
 public $login;
 public $email;
 public $password;
 public $isAdmin;
 public $isActive;
 public $hash;
 public $key;
 public $created_at;
 public $updated_at;
 
 private $_db;
 
 public static function model(){
		return "users";
 }
 public function __construct(){
 	$this->_db = connect::_self()->mysql();
 }
 public function select(){
 	$query = $this->_db->query("SELECT * FROM `users`");
	
	return $query->fetch();
 } 
 public function activate(){
 	$query = $this->_db->prepare("SELECT `idusers` FROM `users` WHERE `hash` = :hash ");
	if($query->execute(array(':hash' => $this->hash))){
		return $query->fetch()->idusers;
	}
	
	return false;
 }
 public function key(){
 	$query = $this->_db->prepare("UPDATE `users` SET `isActive` = 1, `key` = :key WHERE `idusers` = :uid");
 	$query->bindParam(":key", $this->key);
	$query->bindParam(":uid", $this->idusers);
	if($query->execute()){
		return true;
	}
	return false;
 }
 public function save(){
 	$query = $this->_db->prepare("INSERT INTO `users` (`login`,`email`,`password`,`isAdmin`,`isActive`,`hash`,`key`,`created_at`,`updated_at`)
 	   VALUES(:login, :email, :password, :isAdmin, :isActive, :hash, :key, :created, :updated)  
 	");
	$query->bindParam(":login", $this->login, PDO::PARAM_STR, 45);
	$query->bindParam(":email", $this->email, PDO::PARAM_STR, 45);
	$query->bindParam(":password", $this->password, PDO::PARAM_STR, 65);
	$query->bindParam(":isAdmin", $this->isAdmin, PDO::PARAM_INT);
	$query->bindParam(":isActive", $this->isActive, PDO::PARAM_INT);
	$query->bindParam(":hash", $this->hash);
	$query->bindParam(":key", $this->key);
	$query->bindParam(":created", $this->created_at);
	$query->bindParam(":updated", $this->updated_at);
	if($query->execute()){
		return true;
	}
	return false;
 }
 public function login(){
 	$query = $this->_db->prepare("SELECT `password`,`key`,`isActive` FROM `users` WHERE `login` = :login");
	if($query->execute(array(":login" => $this->login))){
		$fetch = $query->fetch();

		if($fetch->isActive == 0){
			die("Вам нужно активировать аккаунт. Письмо отправлено на ваш E-mail");
		}
		if($this->password == $fetch->password){
			$_SESSION['login'] = $fetch->key;
			
			return true;
		}
		
		return false;
	}
 }
 public function forget(){
 	$query = $this->_db->prepare("SELECT COUNT(`idusers`) AS `count` FROM `users` WHERE `email` = :email");
	if($query->execute(array(":email" => $this->email))){
		$fetch = $query->fetch();
		if($fetch->count >= 1){
			return true;
		}		
	}
	return false;
 }
 public function password(){
 	$query = $this->_db->prepare("UPDATE `users` SET `password` = :password WHERE `email` = :email");
	$query->bindParam(":password", $this->password);
	$query->bindParam(":email", $this->email);
	if($query->execute()){
		return true;
	}
	return false;
 }
 public function profile(){
 	$query = $this->_db->prepare("SELECT `login`,`email`,`password` FROM `users` WHERE `key` = :key");
	if($query->execute(array(":key" => $this->key))){
		return $query->fetch();
	}
	return false;
 }
 public function saveProfile(){
 	$query = $this->_db->prepare("UPDATE `users` SET `email` = :email, `password` = :password WHERE `key` = :key");
	$query->bindParam(":email", $this->email);
	$query->bindParam(":password", $this->password);
	$query->bindParam(":key", $this->key);
	if($query->execute()){
		return true;
	}
	
	return false;
 }
 public function listUsers(){
 	 $query = $this->_db->query("SELECT * FROM `users`");
	 
	 return $query->fetchAll();	
 	}
 public function delete(){
 	$query = $this->_db->exec("DELETE FROM `users` WHERE `idusers` = $this->idusers");
 	if($query) return true;
	
	return false;
 }
}