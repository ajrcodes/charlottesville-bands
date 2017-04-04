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
								<h2>Charlottesville's <strong>Rock Bands</strong></h2>
							</header>

							<div class="row">
								<div class="6u 12u(narrower)">

									<section>
										<a href="paypal/payment.php?price=100&description=Corduroy" class="image featured"><img src="images/crd_img.jpg" width = "250" height = "300" alt="" /></a>
										<header>
											<h3>Corduroy</h3>
										</header>
										<p>Rock band formed by UVA students</p>
										<p>Price: $100</p>
										<a href="paypal/payment.php?price=100&description=Corduroy" class="button special">Book</a>
									</section>

								</div>
								<div class="6u 12u(narrower)">

									<section>
										<a href="paypal/payment.php?price=400&description=Dave Matthews Band" class="image featured"><img src="images/dmb1.jpg" width = "250" height = "300" alt="" /></a>
										<header>
											<h3>Dave Matthews Band</h3>
										</header>
										<p>The pride of Charlottesville</p>
										<p>Price: $400</p>
										<a href="paypal/payment.php?price=400&description=Dave Matthews Band" class="button special">Book</a>
									</section>

								</div>
							</div>
							<div class="row">
								<div class="6u 12u(narrower)">

									<section>
										<a href="paypal/payment.php?price=1000&description=Ryan Polsky and the Polski" class="image featured"><img src="images/polsky.jpg" width = "250" height = "300" alt="" /></a>
										<header>
											<h3>Ryan Polsky and the Polski</h3>
										</header>
										<p>Infusion of Rock and Blues</p>
										<p>Price: $1000</p>
										<a href="paypal/payment.php?price=1000&description=Ryan Polsky and the Polski" class="button special">Book</a>
									</section>

								</div>
								<div class="6u 12u(narrower)">

									<section>
										<a href="paypal/payment.php?price=10000&description=The Beatles" class="image featured"><img src="images/beatles.jpg" width = "250" height = "300" alt="" /></a>
										<header>
											<h3>The Beatles</h3>
										</header>
										<p>The Fab 4 have relocated to Charlottesville</p>
										<p>Price: $10,000</p>
										<a href="paypal/payment.php?price=10000&description=The Beatles" class="button special">Book</a>
									</section>

								</div>
							</div>

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
