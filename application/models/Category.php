<?php
class Category{
	public $idcategory;
	public $title;
	public $alias;
	public $description;
	
	private $_db;
	public function __construct(){
		$this->_db = connect::_self()->mysql();
	}
	public static function model(){
		return 'category';
	}
	public function create(){
		$query = $this->_db->prepare("INSERT INTO `category` (`title`,`alias`,`description`) VALUES(:title, :alias, :description)");
		$query->bindParam(":title", $this->title, PDO::PARAM_STR, 155);
		$query->bindParam(":alias", $this->alias, PDO::PARAM_STR, 155);
		$query->bindParam(":description", $this->description, PDO::PARAM_STR, 255);
		
		return $query->execute();
			
	}
	public function listCategory(){
		$query = $this->_db->query("SELECT `idcategory`,`title`,`description` FROM `category`");
		
		return $query->fetchAll();
	}
	public function cat(){
		$query = $this->_db->query("SELECT `idcategory`,`title`,`description` FROM `category` WHERE `idcategory` = $this->idcategory");
		
		return $query->fetch();
	}
	public function edit(){
		$query = $this->_db->prepare("UPDATE `category` SET `title` = :title, `description` = :desc WHERE `idcategory` = :id");
		$query->bindParam(":title", $this->title);
		$query->bindParam(":desc", $this->description);
		$query->bindParam(":id", $this->idcategory);
		
		return $query->execute();
	}
	public function delete(){
		$query = $this->_db->query("DELETE FROM `category` WHERE `idcategory` = $this->idcategory");
		if($query){
			return true;
		}
		
		return false;
	}
	
}
