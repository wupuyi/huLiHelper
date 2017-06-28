<?php
//获取账号id 
$id=$_GET['id'];
?>

<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>学号拉手</title>

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
      .error{
        font-weight: normal;
        color: red;
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
                <li><a href="">成绩查询</a></li>
                <li><a href="">毕业资格审查</a></li>
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
    <div class="page-header">
      <h3 class="text-primary">验证学号进行绑定<small>您将发现更多惊喜</small></h3>
    </div>
    <form class="form-horizontal" role="form" action="bind_stu_sub.php?id=<?php echo $id; ?>" method="post" id="commentForm">
      <div class="form-group">
        <label for="stu_id" class="col-sm-2 control-label text-primary">您的学号</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="stu_id" name="stu_id" placeholder="请输入您的学号">
        </div>
      </div>
      <div class="form-group">
        <label for="card_id" class="col-sm-2 control-label text-primary">身份证号</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="card_id" name="card_id" placeholder="请输入您的身份证号码">
        </div>
      </div>
      <button type="submit" class="btn btn-success btn-block btn-lg btn_reg ">绑定</button>
    </form>
  </div>
  
    <script src="../../js/jquery-1.11.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
    <script src="../../js/my_validate.js"></script>
  </body>
</html>