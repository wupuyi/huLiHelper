<?php 

  include "../connect_db.php";
  $c_id=$_GET['id'];
  $sql="DELETE FROM stu_course WHERE c_id='{$c_id}'";
  if (mysqli_query($conn,$sql)) {
  	echo '<h3>信息删除成功！</h3><a href="manage_course.php">返回</a>';
  }
  else{
  	echo '<h3>信息删除失败！</h3><a href="manage_course.php">返回</a>';
  }

  mysql_close($conn);
?>