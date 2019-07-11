<?php
/**
* Category Model
*/

class CommentModel extends MainModel{
	public function __construct(){
		parent::__construct();
		}

	public function commentInsert($tableName,$data){

		return $this->db->insert($tableName,$data);

	}
	
	public function getCommentById($commentTable,$id){

		$sql="SELECT * FROM $commentTable where postId=$id order by id desc";

		return $this->db->select($sql);



	}
	public function getReplyCommentById($reply_comment,$commentTable,$id){
		$sql="SELECT * FROM $reply_comment where postId=$id";
	/*
	$sql="SELECT $reply_comment.*,$commentTable.id FROM $reply_comment
		 INNER JOIN $commentTable
		 ON $reply_comment.commentId = $commentTable.id 
		 WHERE $reply_comment.commentId=$commentTable.id order by id desc limit 3;
		 ";
*/
		return $this->db->select($sql);

	}

	
}

?>