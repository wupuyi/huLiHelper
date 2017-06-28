<?php
  //验证是否登陆
 include "php/ver_login.php";
?>

<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>湖理小助手后台管理系统</title>


    <link href="css/bootstrap.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  	<style>
      .navbar{
        margin: 0;
      }
      .navbar p{
        font-size: 20px;
        line-height: 50px;
        padding-left: 10px;
        margin:0;
        width: 300px;
        display: inline-block;
      }
      .navbar .btn{
        margin:10px 10px;
      }
      .main{
        margin-top: 70px;
      }
      .breadcrumb{
        margin-top: 20px;
      }
      #mysidebar h3{
        font-size: 17px;
        padding-bottom: 10px;
        border-bottom: 1px solid #ccc;
      }

  	</style>
  </head>
  <body>
   <!-- 导航 -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <a class="navbar-brand" href="#"><img  alt="Brand" src="image/huli-icon.gif" width="35px" height="35px"></a>
      <p>湖理小助手后台管理系统</p>

      <button id="logout" class="btn btn-default navbar-right">退出登陆</button>
      <button id="change_pw" class="btn btn-default navbar-right">修改密码</button>
    </nav>
    <!-- 内容主体 -->
    <div class="container-fluid main">
      <div class="row">
        <!-- 左边栏 -->
        <div class="col-xs-2" id="mysidebar">
            <div class="panel-group" id="accordion">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                      <span class="glyphicon glyphicon-user" aria-hidden="true">  学生账号管理
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse">
                  <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href='php/stu_add.php' target="mainFrame">添加账号</a></li>
                        <li><a href='php/stu_manage.php' target="mainFrame">账号管理</a></li>
                    </ul> 
                  </div>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                      <span class="glyphicon glyphicon-briefcase" aria-hidden="true">  老师账号管理
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                  <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href='php/tea_add.php' target="mainFrame">添加账号</a></li>
                        <li><a href='php/tea_manage.php' target="mainFrame">账号管理</a></li>
                        <li><a href='php/tea_reg_confirm.php' target="mainFrame">老师注册审批</a></li>
                    </ul> 
                  </div>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                      <span class="glyphicon glyphicon-education" aria-hidden="true">  学生信息管理
                    </a>
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                  <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href='php/stu_info/add_info.php' target="mainFrame">添加学生信息</a></li>
                        <li><a href='php/stu_info/manage_info.php' target="mainFrame">管理学生信息</a></li>
                    </ul>  
                  </div>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                      <span class="glyphicon glyphicon-folder-open" aria-hidden="true">  学籍信息管理
                    </a>
                  </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse">
                  <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href='php/school_info/add_info.php' target="mainFrame">添加学籍信息</a></li>
                        <li><a href='php/school_info/manage_info.php' target="mainFrame">管理学籍信息</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                      <span class="glyphicon glyphicon-file" aria-hidden="true">  成绩管理
                    </a>
                  </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse">
                  <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href='php/stu_course/add_course.php' target="mainFrame" >添加课程</a></li>
                        <li><a href='php/stu_course/manage_course.php' target="mainFrame">课程管理</a></li>
                        <li><a href='php/stu_course/manage_score.php' target="mainFrame">成绩管理</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
        </div>
       

        <!-- 主内容 -->
        <div class="col-xs-10">
          <!-- 嵌套网页开始 -->   
          <iframe src="php/main.php"  frameborder="0" name="mainFrame" width="100%" height="550"></iframe>
          <!-- 嵌套网页结束 -->  
        </div>
      </div>
    </div> 

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){


      //退出确认
      $("#logout").click(function(){
        var r=confirm("您要退出登陆吗？");
        if (r==true) {
          // var r2="true";
          // $.post("php/logout.php",r2);
          location.assign("php/logout.php");
        }
      });
      
      //修改密码
      $("#change_pw").click(function(){
          var r=confirm("是否要修改密码？");
          if (r==true) {
            location.assign("php/edit_pw.php")
          }
      });
    });
    </script>
  </body>
</html>