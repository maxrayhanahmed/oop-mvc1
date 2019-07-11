<?php
/**
* Class Welcome
*/
class Index extends MainController{
 public function __construct(){
 	parent:: __construct();

 }
 	
	public function admin(){
			header("location: ".BASE_URL."LoginController");
	}
	public function index(){
		  $this->home();
	}

	
	public function home(){
		 $this->load->view("frontEnd/header");

		$data=array();
		$postTable='post';
		$catTable='category';
		$PostModel=$this->load->model("PostModel");
		$data['posts']=$PostModel->postList($postTable,$catTable);
		$this->load->view("frontEnd/content",$data);

		$data['sitebarPosts']=$PostModel->sitebarPosts($postTable);
		$data['sitebarCat']=$PostModel->sitebarCat($postTable,$catTable);
		$this->load->view("frontEnd/sitebar",$data);
		$this->load->view("frontEnd/newsLatter");
		$this->load->view("frontEnd/footer");

	}
	
}



?>