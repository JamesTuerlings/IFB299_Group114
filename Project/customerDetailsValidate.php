<?php
	session_start();
	$_SESSION["firstName"] = $_POST['firstName'];
	$_SESSION["lastName"] = $_POST['lastName'];
	$_SESSION["customerEmail"] = $_POST['customerEmail'];
	$_SESSION["street"] = $_POST['street'];
	$_SESSION["suburb"] = $_POST['suburb'];
	$_SESSION["state"] = $_POST['state'];
	$_SESSION["postcode"] = $_POST['postcode'];
	$_SESSION["customerType"] = $_POST['customerType'];
	$_SESSION["telNo"] = $_POST['telNo'];

?>
<html>
<body>
	<?php
		$errors = array();
			//validate the inputed data
			require 'validateFunctions.php';
			validateName($errors, $_POST, 'firstName');
			validateName($errors, $_POST, 'lastName');
			validateEmail($errors, $_POST, 'customerEmail');
			validateNumber($errors, $_POST, 'telNo');

			if ($errors) {
				$errorsMessage = " ";
				foreach ($errors as $field => $error)
				$errorsMessage = "$errorsMessage $field $error,";

				// redisplay the form
				include 'customerDetails.php';

				//show users error message
				?>
				<script type="text/javascript">
			    window.alert("Please correct the following errors: <?php echo "$errorsMessage"; ?>");
			  </script>
				<?php
			}else{
				//add new data in to databse
				require 'delivery.php';
			}
		
	?>
</body>
</html>
