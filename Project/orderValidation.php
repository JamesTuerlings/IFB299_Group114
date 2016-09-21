<?php
	session_start();
	$_SESSION["numPackages"] = $_POST['numPackages'];
	$_SESSION["weight"] = $_POST['weight'];
	$_SESSION["pickupType"] = $_POST['pickupType'];
	$_SESSION["deliveryType"] = $_POST['deliveryType'];
	$_SESSION["secure"] = $_POST['secure'];
	$_SESSION["signature"] = $_POST['signature'];
	$_SESSION["pPostcode"] = $_POST['pPostcode'];
	$_SESSION["pickupDate"] = $_POST['pickupDate'];
	$_SESSION["pickupTime"] = $_POST['pickupTime'];
	$_SESSION["pStreet"] = $_POST['pStreet'];
	$_SESSION["pSuburb"] = $_POST['pSuburb'];
	$_SESSION["pState"] = $_POST['pState'];
?>
<html>
<body>
	<?php
		$errors = array();
			//validate the inputed data
			require 'validateFunctions.php';
			validateNumber($errors, $_POST, 'numPackages');
			validateNumber($errors, $_POST, 'pPostcode');
			
			if ($errors) {
				$errorsMessage = " ";
				foreach ($errors as $field => $error)
				$errorsMessage = "$errorsMessage $field $error,";

				// redisplay the form
				include 'orderPage.php';

				//show users error message
				?>
				<script type="text/javascript">
			    window.alert("Please correct the following errors: <?php echo "$errorsMessage"; ?>");
			  </script>
				<?php
			}else{
				//add new data in to databse
				require 'costPage.php';
			}
		
	?>
</body>
</html>