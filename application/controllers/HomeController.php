<?php
class HomeController extends Controller{
	private $_model;
	public function __construct(){
		$this->_model = new Home();
		parent::__construct();
	}
	public function index(){
		$users = new Users();
		$articles = new Articles();
		$allUsers = $users->select();
		$allArticles = $articles->allArticles();
		$count = count($allArticles);
		for($i=0; $i<$count; $i++){
			$articles->idarticles = $allArticles[$i]->idarticles;
			
			$allArticles[$i]->short_text = mb_substr(htmlspecialchars_decode($allArticles[$i]->text), 0, 200);
		
		}
		parent::view(array(
		             "method" => __FUNCTION__, 
		             "modelname" => Home::model() ,  
		             "model" => $this->_model, 
		             "params" => array("title" => "Мой сайт", 'allUsers' => $allUsers, 'allArticles' => $allArticles)
					));
	}
	public function hello(){
		parent::view(array(
		             "method" => __FUNCTION__, 
		             "modelname" => Home::model() ,  
		             "model" => $this->_model, 
		             "params" => array("title" => "Привет сайт")
					));
	}
   
}
