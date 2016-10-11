<?php
session_start();
if (!isset($_SESSION['employee'])){
	require 'URL.php';

	$URL = "Location: ${mainURL}login.php";
	header($URL);
	exit();
}
?>
