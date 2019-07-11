<?php
/**
 * blogController
 */
class CommentController extends MainController{
	
	function __construct()
	{
 	parent:: __construct();
	}

	public function index(){
		//return $this->home();
	}
/*
	public function commentInsert(){

     	$postId		= $_POST['postId'];
		$username  	= $_POST['username'];
     	$email		= $_POST['email'];
     	$comment	= $_POST['comment'];



     		$data=array(
			'postId' 	=> $postId,
			'username'	=> $username,
			'email'		=> $email,
			'comment'	=> $comment
			);
		$tableName='post_comment';
		$CommentModel=$this->load->model("CommentModel");
		$comment=$CommentModel->commentInsert($tableName,$data);
		
		header("location:".BASE_URL."blogController/postDetails/".$postId);

		

	}
*/

	public function replyCommentInsert(){

     	$commentId		= $_POST['commentId'];
     	$postId			= $_POST['postId'];
		$username  		= $_POST['username'];
     	$email			= $_POST['email'];
     	$replyComment	= $_POST['replyComment'];



     		$data=array(
			'commentId'		=> $commentId,
			'postId' 		=> $postId,
			'username'		=> $username,
			'email'			=> $email,
			'replyComment'	=> $replyComment
			);

		$tableName='reply_commet';
		$CommentModel=$this->load->model("CommentModel");
		$CommentModel->commentInsert($tableName,$data);

		header("location:".BASE_URL."blogController/postDetails/".$postId);

		

	}












}
?>