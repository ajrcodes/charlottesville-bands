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
									<h2>Charlottesville's <strong>Jam Bands</strong></h2>
								</header>

								<div class="row">
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
									<div class="6u 12u(narrower)">

										<section>
											<a href="paypal/payment.php?price=3000&description=Kendall Street Company" class="image featured"><img src="images/kendall_street_img.jpg" width = "250" height = "300" alt="" /></a>
											<header>
												<h3>Kendall Street Company</h3>
											</header>
											<p>UVA's favorite Jam Band</p>
											<p>Price: $3000</p>
											<a href="paypal/payment.php?price=3000&description=Kendall Street Company" class="button special">Book</a>
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
