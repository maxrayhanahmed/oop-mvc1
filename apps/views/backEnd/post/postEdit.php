
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Update Post</h1>
                    <h3></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            	<div class="col-md-8">

            		<?php
            		foreach ($post as $value) {
            			# code...
            		
            		?>
            		<form name="postEdit" action="<?php echo BASE_URL?>adminBlogController/postUpdate" method="post" enctype="multipart/viewport">
	            		 <div class="form-group">
	                        <label>Title : </label>
	                        <input name="title" value="<?php echo $value['title']?>" class="form-control" placeholder="Enter Title" required="1">
	                        <input type="hidden" name="editId" value="<?php echo $value['id']?>" class="form-control" required="1">
	                    </div>
 						<div class="form-group">
	                        <label>Catergory : </label>
							<select class="form-control" name="catId">
								<option value="">Select</option>
								<?php
									foreach ($categories as $category) {
								?>
								<option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>

								<?php
									}
								?>
								
							</select>	
						</div>
 						<div class="form-group">
	                        <label>Date : </label>
	                        <input type="" name="date" value="<?php echo $value['date']?>" class="form-control" placeholder="Enter Date">
	                    </div>
 						<div class="form-group">
	                        <label>Details : </label>
		                    <textarea class="form-control" name="details">
		                    	<?php echo $value['details']?>
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

            	<?php
            }
            	?>

<script>
    document.forms['postEdit'].elements['publicationStatus'].<?php echo $value['publicationStatus']?>

</script>

<script>
    document.forms['postEdit'].elements['catId'].<?php echo $value['catId']?>

</script>


            	</div>
            
            </div>
           
        </div>
        <!-- /#page-wrapper -->