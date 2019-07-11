



 $(document).ready(function(){
                $("#comment_form").on('submit',function(event){
                    event.preventDefault();
                    var postId    =   $("#postId").val();
                    var username    =   $("#username").val();
                    var email    =   $("#email").val();
                    var comment    =   $("#comment").val();

                    
                        $.ajax({
                        url:"apps/model/check.php",
                        method:"POST",
                        data:{postId:postId,username:username,email:email,comment:comment},
                        data_type:"text",

                        success:function(data){
                        	$("#postId").val("");
	                        $("#username").val("");
	                        $("#email").val("");
	                        $("#comment").val("");
	                        $("#success").html("data insert successfully");

                        },

                    });
				return false;
                    
                });



            setInterval(function(){
                $("#test").load("apps/model/CommentFetch.php").fadeIn("slow");
           }, 1000);


            });