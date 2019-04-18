
function validate() {
    var p=document.REGISTER.Product.value;
    if(p==""||p==null){
        document.getElementById("sname").innerHTML="Enter product name";
        return false ;
    }
    var catog=document.REGISTER.Category.value;
    if(catog==""||catog==null){
        document.getElementById("cname").innerHTML="Enter product category";
        return false ;
    }
    var price=document.REGISTER.Price.value;
    if(price==""||price==null){
        document.getElementById("pname").innerHTML="Enter product price";
        return false ;
    }
    if(price<0)
        {
            document.getElementById("pname").innerHTML="Invalid price";
        return false ;
            
        }
     var quant=document.REGISTER.quant.value;
    if(quant==""||quant==null){
        document.getElementById("qname").innerHTML="Enter product quant";
        return false ;
    }
    if(quant<0)
        {
            document.getElementById("qname").innerHTML="Invalid quant";
        return false ;
            
        }
}
