$(document).ready(function (){
    var field = ['sku','name','price','1','data','data2','data3'],
     del = [],
     $checknox = $('input[name="product"]');
    $checknox.change(function (){
        var checked = $(this).prop('checked')
        var id = $(this).prop('id')
        if(checked == "1"){
            del.push(id)
            console.log(del)
        }else if (checked == "0") {
            del= jQuery.grep(del, function(value){
                return value != id;
            })
        }
    })
    $('#massDelete').click(function (){
            $.ajax({
            url:"model/ModelJs.php",
            method:"get",
            data:{del: JSON.stringify(del)},
            success: function(res){  
            }
            });
            location.reload();
    });
    $("#add").submit(function (){
        var error=0
        $("#add").find(":input").each(function(){
           for(var i=0;i<field.length;i++){
               if($(this).attr("name")== field[i]){
                   if(!$(this).val()){
                    $(this).addClass("error"); 
                    error = 1                
                   }else{
                       $(this).removeClass("error");
                   }
               };
           };
        });
        if(error != 1){
          return true;  
        }else{
           return false;  
        }
    }); 
    });