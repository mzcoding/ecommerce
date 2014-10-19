<?php
class ArticlesController extends Controller{
	private $_model;
	
	public function __construct(){
		$this->_model = new Articles();
		$this->_tmp = tmp::init();
        parent::__construct();
	}
	/**
	 * Список статей в админ-панеле
	 * */
	public function index(){
	 if(!auth::admin()){
			base::to('/');
	 }
	 
	 parent::view(array(
		             "method" => __FUNCTION__, 
		             "modelname" => Articles::model() ,  
		             "model" => $this->_model, 
		             "params" => array('title' => 'Статьи', 'type' => 'articles')
	  ));
	  
	}
	/**
	 * Создание статьи
	 * */
	public function create(){
		if(!auth::admin()){
			base::to('/');
		}
		$title = isset($_POST['title']) ? $_POST['title'] : null;
		if(!empty($title)){
			$title = validate::clear($title);
			$keywords = validate::clear($_POST['keywords']);
			$category = $_POST['category'];
			$date = validate::clear($_POST['created_at']);
			if(isset($_POST['pay'])){
				$pay = (int)$_POST['pay'];
				$price = validate::clear($_POST['price']);
			}
			$date = strtotime($date);
			$this->_model->title = $title;
			$this->_model->keywords = $keywords;
			$this->_model->text = $_POST['text'];
			$this->_model->pay = isset($pay) ? $pay : 0;
			$this->_model->created_at = date('Y-m-d H:i',  $date); 
			$this->_model->updated_at = date('Y-m-d H:i',  $date); 
			
			if($this->_model->create()){
				$artId = $this->_model->lastId();
				$this->_model->saveCategory($category, $artId);
				if(isset($pay) && isset($price)){
					$this->_model->idarticles = $artId;
					$this->_model->price = $price;
					if($this->_model->createPrice()){
						base::success("Статья успешно добавлена");
					}else{
						base::error("Произошла ошибка при добавлении статьи");
					}
				}else{
					base::success("Статья успешно добавлена");
				} 
			}else{
				base::error("Произошла ошибка при добавлении статьи");
			}
		}
		$category = new Category();
		$list = $category->listCategory();
		$date = date("d-m-Y H:i");
		tmp::params(array('title' => 'Добавить новую статью', 'type' => 'articles', 'date' => $date, 'list' => $list));
		tmp::init()->load('admin/newArticle');
	}

/**
 * Редактирование статьи
 * */		
 public function edit($id){
 	if(!auth::admin()){
			base::to('/');
	} 
	    $this->_model->idarticles = (int)$id;
	    $title = isset($_POST['title']) ? $_POST['title'] : null;
		if(!empty($title)){
			$title = validate::clear($title);
			$keywords = validate::clear($_POST['keywords']);
			$category = $_POST['category'];
			
			$date = validate::clear($_POST['created_at']);
			if(isset($_POST['pay'])){
				$pay = (int)$_POST['pay'];
				$price = validate::clear($_POST['price']);
			}
			$date = strtotime($date);
			$this->_model->title = $title;
			$this->_model->keywords = $keywords;
			$this->_model->text = $_POST['text'];
			$this->_model->pay = isset($pay) ? $pay : 0;
			$this->_model->created_at = date('Y-m-d H:i',  $date); 
			$this->_model->updated_at = date('Y-m-d H:i',  $date); 
			
			if($this->_model->edit()){
				$this->_model->deleteCategoryforArticles();
				$this->_model->saveCategory($category, $id);
				if(isset($pay) && isset($price)){
					$this->_model->price = $price;
					if($this->_model->createPrice()){
						base::success("Статья успешно обновлена");
					}else{
						base::error("Произошла ошибка при обновлении статьи");
					}
				}else{
					base::success("Статья успешно обновлена");
				} 
			}else{
				base::error("Произошла ошибка при обновлении статьи");
			}
		}
	//Выбираем категории по id
	$this->_model->idarticles = $id;
	$category =  $this->_model->artCategory();
	$allCategory = array();
	foreach ($category as $key => $value) {
		$allCategory[] = $value->category_idcategory; 
	} 
	//Вытаскиваем статью
	$article = $this->_model->articleID();
	//Если статья платная
	if($article->pay == 1){
		tmp::params(array('price' => $this->_model->artPrice()));
	}
    $categoryObject = new Category();
    $list = $categoryObject->listCategory();
    tmp::params(array('title' => 'Редактировать статью', 'type' => 'articles', 'list' => $list, 'article' => $article, 'category' => $allCategory));
    tmp::init()->load('admin/editArticle');
 }
 /**
  * Отображение полной статьи
  * */
 public function show($id){
 	
 	$this->_model->idarticles = (int)$id;
	/*$category =  $this->_model->artCategory();
	$allCategory = "";
	foreach ($category as $key => $value) {
		$allCategory .= "," . $value->category_idcategory; 
	} */
	//Вытаскиваем статью
	$article = $this->_model->articleID();
	//Если статья платная
	if($article->pay == 1){
		$transaction = new Transaction();
		$transaction->users_idusers = auth::idUser();
		$transaction->articles_idarticle = $id;
		$price = $this->_model->artPrice();
		tmp::params(array("price" => $price->payments, "artid" => $id));
		if($transaction = $transaction->PayArticles()){
			tmp::params(array("transaction" => $transaction));
		}else{
			$_SESSION['pay']['article'] = $id;
			$_SESSION['pay']['price'] = $price->payments;
			base::to('/payments', 2);	
			die("Необходимо оплатить эту статью!");
			
		}
		
	}
	  tmp::params(array('title' => $article->title, 'article' => $article));
    tmp::init()->load('article');
 }
}
