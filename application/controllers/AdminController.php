<?php
class AdminController extends Controller{
	private $_model;
	
	public function __construct(){
		$this->_model = new Users();
		$this->_tmp = tmp::init();
        parent::__construct();
	}
	public function index(){
		if(!auth::admin()){
			base::to('/');
		}
	  tmp::params(array('title' => 'Панель администратора', 'type' => 'index'));
      $this->_tmp->load('admin/index');	
	}
}
