<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title> Welcome </title>		
        <!-- Link CSS -->
        <link href="main.css" rel="stylesheet" type="text/css"/>
	</head>
	
	<?php require 'title.php'; ?>
	<body>
		<div class = "container">				
			<div class="clear"></div>			
			<section class= "main_section">
				
				<img src = "pageno1.png" alt="Image missing" height="40" width="370" class= "pageNo"/>
				<div class= "left_part">
					<h1 class="heading"> New Customer </h1><br/>			
					<a href = "orderPage.php"> <input type="button" class = "ca_button" value="Place Order" /> </a> <br/>
					<a href = ""> <input type="button" class = "cwa_button" value="Our Prices" /> </a> <br/>
				</div>
				
				<div class= "right_part">
					<h1 class="heading"> Existing Customer </h1><br/>
					<input type="button" class = "ca_button" value="Sign In" /><br/>
					<a href = "trackPage.php"> <input type="button" class = "cwa_button" value="Track Order" /></a><br/>
				</div>				
			</section>
			<div class="clear"></div>	
			<footer class="page_footer">
				&copy; Copywrite OnTheSpotPackages.com
			</footer>
       </div>		
	</body>
</html>
