<?php 
  include "../connect_db.php";
  $stu_id=$_POST['stu_id'];
  $sql="SELECT * FROM stu_status WHERE stu_id='{$stu_id}'";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

  $f="'";
  	echo '<table class="table table-striped">
<tr>
	<td  width="50%" class="bg-primary" align="left">
		<img src="../../image/hnist_w.gif" width="114px" height="25px">
		<h5 style="font-size:20px;align:right;margin-top:50px">学生学籍卡</h5>
	</td>
	<td align="right" class="bg-primary"  width="50%">
		<img src="'.$row['photo'].'" alt="学籍照片" id="stu_photo" style="width: 120px;height: 160px">
	</td>
</tr>
<tr>
	<th class="text-primary text-right">姓名：</th>
	<td align="left">'.$row['name'].'</td>
</tr>
<tr>
	<th class="text-primary text-right">学籍编号：</th>
	<td align="left">'.$row['school_id'].'</td>
</tr>
<tr>
	<th class="text-primary text-right">学号：</th>
	<td align="left">'.$row['stu_id'].'</td>
</tr>
<tr>
	<th class="text-primary text-right">性别：</th>
	<td align="left">'.$row['sex'].'</td>
</tr>
<tr>
	<th class="text-primary text-right">出生日期：</th>
	<td align="left">'.$row['birth'].'</td>
</tr>
<tr>
	<th class="text-primary text-right">民族：</th>
	<td align="left">'.$row['nation'].'</td>
</tr>
<tr>
	<th class="text-primary text-right">政治面貌：</th>
	<td align="left">'.$row['political'].'</td>
</tr>
<tr>
	<th class="text-primary text-right">身份证号：</th>
	<td align="left">'.$row['card_id'].'</td>
</tr>
<tr>
	<th class="text-primary text-right">家庭住址：</th>
	<td align="left">'.$row['address'].'</td>
</tr>
<tr>
	<th class="text-primary text-right">所在院系：</th>
	<td align="left">'.$row['department'].'</td>
</tr>
<tr>
	<th class="text-primary text-right">所在专业：</th>
	<td align="left">'.$row['major'].'</td>
</tr>
<tr>
	<th class="text-primary text-right">年级：</th>
	<td align="left">'.$row['grade'].'</td>
</tr>
<tr>
	<th class="text-primary text-right">班级：</th>
	<td align="left">'.$row['class'].'</td>
</tr>
<tr>
	<th class="text-primary text-right">入学时间：</th>
	<td align="left">'.$row['entrance'].'</td>
</tr>
<tr>
	<th class="text-primary text-right">毕业时间：</th>
	<td align="left">'.$row['graduation'].'</td>
</tr>
<tr>
	<th class="text-primary text-right">学历类别：</th>
	<td align="left">'.$row['edu_cate'].'</td>
</tr>
<tr>
	<th class="text-primary text-right">学籍状态：</th>
	<td align="left">'.$row['status'].'</td>
</tr>
<tr>
	<td colspan="3"><button class="btn  btn-primary btn-block" onclick="edit_school('.$f.''.$row['school_id'].''.$f.')">修改学籍信息</button></td>
</tr>
</table>';

	mysqli_close($conn);
	mysqli_free_result($result);
?>