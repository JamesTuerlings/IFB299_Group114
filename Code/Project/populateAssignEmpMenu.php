<?php
require 'linkDB_employee.php';

$sql = "SELECT employeeID FROM packagedb.employee WHERE employeeType = 'Driver'";

$orderID = $_GET['orderID'];

//execute query
$query = $pdo->prepare($sql);
$query->execute(array());


//populate the search by suburb dropdown menu in the search form
while($r = $query->fetch()){
	echo '<option value =',$r['employeeID'], '>',$r['employeeID'],'</option>';
}
?>
