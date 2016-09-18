<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title> Welcome </title>
        <!-- Link CSS -->
        <link href="main.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<div class = "container">
			<?php require 'header.php'; ?>

			<nav class ="navigation">
				<?php require 'navigation.php'; ?>
			</nav>
			</br>
			<div class="clear"></div>

			<section class= "main_section">
				<img src="https://lh3.googleusercontent.com/rL44epJXF7TJ4eYE1ah2lVU-HIyXZ_w3w0oT3KQgR0KvJYsvKpYEDzsP-2727v8JaiqSgZfMQQ=w1920-h1080-rw-no" alt="Image missing" height="40"
									width="370" class= "pageNo"/>

				<div class= "left_part">
					<h1 class="heading"> New Customer </h1><br/>
					<input type="button" class = "ca_button" value="Create Account" /><br/>
					<input type="button" class = "cwa_button" value="Continue Without Account" /><br/>
				</div>

				<div class= "right_part">
					<h1 class="heading"> Existing Customer </h1><br/>
					<a href="fromOrder.php"><input type="button" class = "ca_button" value="Sign In" /><br/>
					<input type="button" class = "cwa_button" value="Track Order" /><br/>
				</div>

			</section>
			<div class="clear"></div>
			<footer class="page_footer">
				<?php require 'footer.php'; ?>
			</footer>
       </div>
	</body>
</html>
