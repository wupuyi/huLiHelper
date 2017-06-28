<?php 
include "../ver_stu_login.php";
include "../connect_db.php";
$stu_id=$_COOKIE['stu_id'];
$sql="SELECT *  FROM stu_score WHERE stu_id='$stu_id'";
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
    <title>已修成绩</title>

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
      .table caption{
        text-align: center;
        font-size: 20px;
        margin: 10px 0;
        color: #2b5190;
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
    <div class="body-div table-responsive">
      <table class="table table-bordered">
        <caption>已修课程成绩</caption>

        <tr>
          <th>序号</th><th>课程编号</th><th>课程名称</th><th>分数</th><th>开课学院</th><th>开课专业</th><th>学分</th><th>总学时</th><th>课程属性</th><th>课程类型</th>
        </tr>
        <?php 
            //验证查询结果是否存在
            if (empty($rows)) {          
                  echo '<script type="text/javascript">alert("暂无成绩！");history.go(-1);</script>';
            }else{
              foreach ($rows as $score_re) {
                 $c_id=$score_re['c_id'];
                 $sql2="SELECT * FROM stu_course WHERE c_id='$c_id'";
                 $result2=mysqli_query($conn,$sql2);
                 $row2=mysqli_fetch_array($result2,MYSQLI_ASSOC);
                 echo '<tr>
                        <td>'.$score_re['id'].'</td>
                        <td>'.$score_re['c_id'].'</td>
                        <td>'.$row2['c_name'].'</td>
                        <td>'.$score_re['score'].'</td>
                        <td>'.$row2['c_dep'].'</td>
                        <td>'.$row2['c_major'].'</td>
                        <td>'.$row2['c_grade'].'</td>
                        <td>'.$row2['c_time'].'</td>
                        <td>'.$row2['c_attr'].'</td>
                        <td>'.$row2['c_type'].'</td>
                      </tr>';
            }
          }
          ?>
      </table>
    </div>
    <?php 
      mysqli_close($conn);
      mysqli_free_result($result);
      mysqli_free_result($result2);
     ?>
    <script src="../../js/jquery-1.11.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
  </body>
</html>