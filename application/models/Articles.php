<?php
class Articles{
	public $idarticles;
	public $title;
	public $keywords;
	public $text;
	public $pay;
	public $created_at;
	public $updated_at;
	
	public $price;
	
	private $_db;
	public function __construct(){
		$this->_db = connect::_self()->mysql();
	}
	public static function model(){
		return 'articles';
	}
	/**
	 * Создание статьи
	 * */
	public function create(){
		$query = $this->_db->prepare("INSERT INTO `articles` (`title`,`keywords`,`text`,`pay`,`created_at`,`updated_at`) 
		                               VALUES(:title,:keywords,:text,:pay,:created_at,:updated_at)");
		$query->bindParam(":title", $this->title, PDO::PARAM_STR,155);
		$query->bindParam(":keywords", $this->keywords, PDO::PARAM_STR,155);
		$query->bindParam(":text", $this->text, PDO::PARAM_STR);		
		$query->bindParam(":pay", $this->pay, PDO::PARAM_INT);
		$query->bindParam(":created_at", $this->created_at);
		$query->bindParam(":updated_at", $this->updated_at);
		
		return $query->execute();								   
	}
	/**
	 * Редактирования статьи
	 * */
	 public function edit(){
	 	$query = $this->_db->prepare("UPDATE `articles` SET `title` = :title,`keywords` = :keywords,`text` = :text,`pay` = :pay,
	 	`created_at` = :created_at,`updated_at` = :updated_at WHERE `idarticles` = :id");
		$query->bindParam(":title", $this->title, PDO::PARAM_STR,155);
		$query->bindParam(":keywords", $this->keywords, PDO::PARAM_STR,155);
		$query->bindParam(":text", $this->text, PDO::PARAM_STR);		
		$query->bindParam(":pay", $this->pay, PDO::PARAM_INT);
		$query->bindParam(":created_at", $this->created_at);
		$query->bindParam(":updated_at", $this->updated_at);
		$query->bindParam(":id", $this->idarticles, PDO::PARAM_INT, 11);
		
		return $query->execute();		
	 }
	//Возвращаем id последней добавленной статьи
	public function lastId(){
		return $this->_db->lastInsertId(); 
	}
	/**
	 * Добавление категорий
	 * */
	public function saveCategory($category, $artid){
		if(!is_array($category)) return false;
		foreach($category as $key => $value){
			$v = (int)$value;
			$this->_db->query("INSERT INTO `catandarticle` (`articles_idarticles`,`category_idcategory`) VALUES($v, $artid)");
		}
		return true;
	}
	/**
	 * Удалить категорию от статью
	 * */
	 public function deleteCategoryforArticles(){
	 	$query = $this->_db->query("DELETE FROM `catandarticle` WHERE `articles_idarticles` = $this->idarticles");
	    if($query) return true;
		
		return false;
	 }
	public function createPrice(){
		$count = $this->_db->query("SELECT COUNT(`idpayments`) AS `count` FROM `payments` WHERE `articles_idarticles` = $this->idarticles");
		if($count->fetch()->count >= 1){
		  $query = 	$this->_db->prepare("UPDATE `payments` SET `price` = :price WHERE `articles_idarticles` = :artid");
		}else{
		  $query = $this->_db->prepare("INSERT INTO `payments` (`articles_idarticles`, `price`) VALUE(:artid, :price)");
		}
		$query->bindParam(":artid", $this->idarticles);
		$query->bindParam(":price", $this->price);
		return $query->execute();
	}
	/**
	 * Список всех статей
	 * */
	 public function allArticles(){
	 	$query = $this->_db->query("SELECT `idarticles`,`title`,`keywords`,`text`,`pay`,`created_at` FROM `articles`");
	 	
		return $query->fetchAll();
	 }
	 /**
	  * Статья по id
	  * */
	  public function articleID(){
	  	$query = $this->_db->query("SELECT `idarticles`,`title`,`keywords`,`text`,`pay`,`created_at` FROM `articles` WHERE `idarticles` = $this->idarticles");
		
		return $query->fetch();
	  }
	 /**
	  * Выбираем категории по ID статьи
	  * */
	  public function artCategory(){
	  	$query = $this->_db->query("SELECT * FROM `catandarticle` WHERE `articles_idarticles` = $this->idarticles");
		
		return $query->fetchAll();
	  }
	  /**
	   * Выбираем платные статьи
	   * */
	   public function artPrice(){
	   	$query = $this->_db->query("SELECT `price` FROM `payments` WHERE `articles_idarticles` = $this->idarticles");
	   	
	   	return $query->fetch();
	   }
	   /**
	    * Удаление статьи
	    * */
	    public function delete(){
	    		
	    	$select = $this->_db->query("SELECT `pay` FROM `articles` WHERE `idarticles` = $this->idarticles");
	    	if($select->fetch()->pay == 1){
	    	  $this->_db->exec("DELETE FROM `payments` WHERE `articles_idarticles` = $this->idarticles");	
	    	}
			$this->_db->exec("DELETE FROM `articles` WHERE `idarticles` = $this->idarticles");
			$this->_db->exec("DELETE FROM `catandarticle` WHERE `articles_idarticles` = $this->idarticles");
			
			return true;
	    }
		
}
