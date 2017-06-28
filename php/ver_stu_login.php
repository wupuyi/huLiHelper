<?php 
//用来用户是否登陆。
include "../connect_db.php";
// session_start();
// if (!isset($_SESSION['stu_name'])) {
	if(isset($_COOKIE['stu_name'])&&isset($_COOKIE['stu_password'])){
		$stu_name=$_COOKIE['stu_name'];
		$stu_password=$_COOKIE['stu_password'];
		$sql="SELECT * FROM stu_user WHERE stu_name='$stu_name'";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		if(empty($row['stu_password'])) {
			echo '<script type="text/javascript">alert("对不起，请先登陆！");window.location="../manage/login.php";</script>';
		}elseif ($stu_password!=md5($row['stu_password'])) {
			echo '<script type="text/javascript">alert("对不起，请先登陆！");window.location="../manage/login.php";</script>';
		}
	}else{
	echo '<script type="text/javascript">alert("对不起，请先登陆！");window.location="../manage/login.php";</script>';
	}

?>