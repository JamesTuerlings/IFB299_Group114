<!DOCTYPE html>
<?php require 'isEmployeeCheck.php'; ?>

<html>
	<head>
		<meta charset="utf-8"/>
		<title> Welcome </title>
        <!-- Link CSS -->
        <link href="main2.css" rel="stylesheet" type="text/css"/>
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
			<div class="clear"></div>
			<section class= "main_section2">
					<!--delivery table !-->
					<?php require 'makeDeliveryTable.php'; ?>




			</section>
			<div class="clear"></div>
			<footer class="page_footer">
				&copy; Copywrite OnTheSpotPackages.com
			</footer>
       </div>
	</body>
</html>
