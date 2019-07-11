
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Category Add</h1>
                    <?php
                    if(!empty($_GET['msg'])){
                       $msg= unserialize(urlencode($_GET['msg']));

                       echo"<h3>".$msg."</h3>";
                    }
                    ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            	<div class="col-md-8">
            		<form action="<?php echo BASE_URL?>Category/insertCatagory" method="post" enctype="multipart/viewport">
	            		 <div class="form-group">
	                        <label>Category Name : </label>
	                        <input name="category" class="form-control" placeholder="Category Name" required="1">
	                    </div>
 						 <div class="form-group">
	                        <label>Category Title : </label>
	                        <input name="title" class="form-control" placeholder="Category Title" required="1">
	                    </div>
 						
 						
 						

		            	 <div><button type="submit" class="btn btn-success" >Submit</button></div>
	            		
            	</form>


            	</div>
            
            </div>
           
        </div>
        <!-- /#page-wrapper -->