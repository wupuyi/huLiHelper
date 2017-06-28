
<?php 
  include "../connect_db.php";
  $stu_id=$_POST['name'];
  $sql="SELECT * FROM stu_score WHERE stu_id='$stu_id'";
  $result=mysqli_query($conn,$sql);
  echo "<table>
          <thead>
            <tr>
              <th>成绩序号</th>
              <th>课程编号</th>
              <th>学号</th>
              <th>成绩</th>
              <th>操作</th>
  
            </tr>
          </thead>
        ";
          while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['c_id'] . "</td>";
            echo "<td>" . $row['stu_id'] . "</td>";
            echo "<td>" . $row['score'] . "</td>";
            echo"<td  align='left'>";
            echo"<button class='btn btn-danger btn_margin' onclick='del_score(".$row['id'].")'>删除成绩
                 </button>";
            echo "<button class='btn btn-primary btn_margin' onclick='edit_score(".$row['id'].")'>修改成绩
                </button>";
            echo"</td>";
            echo"</tr>";
          }
          echo "</table>";


mysqli_close($conn);
mysqli_free_result($result);
 ?>



