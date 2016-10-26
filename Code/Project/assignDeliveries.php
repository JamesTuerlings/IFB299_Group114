<!DOCTYPE html>
<!--check if person is an empolpyee !-->

<?php require 'isEmployeeCheck.php'; ?>
<html>
	<?php require 'managerTitle.php'; ?>

	<body>
		<div class = "container">

			<div class="clear"></div>
			<section class= "main_section_white">
				<h1>Assign deliveries</h1>
				<!--delivery table !-->
					<br><br>
					<div class= "tables">
						<?php require 'assignDeliveriesTable.php'; ?>
					</div>

			</section>
			<div class="clear"></div>
			<footer class="page_footer">
				&copy; Copywrite OnTheSpotPackages.com
			</footer>
      </div>
	</body>
</html>
