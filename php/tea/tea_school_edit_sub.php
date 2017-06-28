<?php 
//链接数据库
include "../connect_db.php";
$school_id=$_GET['id'];
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


$sql="UPDATE stu_status SET stu_id='{$stu_id}', name='{$name}', sex='{$sex}',birth='{$birth}', nation='{$nation}', political='{$political}', card_id='{$card_id}', address='{$address}', department='{$department}',major='{$major}', edu_cate='{$edu_cate}', grade='{$grade}', class='{$class}', entrance='{$entrance}', graduation='{$graduation}',status='{$status}' WHERE school_id='{$school_id}'";


if (mysqli_query($conn,$sql)) {
	echo '<script type="text/javascript">alert("修改成功！");window.location="tea_school_welcome.php";</script>';
}
else{
	echo '<script type="text/javascript">alert("对不起，修改失败！");window.location="tea_school_welcome.php";</script>';
}
mysqli_close($conn);
mysqli_free_result($result);
?>