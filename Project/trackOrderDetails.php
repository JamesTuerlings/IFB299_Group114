<?php

	$orderID = $_POST['orderNum'];

	//open connection to database
	$db_host = "localhost";
	$db_username = "root";
	$db_pass = "password";
	$db_name = "packagedb";

	@mysql_connect("$db_host","$db_username","$db_pass") or die ("Couldn't connect to MySql");
	@mysql_select_db("$db_name") or die ("no database");

	$value = mysql_query("SELECT * FROM orders WHERE orderID = '$orderID'");

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title> Track Details </title>
        <!-- Link CSS -->
        <link href="main.css" rel="stylesheet" type="text/css"/>
	</head>

	<?php require 'title.php'; ?>
	<body>
		<div class = "container">
			<div class="clear"></div>
			<section class= "main_section">

				<div class= "orderPage_background">
					<div class= "trackDiv">
						<h1 style="border-bottom: 1px solid #ddd;"> Order Details </h1><br/>

						<table>
							<?php
								if(mysql_num_rows($value)>0)
								{
									while($row = mysql_fetch_array($value))
									{
										echo "<tr>";
										echo	"<th>Order ID</th>";
										echo "<td>".$row["orderID"]."</td>";
										echo "</tr>";
										echo "<tr>";
										echo	"<th>Order Status</th>";
										echo "<td>".$row["orderStatus"]."</td>";
										echo "</tr>";
										echo "<tr>";
										echo	"<th>Payment Status</th>";
										echo "<td>".$row["paymentStatus"]."</td>";
										echo "</tr>";
										echo "<tr>";
										echo	"<th>Number of Packages</th>";
										echo "<td>".$row["numPackages"]."</td>";
										echo "</tr>";
										echo "<tr>";
										echo	"<th>Weight</th>";
										echo "<td>".$row["weight"]."</td>";
										echo "</tr>";
										echo "<tr>";
										echo	"<th>Pickup Date</th>";
										echo "<td>".$row["pickupDate"]."</td>";
										echo "</tr>";
										echo "<tr>";
										echo	"<th>Delivery Date</th>";
										echo "<td>".$row["delDate"]."</td>";
										echo "</tr>";

									};
								}
								else{
									echo "<h1> Sorry! Order Doesn't Exist.</h1><br/>
									Please Try Again";
								}
								?>
						</table>
					</div>

				</div>

			</section>
			<?php require 'footer.php';?>
       </div>
	</body>
</html>
