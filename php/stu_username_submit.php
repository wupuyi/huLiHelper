<?php 
// 连接数据库
include "connect_db.php";

//获取表单信息
$stu_name=$_POST['username'];
$stu_password=md5($_POST['password']);
$stu_id=$_POST['stu_id'];

//插入信息
$sql="INSERT INTO stu_user (stu_name,stu_password,stu_id) VALUES('$stu_name','$stu_password','$stu_id')";
// mysqli_query($conn,$sql);
if(mysqli_query($conn,$sql)){
	echo '<h3>添加成功！</h3><a href="stu_add.php">点击返回</a>';
	// header("Location:add_stu.php");
}else{
	echo '<h3>添加失败</h3><a href="stu_add.php">点击返回</a>';
}


?>