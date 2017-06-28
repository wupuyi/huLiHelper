<?php 
	//包含数据库连接函数链接数据库
	include "../connect_db.php";
	$id=$_POST['stu_id'];
	$sql="SELECT stu_id FROM stu_info";
	$result=mysqli_query($conn,$sql);
	if ($id=="") {
			echo "学号不能为空";
	}
	while ($stu_id = mysqli_fetch_array($result)){ //返回查询结果到数组
	$s_id = $stu_id["stu_id"]; //将数据从数组取出
		if ($id==$s_id) {
			echo "学号已存在，请重新输入";
		}
	}
	mysqli_free_result($result);
	//关闭数据库链接
	mysqli_close($conn); 
?>