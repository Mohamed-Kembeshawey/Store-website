<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/signup.css">
   <link rel="stylesheet" href="css/navbar.css">
    <script type="text/jscript" src="JS/signup1.js"></script>
    
</head>
<body>
    <div class="navbar">.
         <div class="container">
          <div class="brand">
          <h2 class="H2">Store</h2>
          </div>
        
        <div class="links">
        <ul>
        <li><a href="home.php" class="home" class="a">Home</a> </li>
        <li><a href="about.php" class="a">About</a></li>
        <li><a href="services.php" class="a">Services</a></li>
        <li><a href="contact.php" class="a">Contact</a></li>
        <li><a href="home.php" class="a">Exit</a></li>
        </ul>
        </div>
      </div>
        </div>
    <div class="clear"></div>

    <div class="main">

        
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container1">
                <div class="signup-content">
                    <form name="signup_form" id="signup-form" class="signup-form" onsubmit="return validation_pass()" action="signup.php" method="post">
                        <h2 class="form-title">Create account as owner</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name= "name"  placeholder="Your Name"/><span id="span_name"  style="color: red;"></span>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/><span id="span_email"  style="color: red;"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password"/><br/>
                            <span id="spass" style="color: red;"> </span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password"/>
                            <span id="srpass" style="color: red;"></span>
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" name="sign_up" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                        <?php include('error.php') ?>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="login1.php" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
         

    </div>

    <!-- JS -->
    <script src=""></script>
    <script src=""></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>