<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title> Welcome </title>
        <!-- Link CSS -->
        <link href="main.css" rel="stylesheet" type="text/css"/>
	</head>

	<body>
		<div class = "container">
			<?php require 'header.php'; ?>


			<nav class ="navigation">
				<?php require 'staffnavigation.php'; ?>
			</nav>
			</br>
			<div class="clear"></div>
			<section class= "main_section2">		<br><br>

				<form action="staffSearchResult.php" method="GET" name="…" … >
					Order ID
					<input type="text" name="orderID" required /><br><br>

					<input	type="submit"	name="search"	value="Search">
				</form>

			</section>
			<div class="clear"></div>
			<footer class="page_footer">
				<?php require 'footer.php'; ?>
			</footer>
       </div>
	</body>
</html>
