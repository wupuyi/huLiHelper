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
      width: 200px;
      font-size: 15px;
    }
    td{
      padding-left:5px;
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
    </style>
  </head>
  <body >
  <div>
    <ol class="breadcrumb">
      <li><a href="../main.php">首页</a></li>
      <li class="active">添加学生信息</li>
    </ol>
  </div>
  <div>
    <h3>添加学生信息</h3>
    <form id="commentForm" method="post" action="add_info_sub.php">
      <table>
        <tr>
          <th>学号</th>
          <td><input type="text" name="stu_id" id="stu_id"><span class="error" id="user_error"></span></td>
        </tr>
        <tr>
          <th>姓名</th>
          <td><input type="text" name="name" id="name"></td>
        </tr>
        <tr>
          <th>请输入电话号码</th>
          <td><input type="text" name="tel" id="tel"></td>
        </tr>
        <tr>
          <th>请输入QQ号码</th>
          <td><input type="text" name="qq" id="qq"></td>
        </tr>
        <tr>
          <th>家长姓名</th>
          <td><input type="text" name="parent" id="parent"></td>
        </tr>
        <tr>
          <th>家长电话</th>
          <td><input type="text" name="parent_tel" id="parent_tel"></td>
        </tr>
        <tr>
          <th>备注信息</th>
          <td><textarea name="other" rows="5" cols="50" id="other"></textarea></td>
        </tr>
        <tr align="right">
          <td colspan="2">
          <input type="submit" name="提交" class="btn btn-primary" value="添加学生信息" id="submit" >
          </td>
        </tr>
      </table>
    </form>
  </div>


  <script src="../../js/jquery-1.11.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      //当username失去焦点时，调用函数
      $("#stu_id").blur(function(){
        var stu_id=$("#stu_id").val();
        $.ajax({
          url:"stu_id_ajax.php",
          type:"POST",
          data:{
            stu_id:stu_id
          },
          success:function(result){
              $("#user_error").text(result);
            }
        });
    });
       // 手机号码验证         
      $.validator.addMethod("phoneCheck", function(value, element,param) 
        {         
          var length = value.length;     
          var mobile = /^(([1])+\d{10})$/;     
          return this.optional(element) || (length == 11 && mobile.test(value));         
        }, "请输入正确的手机号码");
        //学号验证
        $.validator.addMethod("idCheck", function(value, element,param) 
        {         
          var length = value.length;     
          var id = /^(([1])+\d{10})$/;     
          return this.optional(element) || (length == 11 && id.test(value));         
        }, "请输入正确的学号");
      // 表单验证
        var r=$("#commentForm").validate({
          rules:{
            stu_id:{
              required:true,
              minlength:11,
              maxlength:11,
              idCheck:true,
            },
            name:{
              required:true,
            },
            tel:{
              minlength:11,
              maxlength:11,
              phoneCheck:true,
            },
            parent_tel:{
              minlength:11,
              maxlength:11,
              phoneCheck:true,
            }
            },//rules
          messages: {
            stu_id:{
              required:"",
              minlength:"请输入11位学号",
              maxlength:"请输入11位学号",
              idCheck:"请输入正确的学号",
            },
            name:{
              required:"姓名不能为空",
            },
            tel:{
              minlength:"请输入11位手机号",
              maxlength:"请输入11位手机号",
              phoneCheck:"请输入最正确的手机号码",
            },
            parent_tel:{
              minlength:"请输入11位手机号",
              maxlength:"请输入11位手机号",
              phoneCheck:"请输入最正确的手机号码"
            }
           }//messages
        });
    });
    </script>
  </body>
</html>
