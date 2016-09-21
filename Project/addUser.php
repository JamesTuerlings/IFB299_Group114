<?php

//open connection to database
require 'linkDB.php';


	  $firstName = $_POST['firstName'];
	  $lastName = $_POST['lastName'];
	  $email = $_POST['customerEmail'];
	  $suburb = $_POST['suburb'];
	  $street = $_POST['street'];
	  $state = $_POST['state'];
	  $telNo = $_POST['telNo'];
	  $customerType = $_POST['customerType'];
	  $postcode = $_POST['postcode'];


//insert form data in to database
	//mysql_query("INSERT INTO customers (firstName,lastName,email,suburb,street,state,telNo,customerType,postcode) VALUES('$firstName', '$lastName','$email','$suburb','$street','$state','$telNo','$customerType','$postcode')");
//subsitute plave holder values for variables
	$query = "SELECT customerID FROM customers";
	$response = mysql_query($query);

	if($response){
		echo "query returns <br/>";
	}

	//Generate Unique Customer ID
	$flag = 1;
	while($flag ==1)
	{
		$customerID = rand(1,1000);
		$value = mysql_query("SELECT * FROM customers WHERE customerID = '$customerID'");
		if(mysql_num_rows($value)==0)
		{
			$flag=0;
		}
	}

	mysql_query("INSERT INTO customers (customerID,firstName,lastName,email,suburb,street,state,telNo,customerType,postcode) VALUES('$customerID','$firstName', '$lastName','$email','$suburb','$street','$state','$telNo','$customerType','$postcode')");


?>

<!DOCTYPE html>
<html>
<body>
	<h1>Your User ID</h1>
	<?php echo $customerID; ?>
</html>
