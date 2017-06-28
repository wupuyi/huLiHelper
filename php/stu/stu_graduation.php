<?php 
include "../ver_stu_login.php";
include "../connect_db.php";
$stu_id=$_COOKIE['stu_id'];
$sql="SELECT *  FROM stu_score WHERE stu_id='$stu_id'";
$result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_array($result,MYSQL_ASSOC)) {
    $rows[]=$row;
}
if (empty($rows)) {          
    echo '<script type="text/javascript">alert("对不起，您暂无成绩");window.location="stu_welcomt.php";</script>';
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
      .table h3{
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
        <caption>必修课程</caption>

        <tr>
          <th>课程编号</th><th>课程名称</th><th>课程属性</th><th>课程类型</th><th>课程学分</th><th>课程分数</th>
        </tr>
        <?php include "stu_gra_compulsory.php"; ?>
        
		<tr><td colspan="6"><h3>选修课程</h3></td></tr>
        <tr>
          <th>课程编号</th><th>课程名称</th><th>课程属性</th><th>课程类型</th><th>课程学分</th><th>课程分数</th>
        </tr>
        <?php include "stu_gra_elective.php"; ?>
      </table>
      <table class="table table-bordered">
			<caption>毕业要求</caption>
			<tr><th colspan="2">课程属性</th><th>毕业要求学分</th><th>已完成学分</th></tr>
			<tr><th colspan="2">必修</th><td>152</td><td><?php echo $compulsory; ?></td></tr>
			<tr>
			<th rowspan="3" style="vertical-align: middle;">任选</th><td>艺术类选修课</td><td>2</td><td><?php echo $elective3; ?></td>
			</tr>
			<tr>
			<td>社科类选修课</td><td>4</td><td><?php echo $elective4; ?></td>
			</tr>
			<tr>
			<td>专业课</td><td>14</td><td><?php echo $elective1; ?></td>
			</tr>
			<tr><th colspan="2">限选</th><td>9</td><td><?php echo $elective2; ?></td></tr>
      </table>
      <table class="table table-bordered">
			<caption>学位要求</caption>
			<tr>
				<th>名称</th><th colspan="2">已达成条件及要求</th>
			</tr>
			<tr>
				<td rowspan="2" style="vertical-align: middle;">满足毕业要求</td>
        <td colspan="2">完成情况详见上表</td>
			</tr>
			<tr>
				<td class="bg-warning">当前达成情况：</td>
        <td class="bg-danger">学位要求：必须满足毕业要求</td>
			</tr>
			<tr>
				<td rowspan="6" style="vertical-align: middle;">外语水平</td>
        <td>大学英语四级</td><td>400分以上</td>
			</tr>
			<?php include "stu_gra_degree_en.php"; ?>
      <tr>
        <td rowspan="12" style="vertical-align: middle;">学位课程</td>
      </tr>
      <?php include "stu_gra_degree_major.php"; ?>
      </table>
    </div>
    <?php 
      mysqli_close($conn);
      mysqli_free_result($result);
     ?>
    <script src="../../js/jquery-1.11.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
  </body>
</html>