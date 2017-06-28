<?php 
  include "../connect_db.php";
  $name=$_GET['name'];
  $sql="SELECT stu_id,photo  FROM stu_status WHERE name='$name'";
  $result=mysqli_query($conn,$sql);
  while ($row=mysqli_fetch_array($result,MYSQL_ASSOC)) {
    $rows[]=$row;
  }

?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>查询结果</title>

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
       .col-md-12 h3{
        font-size: 12px;
        padding-bottom: 10px;
        border-bottom: 1px solid #ccc;
       }
       .col-md-12 .label{
        font-size: 12px;
       }
       #search_result .col-md-4{
        text-align:left;
        margin-top: 20px;
       }
       .search_result_border{
          padding: 5px;
          border: 1px solid #ccc;
          margin: 0 auto;
       }
       .label{
        font-weight: normal;
      }
      .btn{
        margin:0 10px;
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
            <h3><span class="label label-info" style="font-size: 16px;"><?php echo $name; ?></span>查询结果如下：</h3>
          </div>          
        </div>
        <div class="row" id="search_result">
          <div class="col-md-4">
            <?php 
            //验证查询结果是否存在
            if (empty($rows)) {          
                  echo '<script type="text/javascript">alert("暂无成绩！");history.go(-1);</script>';
            }else{
              foreach ($rows as $row2) {
                 $stu_id=$row2['stu_id'];
                 $sql2="SELECT * FROM stu_info WHERE stu_id='$stu_id'";
                 $result2=mysqli_query($conn,$sql2);
                 $row3=mysqli_fetch_array($result2,MYSQLI_ASSOC);
                 echo '<table class="table table-bordered">';
                 echo '<tr>';
                 echo '<td rowspan="6" width="130px" style="vertical-align: middle;"><img src='.$row2['photo'].' width="120px" height="160px"></td>';
                 echo '<td><b class="text-primary">学号：</b></td>';
                 echo '<td>'.$row3['stu_id'].'</td>';
                 echo '</tr>';
                 echo '<tr>';
                 echo '<td><b class="text-primary">姓名：</b></td>';
                 echo '<td>'.$row3['name'].'</td>';
                 echo '</tr>';
                 echo '<tr>';
                 echo '<td><b class="text-primary">手机号码：</b></td>';
                 echo '<td>'.$row3['stu_tel'].'</td>';
                 echo '</tr>';
                 echo '<tr>';
                 echo '<td><b class="text-primary">QQ号码：</b></td>';
                 echo '<td>'.$row3['stu_qq'].'</td>';
                 echo '</tr>';
                 echo '<tr>';
                 echo '<td><b class="text-primary">家长姓名：</b></td>';
                 echo '<td>'.$row3['parent'].'</td>';
                 echo '</tr>';
                 echo '<tr>';
                 echo '<td><b class="text-primary">家长电话：</b></td>';
                 echo '<td>'.$row3['parent_tel'].'</td>';
                 echo '</tr>';
                 echo '<tr>';
                 echo '<td colspan="3"><b class="text-primary">备注：</b>'.$row3['other'].'</td>';
                 echo '</tr>';
                 echo '<tr>';
                 echo '<td colspan="3" align="center">';
                 echo '<a href="tel:'.$row3['stu_tel'].'" class="btn btn-success"><span class="glyphicon glyphicon-earphone"></span>学生</a>';
                 echo '<a href="tel:'.$row3['parent_tel'].'" class="btn btn-info"><span class="glyphicon glyphicon-earphone"></span>家长</a>';
                 echo '<a href="tea_stuinfo_edit.php?id='.$row3['stu_id'].'" class="btn btn-danger">修改信息</a>';
                 echo '</td>';
                 echo '</tr>';
                 echo '</table>';
            }
          }
          mysqli_close($conn);
          mysqli_free_result($result);
          mysqli_free_result($result2);
          ?>

          </div>
        </div>
      </div>      
    </div> 
    <script src="../../js/jquery-1.11.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
  </body>
</html>