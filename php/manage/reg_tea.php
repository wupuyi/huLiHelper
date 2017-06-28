<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>老师注册</title>

    <link href="../../css/bootstrap.css" rel="stylesheet">


    <!--[if lt IE 9]>
      <script src="../js/html5shiv.min.js"></script>
      <script src="../js/respond.min.js"></script>
    <![endif]-->
    <style>
      .brand-word{
        margin:0 100px 0 10px; 

      }
      body{
        padding-top: 70px;
      }
      .body-div{
        padding:0 10px ;
      }
 
      .input-group{
        margin-bottom: 20px;
      }
      .tea_reg_btn{
        margin-bottom: 20px;
      }
      .btn_reg{
        margin-top: 50px;
      }
      label{
        font-size: 16px;
      }
      .error{
        font-weight: normal;
        color: red;
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
                <li><a href="../tea/tea_stuinfo_welcome.php">学生信息管理</a></li>
                <li><a href="../tea/tea_school_welcome.php">学籍信息管理</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">个人中心 <span class="caret"></span></a>
              <ul class="dropdown-menu">
                  <li><a href="reg_stu.php">注册</a></li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <!-- 主要内容 -->
  <div class="body-div">
    <form class="form-horizontal" role="form" id="commentForm" method="post" action="reg_tea_sub.php">
      <div class="form-group">
        <label for="username" class="col-sm-2 control-label text-primary">用户名</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="username" name="username" placeholder="请输入您的用户名">
        </div>
      </div>
      <div class="form-group">
        <label for="password" class="col-sm-2 control-label text-primary">密&nbsp&nbsp码</label>
        <div class="col-sm-10">
        <input type="password" class="form-control" id="password" name="password" placeholder="请输入您的密码">
        </div>
      </div>
      <div class="form-group">
        <label for="password2" class="col-sm-2 control-label text-primary">确认密码</label>
        <div class="col-sm-10">
        <input type="password" class="form-control" id="password2" name="password2" placeholder="请再次输入您的密码">
        </div>
      </div>
      <div class="form-group">
        <label for="tel" class="col-sm-2 control-label text-primary">手机号</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="tel" name="tel" placeholder="请输入您的手机号码">
        </div>
      </div>
      <div class="form-group">
        <label for="name" class="col-sm-2 control-label text-primary">姓名</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="name" name="name" placeholder="请输入您的姓名">
        </div>
      </div>
      <button type="submit" class="btn btn-success btn-block btn-lg btn_reg">注册</button>
    </form>
  </div>
  
    <script src="../../js/jquery-1.11.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      //自定义方法，验证输入内容位数字和字母
        $.validator.addMethod("stringCheck", function(value, element,param) 
        {return this.optional(element) || /^[a-zA-Z0-9]+$/.test(value);         
        },
       "只能包括英文字母、数字");    
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
            tel:{
              required:true,
              minlength:11,
              maxlength:11,
              phoneCheck:true
            },
            name:{
              required:true,
              maxlength:10
            }
            },//rules
          messages: {
            username:{
              required:"用户名不能为空",
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
            tel:{
              required:"手机号码不能为空",
              minlength:"请输入11位手机号码",
              maxlength:"请输入11位手机号码",
              phoneCheck:"请正确输入您的手机号码"
            },
            name:{
              required:"教师姓名不能为空",
              maxlength:"姓名过长"
            }
           }//messages
        });
      });
    </script>
  </body>
</html>