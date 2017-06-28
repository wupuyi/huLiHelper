<?php 
//链接数据库
include "../connect_db.php";
$id=$_GET['id'];
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


$sql="UPDATE stu_status SET stu_id='{$stu_id}', name='{$name}', sex='{$sex}',birth='{$birth}', nation='{$nation}', political='{$political}', card_id='{$card_id}', address='{$address}', department='{$department}',major='{$major}', edu_cate='{$edu_cate}', grade='{$grade}', class='{$class}', entrance='{$entrance}', graduation='{$graduation}',status='{$status}' WHERE stu_id='{$id}'";
// $data=mysqli_query($conn,$sql);
// if (!$data) {
//  printf("Error: %s\n", mysqli_error($conn));
//  exit();
// }


if (mysqli_query($conn,$sql)) {
	echo '<h3>修改成功！</h3><a href="manage_info.php">点击返回</a>&nbsp&nbsp&nbsp&nbsp&nbsp<a href="manage_see_info.php?id='.$stu_id.'">查看学籍信息</a>';
}
else{
	echo '<h3>修改失败！</h3><a href="manage_info.php">返回</a>';
}
mysqli_close($conn);
?>