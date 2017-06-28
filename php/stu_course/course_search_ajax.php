
<?php 
  include "../connect_db.php";
  $c_name=$_POST['name'];
  $sql="SELECT * FROM stu_course WHERE c_name LIKE '$c_name'";
  $result=mysqli_query($conn,$sql);
  echo "<table>
          <thead>
            <tr>
              <th>课程编号</th>
              <th>课程名称</th>
              <th>开课学院</th>
              <th>开课专业</th>
              <th>学分</th>
              <th>学时</th>
              <th>课程属性</th>
              <th>课程类型</th>
            </tr>
          </thead>
        ";
          while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['c_id'] . "</td>";
            echo "<td>" . $row['c_name'] . "</td>";
            echo "<td>" . $row['c_dep'] . "</td>";
            echo "<td>" . $row['c_major'] . "</td>";
            echo "<td>" . $row['c_grade'] . "</td>";
            echo "<td>" . $row['c_time'] . "</td>";
            echo "<td>" . $row['c_attr'] . "</td>";
            echo "<td>" . $row['c_type'] . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo"<td  align='right' colspan='8'>";
            $f='"'; //传递的参数为字符串，给参数加引号
            echo"<button class='btn btn-danger btn_margin' onclick='del_course(".$f."".$row['c_id']."".$f.")'>删除信息
                 </button>";
            echo "<button class='btn btn-primary btn_margin' onclick='edit_course(".$f."".$row['c_id']."".$f.")'>修改信息
                </button>";
            echo "<button class='btn btn-success btn_margin' onclick='add_score(".$f."".$row['c_id']."".$f.")'>成绩录入
                </button>";
            echo"</td>";
            echo"</tr>";
          }
          echo "</table>";



          mysqli_close($conn);
          mysqli_free_result($result);
 ?>



