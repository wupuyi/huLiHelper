      //自定义方法，验证输入内容位数字和字母
      $.validator.addMethod("stringCheck", function(value, element,param) 
      {return this.optional(element) || /^[a-zA-Z0-9]+$/.test(value);         
      },
       "只能包括英文字母、数字");    
   		 //学号验证
        $.validator.addMethod("idCheck", function(value, element,param) 
        {         
          var length = value.length;     
          var id = /^(([1])+\d{10})$/;     
          return this.optional(element) || (length == 11 && id.test(value));         
        }, "请输入正确的学号");
        // 身份证号码验证         
        jQuery.validator.addMethod("isIdCardNo", function(value, element,param) {         
            var length = value.length;     
            var date = /^([0-9]{17})+[X0-9]$/;   
            return this.optional(element) || (length == 18 && date.test(value));         
        }, "请正确输入您的身份证号码"); 

     	// 表单验证
      	var r=$("#commentForm").validate({
          rules:{
            username:{
              required:true,
              minlength: 6,
              maxlength:18,
              stringCheck:true
            },
            password:{
              required:true,
              minlength:6,
              maxlength:18,
              stringCheck:true
            },
            password2:{
              equalTo: '#password'
            },
            stu_id:{
              required:true,
              minlength:11,
              maxlength:11,
              idCheck:true,
            },
            card_id:{
              required:true,
              minlength:18,
              maxlength:18,
              isIdCardNo:true,
            }
            },//rules
          messages: {
            username:{
              required:"用户名不能为空",
              minlength:"最少6~18位字母或数字的组合",
              maxlength:"最少6~18位字母或数字的组合",
              stringCheck:"只能输入英文字母和数字"
            },
            password:{
              required:"密码不能为空",
              minlength:"最少6~18位字母或数字的组合",
              maxlength:"最少6~18位字母或数字的组合",
              stringCheck:"只能输入英文字母和数字"
            },
            password2:{
              equalTo:"两次输入密码不一致，请重新输入"
            },
            stu_id:{
              required:"学号不能为空",
              minlength:"请输入11位学号",
              maxlength:"请输入11位学号",
              idCheck:"请输入正确的学号",
            },
            card_id:{
              required:"身份证号码不能为空",
              minlength:"请输入18位身份证号码",
              maxlength:"请输入18位身份证号码",
              isIdCardNo:"请输入正确的身份证号码",
            }
           }//messages
        });