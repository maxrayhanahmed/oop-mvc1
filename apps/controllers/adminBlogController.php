<?php
/**
 * blogController
 */
class adminBlogController extends MainController{
	
	function __construct()
	{
 	parent:: __construct();
 	Session::authChack();
	}
	public function Index(){
		$this->home();
	}
	
	public function home(){
		$this->load->view("backEnd/header");
		$this->load->view("backEnd/sitebar");

		$this->load->view("backEnd/content");

		$this->load->view("backEnd/footer");

	}

	public function addPost(){
		
		$this->load->view("backEnd/header");
		$this->load->view("backEnd/sitebar");

		$data=array();
		$tableName='category';
		$catModel=$this->load->model("catModel");
		$data['categories']=$catModel->catList($tableName);
		$this->load->view("backEnd/post/postAdd",$data);

		$this->load->view("backEnd/footer");

	}

	public function insertPost(){
		$title 			 	= $_POST['title'];
     	$catId 				= $_POST['catId'];
     	$date 				= $_POST['date'];
     	$details 			= $_POST['details'];
     	$publicationStatus	= $_POST['publicationStatus'];

		$data=array(
			'title'				=> $title,
			'catId'				=> $catId,
			'date'				=> $date,
			'details'			=> $details,
			'publicationStatus'	=> $publicationStatus
		);
		$tableName="post";
		$postModel=$this->load->model("postModel");
		$result=$postModel->insertPost($tableName,$data);

	header("location: ".BASE_URL."adminBlogController/addPost");
	}


	public function postList(){
		$data=array();
		$postTable='post';
		$catTable='category';
		$postModel=$this->load->model("postModel");
		$data['posts']=$postModel->postManag($postTable,$catTable);

		$this->load->view("backEnd/header");
		$this->load->view("backEnd/sitebar");

		$this->load->view("backEnd/post/postList",$data);

		$this->load->view("backEnd/footer");

	}

	public function postDelete($id=NULL){

		$cond=$id;
		$tableName='post';
		$postModel=$this->load->model("postModel");
		$result=$postModel->postDelete($tableName,$cond);

		$mdata=array();
		if ($result==1) {
			$mdata['msg'] = 'Post Deleted Successfully'; 
		} else {
			$mdata['msg'] = 'Post Not Deleted'; 
		}
			header("location: ".BASE_URL."adminBlogController/postList");

	}

	public function postEdit($id=NULL){

		$cond=$id;
		$tableName='post';
		$catTable='category';
		$catModel=$this->load->model("catModel");
		$postModel=$this->load->model("postModel");
		$data['categories']=$catModel->catList($catTable);
		$data['post']=$postModel->postEditById($tableName,$cond);
		$this->load->view("backEnd/header");
		$this->load->view("backEnd/sitebar");

		$this->load->view("backEnd/post/postEdit",$data);

		$this->load->view("backEnd/footer");

	}


	public function postUpdate(){
		$cond 				= $_POST['editId'];
		$title 			 	= $_POST['title'];
     	$catId 				= $_POST['catId'];
     	$date 				= $_POST['date'];
     	$details 			= $_POST['details'];
     	$publicationStatus	= $_POST['publicationStatus'];

		$data=array(
			'title'				=> $title,
			'catId'				=> $catId,
			'date'				=> $date,
			'details'			=> $details,
			'publicationStatus'	=> $publicationStatus
		);

		$tableName='post';
		$postModel=$this->load->model("postModel");
		$result=$postModel->postUpdateById($tableName,$cond,$data);

	header("location: ".BASE_URL."adminBlogController/postList");




	}





}
?>