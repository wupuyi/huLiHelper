<?php 
//用来验证后台管理系统是否登陆
session_start();
if (!isset($_SESSION['admin_name'])) {
	//跳转
	header("Location: login.html");
	//确保跳转后，后续代码不会被执行
	exit;
}
// else{
// 	header("Location:../index.php");
// }
?>