 $(document).ready(function(){
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
        //日期验证
        $.validator.addMethod("dateCheck", function(value, element,param) 
        {         
          var length = value.length;     
          var date = /^(\d{8})$/;     
          return this.optional(element) || (length == 8 && date.test(value));         
        }, "日期格式错误");
        // 身份证号码验证         
        jQuery.validator.addMethod("isIdCardNo", function(value, element,param) {         
            var length = value.length;     
            var date = /^([0-9]{17})+[X0-9]$/;   
            return this.optional(element) || (length == 18 && date.test(value));         
        }, "请正确输入您的身份证号码");  
      // 表单验证
        var r=$("#commentForm").validate({
          rules:{
            school_id:{
              required:true,
              minlength:19,
              maxlength:19,
            },
            stu_id:{
              required:true,
              minlength:11,
              maxlength:11,
              idCheck:true,
            },
            name:{
              required:true,
            },
            birth:{
              required:true,
              minlength:8,
              maxlength:8,
              dateCheck:true,
            },
            nation:{
              required:true,
              minlength:2,
              maxlength:10,
            },
            card_id:{
              required:true,
              minlength:18,
              maxlength:18,
              isIdCardNo:true,
            },
            address:{
              required:true,
              maxlength:50,
            },
            class:{
              required:true,
              maxlength:8,
            },
            entrance:{
              required:true,
              minlength:8,
              maxlength:8,
              dateCheck:true,
            },
            graduation:{
              required:true,
              minlength:8,
              maxlength:8,
              dateCheck:true,
            }
            },//rules
          messages: {
            school_id:{
              required:"<span class='glyphicon glyphicon-remove'></span>",
              minlength:"<span class='glyphicon glyphicon-remove'></span>",
              maxlength:"<span class='glyphicon glyphicon-remove'></span>",
            },
            stu_id:{
              required:"<span class='glyphicon glyphicon-remove'></span>",
              minlength:"<span class='glyphicon glyphicon-remove'></span>",
              maxlength:"<span class='glyphicon glyphicon-remove'></span>",
              idCheck:"<span class='glyphicon glyphicon-remove'></span>",
            },
            name:{
              required:"<span class='glyphicon glyphicon-remove'></span>",
            },
            birth:{
              required:"<span class='glyphicon glyphicon-remove'></span>",
              minlength:"<span class='glyphicon glyphicon-remove'></span>",
              maxlength:"<span class='glyphicon glyphicon-remove'></span>",
              dateCheck:"<span class='glyphicon glyphicon-remove'></span>",
            },
            nation:{
              required:"<span class='glyphicon glyphicon-remove'></span>",
              minlength:"<span class='glyphicon glyphicon-remove'></span>",
              maxlength:"<span class='glyphicon glyphicon-remove'></span>",
            },
            card_id:{
              required:"<span class='glyphicon glyphicon-remove'></span>",
              minlength:"<span class='glyphicon glyphicon-remove'></span>",
              maxlength:"<span class='glyphicon glyphicon-remove'></span>",
              isIdCardNo:"<span class='glyphicon glyphicon-remove'></span>",
            },
            address:{
              required:"<span class='glyphicon glyphicon-remove'></span>",
              maxlength:"<span class='glyphicon glyphicon-remove'></span>",
            },
            class:{
              required:"<span class='glyphicon glyphicon-remove'></span>",
              maxlength:"<span class='glyphicon glyphicon-remove'></span>",
            },
            entrance:{
              required:"<span class='glyphicon glyphicon-remove'></span>",
              minlength:"<span class='glyphicon glyphicon-remove'></span>",
              maxlength:"<span class='glyphicon glyphicon-remove'></span>",
              dateCheck:"<span class='glyphicon glyphicon-remove'></span>",
            },
            graduation:{
              required:"<span class='glyphicon glyphicon-remove'></span>",
              minlength:"<span class='glyphicon glyphicon-remove'></span>",
              maxlength:"<span class='glyphicon glyphicon-remove'></span>",
              dateCheck:"<span class='glyphicon glyphicon-remove'></span>",
            }
           }//messages
        });
    });