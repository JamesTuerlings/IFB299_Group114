<!DOCTYPE html>
<?php require 'isEmployeeCheck.php'; ?>

<html>
	<head>
		<meta charset="utf-8"/>
		<title> Welcome </title>
        <!-- Link CSS -->
        <link href="main.css" rel="stylesheet" type="text/css"/>
	</head>

	<body>
		<div class = "container">
			<header>
				<h1> On the Spot Packages </h1>
			</header>

			<nav class ="navigation">
				<?php require 'staffnavigation.php'; ?>
			</nav>
			</br>
			<div class = "container">
				<section class= "main_section">
					<div class= 'indexDiv'>
						<h1> Deliver Package  </h1><br/>
						<a href = "staffDeliverySchedule.php"><input type="button" class = "index_button" value="Delivery Schedule" /></a>
						<a href = ""><input type="button" class = "index_button" value="Completed Deliveries" /></a><br/>
					</div>
				</section>
			<div class="clear"></div>
			<footer class="page_footer">
				&copy; Copywrite OnTheSpotPackages.com
			</footer>
       </div>
	</body>
</html>
