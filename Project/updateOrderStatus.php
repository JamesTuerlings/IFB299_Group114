<?php

require 'linkDB_employee.php';

$status = $_GET['newStatus'];
$orderID = $_GET['orderID'];



$sql = "UPDATE packagedb.orders
        SET orderStatus= :status
        WHERE orderID =  :orderID";

//prepare and execute query
$query = $pdo->prepare($sql);
$query->execute(array(  ':status' => $status,
                        ':orderID' => $orderID,));


require 'URL.php';
$URL = "Location: ${mainURL}staffHome.php";
header($URL);

?>
