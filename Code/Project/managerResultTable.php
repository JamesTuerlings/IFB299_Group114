<?php

require 'linkDB_employee.php';

	$orderID = $_GET['orderID'];

	//check if variables are empty
	if ($orderID == ''){
		require 'URL.php';
		$URL = "Location: ${mainURL}managerSearch.php";
		header($URL);
		}else{
			$input = $orderID;
			$sql = "SELECT * FROM  packagedb.orders
							INNER JOIN packagedb.customers ON customers.customerID = orders.customerID
							WHERE orders.orderID = ?;";

		}

		//prepare and execute query
			$query = $pdo->prepare($sql);
			$query->execute(array($orderID));

		  echo '<h1> Order: ', $orderID, '</h1><br>';
		?>

		<!-- Make table -->

			<table border="1" style="width:100%">
				<tr>
			     <td>Customer name</td>
			     <td>num. packages</td>
			     <td>weight</td>
					 <td>signature</td>
					 <td>pickup address</td>
					 <td>deliver address</td>
					 <td>deliver date</td>
					 <td>pickup time</td>
					 <td>cost</td>
					 <td>employeeID</td>

			   </tr>
		<?php
		while($r = $query->fetch()){
		  echo '<tr>';
		    echo '<td>',$r['firstName'], ' ', $r['lastName'], '</td>';
		     echo '<td>',$r['numPackages'],'</td>';
		     echo '<td>',$r['weight'],'</td>';
				 echo '<td>',$r['signature'],'</td>';
				 echo '<td>',$r['pStreet'], ',', $r['pSuburb'], ',', $r['pState'], ',', $r['pPostcode'], '</td>';
				 echo '<td>',' del address','</td>';
				 echo '<td>',$r['delDate'],'</td>';
				 echo '<td>',$r['pickupTime'],'</td>';
				 echo '<td>',$r['cost'],'</td>';
				 echo '<td>',$r['employeeID'],'</td>';

		   echo '</tr>';
			 }
		?>
		</table>
