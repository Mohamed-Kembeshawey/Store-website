<?php include('server.php') ?>
<html>
<head>
    <title>Owner Login</title>
    <link rel="stylesheet" type="text/css" href="css/signup.css"  />
    <link rel="stylesheet" type="text/css" href="css/navbar.css"  />
    </head>
    
    <body>
        <div class="navbar">.
         <div class="container">
          <div class="brand">
          <h2>Store</h2>
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
    <div class="container1">
         <div class="signup-content">
            <form action="login1.php" method="post" name="login" class="signup-form"> 
            <h2 class="form-title"><span class="owner">Owner</span> Login</h2>
             <img  id="img"src="images/i2.png">
            <?php include('error.php') ?>
            <div>
                <input type="text" class="form-input" name="name"  placeholder="Enter Name..." required="" />
                        <span id="span_name" style="color: red"></span>
            </div>
            <div>
                <input class="form-input" placeholder="Enter password..." type="password" name="password" required="" />
                    <span id="span_pass" style="color: red"></span>
            </div>  
            <div>
                <button type="submit" name="login_owner" class="form-submit">Login</button><br/>
                        <br/><a href="signup.php"><p class="signup-link">Signup</p></a></td>
            </div>  
              
            </form>
     </div>
    </div> 
    </body>

</html>