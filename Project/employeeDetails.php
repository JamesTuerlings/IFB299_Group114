<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title> Employee Details </title>
        <!-- Link CSS -->
        <link href="main.css" rel="stylesheet" type="text/css"/>
	</head>

	<?php require 'managerTitle.php';?>
	<body>
		<div class = "container">
			<div class="clear"></div>
			<section class= "main_section">
				<div class= "orderPage_background">
						<div class= "innerDiv">
						<h1 class="orderHeading"> Employee Details </h1><br/>

						<form action="employeeDetailsValidation.php" method="post" name="…" … >

								<label>Name *</label>
								<input type="text" name="efirstName" maxlength="25" placeholder="First" maxlength="20" required value = "<?php if(isset($_POST['efirstName']))
								echo htmlspecialchars($_POST['efirstName'])?>"/>&nbsp;

								<input type="text" name="elastName" maxlength="25"  placeholder="Last" maxlength="20" required value = "<?php if(isset($_POST['elastName']))
								echo htmlspecialchars($_POST['elastName'])?>"/><br><br>

                <label>Password</label>
                <input type="password" name="password" placeholder="New Password" required><br><br>

                <label>Confirm Password</label>
                <input type="password" name="confirmPassword"  required><br><br>

								<label>Street</label>
								<input type="text" name="estreet" maxlength="30" required value = "<?php if(isset($_POST['estreet']))
								echo htmlspecialchars($_POST['estreet'])?>"/><br><br>

								<label>Suburb</label>
								<input type="text" name="esuburb" maxlength="15" required value = "<?php if(isset($_POST['esuburb']))
								echo htmlspecialchars($_POST['esuburb'])?>"/><br><br>

								<label>State</label>
								<select name= "estate">
									<option value="QLD"> QLD </option>
									<option value="NSW"> NSW </option>
									<option value="SA"> SA </option>
									<option value="TAS"> TAS </option>
									<option value="WA"> WA </option>
								</select><br><br>

								<label>Postcode</label>
								<input type="text" name="epostcode" maxlength="4" required value = "<?php if(isset($_POST['epostcode']))
								echo htmlspecialchars($_POST['epostcode'])?>"/><br><br>

								<label><span>Telephone </label><input type="text" name="etelNo" maxlength="11" required value = "<?php if(isset($_POST['etelNo']))
								echo htmlspecialchars($_POST['etelNo'])?>"/><br><br>

								<label>Employee Type:</label>
								<select name= "employeeType">
									<option value="Manager"> Manager </option>
									<option value="Driver"> Driver </option>
								</select><br><br>

								<input type="submit" value="Continue" class="generalButton">
						</form>
					</div>
				</div>
			</section>
			<?php require 'footer.php';?>
			 </div>
			</body>
</html>
