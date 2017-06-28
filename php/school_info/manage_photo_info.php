<?php 
include "../connect_db.php";
$stu_id=$_GET['id'];
$sql="SELECT photo FROM stu_status WHERE stu_id='{$stu_id}'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>湖理小助手后台管理系统</title>
    <link href="../../css/bootstrap.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      /*导航高度*/
      .breadcrumb{
        line-height: 23px;
      }
      table, th, td{
      border: 1px solid #ccc;
      }
      table{
        width: 100%;
      }
      td{
      	padding: 10px;
      	text-align: center;
      }
      .search{
        width: 50%;
        margin:20px 0;
      }
      .photo-border img{
        padding: 5px;
        border: 1px solid #ccc;
      }
      .chose_photo input{
      	width: 150px;
      	height: 30px;
      	opacity: 0;
      	/*设置透明度为0*/
      }
      .chose_photo{
      	padding: 0;
      	width: 152px;
      	height: 37px;
      	background-image: url('../../image/upload.png');
      }
      .btn{
      	width: 152px;
      	height: 37px;
      	font-size: 20px;
      	padding-top: 1px;
      }
    </style>
  </head>
  <body >
  <div>
    <ol class="breadcrumb">
      <li><a href="../main.php">首页</a></li>
      <li class="active">学籍信息管理</li>
    </ol>
  </div>
  <div>
    <table>
      <tr>
        <td width="50%">
          <div class="photo-border">
              <img src="<?php echo $row['photo']; ?>" alt="学籍照片" id="old_photo" style="width: 132px;height: 172px">
              <h4>旧学籍照片</h4>
          </div>
        </td>
        <td width="50%">
          <div class="photo-border">
              <img src="" alt="学籍照片" id="new_photo" style="width: 132px;height: 172px">
              <h4>新学籍照片</h4>
          </div>
        </td>
      </tr>
      <tr>
      	<td colspan="2" style="text-align: left">
      		<h5>照片上传说明：</h5>
      		<p>1、学籍图片应为免冠证件照。</p>
      		<p>2、图片格式必须为gif、jpg、jpeg或png。</p>
      		<p>3、图片尺寸为120*160，且图片文件大小必须小于200kB。</p>
      	</td>
      </tr>
      <tr>
      	<form action="<?php echo 'upload_photo.php?id='.$stu_id; ?>" method="post" enctype="multipart/form-data">
      	<td>
	      <div class="chose_photo btn btn-primary">
	      <input type="file" name="file" id="file">
	      </div>
	    </td>
	    <td>
	      <input type="submit" name="submit" class="btn btn-success" value="确认上传">
	    </td>
	    </form>
      </tr>
    </table>
    
  </div>
  <?php 
    mysqli_close($conn);
    mysqli_free_result($result);
   ?>
  <script src="../../js/jquery-1.11.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
   <script type="text/javascript">
    // $(document).ready(function(){
    // });
    	$("#file").change(function(){
    		var objUrl = getObjectURL(this.files[0]) ;
			console.log("objUrl = "+objUrl);
			if (objUrl) {
				$("#new_photo").attr("src", objUrl);
			}
    	});
    	//建立一個可存取到該file的url
		function getObjectURL(file) {
		// window.URL.createObjectURL()
		// 方法会根据传入的参数创建一个指向该参数对象的URL. 
		// 这个URL的生命仅存在于它被创建的这个文档里. 
		// 新的对象URL指向执行的File对象或者是Blob对象.
		 var url = null ; 
		 if (window.createObjectURL!=undefined) { // basic
		  url = window.createObjectURL(file) ;
		 } else if (window.URL!=undefined) { // mozilla(firefox)
		  url = window.URL.createObjectURL(file) ;
		 } else if (window.webkitURL!=undefined) { // webkit or chrome
		  url = window.webkitURL.createObjectURL(file) ;
		 }
		 return url ;
		}
   </script>
  </body>
</html>
