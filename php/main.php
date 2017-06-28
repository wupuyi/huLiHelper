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
    	.table{
    		width:70%;
    	}
    	h3{
    		color: #2b5190; 
    		margin-bottom: 30px;
    	}
    	body{
    		margin-top: 50px;
    	}

    </style>
  </head>
  <body>
  	<center>
		<h3>系统信息</h3>
		<table class="table table-striped" >
			<tr>
				<th>操作系统</th>
				<td><?php echo PHP_OS;?></td>
			</tr>
			<tr>
				<th>PHP版本</th>
				<td><?php echo PHP_VERSION;?></td>
			</tr>
			<tr>
			<th>运行方式</th>
			<td><?php echo PHP_SAPI;?></td>
			</tr>
			<tr>
				<th>系统名称</th>
				<td>湖理小助手</td>
			</tr>
			<tr>
				<th>开发者</th>
				<td>吴溥毅</td>
			</tr>
			<tr >
				<th>版本号</th>
				<td>1.0.0</td>
			</tr>
		</table>
	</center>


	<script src="../js/jquery-1.11.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
