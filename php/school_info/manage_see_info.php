<?php 
  include "../connect_db.php";
  $stu_id=$_GET['id'];
  $sql="SELECT * FROM stu_status WHERE stu_id='{$stu_id}'";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>湖理小助手后台管理系统</title>
    <link href="../../css/bootstrap.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      .breadcrumb{
        line-height: 23px;
      }
      table, th, td{
      border: 1px solid #ccc;
      }
      table{
        width: 100%;
      }
     label{
        font-size: 15px;
        font-weight: bold;
        line-height: 35px;
        margin: 0;
        width: 100px;
        text-align: center;
      }
     td{
        padding-left:5px;
      }
      input{
        margin-top: 2px;
      }
      textarea{
        margin-top: 5px;
      }
      .btn{
        margin: 5px;
      }
      .error{
        color: red;
        font-weight: normal;
      }
      form label.error{width:20px;color: Red;}
      .w_info{
        color: red;

      }
      .info{
        font-size: 12px;
      }
      .photo-border img{
        padding: 5px;
        border: 1px solid #ccc;
      }
    </style>
  </head>
  <body >
  <div>
    <ol class="breadcrumb">
      <li><a href="../main.php">首页</a></li>
      <li class="active">查看学籍信息</li>
    </ol>
  </div>
  <div>
    <h3>查看学生学籍信息</h3>
    <form id="commentForm" method="post" action="add_info_sub.php">
      <table>
        <tr>
          <td width="33.3%">
            <label for="school_id">学籍编号：</label>
            <?php echo $row['school_id']; ?>
          </td>
          <td width="33.3%">
            <label for="stu_id">学&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp号：</label>
            <?php echo $row['stu_id']; ?>
          </td>
          <td width="33.3%" rowspan="9" align="center">
            <div class="photo-border">
              <img src="<?php echo $row['photo']; ?>" alt="学籍照片" id="stu_photo" style="width: 132px;height: 172px">
            </div>
            <label for="photo">学生学籍照片</label>
          </td>
        </tr>
        <tr>
          <td width="33.3%">
            <label for="name">姓&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp名：</label>
            <?php echo $row['name']; ?>
          </td>
          <td width="33.3%">
            <label for="sex">性&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp别：</label>
            <?php echo $row['sex']; ?>
          </td>
        </tr>
        <tr>
          <td width="33.3%">
            <label for="birth">出生日期：</label>
            <?php echo $row['birth']; ?>
          </td>
          <td width="33.3%">
            <label for="nation">民&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp族：</label>
            <?php echo $row['nation']; ?>
          </td>
        </tr>
        <tr>
          <td width="33.3%">
            <label for="political">政治面貌：</label>
            <?php echo $row['political']; ?>
          </td>
          <td width="33.3%">
            <label for="card_id">身份证号：</label>
            <?php echo $row['card_id']; ?>
          </td>
        </tr>
        <tr>
          <td width="33.3%" colspan="2">
            <label for="address">家庭住址：</label>
            <?php echo $row['address']; ?>
          </td>
        </tr>
        <tr>
          <td width="33.3%">
            <label for="department">所在院系：</label>
            <?php echo $row['department']; ?>
          </td>
          <td width="33.3%">
            <label for="major">所在专业：</label>
            <?php echo $row['major']; ?>
          </td>
        </tr>

        <tr>
          <td width="33.3%">
            <label for="grade">年&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp级：</label>
            <?php echo $row['grade']; ?>
          </td>
          <td width="33.3%">
            <label for="class">班&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp级：</label>
            <?php echo $row['class']; ?>
          </td>
        </tr>
        <tr>
          <td width="33.3%">
            <label for="entrance">入学时间：</label>
            <?php echo $row['entrance']; ?>
          </td>
          <td width="33.3%">
            <label for="graduation">毕业时间：</label>
            <?php echo $row['graduation']; ?>
          </td>
        </tr>
        <tr>
          <td width="33.3%">
            <label for="edu_cate">学历类别：</label>
            <?php echo $row['edu_cate']; ?>
          </td>
          <td width="33.3%">
            <label for="status">学籍状态：</label>
            <?php echo $row['status']; ?>
          </td>
        </tr>

      </table>
    </form>
  </div>
  <?php 
    mysqli_close($conn);
    mysqli_free_result($result);
   ?>

  <script src="../../js/jquery-1.11.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
    <script src="../../js/school_add_info.js"></script>
  </body>
</html>
