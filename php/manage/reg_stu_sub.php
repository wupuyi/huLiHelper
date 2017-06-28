<?php 
include "../connect_db.php";
$stu_name=$_POST['username'];
$stu_password=md5($_POST['password']);
$sql="SELECT * FROM stu_user";
$result=mysqli_query($conn,$sql);

//验证用户名是否存在
while ($name= mysqli_fetch_array($result,MYSQLI_ASSOC)){ //返回查询结果到数组
	$username = $name["stu_name"]; //将数据从数组取出
	if ($stu_name==$username) {
		echo '<script type="text/javascript">alert("用户名已存在,请重新注册！");history.go(-1);</script>';
		exit;
	}
}
//验证通过，写入数据库
$sql="INSERT INTO stu_user (stu_name,stu_password) VALUES('$stu_name','$stu_password')";
if(mysqli_query($conn,$sql)){
	echo '<script type="text/javascript">alert("恭喜注册成功！请进行学号绑定");window.location="bind_stu.php?id='.$stu_name.'";</script>';
}else{
	echo '<script type="text/javascript">alert("注册失败，请重新注册！");history.go(-1);</script>';
}

mysqli_close($conn);
mysqli_free_result($result);
?>