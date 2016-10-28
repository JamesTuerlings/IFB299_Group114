<html>
<body>
	<?php
		$errors = array();
			//validate the inputed data
			require 'validateFunctions.php';
			validateName($errors, $_POST, 'efirstName');
			validateName($errors, $_POST, 'elastName');
			validateNumber($errors, $_POST, 'etelNo');
			validateNumber($errors, $_POST, 'epostcode');
      validatePass($errors, $_POST, 'passwords');

			if ($errors) {
				$errorsMessage = " ";
				foreach ($errors as $field => $error)
				$errorsMessage = "$errorsMessage $field $error,";

				// redisplay the form
				include 'employeeDetails.php';

				//show users error message
				?>
				<script type="text/javascript">
			    window.alert("Please correct the following errors: <?php echo "$errorsMessage"; ?>");
			  </script>
				<?php
			}else{
				//add new data in to databse
				require 'addEmployee.php';
			}

	?>
</body>
</html>
