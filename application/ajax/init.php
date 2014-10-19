<?php
session_start();
define("ROOT_DIR", realpath(__DIR__.'/../../'));
require_once ROOT_DIR.'/application/conf/autoload.php';
Autoload::setPath(array(ROOT_DIR . '/application/libs/', ROOT_DIR . '/application/controllers/', ROOT_DIR . '/application/models/'));
Autoload::start();

require_once ROOT_DIR.'/connect.php';

if(isset($_POST['type']) && $_POST['type'] == 'delete_category'){
	$id = (int)$_POST['id'];
	$model = new Category();
	$model->idcategory = $id;
	if($model->delete()){
		echo json_encode(array('message' => 'Категория успешно удалена', 'type' => 'success'));
	}else{
		echo json_encode(array('message' => 'Произошла ошибка при удалении категории', 'type' => 'error'));
	}
}

if(isset($_POST['type']) && $_POST['type'] == 'delete_article'){
	$id = (int)$_POST['id'];
	$model = new Articles();
	$model->idarticle = $id;
	if($model->delete()){
		echo json_encode(array('message' => 'Статья успешно удалена', 'type' => 'success'));
	}else{
		echo json_encode(array('message' => 'Произошла ошибка при удалении статьи', 'type' => 'error'));
	}
}
if(isset($_POST['type']) && $_POST['type'] == 'delete_user'){
	$id = (int)$_POST['id'];
	$model = new Users();
	$model->idusers = $id;
	if($model->delete()){
		echo json_encode(array('message' => 'Пользователь успешно удален', 'type' => 'success'));
	}else{
		echo json_encode(array('message' => 'Произошла ошибка при удалении пользователя', 'type' => 'error'));
	}
}
/**
 * Запись транзакции
 * */
 if(isset($_POST['artid'])){
	$id = (int)$_POST['artid'];
	$model = new Transaction();
	$model->users_idusers = auth::idUser();
	$model->articles_idarticles = $id;
	$model->date = date('Y-m-d');
	$model->system = $_POST['system'];
	$model->status = 0;
	$model->create();
	
	return true;
}
