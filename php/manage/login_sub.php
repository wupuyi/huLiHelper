<?php 
include "../connect_db.php";
$stu_name=$_POST['username'];
$stu_password=md5($_POST['password']);
$sql="SELECT * FROM stu_user WHERE stu_name='$stu_name'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

if (empty($row['stu_password'])) {
	echo '<script type="text/javascript">alert("对不起，用户名不存在，请先注册！");history.go(-1);</script>';
}elseif ($stu_password==$row['stu_password']) {
	if ($row['stu_id']==null) {
		echo '<script type="text/javascript">alert("您还未绑定学号，请先绑定学号。");window.location="bind_stu.php?id='.$row["stu_name"].'"</script>';
	}else{
		//保存登陆状态
		// session_start();
		// $_SESSION["stu_name"]=$stu_name;
		// //设置cookie保存一个小时。
		setcookie('stu_name',$stu_name,time()+3600,'/');
		$password=md5($stu_password);
		setcookie('stu_password',$password,time()+3600,'/');
		setcookie('stu_id',$row['stu_id'],time()+3600,'/');
		echo '<script type="text/javascript">alert("登陆成功，欢迎使用！");window.location="../stu/stu_welcome.php";</script>';
	}
	// echo $row['stu_id'];
}else{
	echo '<script type="text/javascript">alert("密码错误，请重新登陆！");history.go(-1);</script>';
}
// if($stu_password==$row['stu_password']){
// 	// $_SESSION["admin_name"]=$admin_name;
// 	// header("Location: ../index.php");
// 	// exit;
// print_r($stu_name);
// print_r($stu_password);
mysqli_close($conn);
mysqli_free_result($result);
?>