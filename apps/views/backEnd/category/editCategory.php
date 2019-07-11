
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Category Update</h1>
                    <h3></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            	<div class="col-md-8">
            		<?php 
            		foreach ($category as $cat) {
            			# code...
            		
            		?>
            		<form action="<?php echo BASE_URL?>Category/updateCatagory" method="post" enctype="multipart/viewport">
	            		 <div class="form-group">
	                        <label>Category Name : </label>
	                        <input name="category" value="<?php echo $cat['category']?>" class="form-control" placeholder="Enter Title" required="1">
	                        <input name="editId" type="hidden" value="<?php echo $cat['id']?>" class="form-control" placeholder="Enter Title" required="1">
	                    </div>
 						 <div class="form-group">
	                        <label>Category Title : </label>
	                        <input name="title" value="<?php echo $cat['title']?>" class="form-control" placeholder="Enter Title" required="1">
	                    </div>
 						
 						
 						

		            	 <div><button type="submit" class="btn btn-success" >Submit</button></div>
	            		
            	</form>
				<?php
				}
				?>

            	</div>
            
            </div>
           
        </div>
        <!-- /#page-wrapper -->