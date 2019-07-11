
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Post</h1>
                    <h3></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            	<div class="col-md-8">
            		<form action="<?php echo BASE_URL?>adminBlogController/insertPost" method="post" enctype="multipart/viewport">
	            		 <div class="form-group">
	                        <label>Title : </label>
	                        <input name="title" class="form-control" placeholder="Enter Title" required="1">
	                    </div>
 						<div class="form-group">
	                        <label>Catergory : </label>
							<select class="form-control" name="catId">
								<option value="">Select</option>
								<?php
									foreach ($categories as $category) {
								?>
								<option value="<?php echo $category['id'] ?>"><?php echo $category['category'] ?></option>

								<?php
									}
								?>
								
							</select>	
						</div>
 						<div class="form-group">
	                        <label>Date : </label>
	                        <input type="" name="date" value="<?php echo date('d M, y')?>" class="form-control" placeholder="Enter Date">
	                    </div>
 						<div class="form-group">
	                        <label>Details : </label>
		                    <textarea class="form-control" name="details">
		                    	
		                    </textarea>
		            	 </div>
		            	 <div class="form-group">
	                        <label>Publication Status : </label>
							<select class="form-control" name="publicationStatus">
								<option value="0">Unpublish</option>
								<option value="1">Publish</option>
							</select>	
						</div>

		            	 <div><button type="submit" class="btn btn-success" >Submit</button></div>
	            		
            	</form>


            	</div>
            
            </div>
           
        </div>
        <!-- /#page-wrapper -->