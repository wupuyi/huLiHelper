<?php 
include "connect_db.php";
$password=md5($_POST['password']);
$sql="UPDATE admin_user SET admin_password='{$password}' WHERE id=1";
if (mysqli_query($conn,$sql)) {
	session_start();
	//删除当前会话
	unset($_SESSION['admin_name']);
	//结束当前会话
	session_destroy();
	//跳转到登陆页面
	echo '<script type="text/javascript">alert("修改成功，请重新登陆");window.location="../login.html";</script>';
}else{
	echo '<script type="text/javascript">alert("修改失败，重新修改");history.go(-1);</script>';
}
 ?>
