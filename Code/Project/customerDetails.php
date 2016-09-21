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
						<h1 class="orderHeading"> Customer Details </h1><br/>

						<form action="customerDetailsValidate.php" method="post" name="…" … >

								<label>Name *</label>
								<input type="text" name="firstName" maxlength="25" placeholder="First" maxlength="20" required value = "<?php if(isset($_POST['firstName']))
								echo htmlspecialchars($_POST['firstName'])?>"/>&nbsp;

								<input type="text" name="lastName" maxlength="25"  placeholder="Last" maxlength="20" required value = "<?php if(isset($_POST['lastName']))
								echo htmlspecialchars($_POST['lastName'])?>"/><br><br>

								Email:
								<input type="text" name="customerEmail" maxlength="25"  placeholder="name@gmail.com" maxlength="25" required value = "<?php if(isset($_POST['customerEmail']))
								echo htmlspecialchars($_POST['customerEmail'])?>"/><br><br>

								Street
								<input type="text" name="street" maxlength="30" required value = "<?php if(isset($_POST['street']))
								echo htmlspecialchars($_POST['street'])?>"/><br><br>

								Suburb
								<input type="text" name="suburb" maxlength="15" required value = "<?php if(isset($_POST['suburb']))
								echo htmlspecialchars($_POST['suburb'])?>"/><br><br>

								State
								<select name= "state">
									<option value="QLD"> QLD </option>
									<option value="NSW"> NSW </option>
									<option value="SA"> SA </option>
									<option value="TAS"> TAS </option>
									<option value="WA"> WA </option>
								</select><br><br>

								Postcode
								<input type="text" name="postcode" maxlength="4" required value = "<?php if(isset($_POST['postcode']))
								echo htmlspecialchars($_POST['postcode'])?>"/><br><br>

								<label><span>Telephone </label><input type="text" name="telNo" maxlength="11" required value = "<?php if(isset($_POST['telNo']))
								echo htmlspecialchars($_POST['telNo'])?>"/><br><br>

							Customer Type:
								<select name= "customerType">
									<option value="individual"> Individual </option>
									<option value="business"> Business </option>
								</select><br><br>

								<input type="submit" value="Continue">
						</form>
					</div>
				</div>
			</body>
</html>
