<html>
<body>
	<?php
		$errors = array();
			//validate the inputed data
			require 'validateFunctions.php';
			validateName($errors, $_POST, 'recepientFName');
			validateName($errors, $_POST, 'recepientLName');
			validateNumber($errors, $_POST, 'delPostcode');
			validateNumber($errors, $_POST, 'delTelNo');

			if ($errors) {
				$errorsMessage = " ";
				foreach ($errors as $field => $error)
				$errorsMessage = "$errorsMessage $field $error,";

				// redisplay the form
				include 'delivery.php';

				//show users error message
				?>
				<script type="text/javascript">
			    window.alert("Please correct the following errors: <?php echo "$errorsMessage"; ?>");
			  </script>
				<?php
			}else{
				//add new data in to databse
				require 'confirmation.php';
			}
		
	?>
</body>
</html>
