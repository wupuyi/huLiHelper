<?php 
  include "../connect_db.php";
  $stu_id=$_GET['id'];
  $sql="SELECT * FROM stu_info WHERE stu_id='{$stu_id}'";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>修改学生信息</title>

    <link href="../../css/bootstrap.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="../js/html5shiv.min.js"></script>
      <script src="../js/espond.min.js"></script>
    <![endif]-->
    <style>
      .brand-word{
        margin:0 100px 0 10px; 
      }
      .body-div{
        margin-top:50px;
      }
      th{
        font-size: 16px;
        text-align: right;
        color: #337AB7;
      }
      input{
        width: 100%;
      }
      .table h3{
        font-size: 16px;
      }
    </style>
  </head>
  <body>
 
  <!-- 导航条 -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- 导航头与自适应是的小图标 -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img  alt="Brand" src="../../image/huli-icon.gif" width="35px" height="35px"></a>
          <a class="navbar-brand brand-word" href="#">湖理贴心小助手</a>  
        </div>

        <!-- 导航栏信息 -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li>
              <a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">学生<span class="caret"></a>
              <ul class="dropdown-menu">
                <li><a href="../stu/stu_score.php">成绩查询</a></li>
                <li><a href="../stu/stu_graduation.php">毕业资格审查</a></li>
              </ul>
            </li>
            <li>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">老师<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="tea_stuinfo_welcome.php">学生信息管理</a></li>
                <li><a href="tea_school_welcome.php">学籍信息管理</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">个人中心 <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="../manage/reg_stu.php">注册</a></li>
                <li><a href="../manage/logout.php">退出登陆</a></li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <!-- 主要内容 -->
    <div class="body-div">  
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <form id="commentForm" method="post" action='tea_stuinfo_edit_sub.php?id=<?php echo $stu_id ?>'>
		      <table class="table">
            <tr>
              <td ></td>
            </tr>
		        <tr>
		          <th>学号</th>
		          <td><label><?php echo $row['stu_id']; ?></label></td>
		        </tr>
		        <tr>
		          <th>姓名</th>
		          <td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td>
		        </tr>
		        <tr>
		          <th>请输入电话号码</th>
		          <td><input type="text" name="tel" id="tel" value="<?php echo $row['stu_tel']; ?>"></td>
		        </tr>
		        <tr>
		          <th>请输入QQ号码</th>
		          <td><input type="text" name="qq" id="qq" value="<?php echo $row['stu_qq']; ?>"></td>
		        </tr>
		        <tr>
		          <th>家长姓名</th>
		          <td><input type="text" name="parent" id="parent" value="<?php echo $row['parent'] ?>"></td>
		        </tr>
		        <tr>
		          <th>家长电话</th>
		          <td>
		          <input type="text" name="parent_tel" id="parent_tel" value="<?php echo $row['parent_tel']; ?>">
		          </td>
		        </tr>
		        <tr>
		          <th>备注信息</th>
		          <td><textarea name="other" rows="6" cols="25" id="other" ><?php echo $row['other']; ?></textarea></td>
		        </tr>
		        <tr align="right">
		          <td colspan="2">
		          <input type="submit" name="提交" class="btn btn-primary" value="确认修改" id="submit" >
		          </td>
		        </tr>
		      </table>
		    </form>
          </div>          
        </div>
      </div>      
    </div> 
    <?php 
      mysqli_close($conn);
      mysqli_free_result($result);
     ?>
    <script src="../../js/jquery-1.11.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
       // 手机号码验证         
      $.validator.addMethod("phoneCheck", function(value, element,param) 
        {         
          var length = value.length;     
          var mobile = /^(([1])+\d{10})$/;     
          return this.optional(element) || (length == 11 && mobile.test(value));         
        }, "请输入正确的手机号码");
      // 表单验证
        var r=$("#commentForm").validate({
          rules:{
            name:{
              required:true,
            },
            tel:{
              minlength:11,
              maxlength:11,
              phoneCheck:true,
            },
            parent_tel:{
              minlength:11,
              maxlength:11,
              phoneCheck:true,
            }
            },//rules
          messages: {
            name:{
              required:"姓名不能为空",
            },
            tel:{
              minlength:"请输入11位手机号",
              maxlength:"请输入11位手机号",
              phoneCheck:"请输入最正确的手机号码",
            },
            parent_tel:{
              minlength:"请输入11位手机号",
              maxlength:"请输入11位手机号",
              phoneCheck:"请输入最正确的手机号码"
            }
           }//messages
        });
    });
    </script>
  </body>
</html>