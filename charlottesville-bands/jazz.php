<?php
	include('session.php');
?>
<!DOCTYPE HTML>
<!--
	CS4753 - E-commerce
	Semester Project
	Group members:  Andrew Roberts (ajr5re), Ryan Donovan (rad9vy)

	Current Version:  Milestone 4
-->
<html>
	<head>
		<title>Charlottesville Bands</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="index">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1 id="logo"><a href="memberpage.php"><span></span></a></h1>
					<nav id="nav">
						<ul>
							<li class="gray"><a href="memberpage.php"><span class="icon fa fa-user"></span> <?php echo $name; ?></a></li>
							<li class="gray"><a href="logout.php" class="button special">LOGOUT</a></li>
						</ul>
					</nav>
				</header>
			<!-- Main -->
				<article id="main">

					<header class="special container">
						<span class="icon fa fa-calendar"></span>
						<h2>BOOK NOW</h2>
					</header>
			<!-- Three -->
						<section class="wrapper style3 container special">

							<header class="major">
								<h2>Charlottesville's <strong>Jazz Bands</strong></h2>
							</header>

							<div class="row">
								<div class="6u 12u(narrower)">

									<section>
										<a href="paypal/payment.php?price=500&description=The Andrew Roberts Experience" class="image featured"><img src="images/ajr_img.jpg" width = "250" height = "300" alt="" /></a>
										<header>
											<h3>The Andrew Roberts Experience</h3>
										</header>
										<p>Charlottesville's Predominant Jazz Sextet</p>
										<p>Price: $500</p>
										<a href="paypal/payment.php?price=500&description=The Andrew Roberts Experience" class="button special">Book</a>
									</section>

								</div>
								<div class="6u 12u(narrower)">

									<section>
										<a href="paypal/payment.php?price=1000&description=John D'Earth Quartet" class="image featured"><img src="images/JohnDearth.jpg" width = "250" height = "300" alt="" /></a>
										<header>
											<h3>John D'Earth Quartet</h3>
										</header>
										<p>Famous UVA Faculty Member and Trumpeter</p>
										<p>Price: $1000</p>
										<a href="paypal/payment.php?price=1000&description=John D'Earth Quartet" class="button special">Book</a>
									</section>

								</div>
							</div>
							<div class="row">
								<div class="6u 12u(narrower)">

									<section>
										<a href="paypal/payment.php?price=3000&description=Pete Spaar Trio" class="image featured"><img src="images/petespaar.jpg" width = "250" height = "300" alt="" /></a>
										<header>
											<h3>Pete Spaar Trio</h3>
										</header>
										<p>Trio led by UVA faculty bass player Pete Spaar</p>
										<p>Price: $3000</p>
										<a href="paypal/payment.php?price=3000&description=Pete Spaar Trio" class="button special">Book</a>
									</section>

								</div>
								<div class="6u 12u(narrower)">

									<section>
										<a href="paypal/payment.php?price=900&description=Jeff Decker and the Boys" class="image featured"><img src="images/jeffdecker.jpg" width = "250" height = "300" alt="" /></a>
										<header>
											<h3>Jeff Decker and the Boys</h3>
										</header>
										<p>Group led by saxophonist Jeff Decker</p>
										<p>Price: $900</p>
										<a href="paypal/payment.php?price=900&description=Jeff Decker and the Boys" class="button special">Book</a>
									</section>

								</div>
							</div>

							<!-- Back to genres button-->
							<br>
							<br>
							<br>
							<a href="memberpage.php" class="button">BACK TO GENRES</a>
						</section>
				</article>

			<!-- Footer -->
				<footer id="footer">

					<ul class="icons">
					</ul>

					<ul class="copyright">
						<li>&copy; Charlottesville Bands</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>

				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
	</body>
</html>
