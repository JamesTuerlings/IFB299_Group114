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
			validateNumber($errors, $_POST, 'postcode');
			validatePass($errors, $_POST, 'passwords');

			if ($errors) {
				$errorsMessage = " ";
				foreach ($errors as $field => $error)
				$errorsMessage = "$errorsMessage $field $error,";

				// redisplay the form
				include 'updateDetails.php';

				//show users error message
				?>
				<script type="text/javascript">
			    window.alert("Please correct the following errors: <?php echo "$errorsMessage"; ?>");
			  </script>
				<?php
			}else{
        //open connection to database
        require 'addUpdate.php';
			}

	?>
</body>
</html>
