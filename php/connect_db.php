<?php 
	//连接管理员数据库
	$servername="localhost";
	$username="wupuyi";
	$password="x8023p216.";
	$db_name="hnist_stu";
	$conn=mysqli_connect($servername,$username,$password,$db_name);
	// $servername="w.rdc.sae.sina.com.cn";
	// $port="3306";
	// $username="wxko3ow1y4";
	// $password="wk1x0jl0zh0kywhky4ll023041yyhjxlzjmzmyl2";
	// $db_name="app_hulizs";
	// $conn=mysqli_connect($servername,$username,$password,$db_name,$port);
	if (!$conn) {
		die("连接失败：".mysqli_connect_error());
	}
	mysqli_query($conn,"set names utf8");//设置编码方式，防止中文乱码
	//echo "连接失败";

?>