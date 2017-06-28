<?php 
// include "../ver_stu_login.php";
// include "../connect_db.php";
// $stu_id=$_COOKIE['stu_id'];
// $sql="SELECT *  FROM stu_score WHERE stu_id='$stu_id'";
// $result=mysqli_query($conn,$sql);
// while ($row=mysqli_fetch_array($result,MYSQL_ASSOC)) {
//     $rows[]=$row;
// }
$elective1=0;
$elective2=0;
$elective3=0;
$elective4=0;
foreach ($rows as $score_re){
    $c_id=$score_re['c_id'];
    $sql2="SELECT * FROM stu_course WHERE c_id='$c_id'";
    $result2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_array($result2,MYSQLI_ASSOC);
    if($row2['c_attr']=="任选"&&$row2['c_type']=="专业课"){
    echo '<tr>
            <td>'.$score_re['c_id'].'</td>
            <td class="bg-success">'.$row2['c_attr'].'</td>
            <td class="bg-success">'.$row2['c_type'].'</td>
            <td>'.$row2['c_name'].'</td>
            <td>'.$row2['c_grade'].'</td>
            <td>'.$score_re['score'].'</td>
        </tr>';
    if ($score_re['score']=="优") {
        $elective1=floatval($elective1)+floatval($row2['c_grade']);
    }elseif ($score_re['score']=="良") {
        $elective1=floatval($elective1)+floatval($row2['c_grade']);
    }elseif ($score_re['score']=="中") {
        $elective1=floatval($elective1)+floatval($row2['c_grade']);
    }
    elseif ($score_re['score']=="及格") {
        $elective1=floatval($elective1)+floatval($row2['c_grade']);
    }elseif (floatval($score_re['score'])>=60) {
        $elective1=floatval($elective1)+floatval($row2['c_grade']);
    }
    }
}
foreach ($rows as $score_re){
    $c_id=$score_re['c_id'];
    $sql2="SELECT * FROM stu_course WHERE c_id='$c_id'";
    $result2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_array($result2,MYSQLI_ASSOC);
    if($row2['c_attr']=="任选"&&$row2['c_type']=="艺术类校选课"){
    echo '<tr>
            <td>'.$score_re['c_id'].'</td>
            <td class="bg-success">'.$row2['c_attr'].'</td>
            <td class="bg-success">'.$row2['c_type'].'</td>
            <td>'.$row2['c_name'].'</td>
            <td>'.$row2['c_grade'].'</td>
            <td>'.$score_re['score'].'</td>
        </tr>';
    if ($score_re['score']=="优") {
        $elective3=floatval($elective3)+floatval($row2['c_grade']);
    }elseif ($score_re['score']=="良") {
        $elective3=floatval($elective3)+floatval($row2['c_grade']);
    }elseif ($score_re['score']=="中") {
        $elective3=floatval($elective3)+floatval($row2['c_grade']);
    }
    elseif ($score_re['score']=="及格") {
        $elective3=floatval($elective3)+floatval($row2['c_grade']);
    }elseif (floatval($score_re['score'])>=60) {
        $elective3=floatval($elective3)+floatval($row2['c_grade']);
    }
    }
}
foreach ($rows as $score_re){
    $c_id=$score_re['c_id'];
    $sql2="SELECT * FROM stu_course WHERE c_id='$c_id'";
    $result2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_array($result2,MYSQLI_ASSOC);
    if($row2['c_attr']=="任选"&&$row2['c_type']=="社科类校选课"){
    echo '<tr>
            <td>'.$score_re['c_id'].'</td>
            <td class="bg-success">'.$row2['c_attr'].'</td>
            <td class="bg-success">'.$row2['c_type'].'</td>
            <td>'.$row2['c_name'].'</td>
            <td>'.$row2['c_grade'].'</td>
            <td>'.$score_re['score'].'</td>
        </tr>';
    if ($score_re['score']=="优") {
        $elective4=floatval($elective4)+floatval($row2['c_grade']);
    }elseif ($score_re['score']=="良") {
        $elective4=floatval($elective4)+floatval($row2['c_grade']);
    }elseif ($score_re['score']=="中") {
        $elective4=floatval($elective4)+floatval($row2['c_grade']);
    }
    elseif ($score_re['score']=="及格") {
        $elective4=floatval($elective4)+floatval($row2['c_grade']);
    }elseif (floatval($score_re['score'])>=60) {
        $elective4=floatval($elective4)+floatval($row2['c_grade']);
    }
    }
}
foreach ($rows as $score_re){
    $c_id=$score_re['c_id'];
    $sql2="SELECT * FROM stu_course WHERE c_id='$c_id'";
    $result2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_array($result2,MYSQLI_ASSOC);
    if($row2['c_attr']=="限选"){
    echo '<tr>
            <td>'.$score_re['c_id'].'</td>
            <td class="bg-info">'.$row2['c_attr'].'</td>
            <td class="bg-info">'.$row2['c_type'].'</td>
            <td>'.$row2['c_name'].'</td>
            <td>'.$row2['c_grade'].'</td>
            <td>'.$score_re['score'].'</td>
        </tr>';
    if ($score_re['score']=="优") {
        $elective2=floatval($elective2)+floatval($row2['c_grade']);
    }elseif ($score_re['score']=="良") {
        $elective2=floatval($elective2)+floatval($row2['c_grade']);
    }elseif ($score_re['score']=="中") {
        $elective2=floatval($elective2)+floatval($row2['c_grade']);
    }
    elseif ($score_re['score']=="及格") {
        $elective2=floatval($elective2)+floatval($row2['c_grade']);
    }elseif (floatval($score_re['score'])>=60) {
        $elective2=floatval($elective2)+floatval($row2['c_grade']);
    }
    }
}


mysqli_close($conn);
mysqli_free_result($result2);
?>