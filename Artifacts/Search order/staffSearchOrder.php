<!DOCTYPE html>
<?php require 'isEmployeeCheck.php'; ?>

<html>

<?php require 'staffTitle.php'; ?>

	<body>
		<div class = "container">
			<section class= "main_section">		<br><br>
				<div class= 'center_part'>
					<br><br><br>
				<form action="staffSearchResult.php" method="GET" name="…" … >
					Order ID
					<input type="text" name="orderID" required /><br><br>

					<input	type="submit"	name="search">
				</form>
			</div>
			</section>
			<footer class="page_footer">
				<?php require 'footer.php'; ?>
			</footer>
       </div>
	</body>
</html>
