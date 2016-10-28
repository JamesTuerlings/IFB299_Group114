<?php

	require 'linkDB_employee.php';


	$sql = "SELECT orderID, delDate FROM packagedb.orders WHERE employeeID = 0";

	//execute query
	$query = $pdo->prepare($sql);
	$query->execute(array());

	//check if query returned any rows
	if($query->rowCount() > 0){


			//make table
		?>
		<table border="1" style="width:100%">
			<tr>
		     <td>orderID</td>
		     <td>delivery date</td>
		     <td>Assign</td>
		   </tr>

		<?php

		while($r = $query->fetch()){
			echo '<tr>';
		     echo '<td>', $r['orderID'],'</a></td>';
		     echo '<td>',$r['delDate'],'</td>';
		     echo '<td><a href="assignToEmployee.php?orderID=', $r['orderID'], '">Assign</td>';
		   echo '</tr>';
		 }
		 echo '</table>';

	}
 ?>
