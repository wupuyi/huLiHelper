<?php 
  include "connect_db.php";
  $sql="SELECT id,tea_name,tea_tel,name,power FROM tea_user";
  $result=mysqli_query($conn,$sql);
  while ($row=mysqli_fetch_array($result,MYSQL_ASSOC)) {
    $rows[]=$row;
  }
  // print_r($rows);
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>湖理小助手后台管理系统</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      /*导航高度*/
    	.breadcrumb{
    		line-height: 23px;
    	}
    	table, th, td{
  		border: 1px solid #ccc;
  		}
    	table{
  			width: 100%;
  		}

  		th,td{
  			height: 39px;
  			padding-left: 5px;
        font-size: 15px;
  		}
      .search{
        width: 50%;
        margin:20px 0;
      }
      thead{
        background-color: #eee;
      }
      .btn_margin{
        margin:0 5px;
      }
  

    </style>
  </head>
  <body >
	<div>
		<ol class="breadcrumb">
		  <li><a href="main.php">首页</a></li>
		  <li class="active">账号管理</li>
		</ol>
	</div>
	<div>
		<h3>老师账号管理</h3>
    <div class="input-group search">
      <input type="text" class="form-control" id="search_text" placeholder="请输入您要搜索的老师的姓名">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button" id="search">
        搜&nbsp&nbsp索
        </button>
      </span>
    </div><!-- /input-group -->
			<table>
        <thead>
  				<tr>
            <th width="5%">编号</th>
            <th>用户名</th>
            <th>手机号码</th>
            <th>老师姓名</th>
            <th>是否有教师权限</th>
            <th>操作</th>  
          </tr>
        </thead>
        <tbody>
          <?php foreach ($rows as $row):?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td ><?php echo $row['tea_name']; ?></td>
            <td ><?php echo $row['tea_tel']; ?></td>
            <td ><?php echo $row['name'];  ?></td>
            <td><?php if($row['power']==1){
              echo "是";
            }else{
              echo "否";
            }
            ?></td>
            <td>
            <button class="btn btn-danger btn_margin" onclick="edit_tea_del(<?php echo $row['id']; ?>)">删除账号
            </button>
            <button class="btn btn-warning btn_margin" onclick="edit_tea_pw(<?php echo $row['id']; ?>)">修改密码
            </button>
            <button class="btn btn-primary btn_margin" onclick="edit_tea_info(<?php echo $row['id']; ?>)">修改信息
            </button>
            </td>
          </tr>
        <?php endforeach; ?>

          </tbody>
			</table>
	</div>


	<script src="../js/jquery-1.11.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
    <script type="text/javascript">
      function edit_tea_info(id){
        window.location="tea_manage_edit_info.php?id="+id;

      }
      function edit_tea_pw(id){
        window.location="tea_manage_edit_pw.php?id="+id;

      }
      function edit_tea_del(id){
        var r=confirm("你确定要删除吗？");
        if (r) {
        window.location="tea_manage_del.php?id="+id;
        }
      }
      function search(){
        var name=$("#search_text").val();
        window.location="tea_manage_search.php?name="+name;
      }
      $('#search').click(function(){
        search();
      });
      //按下回车键是触发搜索键点击事件
      $("body").keydown(function() {
             if (event.keyCode == "13") {//keyCode=13是回车键
                 $('#search').click();
             }
      });
    </script>
  </body>
</html>
