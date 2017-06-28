<?php 
  include "connect_db.php";
  $id=$_GET['id'];
  $sql="DELETE FROM tea_user WHERE id='{$id}'";
  if (mysqli_query($conn,$sql)) {
  	echo '<h3>账号删除成功！</h3><a href="tea_manage.php">返回账号列表</a>';
  }
  else{
  	echo '<h3>账号删除失败！</h3><a href="tea_manage.php">返回账号列表</a>';
  }
?>