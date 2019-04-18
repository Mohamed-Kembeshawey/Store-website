function validat() {
    var p=document.vend.Search.value;
    if(p==""||p==null){
        document.getElementById("sapn_s").innerHTML="Enter product name";
        return false ;
    }
     var quant=document.vend.Quant.value;
    if(quant==""||quant==null){
        document.getElementById("span_n").innerHTML="Enter product quant";
        return false ;
    }
    if(quant<0)
        {
            document.getElementById("span_n").innerHTML="Invalid quant";
        return false ;
            
        }
}

