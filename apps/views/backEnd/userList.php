        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           

                           
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                    foreach ($users as $user) {
                                    
                                  ?>  
                                    <tr class="">
                                        <td><?php echo $user['email']?></td>
                                        <td><?php echo $user['username']?></td>
                                        <td>
                                        	<?php
                                        	 if ($user['role']==1) {
                                        	  	echo "Administator";
                                        	  } elseif($user['role']==2){
                                        	  	echo "Contibutor";
                                        	  }elseif ($user['role']==3) {
                                        	  	echo "Subscriber";
                                        	  }else{

                                        	  }
                                        	   $user['role']
                                        	 ?>
                                        		
                                        	
                                        </td>
                                        <td class="center">

                                            <a href="<?php echo BASE_URL?>UserController/userDelete/<?php echo $user['id']?>" class="btn btn-danger" onclick="confirm('Are you sure delete this Item')">Delete</a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                    ?>

                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
          
           
           
        </div>
        <!-- /#page-wrapper -->
