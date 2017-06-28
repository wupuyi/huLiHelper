<?php 

//链接数据库
include "../connect_db.php";
$school_id=$_POST['school_id'];
$stu_id=$_POST['stu_id'];
$name=$_POST['name'];
$sex=$_POST['sex'];
$birth=$_POST['birth'];
$nation=$_POST['nation'];
$political=$_POST['political'];
$card_id=$_POST['card_id'];
$address=$_POST['address'];
$department=$_POST['department'];
$major=$_POST['major'];
$edu_cate=$_POST['edu_cate'];
$grade=$_POST['grade'];
$class=$_POST['class'];
$entrance=$_POST['entrance'];
$graduation=$_POST['graduation'];
$status=$_POST['status'];

$sql="INSERT INTO stu_status (school_id, stu_id, name, sex, birth, nation, political, card_id, address, department, major, edu_cate, grade, class, entrance, graduation, status) VALUES ('$school_id', '$stu_id', '$name', '$sex', '$birth', '$nation', '$political', '$card_id', '$address', '$department', '$major', '$edu_cate', '$grade', '$class', '$entrance', '$graduation','$status')";
if (mysqli_query($conn,$sql)) {
	echo '<h3>添加成功！</h3><a href="add_info.php">点击返回</a>';
}
else{
	echo '<h3>添加失败！</h3><a href="add_info.php">返回重新添加</a>';
}

mysqli_close($conn);
// print_r($school_id);
// print_r($stu_id);
// print_r($name);
// print_r($sex);
// print_r($birth);
// print_r($nation);
// print_r($political);
// print_r($card_id);
// print_r($address);
// print_r($department);
// print_r($major);
// print_r($edu_cate);
// print_r($grade);
// print_r($class);
// print_r($entrance);
// print_r($graduation);
// print_r($status);
?>