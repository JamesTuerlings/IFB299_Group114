
<?php
	session_start();
	unset($_SESSION['employee']);
	unset($_SESSION['customer']);
	unset($_SESSION['manager']);


	//check if a login has been enterd
	$username = '';
	$password = '';
	$username = (isset($_POST['username']) ? $_POST['username'] : null);
	$password = (isset($_POST['password']) ? $_POST['password'] : null);

require 'loginLogic.php';


?>


<!DOCTYPE html>
<html>

	<?php require 'title.php'; ?>

	<body>
		<div class = "container">
			<section class= "main_section">
				<div class= 'center_part'>
					<!-- Make login form -->
					<br><br><br>
					<form action="login.php" method="post" name="…" >
						Username
						<input type="text" name="username" required /><br><br>

            password
						<input type="password" name="password" required /><br><br>

						<input	type="submit"	name="login"	value="Login">
					</form>
				</div>
			</section>

			<footer class="page_footer">
					&copy; Copywrite OnTheSpotPackages.com
			</footer>
		</div>
	</body>

</html>
