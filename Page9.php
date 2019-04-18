<?php include('server.php') ?>
<HTML>
   <head>
       <meta charset="utf-8">
	   <meta name="description" content="Welcome to Product Page">
       <title>Product Control</title>
       <link rel="stylesheet" href="css/page9.css"/>
       <link rel="stylesheet" href="css/navbar.css"/>
       <script type="text/javascript" src="JS/page9.js"></script>
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

     <div name='REG' id='REG'>
	   <form action="Page9.php" method="post" name='REGISTER'>
	     <img src='images/1.png' class="pro" >
	     <br>
	     <?php include('error.php') ?>
	     <p>Product </p><input type='text' name='Product' placeholder="Enter Product Name" required="">
           <span id="sname" style="color: red"></span>
		 <p><br> Category</p> <input type='text' name='Category' placeholder="Enter Product Category">
     <span id="cname" style="color: red"></span>
		 <p><br> Price </p><input type='number' name='Price' placeholder="Enter Product Price"> 
           <span id="pname" style="color: red"></span>
	     <p><br> quant</p> <input type='number' name='quant' placeholder="Enter Product quant">
           <span id="qname" style="color: red"></span><br/>
           <button type='submit' name="add_product" onclick ="return validate()" >Add</button>
           <button type='submit' name="delete_product" >Delete</button>
           <button type='submit' name="update_product" onclick ="return validate()" >Update</button>
		 </form>
         <form  action="server.php" method="post" name='showdata' class="showdata">
             <button type="submit" name='show_data' class="show" >Show products</button>
         </form>
	  </div>
	 
	  
   </body>
</HTML>