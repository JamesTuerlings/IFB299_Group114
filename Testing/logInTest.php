

<!DOCTYPE html>
<?php

	session_start();
	unset($_SESSION['employee']);
	unset($_SESSION['customer']);
	unset($_SESSION['manager']);


	//check if a login has been enterd
	if ($_POST['login'] != '')	{
		if($_POST['username'] == '1'){
			session_start(); $_SESSION['employee'] = true;
			header('Location: http://localhost/Testing/staffHome.php');
			exit();
		}else if($_POST['username'] == '2'){
			session_start(); $_SESSION['customer'] = true;
			header('Location: http://localhost/Testing/orderpage.html');
			exit();
		}
	}
?>
<html>
	<body>
			<p>
				<a href = "staffHome.php">staffhome</a>

				<!-- Make login form -->
				<form action="loginTest.php" method="post" name="…" … >
					Username
					<input type="text" name="username" required /><br><br>

					<input	type="submit"	name="login"	value="Login">
				</form>
			</p>

	</body>
</html>
