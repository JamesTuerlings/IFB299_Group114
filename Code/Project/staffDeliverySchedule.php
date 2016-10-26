<!DOCTYPE html>
<?php require 'isEmployeeCheck.php'; ?>

<html>

<?php require 'staffTitle.php'; ?>

	<body>
		<div class = "container">

			<div class="clear"></div>
			<section class= "main_section_white">
				<h1>Deliveries</h1>
					<!--delivery table !-->

					<br><br>
					<div class= "tables">
				  	<?php require 'makeDeliveryTable.php'; ?>
			  	</div>


			</section>
			<div class="clear"></div>
			<footer class="page_footer">
				&copy; Copywrite OnTheSpotPackages.com
			</footer>
       </div>
	</body>
</html>
