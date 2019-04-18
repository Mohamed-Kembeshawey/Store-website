<?php include('server.php') ?>
<HTML>
   <head>
       <meta charset="utf-8">
	   <meta name="description" content="Welcome to Product Page">
       <title>Vendor Control</title>
       <link rel="stylesheet" href="css/page10.css"/>
       <link rel="stylesheet" href="css/navbar.css"/>
       <script type="text/javascript" src="JS/page10.js"></script>
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
   
	  <div name='MO' id='MO'>
	  <img src='images/212.png' class="us" >
	   <form action="Page10.php" method="post" name="vend" onsubmit="return validation_pass()">
	     <br>
	      <?php include('error.php') ?>
	     <p>Vendor Name </p><input type='text' name="vendor" placeholder="Enter Vendor Name">
           <span id="span_n" style="color: red;"></span>
		 <p><br>Password </p><input type='password' name="pass" placeholder="Enter Password"> </p>
           <span id="span_p" style="color: red;"></span>
           <button  type="submit" name="add_vendor" >Add</button>
           <button type="submit" name="delete_vendor" >Delete</button>
		 </form>
          <form action="server.php" method="post" name='showdata' class="showdata" >
          <button type="submit" name='show_vendor' class="show">Show</button>
          </form>
          
	  </div>
	  
	  
   </body>
</HTML>