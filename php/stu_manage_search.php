<?php 
	$stu_name=$_GET['stu_name'];
	include "connect_db.php"; 
	$sql="SELECT id,stu_name,stu_id FROM stu_user WHERE stu_name='{$stu_name}'";
	$result=mysqli_query($conn,$sql);
	
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>湖理小助手后台管理系统</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      /*导航高度*/
    	.breadcrumb{
    		line-height: 23px;
    	}
    	table, th, td{
  		border: 1px solid #ccc;
  		}
    	table{
  			width: 100%;
  		}

  		th,td{
  			height: 39px;
  			padding-left: 5px;
        font-size: 15px;
  		}
      .search{
        width: 50%;
        margin:20px 0;
      }
      thead{
        background-color: #eee;
      }
      .btn_margin{
        margin:0 5px;
      }
  

    </style>
  </head>
  <body >
	<div>
		<ol class="breadcrumb">
		  <li><a href="main.php">首页</a></li>
		  <li class="active">账号管理</li>
		</ol>
	</div>
	<div>
		<h3>学生账号管理</h3>
		<table>
	        <thead>
	  				<tr>
	            <th width="5%">编号</th>
	            <th>用户名</th>
	            <th>绑定学号</th>
	            <th>操作</th>  
	          </tr>
	        </thead>
	        <tbody>
	          <?php 
	          if(mysqli_num_rows($result)>=1){
	          	while ($row=mysqli_fetch_array($result,MYSQL_ASSOC)) {
					$rows[]=$row;
				}
	          foreach ($rows as $row):
	          ?>
	          <tr>
	            <td><?php echo $row['id']; ?></td>
	            <td ><?php echo $row['stu_name']; ?></td>
	            <td ><?php echo $row['stu_id']; ?></td>
	            <td>
	            <button class="btn btn-danger btn_margin" onclick="edit_stu_del(<?php echo $row['id']; ?>)">删除账号
	            </button>
	            <button class="btn btn-warning btn_margin" onclick="edit_stu_pw(<?php echo $row['id']; ?>)">修改密码
	            </button>
	            <button class="btn btn-primary btn_margin" onclick="edit_stu_info(<?php echo $row['id']; ?>)">修改信息
	            </button>
	            </td>
	          </tr>
	          <?php endforeach;}
	          else{
	          	echo '<script type="text/javascript">alert("查无此结果！");window.location="stu_manage";</script>';
	  	          }
	          ?>

	         </tbody>
		</table>
	</div>


	<script src="../js/jquery-1.11.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
    <script type="text/javascript">
    function edit_stu_info(id){
        window.location="stu_manage_edit_info.php?id="+id;

      }
     function edit_stu_pw(id){
        window.location="stu_manage_edit_pw.php?id="+id;

      }
     function edit_stu_del(id){
        var r=confirm("你确定要删除吗？");
        if (r) {
        window.location="stu_manage_del.php?id="+id;
        }
      }
    </script>
  </body>
</html>
