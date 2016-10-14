<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title> Delivery </title>
        <!-- Link CSS -->
        <link href="main.css" rel="stylesheet" type="text/css"/>
	</head>

	<?php require 'title.php'; ?>
	<body>
		<div class = "container">
			<div class="clear"></div>
			<section class= "main_section">

				<img src = "pageno3.png" alt="Image missing" height="40" width="370" class= "pageNo"/>
				<div class= "orderPage_background">
						<div class= "innerDiv">
						<h1 class="orderHeading"> Delivery Details </h1><br/>

						<form action="deliveryValidation.php" method="post" name="…" … >

								<label>Name <span>*</span></label>
								<input type="text" name="recepientFName" placeholder="First" maxlength="20" required value = "<?php if(isset($_POST['recepientFName']))
								echo htmlspecialchars($_POST['recepientFName'])?>"/>&nbsp;

								<input type="text" name="recepientLName"  placeholder="Last" maxlength="20" required value = "<?php if(isset($_POST['recepientLName']))
								echo htmlspecialchars($_POST['recepientLName'])?>"/><br><br>

								<label>Street</label></label>
								<input type="text" name="delStreet" required value = "<?php if(isset($_POST['delStreet']))
								echo htmlspecialchars($_POST['delStreet'])?>"/><br><br>

								<label>Suburb</label>
								<input type="text" name="delSuburb" required value = "<?php if(isset($_POST['delSuburb']))
								echo htmlspecialchars($_POST['delSuburb'])?>"/><br><br>

								<label>State </label>
								<select name= "delState">
									<option value="QLD"> QLD </option>
									<option value="NSW"> NSW </option>
									<option value="SA"> SA </option>
									<option value="TAS"> TAS </option>
									<option value="WA"> WA </option>
								</select><br><br>

								<label>Postcode</label>
								<input type="text" name="delPostcode" maxlength="4" required value = "<?php if(isset($_POST['delPostcode']))
								echo htmlspecialchars($_POST['delPostcode'])?>"/><br><br>

								<label><span>Telephone  </span></label><input type="text" name="delTelNo" maxlength="11" required value = "<?php if(isset($_POST['delTelNo']))
								echo htmlspecialchars($_POST['delTelNo'])?>"/><br><br>

								<label>Delivery Date</label>
								<input type="date" name="delDate" min="2016-01-02" required value = "<?php if(isset($_POST['delDate']))
								echo htmlspecialchars($_POST['delDate'])?>"/><br><br>

								<label>Delivery Time</label>
								<input type="time" name="delTime" required value = "<?php if(isset($_POST['delTime']))
								echo htmlspecialchars($_POST['delTime'])?>"/><br><br>

								<input type="submit" value="Continue" class="generalButton">
						</form>
					</div>
				</div>
