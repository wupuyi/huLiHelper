<?php 
// include "../ver_stu_login.php";
// include "../connect_db.php";
// $stu_id=$_COOKIE['stu_id'];
// $sql="SELECT *  FROM stu_score WHERE stu_id='$stu_id'";
// $result=mysqli_query($conn,$sql);
// while ($row=mysqli_fetch_array($result,MYSQL_ASSOC)) {
//     $rows[]=$row;
// }
    $compulsory=0;
foreach ($rows as $score_re){
	$c_id=$score_re['c_id'];
    $sql2="SELECT * FROM stu_course WHERE c_id='$c_id'";
    $result2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_array($result2,MYSQLI_ASSOC);

    if($row2['c_attr']=="必修"&&$row2['c_type']=="公共基础课"){
	echo '<tr>
            <td>'.$score_re['c_id'].'</td>
            <td>'.$row2['c_attr'].'</td>
            <td class="bg-success">'.$row2['c_type'].'</td>
            <td>'.$row2['c_name'].'</td>
            <td>'.$row2['c_grade'].'</td>
            <td>'.$score_re['score'].'</td>
		</tr>';
	if ($score_re['score']=="优") {
		$compulsory=floatval($compulsory)+floatval($row2['c_grade']);
	}elseif ($score_re['score']=="良") {
		$compulsory=floatval($compulsory)+floatval($row2['c_grade']);
	}elseif ($score_re['score']=="中") {
		$compulsory=floatval($compulsory)+floatval($row2['c_grade']);
	}
	elseif ($score_re['score']=="及格") {
		$compulsory=floatval($compulsory)+floatval($row2['c_grade']);
	}elseif (floatval($score_re['score'])>=60) {
		$compulsory=floatval($compulsory)+floatval($row2['c_grade']);
	}
	}
}
foreach ($rows as $score_re){
	$c_id=$score_re['c_id'];
    $sql2="SELECT * FROM stu_course WHERE c_id='$c_id'";
    $result2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_array($result2,MYSQLI_ASSOC);
    if($row2['c_attr']=="必修"&&$row2['c_type']=="学科基础课"){
	echo '<tr>
            <td>'.$score_re['c_id'].'</td>
            <td>'.$row2['c_attr'].'</td>
            <td class="bg-info">'.$row2['c_type'].'</td>
            <td>'.$row2['c_name'].'</td>
            <td>'.$row2['c_grade'].'</td>
            <td>'.$score_re['score'].'</td>
		</tr>';
	if ($score_re['score']=="优") {
		$compulsory=floatval($compulsory)+floatval($row2['c_grade']);
	}elseif ($score_re['score']=="良") {
		$compulsory=floatval($compulsory)+floatval($row2['c_grade']);
	}elseif ($score_re['score']=="中") {
		$compulsory=floatval($compulsory)+floatval($row2['c_grade']);
	}
	elseif ($score_re['score']=="及格") {
		$compulsory=floatval($compulsory)+floatval($row2['c_grade']);
	}elseif (floatval($score_re['score'])>=60) {
		$compulsory=floatval($compulsory)+floatval($row2['c_grade']);
	}
	}

}
foreach ($rows as $score_re){
	$c_id=$score_re['c_id'];
    $sql2="SELECT * FROM stu_course WHERE c_id='$c_id'";
    $result2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_array($result2,MYSQLI_ASSOC);
    if($row2['c_attr']=="必修"&&$row2['c_type']=="专业课"){
	echo '<tr>
            <td>'.$score_re['c_id'].'</td>
            <td>'.$row2['c_attr'].'</td>
            <td class="bg-warning">'.$row2['c_type'].'</td>
            <td>'.$row2['c_name'].'</td>
            <td>'.$row2['c_grade'].'</td>
            <td>'.$score_re['score'].'</td>
		</tr>';
	if ($score_re['score']=="优") {
		$compulsory=floatval($compulsory)+floatval($row2['c_grade']);
	}elseif ($score_re['score']=="良") {
		$compulsory=floatval($compulsory)+floatval($row2['c_grade']);
	}elseif ($score_re['score']=="中") {
		$compulsory=floatval($compulsory)+floatval($row2['c_grade']);
	}
	elseif ($score_re['score']=="及格") {
		$compulsory=floatval($compulsory)+floatval($row2['c_grade']);
	}elseif (floatval($score_re['score'])>=60) {
		$compulsory=floatval($compulsory)+floatval($row2['c_grade']);
	}
	}
}
foreach ($rows as $score_re){
	$c_id=$score_re['c_id'];
    $sql2="SELECT * FROM stu_course WHERE c_id='$c_id'";
    $result2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_array($result2,MYSQLI_ASSOC);
    if($row2['c_attr']=="必修"&&$row2['c_type']!="专业课"&&$row2['c_type']!="学科基础课"&&$row2['c_type']!="公共基础课"){
	echo '<tr>
            <td>'.$score_re['c_id'].'</td>
            <td>'.$row2['c_attr'].'</td>
            <td class="bg-danger">'.$row2['c_type'].'</td>
            <td>'.$row2['c_name'].'</td>
            <td>'.$row2['c_grade'].'</td>
            <td>'.$score_re['score'].'</td>
		</tr>';
	if ($score_re['score']=="优") {
		$compulsory=floatval($compulsory)+floatval($row2['c_grade']);
	}elseif ($score_re['score']=="良") {
		$compulsory=floatval($compulsory)+floatval($row2['c_grade']);
	}elseif ($score_re['score']=="中") {
		$compulsory=floatval($compulsory)+floatval($row2['c_grade']);
	}
	elseif ($score_re['score']=="及格") {
		$compulsory=floatval($compulsory)+floatval($row2['c_grade']);
	}elseif (floatval($score_re['score'])>=60) {
		$compulsory=floatval($compulsory)+floatval($row2['c_grade']);
	}
	}
}

mysqli_close($conn);
mysqli_free_result($result);
?>