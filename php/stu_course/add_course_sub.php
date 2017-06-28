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


$sql="INSERT INTO stu_course (c_id,c_name,c_dep,c_major,c_grade,c_time,c_attr,c_type) VALUES ('$c_id','$c_name','$c_dep','$c_major','$c_grade','$c_time','$c_attr','$c_type')";
// $data=mysqli_query($conn,$sql);
// if (!$data) {
//  printf("Error: %s\n", mysqli_error($conn));
//  exit();
// }

if (mysqli_query($conn,$sql)) {
	echo '<h3>添加成功！</h3><a href="add_course.php">点击返回</a>';
}
else{
	echo '<h3>添加失败！</h3><a href="add_course.php">返回重新添加</a>';
}


mysqli_close($conn);


// print_r($c_id);
// print_r($c_name);
// print_r($c_dep);
// print_r($c_major);
// print_r($c_grade);
// print_r($c_time);
// print_r($c_method);
// print_r($c_type);
?>