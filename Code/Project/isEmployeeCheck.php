<?php
session_start();
if (!isset($_SESSION['employee'])){
	header("Location: http://localhost/Project/login.php");
	exit();
}
?>
