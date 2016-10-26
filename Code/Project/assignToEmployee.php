<!DOCTYPE html>
<?php require 'isManager.php'; ?>

<html>

<?php require 'managerTitle.php'; ?>

	<body>
		<div class = "container">
			<section class= "main_section">		<br><br>
				<div class= 'center_part'>
					<br><br><br>
				<form action="assignOrder.php" method="POST" name="…" … >
					Employee
					<select name = "employeeID" ><br><br>
						<option value =""> </option>
						<?php require 'populateAssignEmpMenu.php'; ?>
					</select><br><br>
					<input type="hidden" name="orderID" value="<?php echo htmlspecialchars($_GET['orderID']); ?>"		>


					<input	type="submit"	name="search">
				</form>
			</div>
			</section>
			<footer class="page_footer">
				&copy; Copywrite OnTheSpotPackages.com
			</footer>
       </div>
	</body>
</html>
