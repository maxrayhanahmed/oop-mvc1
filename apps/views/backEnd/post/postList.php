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
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                    foreach ($posts as $post) {
                                    
                                  ?>  
                                    <tr class="">
                                        <td><?php echo $post['title']?></td>
                                        <td><?php echo $post['category']?></td>
                                        <td><?php echo substr($post['details'], 1,50) ?></td>
                                        <td class="center">
                                            <?php
                                            if ($post['publicationStatus']==1) {
                                                echo "Publish";
                                            } else {
                                                echo "Unpublish";
                                            }
                                            
                                            ?>
                                        </td>
                                         <?php
                                        if (Session::get('role')==1) {
                                        
                                        ?>
                                        <td class="center">
                                            <a href="<?php echo BASE_URL?>adminBlogController/postEdit/<?php echo $post['id']?>" class="btn btn-info">Edit</a>
                                            <a href="<?php echo BASE_URL?>adminBlogController/postDelete/<?php echo $post['id']?>" class="btn btn-danger">Delete</a>
                                        </td>
                                        <?php
                                    }else{
                                        echo "<td> No Permition</td>";
                                    }
                                        ?>

                                    
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
