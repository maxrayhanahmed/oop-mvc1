<?php

//include "../../system/libs/Database.php";
//include "../../system/libs/MainModel.php";
//include"../controllers/CommentController.php";
//include"../../controllers/index.php";
spl_autoload_register(function ($className) {
include_once "../../system/libs/".$className.".php";
});

include"../config/Config.php";

	$mainConnec = new MainModel();

//$connect = new PDO('mysql:host=localhost;dbname=mvc1','root','');

		
			
		$comment_sql="SELECT * FROM post_comment ORDER BY id DESC LIMIT 4";
			$stmt = $mainConnec->db->prepare($comment_sql);
			$stmt->execute();
			$comments=$stmt->fetchAll();

			

			// for rely comment

		$reply_sql="SELECT * FROM reply_commet ORDER BY id DESC";
			$reply_stmt = $mainConnec->db->prepare($reply_sql);
			$reply_stmt->execute();
			$reply_comments=$reply_stmt->fetchAll();



	
		//echo  $url;

				//$this->load->pagla();
				include 'test.php';	
				


		 

		

		



   // $obj = new blogController();
		//$obj2 = new MainController();

		//$obj->home();
		//$obj->postDetails();


			$result='';
			if($comments){
				$result .='<ul class="comment-list"><li>';
				foreach($comments  as $comment){

					$result .= '<div class="comment">
										<div class="comment-avator set-bg" data-setbg="img/blog/comment/1.jpg"></div>
										<div class="comment-content">
											<span class="c-date">'.$comment['date'].'</span>
											<h5>'.$comment['username'].'</h5>
											<p>'.$comment['comment'].'</p>
											<a href="" class="c-btn">Reply</a>
										</div>
									</div>';

										
									$result .='<ul class="replay-comment-list">';
									foreach ($reply_comments as $reply_comment) {
										if($reply_comment['commentId']==$comment['id']){
										$result .='<li>
											<div class="comment">
												<div class="comment-avator set-bg" data-setbg="img/blog/comment/2.jpg"></div>
												<div class="comment-content">
													<span class="c-date">'.$reply_comment['date'].'</span>
													<h5>'.$reply_comment['username'].'</h5>
													<p>'.$reply_comment['replyComment'].'</p>
													<a href="" class="c-btn">Reply</a>
												</div>
											</div>
										</li>';
									}
									}
									
									$result .='</ul>'; 


									
				
				}
			$result .='</ul class="comment-list"></li>';


			}else{
				$result .= "there is no data";
			}

			echo $result;

			

