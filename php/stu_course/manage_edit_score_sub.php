<?php 
//链接数据库
include "../connect_db.php";
$id=$_POST['id'];
$stu_id=$_POST['stu_id'];
$score=$_POST['score'];

$sql="UPDATE stu_score SET stu_id='{$stu_id}',score='{$score}' WHERE id='{$id}'";
// // $data=mysqli_query($conn,$sql);
// // if (!$data) {
// //  printf("Error: %s\n", mysqli_error($conn));
// //  exit();
// // }
if (mysqli_query($conn,$sql)) {
	echo '<h3>修改成功！</h3><a href="manage_score.php">点击返回</a>';
}
else{
	echo '<h3>修改失败！</h3><a href="manage_score.php">返回</a>';
}
mysqli_close($conn);
mysqli_free_result($result);
?>