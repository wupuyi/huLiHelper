<?php 
include "../connect_db.php";
$stu_name=$_GET['id'];
$stu_id=$_POST['stu_id'];
$card_id=$_POST['card_id'];
// print_r($stu_id);
// print_r($card_id);
//从学籍中查找学号和身份证号，验证。
$sql1="SELECT card_id FROM stu_status WHERE stu_id='$stu_id'";
$result=mysqli_query($conn,$sql1);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
if(empty($row['card_id'])){
	echo '<script type="text/javascript">alert("对不起，您的学籍出错，请联系管理员！");window.location="login.php";</script>';
}elseif ($card_id==$row['card_id']) {
	$sql2="UPDATE stu_user SET stu_id='{$stu_id}' WHERE stu_name='{$stu_name}'";
	if(mysqli_query($conn,$sql2)){
		echo '<script type="text/javascript">alert("恭喜你，绑定成功！");window.location="login.php";</script>';
	}else{
		echo '<script type="text/javascript">alert("对不起，绑定失败！");history.go(-1);</script>';
	}
}else{
	echo '<script type="text/javascript">alert("对不起，绑定失败！");history.go(-1);</script>';
}
	
mysqli_close($conn);
mysqli_free_result($result);


?>