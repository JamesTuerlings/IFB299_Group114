<!DOCTYPE html>
<?php
  session_start(); $_SESSION['order'] = true;
  header('Location: http://localhost/pp/loginTest.php');
  exit();
?>
