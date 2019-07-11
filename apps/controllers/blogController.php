<?php
/**
 * blogController
 */
class blogController extends MainController{
	
	function __construct()
	{
 	parent:: __construct();
	}

	public function index(){
		return $this->home();
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

	
	public function postDetails($id=NULL){

		
		$this->load->view("frontEnd/header");
		

		$data=array();
		$postTable='post';
		$catTable='category';
		$commentTable='post_comment';
		$reply_comment='reply_commet';
		$PostModel=$this->load->model("PostModel");
		$data['posts']=$PostModel->getPostById($postTable,$catTable,$id);

		
		$CommentModel=$this->load->model("CommentModel");
		$data['comments']=$CommentModel->getCommentById($commentTable,$id);
		$data['replyComments']=$CommentModel->getReplyCommentById($reply_comment,$commentTable,$id);
			
		$this->load->view("frontEnd/postDetails",$data);
	
		$data['sitebarPosts']=$PostModel->sitebarPosts($postTable);
		$data['sitebarCat']=$PostModel->sitebarCat($postTable,$catTable);
		$this->load->view("frontEnd/sitebar",$data);
		$this->load->view("frontEnd/newsLatter");
		
		$this->load->view("frontEnd/footer");


	
	}

	

	
	public function getPostByCategory($id=NULL){

		$this->load->view("frontEnd/header");
		$data=array();
		$postTable='post';
		$catTable='category';
		$PostModel=$this->load->model("PostModel");
		$data['posts']=$PostModel->getPostByCat($postTable,$id);
		$this->load->view("frontEnd/content",$data);
			
		$data['sitebarPosts']=$PostModel->sitebarPosts($postTable);
		$data['sitebarCat']=$PostModel->sitebarCat($postTable,$catTable);
		$this->load->view("frontEnd/sitebar",$data);
		$this->load->view("frontEnd/newsLatter");
		$this->load->view("frontEnd/footer");
	}



}
?>