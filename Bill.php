<?php include('server.php') ?>
<HTML>
   <head>
       <meta charset="utf-8">
	   <meta name="description" content="Welcome to Product Page">
       <title>Vendor Panal</title>
       <link rel="stylesheet" href="css/bill.css"/>
       <link rel="stylesheet" href="css/navbar.css"/>
       <script type="text/javascript" src="JS/billj.js"></script>
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

    <img src='images/image.jpg' class="image">
	  <div name='bi' id='bi'>
	   <form name="vend" action="Bill.php" method="post" >
	     <br>
	     <?php include('error.php') ?>
	     <p>Product Name </p><input type='text' name="Product" placeholder="Enter Product Name" >
           <span id="span_n" style="color: red;"></span>
		   <p> <br> Quantity </p><input type='number' name="Quant" placeholder="Enter Quantity" >
           <span id="span_q" style="color: red;"></span>
       <div>
       	<button type='submit' name="AddtoBill" onclick="return validat()" >Add to Bill</button>
       	<button type='submit' name="NewBill" >New Bill</button>
       	</div>
       	</form>
       	<form action="server.php" method="post" name="ViewP">
       		<button type='submit' name="ViewBill" >View Bill</button>
       		<button type='submit' name="ViewProducts" >View Products</button>
       	<p> <br> Category </p><input type='text' name="Category" placeholder="Enter Category" required="" >
           <span id="span_c" style="color: red;"></span>
           <button type='submit' name="Search" >Search</button>
        </form>   
	  </div>
   </body>
</HTML>
