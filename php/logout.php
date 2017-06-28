<?php 	
	//初始化Session
	session_start();
	//删除当前会话
	unset($_SESSION['admin_name']);
	//结束当前会话
	session_destroy();
	//跳转到登陆页面
	header("Location: ../login.html");
 ?>