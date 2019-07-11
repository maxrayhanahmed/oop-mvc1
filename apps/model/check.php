<?php
/**
* Category Model
*/

//spl_autoload_register(function ($className) {
//include_once "../../system/libs/".$className.".php";
//});

//include"../config/Config.php";

 $connect = new PDO('mysql:host=localhost;dbname=mvc1','root','');


	//$mainConnec = new MainModel();


		
		
		$postId		 = $_POST['postId'];
		$username	 = $_POST['username'];
		$email		 = $_POST['email'];
		$comment 	 = $_POST['comment'];
		$sql="INSERT INTO post_comment(postId,username,email,comment)VALUES('$postId','$username','$email','$comment')";
		//$mainConnec->db->query($sql);
		$connect->query($sql);


	
?>