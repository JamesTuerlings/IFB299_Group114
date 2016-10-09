<?php
  if(!isset($_SESSION))
    {
      session_start();
    }
    require 'linkDB.php';
    $customerID = $_SESSION["customerID"];

    //add new data in to databse
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['customerEmail'];
    $suburb = $_POST['suburb'];
    $street = $_POST['street'];
    $state = $_POST['state'];
    $telNo = $_POST['telNo'];
    $customerType = $_POST['customerType'];
    $postcode = $_POST['postcode'];
    $password = $_POST['password'];

    $value = mysql_query("UPDATE customers SET firstName = '$firstName',lastName= '$lastName',
      email= '$email',suburb= '$suburb',street= '$street',state= '$state',telNo= '$telNo',
      customerType= '$customerType',postcode= '$postcode',password= '$password'  WHERE customerID = '$customerID'");
	?>
  <!DOCTYPE html>
  <html>
  	<head>
  		<meta charset="utf-8"/>
  		<title> Update Confirmation </title>
          <!-- Link CSS -->
          <link href="main.css" rel="stylesheet" type="text/css"/>
  	</head>

  	<?php require 'title.php'; ?>
  	<body>
  		<div class = "container">
  			<div class="clear"></div>
  			<section class= "main_section">

  				<img src = "pageno1.png" alt="Image missing" height="40" width="370" class= "pageNo"/>
  				<div class= "orderPage_background">
  					<div class= "costDiv">
  						<h1 style="padding-bottom: 50px;"> Details Updated Sucessfully</h1><br/>
  						<h2 style="color:black; font-size:200%">Your User ID </h2>
  						<h2 style="color:orange; font-size:300%; font-weight:bold"><?php echo $customerID; ?></h2><br>
  						<a href = "customerWelcome.php"><input type="button" value="Continue" class="continue_button"/></a><br/>
  					</div>
  				</div>

  			</section>
  			<div class="clear"></div>
  			<footer class="page_footer">
  				&copy; Copywrite OnTheSpotPackages.com
  			</footer>
         </div>
  	</body>
  </html>
