<?php
class UserController extends Controller{
	private $_model;
	private $_tmp;
	private $_success;
	private $_error;
	
	public function __construct(){
		$this->_model = new Users();
		$this->_tmp = tmp::init();
        parent::__construct();
	}
	public function index(){
		return $this->login();
	}
	//Авторизация
	public function login(){
	 if(auth::login()){
	 	die("Вы уже авторизированы");
	 }	
	  if(isset($_POST['login'])){
	  	$login = validate::clear($_POST['login']);
		$password = validate::hash($_POST['password']); 
		
		$this->_model->login = $login;
	    $this->_model->password = $password;
		
		if($this->_model->login()){
			base::success("Вы успешно вошли");
			base::to('/home');
		}else{
			base::error("Ошибка в момент авторизации");

		}
	  }	
	  tmp::params(array('title' => 'Авториззация на сайте'));
      $this->_tmp->load('login');	
	}
	//регистрация
	public function signup($params = null){
	if(auth::login()) die("Вы уже зарегестрированны");	
	if(isset($params[0]) && $params[0] == 'active'){
		$hash = trim($params[1]);
		
		$this->_model->hash = $hash;
		
		$uid = $this->_model->activate();
		
		if(!empty($uid)){
			$rand = mt_rand(10000, 99000);
			$this->_model->idusers = validate::int($uid);
			$this->_model->key = validate::hash($rand.$uid);
			if($this->_model->key()){
				base::success("Вы успешно активировали свой аккаунт! Теперь вы может войти");
			}else{
				base::error("Произошла ошибка в момент активации аккаунта");
			}
		}else{
			die("Ошибка активации");
		}
	}	
	  if(isset($_POST['signup'])){
	  	$login =  validate::clear($_POST['login']);
		$email =  validate::clear($_POST['email']);
		if($_POST['password'] !== $_POST['repassword']){
		  throw new Exception("Пароли не совпадают");		
		}
		$password = validate::hash($_POST['password']);
		$hash = $login . "|" . $email . "|" . time();
		$hash = validate::hash($hash);
		$this->_model->login = $login;
		$this->_model->email = $email;
		$this->_model->password = $password;
		$this->_model->isAdmin = 0;
		$this->_model->isActive = 0;
		$this->_model->hash = $hash;
		$this->_model->key = 0;
		$this->_model->created_at = date('Y-m-d H:i:s', time());
		$this->_model->updated_at = date('Y-m-d H:i:s',time());  
		if($this->_model->save()){
			$link = "http://". $_SERVER['HTTP_HOST'] . '/user/signup/active/' . $hash;
			$message = "Подтвердите регистрацию: \n\r " . $link ;
			if(mail::newMail(array('to' => $email, 'subject' => 'Регистрация на сайте', 'message' => $message)))
			      base::success("Вы успешно зарегестрированны. На ваш email отправлено письмо");
			else 
				  base::error("Ошибка в момент регистрации. Письмо не отправлено");
			
		}else{
			base::error("Ошибка в момент регистрации");
		}
	  }	
	  
      tmp::params(array('title' => 'Регистрация на сайте')); 
                                   
      $this->_tmp->load('signup');
	}
   public function forget(){
   	if(isset($_POST['email'])){
   		$email = validate::clear($_POST['email']);
		$this->_model->email = $email;
		if(!$this->_model->forget()){
			base::error("Такого E-mail адреса нет в Базе");
		}else{
		$rand = rand(1,9).rand(10,99).rand(100,999).rand(1000, 10000);
		$password = validate::hash($rand);
		$this->_model->password = $password;
		$this->_model->email = $email;
		if($this->_model->password()){
		$message = "Ваш новый пароль: \n\r" .$rand;
		if(mail::newMail(array("to" => $email, "subject" => "Востановление пароля", "message" => $message))){
			base::success("Новый пароль выслан на ваш email");
		}else{
			base::error("Ошибка при отправке письма");
		}
		}else{
			base::error("роизошла ошибка при изменении пароля!"); 
		}
	  }	
   	}
   	tmp::params(array("title" => "Востановление пароля"));
	tmp::init()->load('forget');
   }
   public function logout(){
   	session_destroy();
	base::to("/");
   }
   public function profile(){
   	$this->_model->key = $_SESSION['login'];
   	if(isset($_POST['profile'])){
   		$email = validate::clear($_POST['email']);
		if(isset($_POST['password'])){
			if(empty($_POST['password'])){
				$password = trim($_POST['old_password']);
			}else{
				$password = validate::hash($_POST['password']);
			}
		}
		$this->_model->email = $email;
		$this->_model->password = $password;
		if($this->_model->saveProfile()){
			base::success("Профиль успешно изменен");
		}else{
			base::error("Произошла ошибка при смене профиля");
		}
   	}
   	
	
	$data = $this->_model->profile();
	
   	tmp::params(array("title" => "Профиль пользователя", "user" => $data));
	tmp::init()->load('profile');
   }
   public function listusers(){
   	if(!auth::admin()){
			base::to('/');
	}
   	 $list = $this->_model->listUsers();
	 
	tmp::params(array("title" => "Список пользвателей", "type" => "users", "list" => $list));
	tmp::init()->load('admin/users');
   }
}
