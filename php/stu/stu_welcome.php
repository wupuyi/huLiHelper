<?php 
include "../ver_stu_login.php";
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>欢迎使用学生点点</title>

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
        margin-top: 50px;
      }
      .hello-div{
        height: 300px;
        background-color: #4ebc75;
        margin-bottom: 30px;
        padding-top: 30px;
      }
      .hello-div h2{
        color: #fff;
      }

      .hello-div p{
        color: #fff;
        margin: 30px 30px;
        font-size: 15px;
      }
      .hello-div img{
        width: 100px;
        height: 100px;
        margin-bottom: 10px;
      }
      #summary-container .col-md-4{
        text-align: center;
      }

      .chose-border{
        width: 258px;
        height: 280px;
        padding: 3px;
        border: 1px solid #ccc;
        margin: 0 auto 30px auto;
      }
      .chose-border p{
        padding: 0 12px;
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
                <li><a href="stu_score.php">成绩查询</a></li>
                <li><a href="stu_graduation.php">毕业资格审查</a></li>
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
               <li><a href="../manage/reg_stu.php">注册</a></li>
                <li><a href="../manage/logout.php">退出登陆</a></li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <!-- 主要内容 -->
    <div class="body-div">
        <div class="hello-div  text-center">
          <img src="../../image/student-helloicon.gif" alt="欢迎页面icon">
          <h2>阳光总在风雨后！</h2>
          <p>Hi，又是努力奋斗的一天。小助手很高兴能帮助您，您想要知道点什么？</p>
        </div> 
        <div class="container">
          <div class="row" id="summary-container">
            <div class="col-md-6">
              <div class="chose-border">
                <a href="stu_score.php"><img src="../../image/cxcj.png" alt="查询成绩icon"></a>
                <br><br>
                <a class="h3" href="stu_score.php" >成绩查询</a>
                <br><br>
                <p>在这里，您可以查看您本学期成绩，以及已修课程成绩！</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="chose-border">
                <a href="stu_graduation.php"><img src="../../image/byzg.png" alt="毕业审查icon"></a>
                <br><br>
                <a href="stu_graduation.php" class="h3">毕业审查</a>
                <br><br>
                <p>在这里，您可以查看您当前成绩是否符合毕业要求，根据这些数据您可以更加清楚您的定位与努力的方向。</p>
              </div>
            </div>
          </div>  
        </div>

    </div>
  
    <script src="../../js/jquery-1.11.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
  </body>
</html>