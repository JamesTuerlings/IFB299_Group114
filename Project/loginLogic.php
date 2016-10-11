<?php
require 'URL.php';

  $personType = '';
  $dbPassword = '';

  if($username < 100){
    $personType = 'employee';
  }else{
    $personType = 'customer';
  }

  require 'linkDB_employee.php';


  if($personType == 'employee'){
    $sql = "SELECT employeeID, password FROM packagedb.employee WHERE employeeID = ?";

    $query = $pdo->prepare($sql);
    $query->execute(array($username));

  }else if($personType == 'customer'){
    $sql = "SELECT customerID, password FROM packagedb.customers WHERE customerID = ?";

    $query = $pdo->prepare($sql);
    $query->execute(array($username));

  }

  if($query->rowCount() > 0){
    while($r = $query->fetch()){
      $dbPassword = $r['password'];
    }

    if($personType == 'employee'){
      if($dbPassword == $password){
        session_start(); $_SESSION['employee'] = true;
        $_SESSION['employee'] = $username;
        if($username == '1'){
          $URL = "Location: ${mainURL}managerHome.php";
          header($URL);
        }else{
          $URL = "Location: ${mainURL}staffHome.php";
          header($URL);
        }
      }
    }else if($personType == 'customer'){
      if($dbPassword == $password){
        session_start(); $_SESSION['customer'] = true;
        $_SESSION['customer'] = $username;
        $URL = "Location: ${mainURL}customerWelcome.php";
        header($URL);
      }
    }
    exit();
  }
  ?>
