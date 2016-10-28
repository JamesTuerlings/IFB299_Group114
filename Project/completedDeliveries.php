<!DOCTYPE html>
<?php require 'isEmployeeCheck.php'; ?>

<html>
	<?php require 'managerTitle.php'; ?>

	<body>
		<div class = "container">

			<div class="clear"></div>
			<section class= "main_section_white">
				<h1>Completed Deliveries</h1>
					<!--delivery table !-->

					<br><br>
					<?php require 'completedDeliveriesTable.php'; ?>

			</section>
			<div class="clear"></div>
			<footer class="page_footer">
				&copy; Copywrite OnTheSpotPackages.com
			</footer>
      </div>
	</body>
</html>
