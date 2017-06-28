<?php 
$en=0;
foreach ($rows as $score_re){
    $c_id=$score_re['c_id'];
    $sql2="SELECT * FROM stu_course WHERE c_id='$c_id'";
    $result2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_array($result2,MYSQLI_ASSOC);
    if($row2['c_name']=="大学英语A(1)"){
        echo '<tr>
                <td>'.$row2['c_name'].'</td>
                <td>'.$score_re['score'].'</td>
            </tr>';
        $en=$en+floatval($score_re['score']);
    }
}
foreach ($rows as $score_re){
    $c_id=$score_re['c_id'];
    $sql2="SELECT * FROM stu_course WHERE c_id='$c_id'";
    $result2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_array($result2,MYSQLI_ASSOC);
    if($row2['c_name']=="大学英语A(2)"){
        echo '<tr>
                <td>'.$row2['c_name'].'</td>
                <td>'.$score_re['score'].'</td>
            </tr>';
    $en=$en+floatval($score_re['score']);
    }
}
foreach ($rows as $score_re){
    $c_id=$score_re['c_id'];
    $sql2="SELECT * FROM stu_course WHERE c_id='$c_id'";
    $result2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_array($result2,MYSQLI_ASSOC);
    if($row2['c_name']=="大学英语A(3)"){
        echo '<tr>
                <td>'.$row2['c_name'].'</td>
                <td>'.$score_re['score'].'</td>
            </tr>';
    $en=$en+floatval($score_re['score']);
    }
}
foreach ($rows as $score_re){
    $c_id=$score_re['c_id'];
    $sql2="SELECT * FROM stu_course WHERE c_id='$c_id'";
    $result2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_array($result2,MYSQLI_ASSOC);
    if($row2['c_name']=="大学英语A(4)"){
        echo '<tr>
                <td>'.$row2['c_name'].'</td>
                <td>'.$score_re['score'].'</td>
            </tr>';
    $en=$en+floatval($score_re['score']);
    }
}
$en_avg=$en/4;
echo '<tr>
    <td class="bg-warning">当前平均分：'.$en_avg.'分</td>
    <td class="bg-danger">毕业要求：四级成绩400分以上，或平均分大于70分</td>
    </tr>';

mysqli_close($conn);
mysqli_free_result($result2);
?>