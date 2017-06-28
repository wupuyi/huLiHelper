<?php
include "../connect_db.php";
$stu_id=$_GET['id'];

// 允许上传的图片后缀
$allow_ext = array("gif", "jpeg", "jpg", "png");
//从"."处分割字符串
$temp = explode(".", $_FILES["file"]["name"]);
$ext = end($temp);     // 获取文件后缀名
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
//IE的jpg文件显示image/pjpeg,png文件显示为image/x-png
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 204800)   // 小于 200 kb
&& in_array($ext, $allow_ext))
{	
	//校验是否是一个真正的图片类型
	if(getimagesize($_FILES["file"]['tmp_name'])){
		//判断文件是否上传成功，0为成功
		if ($_FILES["file"]["error"] > 0)
		{
			if ($_FILES["file"]["error"]==1) {
				echo "文件超出服务器限制大小";
			}else if ($_FILES["file"]["error"]==2) {
				echo "文件超出客户端限制大小";
			}else if ($_FILES["file"]["error"]==3) {
				echo "文件部分被上传";
			}else if ($_FILES["file"]["error"]==3) {
				echo "没有文件被上传";
			}
		}
		else
		{	// 判断当期目录下的 uploads 目录是否存在该文件
			// 如果没有 upload 目录，你需要创建它，upload 目录权限为 777
			$path = "../../uploads/"; // 接收文件目录
			//创建新的文件名
			$image_name = time().rand(100,999).".".$ext;
			//判断目录是否存在，不存在则创建
			if (! file_exists ( $path)) { 
			    mkdir ( "$path", 0777, true );
			}
			if (file_exists($path . $_FILES["file"]["name"]))
			{
				echo $_FILES["file"]["name"] . " 文件已经存在。 ";
			}
			else
			{
				// 如果 uploads 目录不存在该文件则将文件上传到 uploads 目录下
				move_uploaded_file($_FILES["file"]["tmp_name"], $path . $image_name);
				// echo "文件存储在: " . $path . $image_name;
				$photo= $path . $image_name;
				$sql1="SELECT photo FROM stu_status WHERE stu_id='{$stu_id}'";
				$result=mysqli_query($conn,$sql1);
				$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
				if($row['photo']!=NULL)
				{unlink($row['photo']);}//删除旧照片
				$sql2="UPDATE stu_status SET photo='{$photo}' WHERE stu_id='{$stu_id}'";

				if (mysqli_query($conn,$sql2)) {
					echo '<h3>添加成功！</h3><a href="manage_info.php">点击返回</a>&nbsp&nbsp&nbsp&nbsp&nbsp<a href="manage_see_info.php?id='.$stu_id.'">查看学籍信息</a>';
				}
				else{
					echo '<h3>添加失败！</h3><a href="manage_info.php">返回重新添加</a>';
				}
			}
		}
	}
	else{
		echo "非法的文件格式";
	}
}
else
{
	echo "文件上传失败";
}

mysqli_close($conn);
?>