<?php
class Transaction{
   public $idclients;
   public $users_idusers;
   public $articles_idarticles;
   public $date_create;
   public $pay_system;
   public $status;
   
   private $_db;
   public function __construct(){
		$this->_db = connect::_self()->mysql();
	}
	public static function model(){
		return 'transaction';
	}	
  /**
   * Выбираем по id пользователя, его купленные статьи
   * */	
   public function PayArticles(){
   	$query = $this->_db->prepare("SELECT `idclients`, `date_create`, `pay_system` FROM `clients` 
   	                              WHERE `users_idusers` = :uid AND `articles_idarticles` = :artid AND `status` = 1");
	if($query->execute(array(':uid' => $this->users_idusers, ':artid' => $this->articles_idarticles))){
		return $query->fetch();
	}							  
	
	return false;
   }
   /**
    * Запись транзакции
    */
    public function create(){
     $query =$this->_db->prepare("INSERT INTO `clients`(`users_idusers`,`articles_idarticles`,`date_create`,`pay_system`,`status`)
                                   VALUES(:uid, :artid, :date, :system, :status) ");
	$query->bindParam(":uid", $this->users_idusers);			
	$query->bindParam(":artid", $this->articles_idarticles);
	$query->bindParam(":date", $this->date_create);
	$query->bindParam(":system", $this->pay_system);
	$query->bindParam(":status", $this->status);
	
	return $query->execute();								   	
    }
    
   
}
