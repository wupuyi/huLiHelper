<?php 
include "../connect_db.php";
$c_id=$_POST['c_id'];
$stu_id=$_POST['stu_id'];
$score=$_POST['score'];
// print_r($c_id);
// print_r($stu_id);
// print_r($score);
$sql="INSERT INTO stu_score (c_id,stu_id,score) VALUES ('$c_id','$stu_id','$score')";
// $data=mysqli_query($conn,$sql);
// if (!$data) {
//  printf("Error: %s\n", mysqli_error($conn));
//  exit();
// }

if (mysqli_query($conn,$sql)) {
	$f="'";
	echo '<h3>添加成功！</h3><a href="manage_course.php">点击返回</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="add_score.php?id='.$c_id.'">继续添加</a>';
}
else{
	echo '<h3>添加失败！</h3><a href="manage_course.php">返回</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="add_score.php?id='.$c_id.'">重新添加</a>';
}
mysqli_close($conn);
?>