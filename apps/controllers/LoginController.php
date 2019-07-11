<?php

/**
 * 
 */
class LoginController extends MainController{
	
	function __construct()
	{
		parent::__construct();
			}



	public function index(){
		
		return $this->login();
	}
	public function login(){

		Session::init();
		if (Session::get('login') == true) {
			header("location: ".BASE_URL."adminBlogController");
		}
		
		$this->load->view('auth/login');

	}


	public function loginAuth(){
		$tableName="user";

		$uname		 = $_POST['username'];
		$password	 = md5($_POST['password']);

		$LoginModel=$this->load->model("LoginModel");
		$count=$LoginModel->adminControl($tableName,$uname,$password);
		if ($count > 0) {
			$result=$LoginModel->getUserData($tableName,$uname,$password);
			Session::init();
			Session::set('login',true);
			Session::set('uname',$result[0]['username']);
			Session::set('role',$result[0]['role']);
			Session::set('id',$result[0]['id']);
		header("location: ".BASE_URL."adminBlogController");

		} else {
		header("location: ".BASE_URL."LoginController");
		}
		
		
		
	}


	public function logout(){
			Session::init();
			Session::destroy();
		header("location: ".BASE_URL."LoginController");

		}


}

?>