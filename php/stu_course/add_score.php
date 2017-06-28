<?php 
$c_id=$_GET['id'];
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
      th{
        height: 39px;
        padding-left: 5px;
        font-weight: normal;
        font-size: 15px;
        width: 200px;
      }
      td{
        height: 39px;
        padding:0 5px;
      }
      .btn{
        margin: 5px;
      }
      .error{
        color: red;
        font-weight: normal;
      }
    </style>
  </head>
  <body >
  <div>
    <ol class="breadcrumb">
      <li><a href="../main.php">首页</a></li>
      <li class="active">录入成绩</li>
    </ol>
  </div>
  <div>
    <h3>添加成绩信息</h3>
    <form id="commentForm" method="post" action="add_score_sub.php">
      <table>
        <tr>
          <th>课程编号</th>
          <td>
          <input type="hidden" name="c_id" id="c_id" value="<?php echo $c_id; ?>" readonly> 
          <label style="padding-left:5px;font-size: 15px;font-weight: normal;"><?php echo $c_id; ?></label>
          </td> 
        </tr>
        <tr>
          <th>请输入学号</th>
          <td>
          <input type="text" name="stu_id" id="stu_id">
          </td>
        </tr>
        <tr>  
          <th>请输入成绩</th>
          <td>
          <input type="text" name="score" id="score">
          </td>
        </tr>
        <tr align="right">
          <td colspan="8">
          <input type="submit" name="提交" class="btn btn-success" value="录入成绩" id="submit" >
          </td>
        </tr>
      </table>
    </form>
  </div>


  <script src="../../js/jquery-1.11.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
    <script type="text/javascript">
    //学号验证
        $.validator.addMethod("idCheck", function(value, element,param) 
        {         
          var length = value.length;     
          var id = /^(([1])+\d{10})$/;     
          return this.optional(element) || (length == 11 && id.test(value));         
        }, "请输入正确的学号");
    $(document).ready(function(){
        var r=$("#commentForm").validate({
          rules:{
          	stu_id:{
          		required:true,
          		minlength:11,
          		maxlength:11,
          		idCheck:true,
          	},
          	score:{
          		required:true,
          	}
            },//rules
          messages: {
			stu_id:{
          		required:"学号不能为空",
          		minlength:"请输入11位学号",
          		maxlength:"请输入11位学号",
          		idCheck:"请输入正确的学号",
          	},
          	score:{
          		required:"成绩不能为空",
          	}
           }//messages
        });
    });
    </script>
  </body>
</html>
