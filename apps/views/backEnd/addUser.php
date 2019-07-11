
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add User</h1>
                    <h3></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-8">
                   <form action="<?php echo BASE_URL;?>UserController/userInsert" method="post" enctype="multipart/viewport">
                        
                            <fieldset>
                                <label>Email : </label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus required="1">
                                </div>

                                <label>User Name : </label>
                                 <div class="form-group">
                                    <input class="form-control" placeholder="User Name" name="username" type="text" autofocus required="1">
                                </div>

                                 <label>User Role : </label>
                                <div class="form-group">
                                    <select class="form-control" name="role" required="1">
                                        
                                        <option value="">Select Role</option>
                                        <option value="1">Administator</option>
                                        <option value="2">Contibutore</option>
                                        <option value="3">Subscriber</option>
                                    </select>
                                </div>

                                 <label>Password : </label>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="" required="1">
                                </div>
                               
                                

                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" name="submit" class="btn btn-lg btn-success btn-block">Add User</button>
                            </fieldset>
                        </form>

                </div>
            
            </div>
           
        </div>
        <!-- /#page-wrapper -->