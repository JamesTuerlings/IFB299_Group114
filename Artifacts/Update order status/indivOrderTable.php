<?php

require 'linkDB_employee.php';

	$orderID = $_GET['orderID'];

	$sql = "SELECT * FROM  packagedb.orders
					INNER JOIN packagedb.customers ON customers.customerID = orders.customerID
					WHERE orders.orderID = ?;";

//prepare and execute query
	$query = $pdo->prepare($sql);
	$query->execute(array($orderID));

  echo '<br><br><h1> Order: ', $orderID, '</h1><br><br>';
?>

<!-- Make table -->

	<table border="1" style="width:100%">
<?php
while($r = $query->fetch()){
  echo '<tr>';
	   echo '<td> customer name</td>';
	   echo '<td>',$r['firstName'], ' ', $r['lastName'], '</td>';
	echo '</tr>';

	echo '<tr>';
	   echo '<td> num. packages</td>';
	   echo '<td>',$r['numPackages'], '</td>';
	echo '</tr>';

	echo '<tr>';
		 echo '<td> weight</td>';
		 echo '<td>',$r['weight'], '</td>';
	echo '</tr>';

	echo '<tr>';
		 echo '<td> signature</td>';
		 echo '<td>',$r['signature'], '</td>';
	echo '</tr>';

	echo '<tr>';
		 echo '<td> pickup address</td>';
		 echo '<td>',$r['pStreet'], ',', $r['pSuburb'], ',', $r['pState'], ',', $r['pPostcode'], '</td>';
	echo '</tr>';

	echo '<tr>';
		 echo '<td> deliver address</td>';
		 echo '<td>del address</td>';
	echo '</tr>';

	echo '<tr>';
		 echo '<td>cost</td>';
		 echo '<td>',$r['cost'], '</td>';
	echo '</tr>';

	echo '<tr>';
		 echo '<td> status</td>';
		 echo '<td>',$r['orderStatus'], '</td>';
	echo '</tr>';
	$orderStatus = $r['orderStatus'];
	$secure = $r['secure'];

}
?>
</table>
