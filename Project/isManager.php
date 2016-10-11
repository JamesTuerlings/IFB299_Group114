<?php
session_start();
if (!isset($_SESSION['employee']) || $_SESSION['employee'] != '1'){
	require 'URL.php';

	$URL = "Location: ${mainURL}login.php";
	header($URL);
	exit();
}
?>
