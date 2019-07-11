
	<!-- Breadcrumb section -->
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
					if(isset($posts)){
					foreach ($posts as $post) {
					?>

					<div class="post-item">
						<div class="post-thumb set-bg" data-setbg="apps/public/frontEnd/img/blog/1.jpg"></div>
						<div class="post-content">
							<h3><a href="<?php echo BASE_URL;?>blogController/postDetails/<?php echo $post['id'];?>"><?php echo $post['title'];?></a></h3>
							<div class="post-meta">
								<span><i class="fa fa-calendar-o"></i> <?php echo $post['date'];?></span>
								<span><i class="fa fa-user"></i> Cathrine Zeta</span>
							</div>
							<p><?php echo $post['details'];?></p>
						</div>
					</div>

					<?php
					}
					}
					?>

					<ul class="site-pageination">
						<li><a href="#" class="active">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
					</ul>
				</div>
				