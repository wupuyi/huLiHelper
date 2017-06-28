<?php 
	//链接数据库
	include "../connect_db.php";
	//获取id
	$stu_id=$_GET['id'];
	$name=$_POST['name'];
	$stu_tel=$_POST['tel'];
	$stu_qq=$_POST['qq'];
	$parent=$_POST['parent'];
	$parent_tel=$_POST['parent_tel'];
	$other=$_POST['other'];

	$sql="UPDATE stu_info SET name='{$name}',stu_tel='{$stu_tel}',stu_qq='{$stu_qq}',parent='{$parent}',parent_tel='{$parent_tel}',other='{$other}' WHERE stu_id='{$stu_id}'";
	if (mysqli_query($conn,$sql)) {
		echo '<h3>修改成功！</h3><a href="manage_info.php">点击返回</a>';
	}
	else{
		echo '<h3>修改失败！</h3><a href="manage_info.php">返回重新修改</a>';
	}
	mysqli_close($conn);
?>