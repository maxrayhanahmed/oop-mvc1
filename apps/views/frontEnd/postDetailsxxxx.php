	
<div class="site-breadcrumb">
		<div class="container">
			<a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>Blog</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->


	<!-- Blog page section  -->
	<section class="blog-page-section spad pt-0">
		<div class="container">
			<div class="row">


				
				<div class="col-lg-8 post-list">
					<?php 
					foreach ($posts as $post) {
					
					?>
					<div class="post-item post-details">

						<img src="img/blog/1.jpg" class="post-thumb-full" alt="">

								<!--  Comment start  -->

						<div class="post-content">
							<h3><a href="<?php echo BASE_URL?>blogController/postDetails/<?php echo $post['id'] ?>"><?php echo $post['title']?></a></h3>
							<div class="post-meta">
								<span><i class="fa fa-calendar-o"></i><?php echo $post['date']?></span>
								<span><i class="fa fa-user"></i> Cathrine Zeta</span>
							</div>
							<?php echo $post['details']?>
							<div class="tag"><i class="fa fa-tag"></i><a href="<?php echo BASE_URL?>blogController/getPostByCategory/<?php echo $post['catId']?>"><?php echo $post['category']?></a></div>
						</div>
						<!--  Comment end  -->

						<div class="post-author">
							<div class="pa-thumb set-bg" data-setbg="img/blog/author.jpg"></div>
							<div class="pa-content">
								<h4>Written by Owen Wilson</h4>
								<p>Mauris lectus justo, tempor ac auctor at, congue id erat. Pellentesque et massa odio. Fusce vel fermentum tortor, nec gravida ligula. Vivamus at malesuada tortor, in posuere ex. Phasellus pretium turpis non ipsum vestibulum, a finibus quam rhoncus.</p>
							</div>
						</div>
						<div class="comment-warp">
							<h4 class="comment-title">3 Comments</h4>
							<ul class="comment-list">
							<!-- reply Comment srart  -->

								<li>
									<?php 

									foreach ($comments as $comment) {
											# code...
										# code...
									
									?>
									<div class="comment">
										<div class="comment-avator set-bg" data-setbg="img/blog/comment/1.jpg"></div>


										<div class="comment-content"> 
											<span class="c-date"><?php echo $comment['date']?></span>
											<h5><?php echo $comment['username']?></h5>
											<p><?php echo $comment['comment']?></p>
											<a href="" class="c-btn">Like</a>
													<button id="replyComment" class="c-btn">Reply</button>
										</div>
									</div>
									
									
								

								<!-- reply Comment end  --> 
								<!-- reply Comment box start  -->

									<style type="text/css">
										.comment_box{margin-left: 100px }
									</style>
									<div class="comment_box" id="replyCommentBox"style="display: none";>
										<h4 class="comment-title">Reply Comment</h4>
										<form class="comment-form" action="<?php echo BASE_URL?>CommentController/replyCommentInsert" method="POST">
											<div class="row">

											<div class="col-sm-6">
											<input type="text" name="username" placeholder="Your Name">
													<input type="hidden" name="commentId" value="<?php echo $comment['id']?>" placeholder="Your Name">
													<input type="hidden" name="postId" value="<?php echo $post['id']?>" placeholder="Your Name">

												</div>
												<div class="col-sm-6">
											
												<input type="email" name="email" placeholder="Your Email">
												</div>


												<div class="col-sm-12">
													<textarea name="replyComment" placeholder="Your Message" ></textarea>
													<button type="submit" class="site-btn">Reply COMMENT</button>
												</div>
											</div>
										</form>
									</div>

									<ul class="replay-comment-list">


										<?php

										foreach ($replyComments as $replyComment) {
										if ($replyComment['commentId']==$comment['id']) {
											# code...
										
										?>
										<li>
											<div class="comment">
												<div class="comment-avator set-bg" data-setbg="img/blog/comment/2.jpg"></div>
												<div class="comment-content">
													<span class="c-date"><?php echo $replyComment['date']?></span>
													<h5><?php echo $replyComment['username']?></h5>
													<p><?php echo $replyComment['replyComment']?></p>
													<a href="" class="c-btn">Like</a>
													<button id="replyComment" class="c-btn">Reply</button>
												</div>
											</div>
										</li>
											<?php
									}
									}
								
										?>
									
									</ul>
						<!-- reply Comment box end  -->
									<?php
								
								}
									?>

						

								</li>
								
							</ul>


								<!-- Comment box start  -->

							<div class="comment-form-warp">
								<h4 class="comment-title">Leave Your Comment</h4>
								<form class="comment-form" action="<?php echo BASE_URL?>CommentController/commentInsert" method="POST">
									<div class="row">
										<div class="col-sm-6">
											<input type="text" name="username" placeholder="Your Name">
											<input type="hidden" name="postId" value="<?php echo $post['id']?>" placeholder="Your Name">
										</div>
										<div class="col-sm-6">
											<input type="email" name="email" placeholder="Your Email">
										</div>
										<div class="col-sm-12">
											<textarea name="comment" placeholder="Your Message" ></textarea>
											<button type="submit" class="site-btn">SEND COMMENT</button>
										</div>
									</div>
								</form>
							</div>
						<!-- Comment box end  -->

						</div>
					</div>
					<?php 
				}
					?>
				</div>

			
			<script type="text/javascript">
	            $(document).ready(function(){
	                $("#replyComment").click(function(){
	                    $("#replyCommentBox").toggle();
	                });
	            });
	 		</script>