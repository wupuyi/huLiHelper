<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>登陆</title>

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
      .form-are{
        width:  300px;
        height: 300px;
        margin-left:auto;
        margin-right:auto;
      
      }
      .submit-are{
        margin-left: 15px;
        margin-right: 15px;
      }
      label{
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
  <div class="form-are">
   <h3 class="text-center">欢迎使用湖理小助手</h3>
   <br>
   <br>
    <form class="form-horizontal" role="form" action="login_sub.php" method="post">
      <div class="form-group">
        <label class="control-label col-sm-4 text-primary" for="username">用户名：</label>
        <div class="col-sm-8">
           <input type="text" class="form-control" name="username" id="username" placeholder="请输入用户名">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4 text-primary" for="password">密&nbsp&nbsp&nbsp码：</label>
        <div class="col-sm-8">
            <input type="password" class="form-control" name="password" id="password" placeholder="请输入密码">
        </div>
                  

      </div>
        <br>
        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block btn-lg">登陆</button>
        </div>
        <div class="form-group">
          <a type="button" class="btn btn-success btn-block btn-lg" href="reg_stu.php">注册</a>
        </div>
      </div>
    </form>
  </div>
  
    <script src="../../js/jquery-1.11.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
  </body>
</html>