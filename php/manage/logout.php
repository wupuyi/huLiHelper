<?php 	
	//初始化Session
	// session_start();
	// if (isset($_SESSION['stu_name'])&&!empty($_SESSION['stu_name'])) {
	// 	//删除当前会话
	// 	unset($_SESSION['stu_name']);
	// 	//结束当前会话
	// 	session_destroy();
	// }
	if (isset($_COOKIE['stu_name'])&&isset($_COOKIE['stu_password'])&&isset($_COOKIE['stu_name'])) {
		setcookie('stu_id','',time-3600,"/");
		setcookie('stu_name','',time-3600,"/");
		setcookie('stu_password','',time-3600,"/");
		header("Location: ../manage/login.php");
	}
	if (isset($_COOKIE['tea_name'])&&isset($_COOKIE['tea_password'])&&isset($_COOKIE['power'])) {
		setcookie('tea_name','',time-3600,"/");
		setcookie('tea_password','',time-3600,"/");
		setcookie('power','',time-3600,"/");
		//跳转到登陆页面
		header("Location: ../manage/tea_login.php");
	}
 ?>