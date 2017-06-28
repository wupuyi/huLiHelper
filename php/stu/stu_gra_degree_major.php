<?php 
$major=0;
foreach ($rows as $score_re){
    $c_id=$score_re['c_id'];
    $sql2="SELECT * FROM stu_course WHERE c_id='$c_id'";
    $result2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_array($result2,MYSQLI_ASSOC);
    if($row2['c_name']=="程序设计语言"){
        echo '<tr>
                <td>'.$row2['c_name'].'</td>
                <td>'.$score_re['score'].'</td>
            </tr>';
        $major=$major+floatval($score_re['score']);
    }
}
foreach ($rows as $score_re){
    $c_id=$score_re['c_id'];
    $sql2="SELECT * FROM stu_course WHERE c_id='$c_id'";
    $result2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_array($result2,MYSQLI_ASSOC);
    if($row2['c_name']=="数据结构"){
        echo '<tr>
                <td>'.$row2['c_name'].'</td>
                <td>'.$score_re['score'].'</td>
            </tr>';
    $major=$major+floatval($score_re['score']);
    }
}
foreach ($rows as $score_re){
    $c_id=$score_re['c_id'];
    $sql2="SELECT * FROM stu_course WHERE c_id='$c_id'";
    $result2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_array($result2,MYSQLI_ASSOC);
    if($row2['c_name']=="算法设计与分析"){
        echo '<tr>
                <td>'.$row2['c_name'].'</td>
                <td>'.$score_re['score'].'</td>
            </tr>';
    if ($score_re['score']=="优") {
       $major=$major+90;
    }elseif ($score_re['score']=="良") {
       $major=$major+80;
    }elseif ($score_re['score']=="中") {
       $major=$major+70;
    }elseif ($score_re['score']=="及格") {
       $major=$major+60;
    }elseif ($score_re['score']=="不及格") {
       $major=$major+0;
    }
    
    }
}
foreach ($rows as $score_re){
    $c_id=$score_re['c_id'];
    $sql2="SELECT * FROM stu_course WHERE c_id='$c_id'";
    $result2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_array($result2,MYSQLI_ASSOC);
    if($row2['c_name']=="计算机组成原理"){
        echo '<tr>
                <td>'.$row2['c_name'].'</td>
                <td>'.$score_re['score'].'</td>
            </tr>';
    $major=$major+floatval($score_re['score']);
    }
}
foreach ($rows as $score_re){
    $c_id=$score_re['c_id'];
    $sql2="SELECT * FROM stu_course WHERE c_id='$c_id'";
    $result2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_array($result2,MYSQLI_ASSOC);
    if($row2['c_name']=="微机原理与接口"){
        echo '<tr>
                <td>'.$row2['c_name'].'</td>
                <td>'.$score_re['score'].'</td>
            </tr>';
    $major=$major+floatval($score_re['score']);
    }
}
foreach ($rows as $score_re){
    $c_id=$score_re['c_id'];
    $sql2="SELECT * FROM stu_course WHERE c_id='$c_id'";
    $result2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_array($result2,MYSQLI_ASSOC);
    if($row2['c_name']=="操作系统"){
        echo '<tr>
                <td>'.$row2['c_name'].'</td>
                <td>'.$score_re['score'].'</td>
            </tr>';
    $major=$major+floatval($score_re['score']);
    }
}
foreach ($rows as $score_re){
    $c_id=$score_re['c_id'];
    $sql2="SELECT * FROM stu_course WHERE c_id='$c_id'";
    $result2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_array($result2,MYSQLI_ASSOC);
    if($row2['c_name']=="数据库原理"){
        echo '<tr>
                <td>'.$row2['c_name'].'</td>
                <td>'.$score_re['score'].'</td>
            </tr>';
    $major=$major+floatval($score_re['score']);
    }
}
foreach ($rows as $score_re){
    $c_id=$score_re['c_id'];
    $sql2="SELECT * FROM stu_course WHERE c_id='$c_id'";
    $result2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_array($result2,MYSQLI_ASSOC);
    if($row2['c_name']=="计算机网络原理"){
        echo '<tr>
                <td>'.$row2['c_name'].'</td>
                <td>'.$score_re['score'].'</td>
            </tr>';
    $major=$major+floatval($score_re['score']);
    }
}
foreach ($rows as $score_re){
    $c_id=$score_re['c_id'];
    $sql2="SELECT * FROM stu_course WHERE c_id='$c_id'";
    $result2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_array($result2,MYSQLI_ASSOC);
    if($row2['c_name']=="软件工程"){
        echo '<tr>
                <td>'.$row2['c_name'].'</td>
                <td>'.$score_re['score'].'</td>
            </tr>';
    if ($score_re['score']=="优") {
       $major=$major+90;
    }elseif ($score_re['score']=="良") {
       $major=$major+80;
    }elseif ($score_re['score']=="中") {
       $major=$major+70;
    }elseif ($score_re['score']=="及格") {
       $major=$major+60;
    }elseif ($score_re['score']=="不及格") {
       $major=$major+0;
    }
    }
}
foreach ($rows as $score_re){
    $c_id=$score_re['c_id'];
    $sql2="SELECT * FROM stu_course WHERE c_id='$c_id'";
    $result2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_array($result2,MYSQLI_ASSOC);
    if($row2['c_name']=="编译原理"){
        echo '<tr>
                <td>'.$row2['c_name'].'</td>
                <td>'.$score_re['score'].'</td>
            </tr>';
    $major=$major+floatval($score_re['score']);
    }
}

$major_avg=$major/10;
echo '<tr>
    <td class="bg-warning">当前平均分：'.$major_avg.'分</td>
    <td class="bg-danger">毕业要求：学位课程平均分70分以上</td>
    </tr>';


mysqli_close($conn);
mysqli_free_result($result2);
?>