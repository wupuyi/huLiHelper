<?php
$power=$_COOKIE['power'];
if ($power=="0") {
	echo '<script type="text/javascript">alert("对不起，您还未获得权限！");window.location="../tea/tea_welcome.php";</script>';
			
}
?>