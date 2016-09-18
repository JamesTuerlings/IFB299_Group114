<?php

	require 'linkDB.php';

//placeholder
	$employeeID = '1';

	$userID = $employeeID;

	$sql = "SELECT * FROM packagedb.orders WHERE employeeID = ?";

	//execute query
	$query = $pdo->prepare($sql);
	$query->execute(array($employeeID));

	//check if query returned any rows
	if($query->rowCount() > 0){

	?>
	<table border="1" style="width:100%">
		<tr>
	     <td>orderID</td>
	     <td>delivery date</td>
	     <td>num packages</td>
	   </tr>

	<?php

	while($r = $query->fetch()){
		echo '<tr>';
	     echo '<td><a href="indivOrder.php?orderID=', $r['orderID'], '">', $r['orderID'],'</a></td>';
	     echo '<td>',$r['delDate'],'</td>';
	     echo '<td>',$r['numPackages'],'</td>';
	   echo '</tr>';
	 }
	 echo '</table>';

}else{
	echo 'There are no results matching: ', $name;
}
 ?>
