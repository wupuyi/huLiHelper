<?php

//登陆验证
//获取用户名和密码
$admin_name =$_POST['admin_name'];
$admin_password= md5($_POST['admin_password']);

// 连接数据库
include "connect_db.php";

// 查询用户名和密码
$sql="SELECT admin_password FROM admin_user WHERE admin_name='$admin_name'" ;

$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if($admin_password==$row[0]){
	session_start();
	$_SESSION["admin_name"]=$admin_name;
	header("Location: ../index.php");
	exit;
}
else{
	echo '<script type="text/javascript">alert("登陆失败，请重新登陆！");history.go(-1);</script>';
}

?>