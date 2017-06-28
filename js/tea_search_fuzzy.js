function add13(){
        jQuery("<option value='计13-1BJ'>计13-1BJ</option>").appendTo("#class");
        jQuery("<option value='计13-2BJ'>计13-2BJ</option>").appendTo("#class");
        jQuery("<option value='计13-3BJ'>计13-3BJ</option>").appendTo("#class");
        jQuery("<option value='计13-4BJ'>计13-4BJ</option>").appendTo("#class");
        jQuery("<option value='软件13-1BF'>软件13-1BF</option>").appendTo("#class");
        jQuery("<option value='网络13-1BF'>网络13-1BF</option>").appendTo("#class");
        jQuery("<option value='网络13-2BF'>网络13-2BF</option>").appendTo("#class");
      }
      function add14(){
        jQuery("<option value='计14-1BJ'>计14-1BJ</option>").appendTo("#class");
        jQuery("<option value='计14-2BJ'>计14-2BJ</option>").appendTo("#class");
        jQuery("<option value='计14-3BJ'>计14-3BJ</option>").appendTo("#class");
        jQuery("<option value='计14-4BJ'>计14-4BJ</option>").appendTo("#class");
        jQuery("<option value='软件14-1BF'>软件14-1BF</option>").appendTo("#class");
        jQuery("<option value='网络14-1BF'>网络14-1BF</option>").appendTo("#class");
        jQuery("<option value='网络14-2BF'>网络14-2BF</option>").appendTo("#class");
      }
      function add15(){
        jQuery("<option value='计15-1BJ'>计15-1BJ</option>").appendTo("#class");
        jQuery("<option value='计15-2BJ'>计15-2BJ</option>").appendTo("#class");
        jQuery("<option value='计15-3BJ'>计15-3BJ</option>").appendTo("#class");
        jQuery("<option value='计15-4BJ'>计15-4BJ</option>").appendTo("#class");
        jQuery("<option value='软件15-1BF'>软件15-1BF</option>").appendTo("#class");
        jQuery("<option value='网络15-1BF'>网络15-1BF</option>").appendTo("#class");
        jQuery("<option value='网络15-2BF'>网络15-2BF</option>").appendTo("#class");
      }
      function add16(){
        jQuery("<option value='计16-1BJ'>计16-1BJ</option>").appendTo("#class");
        jQuery("<option value='计16-2BJ'>计16-2BJ</option>").appendTo("#class");
        jQuery("<option value='计16-3BJ'>计16-3BJ</option>").appendTo("#class");
        jQuery("<option value='计16-4BJ'>计16-4BJ</option>").appendTo("#class");
        jQuery("<option value='软件16-1BF'>软件16-1BF</option>").appendTo("#class");
        jQuery("<option value='网络16-1BF'>网络16-1BF</option>").appendTo("#class");
        jQuery("<option value='网络16-2BF'>网络16-2BF</option>").appendTo("#class");
      }
      function del13(){
        $("#class option[value='计13-1BJ']").remove();  //删除Select中Value=''的Option
        $("#class option[value='计13-2BJ']").remove(); 
        $("#class option[value='计13-3BJ']").remove(); 
        $("#class option[value='计13-4BJ']").remove();
        $("#class option[value='软件13-1BF']").remove(); 
        $("#class option[value='网络13-1BF']").remove(); 
        $("#class option[value='网络13-2BF']").remove();    
      }
      function del14(){
        $("#class option[value='计14-1BJ']").remove();  //删除Select中Value=''的Option
        $("#class option[value='计14-2BJ']").remove(); 
        $("#class option[value='计14-3BJ']").remove(); 
        $("#class option[value='计14-4BJ']").remove();
        $("#class option[value='软件14-1BF']").remove(); 
        $("#class option[value='网络14-1BF']").remove(); 
        $("#class option[value='网络14-2BF']").remove();    
      }
      function del15(){
        $("#class option[value='计15-1BJ']").remove();  //删除Select中Value=''的Option
        $("#class option[value='计15-2BJ']").remove(); 
        $("#class option[value='计15-3BJ']").remove(); 
        $("#class option[value='计15-4BJ']").remove();
        $("#class option[value='软件15-1BF']").remove(); 
        $("#class option[value='网络15-1BF']").remove(); 
        $("#class option[value='网络15-2BF']").remove();    
      }
      function del16(){
        $("#class option[value='计16-1BJ']").remove();  //删除Select中Value=''的Option
        $("#class option[value='计16-2BJ']").remove(); 
        $("#class option[value='计16-3BJ']").remove(); 
        $("#class option[value='计16-4BJ']").remove();
        $("#class option[value='软件16-1BF']").remove(); 
        $("#class option[value='网络16-1BF']").remove(); 
        $("#class option[value='网络16-2BF']").remove();    
      }

      $("#grade").change(function(){
        var sel_grade=$("#grade").val()
        if (sel_grade=="2013级") {
          del13();
          del14();
          del15();
          del16();
          add13();
        }else if(sel_grade=="2014级") {
          del13();
          del14();
          del15();
          del16();
          add14();
        }else if(sel_grade=="2015级") {
          del13();
          del14();
          del15();
          del16();
          add15();
        }else if(sel_grade=="2016级") {
          del13();
          del14();
          del15();
          del16();
          add16();
        }
      });