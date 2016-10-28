<?php
  require 'linkDB.php';

  $query = mysql_query("SELECT SUM(cost) AS totalRevenue FROM orders");
  $row = mysql_fetch_assoc($query);
  $totalRevenue = $row['totalRevenue'];

  $query = mysql_query("SELECT COUNT(orderID) AS totalOrders FROM orders");
  $row = mysql_fetch_assoc($query);
  $totalOrders = $row['totalOrders'];

  $query = mysql_query("SELECT COUNT(paymentStatus) AS totalPaid FROM orders where  paymentStatus = 'Paid'");
  $row = mysql_fetch_assoc($query);
  $totalPaid = $row['totalPaid'];

  $query = mysql_query("SELECT COUNT(paymentStatus) AS totalUnpaid FROM orders where  paymentStatus = 'Unpaid'");
  $row = mysql_fetch_assoc($query);
  $totalUnpaid = $row['totalUnpaid'];

  $query = mysql_query("SELECT COUNT(paymentInfo) AS totalCash FROM orders where  paymentInfo = 'Cash'");
  $row = mysql_fetch_assoc($query);
  $totalCash = $row['totalCash'];

  $query = mysql_query("SELECT COUNT(paymentInfo) AS totalCard FROM orders where  paymentInfo = 'Card'");
  $row = mysql_fetch_assoc($query);
  $totalCard = $row['totalCard'];

  $query = mysql_query("SELECT COUNT(paymentInfo) AS totalVoucher FROM orders where  paymentInfo = 'Voucher'");
  $row = mysql_fetch_assoc($query);
  $totalVoucher = $row['totalVoucher'];

  $query = mysql_query("SELECT COUNT(customerID) AS totalCustomers FROM customers");
  $row = mysql_fetch_assoc($query);
  $totalCustomers = $row['totalCustomers'];

  $query = mysql_query("SELECT COUNT(customerType) AS totalIndividuals FROM customers WHERE customerType = 'Individual'");
  $row = mysql_fetch_assoc($query);
  $totalIndividuals = $row['totalIndividuals'];

  $query = mysql_query("SELECT COUNT(customerType) AS totalBusiness FROM customers WHERE customerType = 'Business'");
  $row = mysql_fetch_assoc($query);
  $totalBusiness = $row['totalBusiness'];

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title> Report </title>
        <!-- Link CSS -->
        <link href="main.css" rel="stylesheet" type="text/css"/>
	</head>

	<?php require 'managerTitle.php'; ?>
	<body>
		<div class = "container">
			<div class="clear"></div>
			<section class= "main_section">

				<div class= "orderPage_background">
					<div class= "trackDiv">
						<h1 style="border-bottom: 1px solid #ddd;"> Monthly Report </h1><br/>

						<table style="font-size:100%;">
              <tr>
                <th> Total Revenue</th>
                <td><?php echo $totalRevenue; ?> AUD</td>
              </tr>
              <tr>
                <th> Total Orders</th>
                <td><?php echo $totalOrders; ?></td>
              </tr>
              <tr>
                <th> Total Paid Orders</th>
                <td><?php echo $totalPaid; ?></td>
              </tr>
              <tr>
                <th> Total Unpaid Orders</th>
                <td><?php echo $totalUnpaid; ?></td>
              </tr>
              <tr>
                <th> Orders Paid By Cash</th>
                <td><?php echo $totalCash; ?></td>
              </tr>
              <tr>
                <th> Orders Paid By Card</th>
                <td><?php echo $totalCard; ?></td>
              </tr>
              <tr>
                <th> Orders Paid By Voucher</th>
                <td><?php echo $totalVoucher; ?></td>
              </tr>

              <tr>
                <th> Total Customers</th>
                <td><?php echo $totalCustomers; ?></td>
              </tr>
              <tr>
                <th> Individual Customers</th>
                <td><?php echo $totalIndividuals; ?></td>
              </tr>
              <tr>
                <th> Individual Customers</th>
                <td><?php echo $totalBusiness; ?></td>
              </tr>
						</table>
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
