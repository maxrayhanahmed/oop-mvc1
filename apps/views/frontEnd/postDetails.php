	
<div class="site-breadcrumb">
		<div class="container">
			<a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>Blog</span>
			<span><?php 		 echo $_GET['url']; ?></span>
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
						<div class="post-content">
							<h3><a href="single-blog.html"><?php echo $post['title']?></a></h3>
							<div class="post-meta">
								<span><i class="fa fa-calendar-o"></i><?php echo $post['date']?></span>
								<span><i class="fa fa-user"></i> Cathrine Zeta</span>
							</div>
							<?php echo $post['details']?>
							<div class="tag"><i class="fa fa-tag"></i><a href="<?php echo BASE_URL?>blogController/getPostByCategory/<?php echo $post['catId']?>"><?php echo $post['category']?></a></div>
						</div>
						<div class="post-author">
							<div class="pa-thumb set-bg" data-setbg="img/blog/author.jpg"></div>
							<div class="pa-content">
								<h4>Written by Owen Wilson</h4>
								<p>Mauris lectus justo, tempor ac auctor at, congue id erat. Pellentesque et massa odio. Fusce vel fermentum tortor, nec gravida ligula. Vivamus at malesuada tortor, in posuere ex. Phasellus pretium turpis non ipsum vestibulum, a finibus quam rhoncus.</p>
							</div>
						</div>
						<div class="comment-warp">
							<h4 class="comment-title">5 Comments</h4>
							<h6 class="comment-title" id="success"></h6>
							

								<div id="test">
	
								</div> 

							
							
							<div class="comment-form-warp">
								<h4 class="comment-title">Leave Your Comment</h4>
								<form class="comment-form" id="comment_form" method="POST">
									<div class="row">
										<div class="col-sm-6">
										<span id="error1" style="color:red"></span>

											<input type="text" name="username" id="username" placeholder="Your Name" required="1">
											<input type="hidden" name="postId" id="postId" value="<?php echo $post['id']?>" placeholder="Your Name">
										</div>
										<div class="col-sm-6">
										<span id="error2"style="color:red"></span>
											<input type="email" name="email" id="email" placeholder="Your Email" required="1">

										</div>
										<div class="col-sm-12">
											<span id="error3"style="color:red"></span>
											<textarea name="comment" id="comment" placeholder="Your Message" required="1"></textarea>

											<input type="submit" value="Comment" name="autosubmit" id="autosubmit" class="c-btn"/>
										</div>
										<span id="error" style="color:red"></span>

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


					
				

