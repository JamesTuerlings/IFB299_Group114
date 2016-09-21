<!DOCTYPE html>
<?php require 'isEmployeeCheck.php'; ?>

<html>

	<?php require 'staffTitle.php'; ?>


	<body>
		<div class = "container">
			<section class= "main_section">
					<!--delivery table !-->

					<div class = "left_part">
					<?php require 'indivOrderTable.php' ?>
				</div>

				<div class = "right_part">
					<?php require 'staffUpdateOrderStatus.php' ?>

			</div>

			</section>
			<div class="clear"></div>
			<footer class="page_footer">
				&copy; Copywrite OnTheSpotPackages.com
			</footer>
       </div>
	</body>
</html>
