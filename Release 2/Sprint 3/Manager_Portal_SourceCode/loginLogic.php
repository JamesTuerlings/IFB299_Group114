<?php
require 'URL.php';

  $personType = '';
  $dbPassword = '';

  //check if id is employee or customer
  if($username < 100){
    $personType = 'employee';
  }else{
    $personType = 'customer';
  }

  require 'linkDB_employee.php';


  if($personType == 'employee'){
    $sql = "SELECT employeeID, password FROM packagedb.employee WHERE employeeID = ?";
  }else if($personType == 'customer'){
    $sql = "SELECT customerID, password FROM packagedb.customers WHERE customerID = ?";
  }
  //execute sql
  $query = $pdo->prepare($sql);
  $query->execute(array($username));

//check if query returned rows
  if($query->rowCount() > 0){
    while($r = $query->fetch()){
      $dbPassword = $r['password'];
    }

    //check if password is correct
    if($dbPassword == $password){

      //check if username is correct
      if($personType == 'employee'){
        session_start(); $_SESSION['employee'] = true;
        $_SESSION['employee'] = $username;
        if($username == '1'){
          $URL = "Location: ${mainURL}managerHome.php";
          header($URL);
        }else{
          $URL = "Location: ${mainURL}staffHome.php";
          header($URL);
        }

      }else if($personType == 'customer'){
        session_start(); $_SESSION['customer'] = true;
        $_SESSION['customer'] = $username;
		$_SESSION['newCustomer'] = "false";
        $URL = "Location: ${mainURL}customerWelcome.php";
        header($URL);

      }
      exit();
    }else{

      //concorect password message box
      ?>
      <script type="text/javascript">
        window.alert("Incorrect password");
      </script>
      <?php
    }
  }





  ?>
