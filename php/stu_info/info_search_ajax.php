<?php 
  include "../connect_db.php";
  $name=$_POST['name'];
  $sql="SELECT * FROM stu_info WHERE name LIKE '$name'";
  $result=mysqli_query($conn,$sql);
  echo "<table>
          <thead>
            <tr>
              <th width='10%'>学号</th>
              <th>姓名</th>
              <th>手机号码</th>
              <th>QQ号码</th>
              <th>家长姓名</th>
              <th>家长电话</th>
              <th>备注</th> 
              <th>操作</th> 
            </tr>
          </thead>
        ";
          while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['stu_id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['stu_tel'] . "</td>";
            echo "<td>" . $row['stu_qq'] . "</td>";
            echo "<td>" . $row['parent'] . "</td>";
            echo "<td>" . $row['parent_tel'] . "</td>";
            echo "<td>" . $row['other'] . "</td>";
            echo"<td>";
            echo"<button class='btn btn-danger btn_margin' onclick='del_info(".$row['stu_id'].")'>删除信息
                 </button>";
            echo "<button class='btn btn-primary btn_margin' onclick='edit_info(".$row['stu_id'].")'>修改信息
                </button>";
            echo"</td>";
            echo"</tr>";
          }
          echo "</table>";


    mysqli_close($conn);
    mysqli_free_result($result);
 ?>



