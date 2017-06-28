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
		echo '<script type="text/javascript">alert("修改成功！");window.location="tea_stuinfo_exact.php?name='.$name.'";</script>';
	}
	else{
		echo '<script type="text/javascript">alert("修改失败！");history.go(-1);</script>';
	}
	mysqli_close($conn);
?>