<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>湖理小助手后台管理系统</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    	.breadcrumb{
    		line-height: 23px;
    	}
    	table, th, td{
		border: 1px solid #ccc;
		}
		table{
			width: 100%;
		}
		th{
			height: 39px;
			padding-left: 5px;
			width: 200px;
      font-size: 15px;
		}
		td{
			padding-left:5px;
		}
		.btn{
			margin: 5px;
		}
		.error{
			color: red;
      font-weight: normal;
		}
    </style>
  </head>
  <body >
	<div>
		<ol class="breadcrumb">
		  <li><a href="main.php">首页</a></li>
		  <li class="active">添加账号</li>
		</ol>
	</div>
	<div>
		<h3>添加学生账号</h3>
		<form id="commentForm" method="post" action="stu_username_submit.php">
			<table>
				<tr>
					<th>用户名</th>
					<td><input type="text" name="username" id="username"><span class="error" id="user_error"></span></td>
				</tr>
				<tr>
					<th>请输入密码</th>
					<td><input type="password" name="password" id="password"></td>
				</tr>
				<tr>
					<th>请再次输入密码</th>
					<td><input type="password" name="password2" id="password2"></td>
				</tr>
				<tr>
					<th>请输入要绑定的学号</th>
					<td><input type="text" name="stu_id" id="stu_id"></td>
				</tr>
				<tr align="right">
					<td colspan="2">
          <input type="submit" name="提交" class="btn btn-primary" value="添加学生账号" id="submit" >
          </td>
				</tr>
			</table>
		</form>
	</div>


	<script src="../js/jquery-1.11.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
    	//当username失去焦点时，调用函数
    	$("#username").blur(function(){
    		var username=$("#username").val();
    		$.ajax({
    			url:"stu_username_ajax.php",
    			type:"POST",
    			data:{
    				username:username
    			},
    			success:function(result){
    	    		$("#user_error").text(result);
    	    	}
    		});
		});
    	//自定义方法，验证输入内容位数字和字母
      	$.validator.addMethod("stringCheck", function(value, element,param) 
        {return this.optional(element) || /^[a-zA-Z0-9]+$/.test(value);         
        },
       "只能包括英文字母、数字");    
   		 //学号验证
        $.validator.addMethod("idCheck", function(value, element,param) 
        {         
          var length = value.length;     
          var id = /^(([1])+\d{10})$/;     
          return this.optional(element) || (length == 11 && id.test(value));         
        }, "请输入正确的学号");

     	// 表单验证
      	var r=$("#commentForm").validate({
          rules:{
            username:{
              required:true,
              minlength: 6,
              maxlength:18,
              stringCheck:true
            },
            password:{
              required:true,
              minlength:6,
              maxlength:18,
              stringCheck:true
            },
            password2:{
              equalTo: '#password'
            },
            stu_id:{
              required:true,
              minlength:11,
              maxlength:11,
              idCheck:true,
            }
            },//rules
          messages: {
            username:{
              required:"",
              minlength:"最少6~18位字母或数字的组合",
              maxlength:"最少6~18位字母或数字的组合",
              stringCheck:"只能输入英文字母和数字"
            },
            password:{
              required:"密码不能为空",
              minlength:"最少6~18位字母或数字的组合",
              maxlength:"最少6~18位字母或数字的组合",
              stringCheck:"只能输入英文字母和数字"
            },
            password2:{
              equalTo:"两次输入密码不一致，请重新输入"
            },
            stu_id:{
              required:"学号不能为空",
              minlength:"请输入11位学号",
              maxlength:"请输入11位学号",
              idCheck:"请输入正确的学号",
            }
           }//messages
        });
    });
    </script>
  </body>
</html>
