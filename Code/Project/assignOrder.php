<?php
require 'linkDB_employee.php';

$employeeID = $_POST['employeeID'];
$orderID = $_POST['orderID'];


$sql = "UPDATE packagedb.orders SET employeeID = :employeeID WHERE orderID = :orderID";

//execute query
$query = $pdo->prepare($sql);

$query->execute(array(
      ':orderID' => $orderID,
      ':employeeID' => $employeeID
));

require 'URL.php';

$URL = "Location: ${mainURL}assignDeliveries.php";
header($URL);

?>
