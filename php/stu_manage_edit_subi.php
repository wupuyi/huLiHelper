<?php 
	//链接数据库
	include "connect_db.php";
	//获取id
	$id=$_GET['id'];
	$stu_id=$_POST['stu_id'];


	$sql="UPDATE stu_user SET stu_id='{$stu_id}' WHERE id='{$id}'";
	if (mysqli_query($conn,$sql)) {
		echo '<h3>修改成功！</h3><a href="stu_manage.php">点击返回</a>';
	}
	else{
		echo '<h3>修改失败！</h3><a href="stu_manage.php">返回重新修改</a>';
	}
?>