
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo BASE_URL?>adminBlogController"><i class="fa fa-dashboard fa-fw"></i> Dashboard werd  </a>
                        </li>

                        <?php
                        if (Session::get('role')==1) {
                        
                        ?>

                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> User<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo BASE_URL?>UserController/addUser">User Add</a>
                                </li>
                                <li>
                                    <a href="<?php echo BASE_URL?>UserController/userList">User List</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <?php 
                    }else{}
                        ?>

                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Category<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <?php
                                if (Session::get('role')==1 or Session::get('role')==2) {
                                
                                ?>
                                <li>
                                    <a href="<?php echo BASE_URL?>Category/categoryAdd">Category Add</a>
                                </li>
                                <?php
                                }
                                ?>
                                <li>
                                    <a href="<?php echo BASE_URL?>Category/categoryList">Category Manage</a>
                                </li>
                                 <li>
                                    <a href="<?php echo BASE_URL?>Category/categoryListTest">Category Test</a>
                                </li>

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        

                    <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Post<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo BASE_URL?>adminBlogController/addPost">Post Add</a>
                                </li>
                                <li>
                                    <a href="<?php echo BASE_URL?>adminBlogController/postList">Post Manage</a>
                                </li>


                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>



                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
