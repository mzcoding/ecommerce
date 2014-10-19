<?php
class TransactionController extends Controller{
	private $_model;
	
	public function __construct(){
		$this->_model = new Transaction();
        parent::__construct();
	}
	public function index(){}
} 