<?php 
  include "connect_db.php";
  $sql="SELECT id,tea_name,tea_tel,name,power FROM tea_user WHERE power=0";
  $result=mysqli_query($conn,$sql);
  while ($row=mysqli_fetch_array($result,MYSQL_ASSOC)) {
    $rows[]=$row;
  }
  // print_r($rows);
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
		  <li class="active">注册审批</li>
		</ol>
	</div>
	<div>
		<h3>老师注册审批</h3>
			<table>
        <thead>
  				<tr>
            <th width="5%">编号</th>
            <th>用户名</th>
            <th>手机号码</th>
            <th>老师姓名</th>
            <th>是否有教师权限</th>
            <th>操作</th>  
          </tr>
        </thead>
        <tbody>
          <?php foreach ($rows as $row):?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td ><?php echo $row['tea_name']; ?></td>
            <td ><?php echo $row['tea_tel']; ?></td>
            <td ><?php echo $row['name'];  ?></td>
            <td><?php if($row['power']==1){
              echo "是";
            }else{
              echo "否";
            }
            ?></td>
            <td align="center">
            <button class="btn btn-primary" onclick="confirm_reg_tea(<?php echo $row['id']; ?>)">
            添加教师权限
            </button>
            </td>
          </tr>
        <?php endforeach; ?>

          </tbody>
			</table>
	</div>


	<script src="../js/jquery-1.11.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
    <script type="text/javascript">
      function confirm_reg_tea(id){
        window.location="tea_reg_confirm_manage.php?id="+id;

      }
    </script>
  </body>
</html>
