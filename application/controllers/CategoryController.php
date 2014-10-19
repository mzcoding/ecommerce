<?php
class CategoryController extends Controller{
	private $_model;
	
	public function __construct(){
		$this->_model = new Category();
		$this->_tmp = tmp::init();
        parent::__construct();
	}
	
	public function index(){
	 if(!auth::admin()){
			base::to('/');
	 }
	 parent::view(array(
		             "method" => __FUNCTION__, 
		             "modelname" => Category::model() ,  
		             "model" => $this->_model, 
		             "params" => array('title' => 'Категории', 'type' => 'category')
	  ));
	  
	}
	public function create(){
		if(!auth::admin()){
			base::to('/');
		}
		$title = isset($_POST['title']) ? trim($_POST['title']) : false;
		if(!empty($title)){
		  $title = validate::clear($title);
		  $description = validate::clear($_POST['description']);
		  
		  $this->_model->title = $title;
		  $this->_model->alias = "alias";
		  $this->_model->description = $description;
		  if($this->_model->create()){
		  	base::success("Данные успешно добавлены");
		  }else{
		  	base::error("Ошибка при добавлении данных");
		  }
		  	
		}
		
	
	  tmp::params(array('title' => 'Добавить категорию', 'type' => 'category'));
      $this->_tmp->load('admin/newCategory');	
	}
	public function edit($id){
	 $id = (int)$id;
	 $this->_model->idcategory = $id;
	 $category = $this->_model->cat();
	 
	 $title = isset($_POST['title']) ? trim($_POST['title']) : false;
		if(!empty($title)){
		  $title = validate::clear($title);
		  $description = validate::clear($_POST['description']);
		  
		  $this->_model->title = $title;
		  $this->_model->description = $description;
		  if($this->_model->edit()){
		  	base::success("Данные успешно изменены");
		  }else{
		  	base::error("Ошибка при изминении данных");
		  }
		  	
		}
	 
	 
	 tmp::params(array('title' => 'Редактировать категорию', 'type' => 'category', 'category' => $category));
     $this->_tmp->load('admin/editCategory');	
	}
}
