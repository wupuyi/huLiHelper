<?php 
include "../connect_db.php";
$tea_name=$_POST['username'];
$tea_password=md5($_POST['password']);
$tea_tel=$_POST['tel'];
$name=$_POST['name'];

$sql="SELECT * FROM tea_user";
$result=mysqli_query($conn,$sql);

//验证用户名是否存在
while ($row= mysqli_fetch_array($result,MYSQLI_ASSOC)){ //返回查询结果到数组
	$username = $row["tea_name"]; //将数据从数组取出
	if ($tea_name==$username) {
		echo '<script type="text/javascript">alert("用户名已存在,请重新注册！");history.go(-1);</script>';
		exit;
	}
}
//验证通过，写入数据库
$sql="INSERT INTO tea_user (tea_name,tea_password,tea_tel,name) VALUES('$tea_name','$tea_password','$tea_tel','$name')";
if(mysqli_query($conn,$sql)){
	echo '<script type="text/javascript">alert("恭喜注册成功！管理员会尽快授权。");window.location="tea_login.php";</script>';
}else{
	echo '<script type="text/javascript">alert("注册失败，请重新注册！");history.go(-1);</script>';
}

mysqli_close($conn);
mysqli_free_result($result);
?>