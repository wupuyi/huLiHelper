<?php 

  include "connect_db.php";
  $id=$_GET['id'];
  $sql="SELECT id,stu_name,stu_id FROM stu_user WHERE id='{$id}'";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
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
      /*导航高度*/
    	.breadcrumb{
    		line-height: 23px;
    	}
    	table, th, td{
  		border: 1px solid #ccc;
  		}
    	table{
  			width: 100%;
  		}

  		th,td{
  			height: 39px;
  			padding-left: 5px;
        font-size: 15px;
  		}
      th{
        width: 200px;
      }
      .search{
        width: 50%;
        margin:20px 0;
      }
      thead{
        background-color: #eee;
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
		  <li class="active">修改学生信息</li>
		</ol>
	</div>
	<div>
		<h3>修改学生密码</h3>
    <form id="commentForm" method="post" action='stu_manage_edit_subp.php?id=<?php echo $id ?>'>
      <table>
        <tr>
          <th>请输入新密码</th>
          <td><input type="password" name="password" id="password"></td>
        </tr>
        <tr>
          <th>请再次输入</th>
          <td><input type="password" name="password2"></td>
        </tr>
        <tr align="right">
          <td colspan="2">
            <input type="submit" name="提交" class="btn btn-primary" value="确认修改" id="submit" >
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
    });
    </script>
  </body>
</html>
