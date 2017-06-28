<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>注册</title>

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
    <a href="reg_tea.php" class="btn btn-default tea_reg_btn btn-block text-center" role="button">老师注册点击这里>></a>
    <form class="form-horizontal" role="form" id="commentForm" action="reg_stu_sub.php" method="post">
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
        <input type="password" class="form-control" id="password2"  name="password2" placeholder="请再次输入您的密码">
        </div>
      </div>
      <button type="submit" class="btn btn-success btn-block btn-lg btn_reg ">注册</button>
    </form>
  </div>
  
    <script src="../../js/jquery-1.11.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
    <script src="../../js/my_validate.js"></script>
  </body>
</html>