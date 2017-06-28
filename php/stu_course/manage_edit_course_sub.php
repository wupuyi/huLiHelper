<?php 
//链接数据库
include "../connect_db.php";
$c_id=$_POST['c_id'];
$c_name=$_POST['c_name'];
$c_dep=$_POST['c_dep'];
$c_major=$_POST['c_major'];
$c_grade=$_POST['c_grade'];
$c_time=$_POST['c_time'];
$c_attr=$_POST['c_attr'];
$c_type=$_POST['c_type'];
$sql="UPDATE stu_course SET c_id='{$c_id}',c_name='{$c_name}',c_dep='{$c_dep}',c_major='{$c_major}',c_grade='{$c_grade}',c_time='{$c_time}',c_attr='{$c_attr}',c_type='{$c_type}' WHERE c_id='{$c_id}'";
// $data=mysqli_query($conn,$sql);
// if (!$data) {
//  printf("Error: %s\n", mysqli_error($conn));
//  exit();
// }
if (mysqli_query($conn,$sql)) {
	echo '<h3>修改成功！</h3><a href="manage_course.php">点击返回</a>';
}
else{
	echo '<h3>修改失败！</h3><a href="manage_course.php">返回</a>';
}
mysqli_close($conn);

?>