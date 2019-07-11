

$(document).ready(function(){

	$("#autosubmit").click(function(){
		print var postId 		=	$("#postId").val();
		var username 	=	$("#username").val();
		var email 		=	$("#email").val();
		var comment		=	$("#comment").val();
		/*
		$.ajax({
			url:"model/check.php",
			method:"POST",
			data:{postId:postId,username:username,email:email,comment:comment},
			dataType:"text";
			success:function(data){

			}
			*/

		});
	
	});

         

