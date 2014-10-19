<?php
class ErrorController extends Controller{
	public function index(){
		$this->error404();
	}
	public function error404(){
		$tmp = tmp::init();
        tmp::params(array('title' => 'Страница не найдена'));
        $tmp->load('404');
	}
}
