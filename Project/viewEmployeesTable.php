<?php

	require 'linkDB_employee.php';


	$sql = "SELECT * FROM packagedb.employee";

	//execute query
	$query = $pdo->prepare($sql);
	$query->execute(array());

	//check if query returned any rows
	if($query->rowCount() > 0){

	?>
	<table border="1" style="width:100%">
		<tr>
	     <td>ID</td>
	     <td>name</td>
	     <td>Address</td>
	   </tr>

	<?php

	while($r = $query->fetch()){
		echo '<tr>';
	     echo '<td>', $r['employeeID'],'</a></td>';
	     echo '<td>',$r['firstName'], ' ', $r['lastName'], '</td>';
			 echo '<td>',$r['empStreet'], $r['empSuburb'], $r['empState'], ', ', $r['empPostcode'], '</td>';
	   echo '</tr>';
	 }
	 echo '</table>';

}
 ?>
