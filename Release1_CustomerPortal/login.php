

<!DOCTYPE html>
<?php
	//remove session history
	session_start();
	unset($_SESSION['isAdmin']);
	unset($_SESSION['order']);

	//check if a login has been enterd
	if($_POST['login'] != '')	{
		if($_POST['username'] == '1'){
			session_start(); $_SESSION['isAdmin'] = true;
			header('Location: http://localhost/Project/staffHome.php');
			exit();
		}else if($_POST['username'] == '2'){
			session_start(); $_SESSION['isUser'] = true;
				header('Location: http://localhost/Project/orderpage.html');
			exit();
		}
	}
?>
<html>
	<body>
			<p>
							<!-- Make login form -->
				<form action="loginTest.php" method="post" name="…" … >
					Username
					<input type="text" name="username" required /><br><br>

					<input	type="submit"	name="login"	value="Login">
				</form>
			</p>

	</body>
</html>
