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


								