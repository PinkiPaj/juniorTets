$(document).ready(function (){
    
    var doc = document;
    var ind = doc.getElementsByName("dataBut");
    var len = ind.length
    var elemIn= doc.createElement("div")
    var wrap = doc.getElementById("decepyion")
    
    $('#Add').click(function(){
        window.location.replace("addProdukt.php");
    })
    $('#dvd').click(function (){        
    elemIn.id="decepyion";   
    
    elemIn.innerHTML='\
    <input id type="number" name="data" id="data" for="char1mb" >\n\
    Size(MB)<br> <p>enter the disc capacity</p>';           
    wrap.parentNode.replaceChild(elemIn, wrap);                        
                                      
    }); 
    $('#book').click(function (){        
    elemIn.id="decepyion";   
    
    elemIn.innerHTML='\
    <input type="number" name="data" id="data" for="char2kg">\n\
    Weight(KG)<br> <p>enter weight book</p>';
    wrap.parentNode.replaceChild(elemIn, wrap);                                   
                                      
    }); 
    $('#furniture').click(function (){        
    elemIn.id="decepyion";   
    
    elemIn.innerHTML='\
    <input type=" number" name="data" id="data" for="char3h" >Height(CM)<br> \n\
    <input type="number" name="data2" id="data2" for="char3w">Width(CM)<br>\n\
    <input type="number" name="data3" id="data3"  for="char3l">Length(CM)<br>\n\
    <p>enter dimensions furniture</p>';
    wrap.parentNode.replaceChild(elemIn, wrap);                                                
                                      
    });                    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
//    var field = ['sku','name','price','1','data','data2','data3'],
//     del = [],
//     $checknox = $('input[name="product"]');
//    $checknox.change(function (){
//        var checked = $(this).prop('checked')
//        var id = $(this).prop('id')
//        if(checked == "1"){
//            del.push(id)
//            console.log(del)
//        }else if (checked == "0") {
//            del= jQuery.grep(del, function(value){
//                return value != id;
//            })
//        }
//    })
//    $('#massDelete').click(function (){
//            $.ajax({
//            url:"model/ModelJs.php",
//            method:"get",
//            data:{del: JSON.stringify(del)},
//            success: function(res){  
//            }
//            });
//            location.reload();
//    });
//    $("#add").submit(function (){
//        var error=0
//        $("#add").find(":input").each(function(){
//           for(var i=0;i<field.length;i++){
//               if($(this).attr("name")== field[i]){
//                   if(!$(this).val()){
//                    $(this).addClass("error"); 
//                    error = 1                
//                   }else{
//                       $(this).removeClass("error");
//                   }
//               };
//           };
//        });
//        if(error != 1){
//          return true;  
//        }else{
//           return false;  
//        }
//    }); 
}) 