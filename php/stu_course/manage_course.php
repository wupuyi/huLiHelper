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
      <li><a href="../main.php">首页</a></li>
      <li class="active">课程信息管理</li>
    </ol>
  </div>
  <div>
    <h3>课程信息管理</h3>
    <div class="input-group search">
      <input type="text" class="form-control" id="search_text" placeholder="请输入您要搜索的课程名">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button" id="search">
        搜&nbsp&nbsp索
        </button>
      </span>
    </div><!-- /input-group -->
    <!-- 显示搜索结果 -->
    <div id="search_result"></div>
  </div>


  <script src="../../js/jquery-1.11.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
    <script type="text/javascript">
      function edit_course(id){

        window.location="manage_edit_course.php?id="+id;

      }
      function del_course(id){

        var r=confirm("你确定要删除吗？");
        if (r) {
        window.location="manage_del_course.php?id="+id;
        }
      }
      function add_score(id){
        window.location="add_score.php?id="+id;
      }
      function showsite(str){
        $.ajax({
          url:"course_search_ajax.php",
          type:"POST",
          data:{
            name:str
          },
          success:function(result){
              $("#search_result").html(result);
          }
      });
      }

      function search(){
        var name=$("#search_text").val();
        showsite(name);
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
