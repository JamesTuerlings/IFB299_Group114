<!DOCTYPE html>
<?php require 'isManager.php'; ?>

<html>

	<head>
		<?php require 'managerTitle.php';?>
	<body>
		<div class = "container">

			<div class="clear"></div>
			<section class= "main_section">		<br><br>
				<div class= 'left_part'>
					<a href = "assignDeliveries.php"><input type="button" class = "manager_button" value="Assign Deliveries" /></a><br/>
					<a href = "employeeDetails.php"><input type="button" class = "manager_button" value="New employee" /></a><br/>
					<a href = "viewEmployees.php"><input type="button" class = "manager_button" value="View employees" /></a><br/>
				</div>

				<div class= 'right_part'>
				 	<a href = "report.php"><input type="button" class = "manager_button" value="View report " /></a><br/>
					<a href = "staffSearchOrder.php"><input type="button" class = "manager_button" value="Search order" /></a><br/>
					<a href = "completedDeliveries.php"><input type="button" class = "manager_button" value="Completed deliveries" /></a><br/>
				</div>

			</section>
			<div class="clear"></div>
			<footer class="page_footer">
				&copy; Copywrite OnTheSpotPackages.com
			</footer>
       </div>
	</body>
</html>
