<?php
/**
 * blogController
 */
class UserController extends MainController{
	
	function __construct()
	{
 	parent:: __construct();

 	Session::authChack();
	}

	public function index(){
		$this->addUser();
	}

	public function addUser(){
		$this->load->view("backEnd/header");
		$this->load->view("backEnd/sitebar");

		$this->load->view("backEnd/addUser");

		$this->load->view("backEnd/footer");


		}

		public function userInsert(){

			if (!$_POST['submit']) {
			header("location: ".BASE_URL."UserController/addUser");
			}
		$email		 = $_POST['email'];
		$username	 = $_POST['username'];
		$role		 = $_POST['role'];
		$password	 = md5($_POST['password']);
		$data=array(
			'email'		=> $email,
			'username'	=> $username,
			'role' 		=> $role,
			'password' 	=> $password
			);
		$tableName="user";
		$umodel=$this->load->model("UserModel");
		$result=$umodel->insertUser($tableName,$data);

		//echo $result;
		header("location: ".BASE_URL."UserController");

	}

	public function userList(){
		$data=array();
		$tableName = 'user';
		$umodel=$this->load->model('UserModel');
		$data['users']=$umodel->userList($tableName);

		$this->load->view("backEnd/header");
		$this->load->view("backEnd/sitebar");

		$this->load->view("backEnd/userList",$data);

		$this->load->view("backEnd/footer");



	}

	public function userDelete($id=NULL){
		$tableName = 'user';
		$cond=$id;
		$umodel=$this->load->model('UserModel');
		$data=$umodel->userDelete($tableName,$cond);

	header("location: ".BASE_URL."UserController/userList");



	}



}

	?>