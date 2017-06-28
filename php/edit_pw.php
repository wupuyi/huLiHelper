<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>修改密码</title>


    <link href="../css/bootstrap.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  	<style>
  	.input-group-addon{
  		background-color: #2b5190;
  		border-color: #2b5190;
  	}
  	.glyphicon{
  		color: #fff;
  	}
  	.input-group{
  		margin-top: 20px;
  	}
  	.btn{
  		margin-top: 20px;
  	}
  	.login_body{
  		width: 350px;
  		height: 160px;
  		margin: auto;
  	}
	.content_body{
		margin-top: 50px;
	}
	.error{
		color: red;
		font-weight: normal;
	}



  	</style>
  </head>
  <body>

  	<div class="content_body">
  		<form class="login_body"  method="post" id="commentForm" action="edit_pw_sub.php">
	  		<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">
			  <span class="glyphicon glyphicon-lock"></span>
			  </span>
			  <input type="password" class="form-control" placeholder="请输入密码" aria-describedby="basic-addon1" id="password" name="password">
			</div>
			<div class="input-group">
			  <span class="input-group-addon " id="basic-addon2">
			  <span class="glyphicon glyphicon-exclamation-sign"></span>
			  </span>
			  <input type="password" class="form-control" placeholder="请再次输入密码" aria-describedby="basic-addon2" id="password2" name="password2"> 
			</div>
			<input type="submit" name="提交" class="btn btn-block btn-primary" value="确认修改" id="submit" >
		</form>
  	</div>






    <script src="../js/jquery-1.11.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
    <script type="text/javascript">
    	$(document).ready(function(){

    	});
    	//自定义方法，验证输入内容位数字和字母
      	$.validator.addMethod("stringCheck", function(value, element,param) 
        {return this.optional(element) || /^[a-zA-Z0-9]+$/.test(value);         
        },
       "只能包括英文字母、数字"); 
    	var r=$("#commentForm").validate({
          rules:{
            password:{
              required:true,
              minlength:6,
              maxlength:18,
              stringCheck:true
            },
            password2:{
              equalTo: '#password'
            }
            },//rules
          messages: {
            password:{
              required:"密码不能为空",
              minlength:"最少6~18位字母或数字的组合",
              maxlength:"最少6~18位字母或数字的组合",
              stringCheck:"只能输入英文字母和数字"
            },
            password2:{
              equalTo:"两次输入密码不一致，请重新输入"
            }
           }//messages
        });
    </script>
  </body>
</html>
</html>