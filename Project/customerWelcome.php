<?php
	if(!isset($_SESSION))
		{
			session_start();
		}

	if($_SESSION['newCustomer'] != "false")
	{
		$firstName = $_SESSION['firstName'];
		$lastName = $_SESSION['lastName'];
		$customerID = $_SESSION['customerID'];
	}
	if($_SESSION['newCustomer'] == "false")
	{
		require 'linkDB.php';
		$customerID = $_SESSION['customer'];
		$_SESSION["customerID"] = $customerID;
		$value = mysql_query("SELECT * FROM customers WHERE customerID = '$customerID'");
			if(mysql_num_rows($value)>0){
		    while($row = mysql_fetch_array($value)){
		      $firstName = $row['firstName'];
					$lastName = $row['lastName'];
		    }
			}
		}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title> Customer Welcome </title>
        <!-- Link CSS -->
        <link href="main.css" rel="stylesheet" type="text/css"/>
	</head>

	<?php require 'title.php'; ?>
	<body>
		<div class = "container">
			<div class="clear"></div>
			<section class= "main_section">

				<div class= "orderPage_background">
					<div class= "costDiv">
						<h1 style="padding-bottom: 50px;"> Welcome <?php echo $firstName." ".$lastName; ?></h1><br/>
						<a href = "orderPage.php"><input type="button" value="Place Order" class="cusWelcome_button"/></a>
						<a href = "trackPage.php"><input type="button" value="Track Order" class="cusWelcome_button"/></a>
						<a href = "updateDetails.php"><input type="button" value="Update Details" class="cusWelcome_button"/></a><br/>
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
