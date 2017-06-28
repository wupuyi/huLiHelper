<?php 
//用来老师是否登陆。
include "../connect_db.php";
// session_start();
// if (!isset($_SESSION['tea_name'])&&empty($_SESSION['tea_name'])) {
	if(isset($_COOKIE['tea_name'])&&isset($_COOKIE['tea_password'])){
		$tea_name=$_COOKIE['tea_name'];
		$tea_password=$_COOKIE['tea_password'];
		$sql="SELECT * FROM tea_user WHERE tea_name='$tea_name'";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		$password=md5($row['tea_password']);
		if(empty($tea_password)){
			echo '<script type="text/javascript">alert("对不起，请先登陆！");window.location="../manage/tea_login.php";</script>';
		}
		elseif($tea_password!=$password) {
			echo '<script type="text/javascript">alert("对不起，请先登陆！");window.location="../manage/tea_login.php";</script>';
		}
}
else{
	echo '<script type="text/javascript">alert("对不起，请先登陆！");window.location="../manage/tea_login.php";</script>';
	}
// }
?>