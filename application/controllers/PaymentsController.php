<?php
class PaymentsController extends Controller{
	private $_model;
	
	public function __construct(){
		$this->_model = new Payments();
        parent::__construct();
	}
	public function index(){
	 if(!isset($_SESSION['pay']['article'])){
	 	die("Необходимо выбрать статью для оплаты");
	 }
	 $price = 20;	
	 //Робокасса
	  $mrh_login = "mzcoding"; 
	  $mrh_pass1 = "2402901920mm"; 
	  $inv_id = mt_rand(100,10000);
	  $inv_desc = 'Оплата статьи с ID'. $_SESSION['pay']['article'];  
	  $out_summ = $_SESSION['pay']['price']; 
	  $crc = md5("$mrh_login:$out_summ:$inv_id:$mrh_pass1"); 
	  $url = "https://auth.robokassa.ru/Merchant/Index.aspx?MrchLogin=$mrh_login&"."OutSum=$out_summ&InvId=$inv_id&Desc=$inv_desc&SignatureValue=$crc"; 
	   
	 
	 tmp::params(array('title' => 'Способы оплаты', 'price' => $price, 'robokassa' => $url));
     tmp::init()->load('payments');
	}
	public function success(){
	   tmp::params(array('title' => 'Успешная оплата'));
       tmp::init()->load('success');
	}
}
