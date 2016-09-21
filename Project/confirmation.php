<?php
	// Start the session
	session_start();
	//open connection to database
	require 'linkDB.php';


	  // getting value from order page
	  $pickupDate = $_SESSION["pickupDate"];
	  $pickupTime = $_SESSION["pickupTime"];
	  $pSuburb = $_SESSION["pSuburb"];
	  $numPackages = $_SESSION["numPackages"];
	  $weight = $_SESSION["weight"];
	  $pickupType = $_SESSION["pickupType"];
	  $deliveryType = $_SESSION["deliveryType"];
	  $secure = $_SESSION["secure"];
	  $signature = $_SESSION["signature"];
	  $pPostcode = $_SESSION["pPostcode"];
	  $pStreet = $_SESSION["pStreet"];
	  $pState = $_SESSION["pState"];
	  $cost = $_SESSION["cost"];

	  //getting values from delivery page
	  $delDate = $_POST['delDate'];
	  $delTime = $_POST['delTime'];
	  $recepientFName = $_POST['recepientFName'];
	  $recepientLName = $_POST['recepientLName'];
	  $delStreet = $_POST['delStreet'];
	  $delSuburb = $_POST['delSuburb'];
	  $delState = $_POST['delState'];
	  $delPostcode = $_POST['delPostcode'];
	  $delTelNo = $_POST['delTelNo'];

	  //getting values from customerDetails page
	  $firstName = $_SESSION['firstName'];
	  $lastName = $_SESSION['lastName'];
	  $email = $_SESSION['customerEmail'];
	  $suburb = $_SESSION['suburb'];
	  $street = $_SESSION['street'];
	  $state = $_SESSION['state'];
	  $telNo = $_SESSION['telNo'];
	  $customerType = $_SESSION['customerType'];
	  $postcode = $_SESSION['postcode'];



	//Generate Unique orderID
	$flag = 1;
	while($flag ==1)
	{
		$orderID = rand(1,1000);
		$value = mysql_query("SELECT * FROM orders WHERE orderID = '$orderID'");
		if(mysql_num_rows($value)==0)
		{
			$flag=0;
		}
	}

	//Generate Unique Customer ID
	$flag2 = 1;
	while($flag2 ==1)
	{
		$customerID = rand(1,1000);
		$value = mysql_query("SELECT * FROM customers WHERE customerID = '$customerID'");
		if(mysql_num_rows($value)==0)
		{
			$flag2=0;
		}
	}

	mysql_query("INSERT INTO customers (customerID,firstName,lastName,email,suburb,street,state,telNo,customerType,postcode)
	VALUES('$customerID','$firstName', '$lastName','$email','$suburb','$street','$state','$telNo','$customerType','$postcode')");

	//insert form data in to database
	mysql_query("INSERT INTO orders (orderID,customerID,pickupDate,pickupTime,delDate,delTime,numPackages,weight,pickupType,deliveryType,secure,signature,pPostcode,pStreet,pSuburb,pState,cost)
	VALUES('$orderID','$customerID','$pickupDate','$pickupTime','$delDate','$delTime','$numPackages','$weight','$pickupType','$deliveryType','$secure','$signature','$pPostcode','$pStreet','$pSuburb','$pState','$cost')");

	mysql_query("INSERT INTO recepient (orderID,recepientFName,recepientLName,delStreet,delState,delSuburb,delPostcode,delTelNo)
	VALUES('$orderID','$recepientFName','$recepientLName','$delStreet','$delState','$delSuburb','$delPostcode','$delTelNo')");




	$query = "SELECT * FROM orders";
	$response = mysql_query($query);

	if($response){
		//echo "query returns <br/>";
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title> Order Confirmation </title>
        <!-- Link CSS -->
        <link href="main.css" rel="stylesheet" type="text/css"/>
	</head>

	<?php require 'title.php'; ?>
	<body>
		<div class = "container">
			<div class="clear"></div>
			<section class= "main_section">

				<img src = "pageno1.png" alt="Image missing" height="40" width="370" class= "pageNo"/>
				<div class= "orderPage_background">
					<div class= "costDiv">
						<h1 style="padding-bottom: 50px;"> Order Confirmation </h1><br/>
						<h2>Your Order ID is </h2>
						<h2 style="color:orange; font-size:300%; font-weight:bold"><?php echo $orderID; ?></h2><br>
						<h2>Your User ID </h2>
						<h2 style="color:orange; font-size:300%; font-weight:bold"><?php echo $customerID; ?></h2><br>

					</div>

				</div>

			</section>
			<div class="clear"></div>
			<footer class="page_footer">
				&copy; Copywrite OnTheSpotPackages.com
			</footer>
       </div>
	</body>
</html>
