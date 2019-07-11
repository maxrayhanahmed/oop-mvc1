
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>

                    <h3>Welcome to <?php echo Session::get('uname');?></h3>


                   <p class="pagla">this is test</p>
                    <p>this is test</p>
                    <p>this is test</p>
                    <p>this is test</p>
                    <p>this is test</p>
                    <button id="test">Click</button>
                    <script type="text/javascript">
                            $(document).ready(function(){
                                $("#test").click(function(){
                                    $(".pagla").toggle();
                                });
                            });


                        </script>

                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           
        </div>
        <!-- /#page-wrapper -->
       