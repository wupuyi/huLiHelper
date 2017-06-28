<?php 
//验证老师是否登陆
include "../ver_tea_login.php";
include "../ver_tea_power.php";
?> 
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>学生信息速查</title>

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
        margin-top:70px;
        text-align: center;
      }

       .col-md-4 select{
        margin:20px 0;
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
      <div class="panel panel-success">
        <div class="panel-heading">
          <h3 class="panel-title">按姓名精准查找</h3>
        </div>
        <div class="panel-body">
          <div class="input-group">
            <input type="text" class="form-control" name="name" id="name" placeholder="请输入学生姓名……">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button" onclick="search()">搜&nbsp&nbsp索</button>
            </span>
          </div><!-- /input-group -->
        </div>
      </div>
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title">模糊查找</h3>
        </div>
        <div class="panel-body">
          <form action="tea_stuinof_fuzzy_sub.php" method="post">
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                    <select class="form-control" id="grade" name="grade">
                      <option value="2013级">2013级</option>
                      <option value="2014级">2014级</option>
                      <option value="2015级">2015级</option>
                      <option value="2016级">2016级</option>
                    </select>
                </div>
                <div class="col-md-4">
                     <select class="form-control" id="department" name="department">
                      <option value="计算机学院">计算机学院</option>
                    </select>
                </div>
                <!-- <div class="col-md-3">
                    <select class="form-control" id="major" name="major">
                      <option value="计算机科学与技术">计算机科学与技术</option>
                      <option value="软件工程">软件工程</option>
                      <option value="网络工程">网络工程</option>
                    </select>
                </div> -->
                <div class="col-md-4">
                   <select class="form-control" id="class" name="class">
                      <option value="计13-1BJ">计13-1BJ</option>
                      <option value="计13-2BJ">计13-2BJ</option>
                      <option value="计13-3BJ">计13-3BJ</option>
                      <option value="计13-4BJ">计13-4BJ</option>
                      <option value="软件13-1BF">软件13-1BF</option>
                      <option value="网络13-1BF">网络13-1BF</option>
                      <option value="网络13-2BF">网络13-2BF</option>
                    </select>
                </div>
              </div>
            </div><!-- container -->
            <input type="submit" value="开始查找" class="btn btn-default btn-block">
          </form>
        </div>
      </div>
    </div> <!--  panel panel-info -->
    <script src="../../js/jquery-1.11.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <!-- 动态选项js -->
    <script src="../../js/tea_search_fuzzy.js"></script>
    
    <script type="text/javascript">
      function search(){
        var name=$("#name").val();
        window.location="tea_stuinfo_exact.php?name="+name;
      }
    </script>
  </body>
</html>