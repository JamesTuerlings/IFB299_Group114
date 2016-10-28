<?php
	if(!isset($_SESSION))
		{
			session_start();
		}

    require 'linkDB.php';
		$customerID = $_SESSION["customerID"];
		$value = mysql_query("SELECT * FROM customers WHERE customerID = '$customerID'");
			if(mysql_num_rows($value)>0){
		    while($row = mysql_fetch_array($value)){
		      $firstName = $row['firstName'];
					$lastName = $row['lastName'];
          $email = $row['email'];
      	  $suburb = $row['suburb'];
      	  $street = $row['street'];
      	  $state = $row['state'];
          $postcode = $row['postcode'];
      	  $telNo = $row['telNo'];
      	  $customerType = $row['customerType'];
          $password = $row['password'];
		    }
			}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title> Update Details </title>
        <!-- Link CSS -->
        <link href="main.css" rel="stylesheet" type="text/css"/>
	</head>

	<?php require 'customerTitle.php'; ?>
	<body>
		<div class = "container">
			<div class="clear"></div>
			<section class= "main_section">
				<div class= "orderPage_background">
						<div class= "innerDiv">
						<h1 class="orderHeading"> Customer Details </h1><br/>

						<form action="updateValidation.php" method="post" name="…" … >

								<label>Name *</label>
								<input type="text" name="firstName" maxlength="25" value =<?php echo $firstName; ?> maxlength="20" required value = "<?php if(isset($_POST['firstName']))
								echo htmlspecialchars($_POST['firstName'])?>"/>&nbsp;

								<input type="text" name="lastName" maxlength="25"  value =<?php echo $lastName;?> maxlength="20" required value = "<?php if(isset($_POST['lastName']))
								echo htmlspecialchars($_POST['lastName'])?>"/><br><br>

								<label>Email:</label>
								<input type="text" name="customerEmail" maxlength="25"  value =<?php echo $email;?> maxlength="25" required value = "<?php if(isset($_POST['customerEmail']))
								echo htmlspecialchars($_POST['customerEmail'])?>"/><br><br>

								<label>Password</label>
								<input type="password" name="password" value =<?php echo $password;?> required><br><br>

								<label>Confirm Password</label>
								<input type="password" name="confirmPassword" value =<?php echo $password;?>  required><br><br>

								<label>Street</label>
								<input type="text" name="street" maxlength="30" value =<?php echo $street;?> required value = "<?php if(isset($_POST['street']))
								echo htmlspecialchars($_POST['street'])?>"/><br><br>

							<label>Suburb</label>
								<input type="text" name="suburb" maxlength="15" value =<?php echo $suburb;?> required value = "<?php if(isset($_POST['suburb']))
								echo htmlspecialchars($_POST['suburb'])?>"/><br><br>

								<label>State</label>
								<select name= "state">
                  <option value =<?php echo $state;?>><?php echo $state;?></option>
									<option value="QLD"> QLD </option>
									<option value="NSW"> NSW </option>
									<option value="SA"> SA </option>
									<option value="TAS"> TAS </option>
									<option value="WA"> WA </option>
								</select><br><br>

								<label>Postcode</label>
								<input type="text" name="postcode" maxlength="4" value =<?php echo $postcode;?> required value = "<?php if(isset($_POST['postcode']))
								echo htmlspecialchars($_POST['postcode'])?>"/><br><br>

								<label><span>Telephone </label><input type="text" name="telNo" maxlength="11" value =<?php echo $telNo;?> required value = "<?php if(isset($_POST['telNo']))
								echo htmlspecialchars($_POST['telNo'])?>"/><br><br>

							<label>Customer Type:</label>
								<select name= "customerType">
                  <option value =<?php echo $customerType;?>><?php echo $customerType;?></option>
									<option value="individual"> Individual </option>
									<option value="business"> Business </option>
								</select><br><br>
								<input type="submit" value="Submit" class="generalButton">
						</form>
					</div>
				</div>
      </section>
      <?php require 'footer.php';?>
			</body>
</html>
