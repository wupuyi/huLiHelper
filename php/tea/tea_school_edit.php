 <?php 
	include "../connect_db.php";
	$school_id=$_GET['id'];
	$sql="SELECT * FROM stu_status WHERE school_id='{$school_id}'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>修改学籍信息</title>

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
      .error{
      	color: red;
      	font-weight: normal;
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
          <h3 class="panel-title">学籍信息修改</h3>
        </div>
        <div class="panel-body">
			    <form id="commentForm"  action="tea_school_edit_sub.php?id=<?php echo $row['school_id']; ?>" method="post">				
									<table class="table table-striped">
				<tr>
					<td  width="50%" class="bg-primary" align="left">
						<img src="../../image/hnist_w.gif" width="114px" height="25px">
						<h5 style="font-size:20px;align:right;margin-top:50px">学生学籍卡</h5>
					</td>
					<td align="right" class="bg-primary"  width="50%">
						<img src="<?php echo $row['photo']; ?>" alt="学籍照片" id="stu_photo" style="width: 120px;height: 160px">
					</td>
				</tr>
				<tr>
					<th class="text-primary text-right">姓名：</th>
					<td align="left">
					<input type="text" id="name" name="name" value="<?php echo $row['name']; ?>">
					</td>
				</tr>
				<tr>
					<th class="text-primary text-right">学籍编号：</th>
					<td align="left">
					<?php echo $row['school_id']; ?>
					</td>
				</tr>
				<tr>
					<th class="text-primary text-right">学号：</th>
					<td align="left">
					<input type="text" id="stu_id" name="stu_id" value="<?php echo $row['stu_id']; ?>">
					</td>
				</tr>
				<tr>
					<th class="text-primary text-right">性别：</th>
					<td align="left">
					<input type="radio" name="sex" value="男" <?php if($row['sex']=='男'){echo 'checked';} ?>>男&nbsp&nbsp&nbsp&nbsp&nbsp
            		<input type="radio" name="sex" value="女" <?php if($row['sex']=='女'){echo 'checked';} ?>>女
					</td>
				</tr>
				<tr>
					<th class="text-primary text-right">出生日期：</th>
					<td align="left">
					<input type="text" id="birth" name="birth" value="<?php echo $row['birth']; ?>">
					</td>
				</tr>
				<tr>
					<th class="text-primary text-right">民族：</th>
					<td align="left">
					<input type="text" id="nation" name="nation" value="<?php echo $row['nation']; ?>">
					</td>
				</tr>
				<tr>
					<th class="text-primary text-right">政治面貌：</th>
					<td align="left">
					<select name="political" id="political" style="width: 174px;height: 26px">
		              <option value="共青团员" <?php if($row['political']=='共青团员'){echo 'selected';} ?>>共青团员</option>
		              <option value="党员"<?php if($row['political']=='党员'){echo 'selected';} ?>>党员</option>
		              <option value="群众"<?php if($row['political']=='群众'){echo 'selected';} ?>>群众</option>
		            </select>
					</td>
				</tr>
				<tr>
					<th class="text-primary text-right">身份证号：</th>
					<td align="left">
					<input type="text" id="card_id" name="card_id" value="<?php echo $row['card_id']; ?>">
					</td>
				</tr>
				<tr>
					<th class="text-primary text-right">家庭住址：</th>
					<td align="left">
					<input type="text" id="address" name="address" value="<?php echo $row['address']; ?>">
					</td>
				</tr>
				<tr>
					<th class="text-primary text-right">所在院系：</th>
					<td align="left">
					<select name="department" id="department" style="width: 174px;height: 26px">
		              <option value="计算机学院" <?php if($row['department']=='计算机学院'){echo 'selected';} ?>>计算机学院</option>
		            </select>
					</td>
				</tr>
				<tr>
					<th class="text-primary text-right">所在专业：</th>
					<td align="left">
					<select name="major" id="major" style="width: 174px;height: 26px">
		              <option value="计算机科学与技术" <?php if($row['major']=='计算机科学与技术'){echo 'selected';} ?>>计算机科学与技术</option>
		              <option value="网络工程" <?php if($row['major']=='网络工程'){echo 'selected';} ?>>网络工程</option>
		              <option value="软件工程" <?php if($row['major']=='软件工程'){echo 'selected';} ?>>软件工程</option>
		            </select>
					</td>
				</tr>
				<tr>
					<th class="text-primary text-right">年级：</th>
					<td align="left">
					<select name="grade" id="grade" style="width: 174px;height: 26px">
		              <option value="2013级"<?php if($row['grade']=='2013级'){echo 'selected';} ?>>2013级</option>
		              <option value="2014级"<?php if($row['grade']=='2014级'){echo 'selected';} ?>>2014级</option>
		              <option value="2015级"<?php if($row['grade']=='2015级'){echo 'selected';} ?>>2015级</option>
		              <option value="2016级"<?php if($row['grade']=='2016级'){echo 'selected';} ?>>2016级</option>
		            </select>
					</td>
				</tr>
				<tr>
					<th class="text-primary text-right">班级：</th>
					<td align="left">
					<input type="text" id="class" name="class" value="<?php echo $row['class']; ?>">
					</td>
				</tr>
				<tr>
					<th class="text-primary text-right">入学时间：</th>
					<td align="left">
					<input type="text" id="entrance" name="entrance" value="<?php echo $row['entrance']; ?>">
					</td>
				</tr>
				<tr>
					<th class="text-primary text-right">毕业时间：</th>
					<td align="left">
					<input type="text" id="graduation" name="graduation" value="<?php echo $row['graduation']; ?>">
					</td>
				</tr>
				<tr>
					<th class="text-primary text-right">学历类别：</th>
					<td align="left">
					<select name="edu_cate" id="edu_cate" style="width: 174px;height: 26px">
		              <option value="普通(统招)"<?php if($row['edu_cate']=='普通(统招)'){echo 'selected';} ?>>普通(统招)</option>
		              <option value="普通专升本(统招)"<?php if($row['edu_cate']=='普通专升本(统招)'){echo 'selected';} ?>>普通专升本(统招)</option>
		              <option value="成人高考"<?php if($row['edu_cate']=='成人高考'){echo 'selected';} ?>>成人高考</option>
		              <option value="自考"<?php if($row['edu_cate']=='自考'){echo 'selected';} ?>>自考</option>
		            </select>
					</td>
				</tr>
				<tr>
					<th class="text-primary text-right">学籍状态：</th>
					<td align="left">
					<select name="status" id="status" style="width: 174px;height: 26px">
		              <option value="注册学籍" <?php if($row['status']=='注册学籍'){echo 'selected';} ?>>注册学籍</option>
		              <option value="已离校" <?php if($row['status']=='已离校'){echo 'selected';} ?>>已离校</option>
		              <option value="保留学籍" <?php if($row['status']=='保留学籍'){echo 'selected';} ?>>保留学籍</option>
		            </select>
					</td>
				</tr>
				<tr>
					<td colspan="3">
					<input type="submit" name="提交" class="btn btn-primary btn-block" value="确定修改" id="submit" >
					</td>
				</tr>

				</table>
				</form>
        </div>
      </div>
    </div> <!--  panel panel-info -->
	<?php 
		mysqli_close($conn);
		mysqli_free_result($result);
	 ?>
    <script src="../../js/jquery-1.11.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
    <script src="../../js/tea_school_edit.js"></script>   
  </body>
</html>