<?php
	if(!isset($_SESSION))
    {
        session_start();
    }
	$numPackages = $_POST['numPackages'];
	$weight = $_POST['weight'];
	$pickupType = $_POST['pickupType'];

	if($pickupType == 'urgent'){
		$cost = ($numPackages * 1.5) + ($weight * 2) + 10;
	}
	else{
		$cost = ($numPackages * 1.5) + ($weight * 2);
	}
	$_SESSION["cost"] = $cost;
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title> Cost </title>
        <!-- Link CSS -->
        <link href="main.css" rel="stylesheet" type="text/css"/>
	</head>

	<?php require 'customerTitle.php'; ?>
	<body>
		<div class = "container">
			<div class="clear"></div>
			<section class= "main_section">

				<img src = "pageno2.png" alt="Image missing" height="40" width="370" class= "pageNo"/>
				<div class= "orderPage_background">
					<div class= "costDiv">
						<h1> Total Cost </h1><br/>

						<form action="delivery.php" method="post" name="…" … >

						<div>
							Number of Packages = <?php echo $numPackages; ?><br>
							Total Weights = <?php echo $weight; ?><br>
							Total Cost = <?php echo $cost; ?>
						</div><br/><br><br>


								<input type="submit" value="Continue" class = "cost_button">
						</form>
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
