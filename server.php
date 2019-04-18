<?php
	session_start();
    // variable declaration		//
	$_SESSION['success'] = "";
	$error="";
	$Bill;
	// connect to database
	$db = mysqli_connect('localhost', 'root', '12345678', 'store');

//*********************************** owner Sign up***********************************************************// 
	if (isset($_POST['sign_up'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['name']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		//check if user name is used or not
		$query = "SELECT * FROM owner WHERE username='$username'";
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results)==1)
		{
			$error="This username is used";
		}  
        else{
			$password = md5($password);//encrypt the password before saving in the database
			$query = "INSERT INTO owner (username , email , password) 
                  VALUES('$username', '$email' , '$password' )";
			mysqli_query($db, $query);

			$_SESSION['success'] = "Adding is Done";
			header('location: login1.php');
		}
	}
//*********************************** owner login***********************************************************//
	if (isset($_POST['login_owner'])) {
		$username = mysqli_real_escape_string($db, $_POST['name']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		$password = md5($password);
		$query = "SELECT * FROM owner WHERE username='$username' AND password='$password'";
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results)==1) 
        {
			$_SESSION['username'] = $username;
			$row=mysqli_fetch_assoc($GLOBALS['results']);
			$_SESSION['marketnumber']= $row['marketnumber'];
			$_SESSION['success'] = "You are now logged in";
            header('location: Page8.php');			
		}
        else 
        {
			$error="Wrong username or password";
		}
	}
//*********************************** product Add***********************************************************//
	if (isset($_POST['add_product'])) {
		// receive all input values from the form
		$productname = mysqli_real_escape_string($db, $_POST['Product']);
		$Category = mysqli_real_escape_string($db, $_POST['Category']);
		$Price = mysqli_real_escape_string($db, $_POST['Price']);
		$quant = mysqli_real_escape_string($db, $_POST['quant']);
		$marketnumber=$_SESSION['marketnumber'];
		//check if product is exist or not
		$query = "SELECT * FROM product WHERE productname='$productname' and marketnumber='$marketnumber'";
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results)>0)
		{
			$error="This product is already exist";
		} 
        else{
		$query = "INSERT INTO product (productname , price , quantity , category , marketnumber ) 
              VALUES('$productname', '$Price' , '$quant' , '$Category', '$marketnumber' )";
		mysqli_query($db, $query);
		header('location: Page9.php');
		}
	}
//*********************************** product Delete***********************************************************//
	if (isset($_POST['delete_product'])) {
		// receive all input values from the form
		$productname = mysqli_real_escape_string($db, $_POST['Product']);
		$marketnumber=$_SESSION['marketnumber'];
		//check if product is exist or not
		$query = "SELECT * FROM product WHERE productname='$productname'and marketnumber='$marketnumber'";
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results)==0)
		{
			$error="You do not have any product with this name";
		} 
        else{
		$query = "DELETE FROM product WHERE productname='$productname'and marketnumber='$marketnumber'" ;
		mysqli_query($db, $query);

		header('location: Page9.php');
		}
	}
//*********************************** product update***********************************************************//
if (isset($_POST['update_product'])) {
		// receive all input values from the form
		$productname = mysqli_real_escape_string($db, $_POST['Product']);
		$Category = mysqli_real_escape_string($db, $_POST['Category']);
		$Price = mysqli_real_escape_string($db, $_POST['Price']);
		$quant = mysqli_real_escape_string($db, $_POST['quant']);
		$marketnumber=$_SESSION['marketnumber'];
		//check if product is exist or not
		$query = "SELECT * FROM product WHERE productname='$productname' and marketnumber='$marketnumber'";
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results)==0)
		{
			$error="You do not have any product with this name";
		} 
        else{
		$query = "UPDATE product  SET category='$Category',price='$Price',quantity='$quant'  WHERE productname='$productname'and marketnumber='$marketnumber'" ;
		mysqli_query($db, $query);
		header('location: Page9.php');
		}
	}
//*********************************** product table***********************************************************//
if (isset($_POST['show_data']) or isset($_POST['ViewProducts'])) 
{
	$marketnumber=$_SESSION['marketnumber'];	
	$query = "SELECT * FROM product WHERE marketnumber='$marketnumber'";
		$result=mysqli_query($db,$query);
		$num_of_rows=mysqli_num_rows($result);
		for($i=0;$i<$num_of_rows;$i++)
		{
			$row=mysqli_fetch_array($result);
			$arr[$i][0]=$row["id"];
			$arr[$i][1]=$row["productname"];
			$arr[$i][2]=$row["price"];
			$arr[$i][3]=$row["quantity"];
			$arr[$i][4]=$row["category"];
		}

	//print_r($arr);

	echo "<table width=100% border=2>";
	echo "<tr><th>id</th><th>name</th><th>price</th><th>quantity</th><th>category</th></tr>";

		$counter=1;
	for($i=0;$i<sizeof($arr);$i++)
	{
	echo "<tr>";
	echo "<td>".$counter."</td>";
	for ($j=1; $j <sizeof($arr[$i]) ; $j++) 
		echo "<td>".$arr[$i][$j]."</td>";
	echo "</tr>";
	$counter++;
	}

	echo "</table>";
}
//*********************************** add vendor***********************************************************//
if (isset($_POST['add_vendor'])) 
{
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['vendor']);
		$password = mysqli_real_escape_string($db, $_POST['pass']);
		$marketnumber=$_SESSION['marketnumber'];
		//check if user name is used or not
		$query = "SELECT * FROM vendor WHERE username='$username'";
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results)==1)
		{
			$error="This user name is used";
		} 
        else{
			$password = md5($password);//encrypt the password before saving in the database
			$query = "INSERT INTO vendor (username , password,marketnumber) 
	              VALUES('$username','$password','$marketnumber' )";
			mysqli_query($db, $query);
			header('location: Page10.php');
		}
}
//*********************************** delete vendor***********************************************************//
if (isset($_POST['delete_vendor'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['vendor']);
		$password = mysqli_real_escape_string($db, $_POST['pass']);
		$marketnumber=$_SESSION['marketnumber'];
		//check if user name is used or not
		$query = "SELECT * FROM vendor WHERE username='$username'and marketnumber='$marketnumber'";
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results)==0)
		{
			$error="You don't have any vendor with the same name";
		} 
        else{
			$password = md5($password);//encrypt the password before saving in the database
			$query = "DELETE FROM vendor WHERE username='$username'and marketnumber='$marketnumber'and password='$password'" ;
			mysqli_query($db, $query);

			header('location: Page10.php');
		}
	}
//*********************************** show vendors***********************************************************//
if (isset($_POST['show_vendor'])) 
{
	$marketnumber=$_SESSION['marketnumber'];	
	$query = "SELECT * FROM vendor WHERE marketnumber='$marketnumber'";
		$result=mysqli_query($db,$query);
		$num_of_rows=mysqli_num_rows($result);
		for($i=0;$i<$num_of_rows;$i++)
		{
			$row=mysqli_fetch_array($result);
			$arr[$i][0]=$row["username"];
		}

	//print_r($arr);

	echo "<table width=100% border=2>";
	echo "<tr><th>id</th><th>Vendor Name</th></tr>";

		$counter=1;
	for($i=0;$i<sizeof($arr);$i++)
	{
	echo "<tr>";
	echo "<td>".$counter."</td>";
	for ($j=0; $j <sizeof($arr[$i]) ; $j++) 
		echo "<td>".$arr[$i][$j]."</td>";
	echo "</tr>";
	$counter++;
	}

	echo "</table>";
}
//*********************************** vendors login***********************************************************//
if (isset($_POST['login_vendor'])) {
		$username = mysqli_real_escape_string($db, $_POST['name']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		$password = md5($password);
		$query = "SELECT * FROM vendor WHERE username='$username' AND password='$password'";
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results)==1) 
        {
			$_SESSION['username'] = $username;
			$row=mysqli_fetch_assoc($GLOBALS['results']);
			$_SESSION['marketnumber']= $row['marketnumber'];
			$_SESSION['success'] = "You are now logged in";
            header('location: Bill.php');			
		}
        else 
        {
			$error="Wrong username or password";
		}
	}
//*********************************** new bill***********************************************************//
if(isset($_POST['NewBill']))
{
	$query = "DELETE FROM bill " ;
	mysqli_query($db, $query);	
}
//*********************************** add product to bill***********************************************************//
if(isset($_POST['AddtoBill']))
{
	$productname = mysqli_real_escape_string($db, $_POST['Product']);
	$quantity = mysqli_real_escape_string($db, $_POST['Quant']);
	$category = mysqli_real_escape_string($db, $_POST['Category']);
	$marketnumber=$_SESSION['marketnumber'];	
	$query = "SELECT * FROM product WHERE productname='$productname' AND marketnumber='$marketnumber'";
	$result=mysqli_query($db,$query);
	if (mysqli_num_rows($result)==0)
	{
		$error="You do not have any product with this name";
	} 
	else
	{
		$row=mysqli_fetch_array($result);
		if($quantity>$row["quantity"])
			$error="The quantity of this product is not enough";
		else
		{
			$price=$row["price"];
			$category=$row["category"];
			$query = "INSERT INTO bill (productname , price , quantity , category) 
              VALUES('$productname', '$price' , '$quantity' , '$category' )";
			mysqli_query($db, $query);
			$quantity=$row["quantity"]-$quantity;
			$query = "UPDATE product  SET quantity='$quantity'  WHERE productname='$productname'and marketnumber='$marketnumber'" ;
			mysqli_query($db, $query);
		}
	}
}

//*********************************** view bill***********************************************************//
if(isset($_POST['ViewBill']))
{

	$query = "SELECT * FROM bill";
	$result=mysqli_query($db,$query);
	$num_of_rows=mysqli_num_rows($result);
	for($i=0;$i<$num_of_rows;$i++)
	{
		$row=mysqli_fetch_array($result);
		$arr[$i][0]=$row["id"];
		$arr[$i][1]=$row["productname"];
		$arr[$i][2]=$row["price"];
		$arr[$i][3]=$row["quantity"];
		$arr[$i][4]=$row["category"];
	}
	//print_r($arr);

	echo "<table width=100% border=2>";
	echo "<tr><th>id</th><th>name</th><th>price</th><th>quantity</th><th>category</th></tr>";

		$counter=1;
	for($i=0;$i<sizeof($arr);$i++)
	{
	echo "<tr>";
	echo "<td>".$counter."</td>";
	for ($j=1; $j <sizeof($arr[$i]) ; $j++) 
		echo "<td>".$arr[$i][$j]."</td>";
	echo "</tr>";
	$counter++;
	}

	echo "</table>";
}
//*********************************** Search by category***********************************************************//
if(isset($_POST['Search']))
{
	$category = mysqli_real_escape_string($db, $_POST['Category']);
	$marketnumber=$_SESSION['marketnumber'];	
	$query = "SELECT * FROM product WHERE category='$category' and marketnumber='$marketnumber'";
		$result=mysqli_query($db,$query);
		$num_of_rows=mysqli_num_rows($result);
		for($i=0;$i<$num_of_rows;$i++)
		{
			$row=mysqli_fetch_array($result);
			$arr[$i][0]=$row["id"];
			$arr[$i][1]=$row["productname"];
			$arr[$i][2]=$row["price"];
			$arr[$i][3]=$row["quantity"];
			$arr[$i][4]=$row["category"];
		}

	//print_r($arr);

	echo "<table width=100% border=2>";
	echo "<tr><th>id</th><th>name</th><th>price</th><th>quantity</th><th>category</th></tr>";

		$counter=1;
	for($i=0;$i<sizeof($arr);$i++)
	{
	echo "<tr>";
	echo "<td>".$counter."</td>";
	for ($j=1; $j <sizeof($arr[$i]) ; $j++) 
		echo "<td>".$arr[$i][$j]."</td>";
	echo "</tr>";
	$counter++;
	}
	echo "</table>";
}
?>