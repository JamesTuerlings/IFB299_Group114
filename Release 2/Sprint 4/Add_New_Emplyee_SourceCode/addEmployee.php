<?php
//open connection to database
require 'linkDB.php';

	  $firstName = $_POST['efirstName'];
	  $lastName = $_POST['elastName'];
	  $empSuburb = $_POST['esuburb'];
	  $empStreet = $_POST['estreet'];
	  $empState = $_POST['estate'];
	  $empTelNo = $_POST['etelNo'];
	  $employeeType = $_POST['employeeType'];
	  $empPostcode = $_POST['epostcode'];
		$password = $_POST['password'];

	//Generate Unique Customer ID
	$flag = 1;
	while($flag ==1)
	{
		$employeeID = rand(2,99);
		$value = mysql_query("SELECT * FROM employee WHERE employeeID = '$employeeID'");
		if(mysql_num_rows($value)==0)
		{
			$flag=0;
		}
	}

	//insert form data in to database
	mysql_query("INSERT INTO employee (employeeID,firstName,lastName,empSuburb,empStreet,empState,empTelNo,employeeType,empPostcode,password)
  VALUES('$employeeID','$firstName','$lastName','$empSuburb','$empStreet','$empState','$empTelNo','$employeeType','$empPostcode','$password')");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title> Order Confirmation </title>
        <!-- Link CSS -->
        <link href="main.css" rel="stylesheet" type="text/css"/>
	</head>

	<?php require 'managerTitle.php';?>
	<body>
		<div class = "container">
			<div class="clear"></div>
			<section class= "main_section">
				<div class= "orderPage_background">
					<div class= "costDiv">
						<h1 style="padding-bottom: 50px;"> New Employee Added</h1><br/>
						<h2 style="color:black; font-size:200%">Employee ID </h2>
						<h2 style="color:orange; font-size:300%; font-weight:bold"><?php echo $employeeID; ?></h2><br>
						<a href = "managerHome.php"><input type="button" value="Portal" class="continue_button"/></a><br/>
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
