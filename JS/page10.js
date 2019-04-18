function validation_pass()
{
    var name=document.vend.vendor.value;
    if(name==""||name==null){
        document.getElementById("span_n").innerHTML="Enter Your Name";
        return false ;
    }
    var pass=document.vend.pass.value;
    if(pass=="")
        {
            document.getElementById("span_p").innerHTML="invalid password";
            return false;
        }
    
}