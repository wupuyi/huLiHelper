<?php 
include "../connect_db.php";
$tea_name=$_POST['username'];
$tea_password=md5($_POST['password']);

$sql="SELECT * FROM tea_user WHERE tea_name='$tea_name'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$tea_name=$row['tea_name'];
$power=$row['power'];

if (empty($row['tea_password'])) {
	echo '<script type="text/javascript">alert("对不起，用户名不存在，请先注册！");history.go(-1);</script>';
}elseif ($tea_password==$row['tea_password']) {

		// session_start();
		// $_SESSION["tea_name"]=$tea_name;
		//设置cookie保存一个小时。
		setcookie("tea_name",$tea_name,time()+3600,"/");
		$password=md5($tea_password);
		setcookie("tea_password",$password,time()+3600,"/");
		setcookie("power",$power,time()+3600,"/");
		//如果路径设置为 "/"，那么 cookie 将在整个域名内有效.
		echo '<script type="text/javascript">alert("登陆成功，欢迎使用！");window.location="../tea/tea_welcome.php";</script>';
}else{
	echo '<script type="text/javascript">alert("密码错误，请重新登陆！");history.go(-1);</script>';
}
mysqli_close($conn);
mysqli_free_result($result);
?>