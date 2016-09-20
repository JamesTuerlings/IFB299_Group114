<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title> Track Order </title>		
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
						<h1 style="padding-bottom: 50px;"> Track Your Order </h1><br/>
						
							<form action="trackOrderDetails.php" method="post" name="…" … >
								
								<label style="font-size:120%; font-weight:bold">Order Number:</label>  
								<input class="input" type="number" placeholder="Enter Your Order ID here" name="orderNum" required value = "<?php if(isset($_POST['orderNum']))
								echo htmlspecialchars($_POST['orderNum'])?>"/><br><br>
								<input type="submit"  value="Track Order">
								
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