<!-- sidebar -->
				<div class="col-sm-8 col-md-5 col-lg-4 col-xl-3 offset-xl-1 offset-0 pl-xl-0 sidebar">
					<!-- widget -->
					<div class="widget">
						<form class="search-widget">
							<input type="text" placeholder="Search...">
							<button><i class="ti-search"></i></button>
						</form>
					</div>
					<!-- widget -->
					<div class="widget">
						<h5 class="widget-title">Recent News</h5>
						<div class="recent-post-widget">

							<?php 
							foreach ($sitebarPosts as $sitePost) {
								# code...
							
							?>
							<!-- recent post -->
							<div class="rp-item">
								<div class="rp-thumb set-bg" data-setbg="apps/public/img/blog/recent-post/1.jpg"></div>
								<div class="rp-content">
									<a href="<?php echo BASE_URL?>blogController/postDetails/<?php echo $sitePost['id']?>"><h6><?php echo $sitePost['title']?></h6></a>
									<p><i class="fa fa-clock-o"></i> <?php echo $sitePost['date']?></p>
								</div>
							</div>
							<?php
							}
							?>
						
						</div>
					</div>
					
					<!-- widget -->
					<div class="widget">
						<h4 class="widget-title">Categories</h4>
						<ul>
							<?php 
							foreach ($sitebarCat as $sitePost ) {
							
							?>
							<li><a href="<?php echo BASE_URL?>blogController/getPostByCategory/<?php echo $sitePost['catId']?>"><?php echo $sitePost['category']?></a></li>
							<?php
							}
							?>

							
						</ul>
					</div>
					<!-- widget -->
					<div class="widget">
						<img src="apps/public/img/ad.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog page section end -->
