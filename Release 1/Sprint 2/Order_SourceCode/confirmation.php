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
		$paymentInfo = $_SESSION["paymentInfo"];

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
	  $customerID = $_SESSION['customerID'];



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

	//Generate Unique Recepient ID
	$flag2 = 1;
	while($flag2 ==1)
	{
		$recepientID = rand(1,1000);
		$value = mysql_query("SELECT * FROM recepient WHERE recepientID = '$recepientID'");
		if(mysql_num_rows($value)==0)
		{
			$flag2=0;
		}
	}

	//insert form data in to database

	mysql_query("INSERT INTO recepient (recepientFName,recepientLName,delStreet,delState,delSuburb,delPostcode,delTelNo,recepientID)
	VALUES('$recepientFName','$recepientLName','$delStreet','$delState','$delSuburb','$delPostcode','$delTelNo','$recepientID')");

	mysql_query("INSERT INTO orders (orderID,customerID,pickupDate,pickupTime,delDate,delTime,numPackages,weight,pickupType,deliveryType,secure,signature,pPostcode,pStreet,pSuburb,pState,cost,recepientID,paymentInfo)
	VALUES('$orderID','$customerID','$pickupDate','$pickupTime','$delDate','$delTime','$numPackages','$weight','$pickupType','$deliveryType','$secure','$signature','$pPostcode','$pStreet','$pSuburb','$pState','$cost','$recepientID','$paymentInfo')");

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title> Order Confirmation </title>
        <!-- Link CSS -->
        <link href="main.css" rel="stylesheet" type="text/css"/>
	</head>

<?php require 'customerTitle.php'; ?>
	<body>
		<div class = "container">
			<div class="clear"></div>
			<section class= "main_section">

				<img src = "pageno4.png" alt="Image missing" height="40" width="370" class= "pageNo"/>
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
