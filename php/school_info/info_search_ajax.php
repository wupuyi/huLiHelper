<?php 
  include "../connect_db.php";
  $name=$_POST['name'];
  $sql="SELECT * FROM stu_status WHERE name LIKE '$name'";
  $result=mysqli_query($conn,$sql);
  echo "<table>
          <thead>
            <tr>
              <th>学籍编号</th>
              <th>学号</th>
              <th>姓名</th>
              <th>所在院系</th>
              <th>所在专业</th>
              <th>年级</th>
              <th>班级</th>
              <th>操作</th>
            </tr>
          </thead>
        ";
          while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['school_id'] . "</td>";
            echo "<td>" . $row['stu_id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['department'] . "</td>";
            echo "<td>" . $row['major'] . "</td>";
            echo "<td>" . $row['grade'] . "</td>";
            echo "<td>" . $row['class'] . "</td>";
            echo"<td  align='center'>";
            echo"<button class='btn btn-danger btn_margin' onclick='del_info(".$row['stu_id'].")'>删除信息
                 </button>";
            echo "<button class='btn btn-primary btn_margin' onclick='edit_info(".$row['stu_id'].")'>修改信息
                </button>";
            echo "<button class='btn btn-info btn_margin' onclick='see_info(".$row['stu_id'].")'>详细信息
            </button>";
            echo "<button class='btn btn-success btn_margin' onclick='photo_info(".$row['stu_id'].")'>更新照片
            </button>";
            echo"</td>";
            echo"</tr>";
          }
          echo "</table>";

    mysqli_close($conn);
    mysqli_free_result($result);
 ?>



