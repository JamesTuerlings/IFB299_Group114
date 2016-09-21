<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title> Order </title>		
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
					<div class= "innerDiv">
						<h1 class="orderHeading"> Order Details </h1><br/>
						
						<form action="orderValidation.php" method="post" name="…" … >
						
								<label>Number of Packages</label> 
								<input class="input" type="number" name="numPackages" required value = "<?php if(isset($_POST['numPackages']))
								echo htmlspecialchars($_POST['numPackages'])?>"/><br><br>
							
								<label>Total Weight</label>
								<input class="input" type="number" name="weight" placeholder="kg" required value = "<?php if(isset($_POST['weight']))
								echo htmlspecialchars($_POST['weight'])?>"/><br><br>							
							
								<label>Pickup Type</label> 
								<select name= "pickupType">
									<option value="scheduled"> Sceduled </option>
									<option value="urgent"> Urgent </option>
								</select><br><br>
								
								<label>Delivery Type</label> 
								<select name= "deliveryType">
									<option value="scheduled"> Sceduled </option>
									<option value="urgent"> Urgent </option>
								</select><br><br>
								
								<label>Secure Mail</label>
								Yes<input type="radio" name="secure" value="yes">
								No<input type="radio" name="secure" value="no" checked="checked"></br><br>
								
								<label>Signature Required</label>
								Yes<input type="radio" name="signature" value="yes">
								No<input type="radio" name="signature" value="no" checked="checked"><br><br>
								
								<label>Pickup Date</label>
								<input type="date" name="pickupDate" min="2016-10-02" required value = "<?php if(isset($_POST['pickupDate']))
								echo htmlspecialchars($_POST['pickupDate'])?>"/><br><br>
								
								<label>Pickup Time</label>
								<input type="time" name="pickupTime" required value = "<?php if(isset($_POST['pickupTime']))
								echo htmlspecialchars($_POST['pickupTime'])?>"/><br><br>

								<label>Pickup Location <span>*</span></label>
								<input type="text" name="pStreet" placeholder="Street" maxlength="20" required value = "<?php if(isset($_POST['pStreet']))
								echo htmlspecialchars($_POST['pStreet'])?>"/>&nbsp;
							
								<input type="text" name="pSuburb"  placeholder="Suburb" maxlength="20" required value = "<?php if(isset($_POST['pSuburb']))
								echo htmlspecialchars($_POST['pSuburb'])?>"/>
							
								<select name= "pState">
									<option value="QLD"> QLD </option>
									<option value="NSW"> NSW </option>
									<option value="SA"> SA </option>
									<option value="TAS"> TAS </option>
									<option value="WA"> WA </option>
								</select>
								
								<input type="text" name="pPostcode"  placeholder="Postcode" maxlength="20" required value = "<?php if(isset($_POST['pPostcode']))
								echo htmlspecialchars($_POST['pPostcode'])?>"/><br><br>
							
								<input type="submit" value="Calculate Cost">
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