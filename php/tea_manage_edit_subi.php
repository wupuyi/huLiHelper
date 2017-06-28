<?php 
	//链接数据库
	include "connect_db.php";
	//获取id
	$id=$_GET['id'];
	$tea_tel=$_POST['tel'];
	$name=$_POST['name'];
	$power=$_POST['power'];

	$sql="UPDATE tea_user SET tea_tel='{$tea_tel}',name='{$name}',power='{$power}' WHERE id='{$id}'";

	if (mysqli_query($conn,$sql)) {
		echo '<h3>修改成功！</h3><a href="tea_manage.php">点击返回</a>';
	}
	else{
		echo '<h3>修改失败！</h3><a href="tea_manage.php">返回教师列表</a>';
	}
?>