<!DOCTYPE html>
<html>
	<head>
		<?php require 'staffTitle.php';?>
	<body>
		<div class = "container">

			<div class="clear"></div>
			<section class= "main_section">		<br><br>
				<div class= 'left_part'>
					<a href = ""><input type="button" class = "manager_button" value="Assign Deliveries" /></a><br/>
					<a href = ""><input type="button" class = "manager_button" value="New employee" /></a><br/>
					<a href = ""><input type="button" class = "manager_button" value="View employees" /></a><br/>
				</div>

				<div class= 'right_part'>
				 	<a href = "report.php"><input type="button" class = "manager_button" value="View report " /></a><br/>
					<a href = ""><input type="button" class = "manager_button" value="Search order" /></a><br/>
					<a href = ""><input type="button" class = "manager_button" value="Completed deliveries" /></a><br/>
				</div>

			</section>
			<?php require 'footer.php';?>
       </div>
	</body>
</html>
