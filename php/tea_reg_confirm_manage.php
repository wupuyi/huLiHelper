<?php 
include "connect_db.php";
$id=$_GET['id'];
$sql="UPDATE tea_user SET power=1 WHERE id='{$id}'";
if(mysqli_query($conn,$sql)){
	echo '<h3>操作成功</h3><a href="tea_reg_confirm.php">返回审批列表</a>';
}else{
	echo '<h3>操作失败</h3><a href="tea_reg_confirm.php">点击返回</a>';
}

 ?>