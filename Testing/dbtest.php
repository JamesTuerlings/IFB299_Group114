<!DOCTYPE html>
<html>
<head>dbTest</head>
<body>
<?php

require 'linkDB.php';

	$name = '1';

	$input = $name;
	$sql = "SELECT * FROM packagedb.customer WHERE customerID = ?";

//prepare and execute query
	$query = $pdo->prepare($sql);
	$query->execute(array($name));

  echo '<h1>', $name, '</h1>';
?>

<!-- Make table -->

	<table border="1" style="width:100%">
		<tr>
	     <td>ID</td>
	     <td>name</td>
	   </tr>
<?php
while($r = $query->fetch()){
  echo '<tr>';
    echo '<td>',$r['customerID'],'</td>';
     echo '<td>',$r['fname'],'</td>';
   echo '</tr>';
	 }
?>
</table>
</body>
</html>
