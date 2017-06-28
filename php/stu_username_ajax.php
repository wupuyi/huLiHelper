<?php 
	//包含数据库连接函数链接数据库
	include "connect_db.php";
	$username=$_POST['username'];
	$sql="SELECT stu_name FROM stu_user";
	$result=mysqli_query($conn,$sql);
	if ($username=="") {
			echo "用户名不能为空";
	}
	while ($stu_name = mysqli_fetch_array($result)){ //返回查询结果到数组
	$name = $stu_name["stu_name"]; //将数据从数组取出
		if ($username==$name) {
			echo "用户名已存在，请重新输入";
		}
	}
	mysqli_free_result($result);
	//关闭数据库链接
	mysqli_close($conn); 
?>