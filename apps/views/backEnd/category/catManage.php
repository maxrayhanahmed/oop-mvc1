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
                                        <th>Category</th>
                                        <th>Title</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                    foreach ($categories as $category) {
                                    
                                  ?>  
                                    <tr class="odd gradeX">
                                        <td><?php echo $category['category']?></td>
                                        <td><?php echo substr($category['title'], 0,20) ?></td>
                                         <?php
                                        if (Session::get('role')==1 or Session::get('role')==2) {
                                        
                                        ?>
                                        <td class="center">
                                            <a href="<?php echo BASE_URL?>Category/editCatById/<?php echo $category['id']?>" class="btn btn-info">Edit</a>
                                            <a href="<?php echo BASE_URL?>Category/deleteCatagory/<?php echo $category['id']?>" class="btn btn-danger">Delete</a>
                                        </td>
                                        <?php
                                    }else{ echo "<td> No Permition</td>";}
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
