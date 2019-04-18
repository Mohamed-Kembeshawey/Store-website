
function validation_pass()
{
    var name=document.post.name.value;
    if(name==""||name==null){
        document.getElementById("span_name").innerHTML="Enter Your Name";
        return false ;
    }
    var em=document.post.email.value;
    if(em=="")
        {
            document.getElementById("span_email").innerHTML="Enter Your email";
            return false;
        }
    var atpos=em.indexOf("@");
    var dotpos=em.lastIndexOf(".");
    if(atpos <1 || dotpos < atpos + 2 || dotpos + 2 > em.length)
        {
            document.getElementById("span_email").innerHTML="Invalid email";
            return false;
        }
    var message=document.post.message.value;
    if(message==""||message==null){
        document.getElementById("span_message").innerHTML="Enter Your Name";
        return false ;
    
}
    

    