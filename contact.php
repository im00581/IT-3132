<?php
  $pageTitle = 'Contact';
  require 'partials/head.php';
?>

<body class="page-contact">
	<?php
    require 'partials/header.php';
    require 'partials/navi-primary.php';
    require 'partials/slider.php';
  ?>

	<section class="container main-content">

		<div class="phone">
			<h2>Contact Us</h2>
			<h3>We'd love to hear from you!</h3>
			<p>Leave us a message with positive feedback or tell us something to make your experience better!</p>
			<h4>Phone Number: <a href="tel:+19122108010">912-210-8010</a></h4>
			<h4>Email: <a href="mailto:willows@dailydelights.com">willows@dailydelights.com</a></h4>
		</div>
		<div class="container">
			<div class="contact">
				<form action="#">
					<!--We are not populating the data -->
					<div class="col-25">
						<label for="fname">First Name</label><br>
					</div>
					<div class="col-75">
						<input type="text" id="fname" name="firstname" placeholder="Kimberly"><br><br>
					</div>
					<div class="col-25">
						<label for="lname">Last Name</label><br>
					</div>
					<div class="col-75">
						<input type="text" id="lname" name="lastname" placeholder="Taylor"><br><br>
					</div>
					<div class="col-25">
						<label for="subject">Subject</label><br>
					</div>
					<textarea id="subject" name="subject" placeholder="I ❤ this place!" style="height:170px"></textarea><br><br>
					<input type="submit" value="Submit" onclick="alert('Thank you for your feedback!'); return false;">
				</form>
			</div>
		</div>

		<h3>Locations</h3>
		<h4>Savannah</h4>
		<p>
			1103 Bull Steet<br>
			Savannah, GA 34101
		</p>

		<h4>Statesboro</h4>
		<p>
			1598 Chandler Rd <br>
			Statesboro, GA 30458
		</p>
		<br>
		<?php require 'partials/map.php'; ?>
	</section>

	<?php require 'partials/footer.php'; ?>
</body>

</html>