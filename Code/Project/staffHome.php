<!DOCTYPE html>
<?php require 'isEmployeeCheck.php'; ?>

<html>
	<head>
		<?php require 'staffTitle.php';?>
	<body>
		<div class = "container">
			
			<div class="clear"></div>
			<section class= "main_section">		<br><br>
				<div class= 'indexDiv'>
					<h1> Deliver Package  </h1><br/>
					<a href = "staffDeliverySchedule.php"><input type="button" class = "index_button" value="Delivery Schedule" /></a>
					<a href = "staffSearchOrder.php"><input type="button" class = "index_button" value="Search order" /></a><br/>
				</div>
			</section>
			<div class="clear"></div>
			<footer class="page_footer">
				<?php require 'footer.php'; ?>
			</footer>
       </div>
	</body>
</html>
