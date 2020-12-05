
function check(){
    var doc = document;
    var ind = doc.getElementsByName("dataBut");
    var len = ind.length
    var elemIn= doc.createElement("div")
    var wrap = doc.getElementById("decepyion")
    for(i=0;i<len;i++){
        if(ind[i].checked){
            elemIn.id="decepyion";
            if (ind[i].value == "dvd"){
                elemIn.innerHTML='\
                <input id type="number" name="data" id="data" for="char1mb" >\n\
                Size(MB)<br> <p>enter the disc capacity</p>';
                wrap.parentNode.replaceChild(elemIn, wrap);
            }else if (ind[i].value == "book") {
                elemIn.innerHTML='\
                <input type="number" name="data" id="data" for="char2kg">\n\
                Weight(KG)<br> <p>enter weight book</p>';
                wrap.parentNode.replaceChild(elemIn, wrap);
            }else if (ind[i].value == "furniture") {
                elemIn.innerHTML='\
                <input type=" number" name="data" id="data" for="char3h" >Height(CM)<br> \n\
                <input type="number" name="data2" id="data2" for="char3w">Width(CM)<br>\n\
                <input type="number" name="data3" id="data3"  for="char3l">Length(CM)<br>\n\
                <p>enter dimensions furniture</p>';
                wrap.parentNode.replaceChild(elemIn, wrap);
            }
        }
    }
}


    

