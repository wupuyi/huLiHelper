<?php 
	//链接数据库
	include "connect_db.php";
	//获取id
	$id=$_GET['id'];
	$stu_password=md5($_POST['password']);
	$sql="UPDATE stu_user SET stu_password='{$stu_password}' WHERE id='{$id}'";
	if (mysqli_query($conn,$sql)) {
		echo '<h3>修改成功！</h3><a href="stu_manage.php">返回用户列表</a>';
	}
	else{
		echo '<h3>修改失败！</h3><a href="stu_manage_edit_pw.php">返回重新修改</a>';
	}
?>