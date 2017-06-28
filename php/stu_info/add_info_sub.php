<?php 
	//链接数据库
	include "../connect_db.php";
	//获取id
	$stu_id=$_POST['stu_id'];
	$name=$_POST['name'];
	$tel=$_POST['tel'];
	$qq=$_POST['qq'];
	$parent=$_POST['parent'];
	$parent_tel=$_POST['parent_tel'];
	$other=$_POST['other'];

	$sql="INSERT INTO stu_info (stu_id,name,stu_tel,stu_qq,parent,parent_tel,other) VALUES('$stu_id','$name','$tel','$qq','$parent','$parent_tel','$other')";
	if (mysqli_query($conn,$sql)) {
		echo '<h3>添加成功！</h3><a href="add_info.php">点击返回</a>';
	}
	else{
		echo '<h3>添加失败！</h3><a href="add_info.php">返回重新添加</a>';
	}
	mysqli_close($conn);


?>