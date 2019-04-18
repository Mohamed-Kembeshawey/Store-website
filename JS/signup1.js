
function validate() {
    var name=document.signup_form.name.value;
    if(name==""||name==null){
        document.getElementById("span_name").innerHTML="Enter Your Name";
        return false ;
    }
}
function validation_pass()
{
    var name=document.signup_form.name.value;
    if(name==""||name==null){
        document.getElementById("span_name").innerHTML="Enter Your Name";
        return false ;
    }
    var em=document.signup_form.email.value;
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
    
    
    
    var pass=document.signup_form.password.value;
    var rpass=document.signup_form.re_password.value;
    if(pass=="")
        {
            document.getElementById("spass").innerHTML="invalid password";
            return false;
        }
	if(pass!=rpass)
	{
			document.getElementById("srpass").innerHTML="invalid password";
			return false;
	}
  
    
}
    

    