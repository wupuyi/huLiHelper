<?php 
// 连接数据库
include "connect_db.php";

//获取表单信息
$tea_name=$_POST['username'];
$tea_password=md5($_POST['password']);
$tea_tel=$_POST['tel'];
$name=$_POST['name'];
$power=$_POST['power'];
// print_r($tea_name);
// print_r($tea_password);
// print_r($tea_tel);
// print_r($name);
// print_r($power);
// 插入信息
$sql="INSERT INTO tea_user (tea_name,tea_password,tea_tel,name,power) VALUES('$tea_name','$tea_password','$tea_tel','$name','$power')";
// mysqli_query($conn,$sql);
if(mysqli_query($conn,$sql)){
	echo '<h3>添加成功！</h3><a href="tea_add.php">点击返回</a>';
	// header("Location:add_stu.php");
}else{
	echo '<h3>添加失败</h3><a href="tea_add.php">重新添加</a>';
}


?>