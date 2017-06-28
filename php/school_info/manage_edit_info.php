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
        font-weight: normal;
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
      <li class="active">添加学籍信息</li>
    </ol>
  </div>
  <div>
    <h3>添加学生学籍信息</h3>
    <form id="commentForm" method="post" action="manage_edit_info_sub.php?id=<?php echo $stu_id; ?>">
      <table>
        <tr>
          <td width="33.3%">
            <label for="school_id">学籍编号：</label>
            <?php echo $row['school_id']; ?>
          </td>
          <td width="33.3%">
            <label for="stu_id">学&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp号：</label>
            <input type="text" name="stu_id" id="stu_id" value="<?php echo $row['stu_id']; ?>">
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
            <input type="text" name="name" id="name" value="<?php echo $row['name'] ?>">
          </td>
          <td width="33.3%">
            <label for="sex">性&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp别：</label>
            <input type="radio" name="sex" value="男" <?php if($row['sex']=='男'){echo 'checked';} ?>>男&nbsp&nbsp&nbsp&nbsp&nbsp
            <input type="radio" name="sex" value="女" <?php if($row['sex']=='女'){echo 'checked';} ?>>女
          </td>
        </tr>
        <tr>
          <td width="33.3%">
            <label for="birth">出生日期：</label>
            <input type="text" name="birth" id="birth" value="<?php echo $row['birth']; ?>">
          </td>
          <td width="33.3%">
            <label for="nation">民&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp族：</label>
            <input type="text" name="nation" id="nation" value="<?php echo $row['nation']; ?>">
          </td>
        </tr>
        <tr>
          <td width="33.3%">
            <label for="political">政治面貌：</label>
            <select name="political" id="political" style="width: 174px;height: 26px">
              <option value="共青团员" <?php if($row['political']=='共青团员'){echo 'selected';} ?>>共青团员</option>
              <option value="党员"<?php if($row['political']=='党员'){echo 'selected';} ?>>党员</option>
              <option value="群众"<?php if($row['political']=='群众'){echo 'selected';} ?>>群众</option>
            </select>
          </td>
          <td width="33.3%">
            <label for="card_id">身份证号：</label>
            <input type="text" name="card_id" id="card_id" value="<?php echo $row['card_id']; ?>">
          </td>
        </tr>
        <tr>
          <td width="33.3%" colspan="2">
            <label for="address">家庭住址：</label>
            <input type="text" name="address" id="address" style="width: 544px" value="<?php echo $row['address']; ?>">
          </td>
        </tr>
        <tr>
          <td width="33.3%">
            <label for="department">所在院系：</label>
            <select name="department" id="department" style="width: 174px;height: 26px">
              <option value="计算机学院" <?php if($row['department']=='计算机学院'){echo 'selected';} ?>>计算机学院</option>
            </select>
          </td>
          <td width="33.3%">
            <label for="major">所在专业：</label>
            <select name="major" id="major" style="width: 174px;height: 26px">
              <option value="计算机科学与技术" <?php if($row['major']=='计算机科学与技术'){echo 'selected';} ?>>计算机科学与技术</option>
              <option value="网络工程" <?php if($row['major']=='网络工程'){echo 'selected';} ?>>网络工程</option>
              <option value="软件工程" <?php if($row['major']=='软件工程'){echo 'selected';} ?>>软件工程</option>
            </select>
          </td>
        </tr>

        <tr>
          <td width="33.3%">
            <label for="grade">年&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp级：</label>
            <select name="grade" id="grade" style="width: 174px;height: 26px">
              <option value="2013级"<?php if($row['grade']=='2013级'){echo 'selected';} ?>>2013级</option>
              <option value="2014级"<?php if($row['grade']=='2014级'){echo 'selected';} ?>>2014级</option>
              <option value="2015级"<?php if($row['grade']=='2015级'){echo 'selected';} ?>>2015级</option>
              <option value="2016级"<?php if($row['grade']=='2016级'){echo 'selected';} ?>>2016级</option>
            </select>
          </td>
          <td width="33.3%">
            <label for="class">班&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp级：</label>
            <input type="text" name="class" id="class" value="<?php echo $row['class']; ?>">
          </td>
        </tr>
        <tr>
          <td width="33.3%">
            <label for="entrance">入学时间：</label>
            <input type="text" name="entrance" id="entrance" value="<?php echo $row['entrance']; ?>">
          </td>
          <td width="33.3%">
            <label for="graduation">毕业时间：</label>
            <input type="text" name="graduation" id="graduation" value="<?php echo $row['graduation']; ?>">
          </td>
        </tr>
        <tr>
          <td width="33.3%">
            <label for="edu_cate">学历类别：</label>
            <select name="edu_cate" id="edu_cate" style="width: 174px;height: 26px">
              <option value="普通(统招)"<?php if($row['edu_cate']=='普通(统招)'){echo 'selected';} ?>>普通(统招)</option>
              <option value="普通专升本(统招)"<?php if($row['edu_cate']=='普通专升本(统招)'){echo 'selected';} ?>>普通专升本(统招)</option>
              <option value="成人高考"<?php if($row['edu_cate']=='成人高考'){echo 'selected';} ?>>成人高考</option>
              <option value="自考"<?php if($row['edu_cate']=='自考'){echo 'selected';} ?>>自考</option>
            </select>
          </td>
          <td width="33.3%">
            <label for="status">学籍状态：</label>
            <select name="status" id="status" style="width: 174px;height: 26px">
              <option value="注册学籍" <?php if($row['status']=='注册学籍'){echo 'selected';} ?>>注册学籍</option>
              <option value="已离校" <?php if($row['status']=='已离校'){echo 'selected';} ?>>已离校</option>
              <option value="保留学籍" <?php if($row['status']=='保留学籍'){echo 'selected';} ?>>保留学籍</option>
            </select>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <p style="line-height: 35px;margin-bottom: 0" class="info"><span class="w_info">填表说明：</span>所有信息应如实填写，涉及日期信息，如出生日期为1994年4月9日，填写格式为19940409！身份证末尾X统一为大写！
            </p>
          </td>
          <td align="center">
          <input type="submit" name="提交" class="btn btn-primary" value="修改学生信息" id="submit" >
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
