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
    <title>学籍信息速查</title>

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
      .photo-border img{
        padding: 5px;
        border: 1px solid #ccc;
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
          <h3 class="panel-title">学籍信息查找</h3>
        </div>
        <div class="panel-body">

          <div class="input-group">
            <input type="text" class="form-control" name="search_text" id="search_text" placeholder="请输入学生学号……">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button" id="search">搜&nbsp&nbsp索</button>
            </span>
          </div><!-- /input-group -->

        </div>
      </div>
      <div id="search_result" class="table-responsive"></div>
    </div> <!--  panel panel-info -->
    <script src="../../js/jquery-1.11.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>   
    <script type="text/javascript">
      // function search(){
      //   var name=$("#name").val();
      //   window.location="tea_stuinfo_exact.php?name="+name;
      // }
      function showsite(str){
        $.ajax({
          url:"tea_school_search_ajax.php",
          type:"POST",
          data:{
            stu_id:str
          },
          success:function(result){
              $("#search_result").html(result);
          }
      });
      }
      function search(){
        var stu_id=$("#search_text").val();
        showsite(stu_id);
      }
      $('#search').click(function(){
        search();
      });
      //按下回车键是触发搜索键点击事件
      $("body").keydown(function() {
             if (event.keyCode == "13") {//keyCode=13是回车键
                 $('#search').click();
             }
      });
      function edit_school(school_id){
        window.location="tea_school_edit.php?id="+school_id;
      }
    </script>
  </body>
</html>