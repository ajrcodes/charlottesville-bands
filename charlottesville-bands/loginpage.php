<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<!--
	CS4753 - E-commerce
	Semester Project
	Group members:  Andrew Roberts (ajr5re), Ryan Donovan (rad9vy)

	Current Version:  Milestone 2
-->

<?php
	include('sessioncheck.php');
?>

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
					<h1 id="logo"><a href="index.php"><span></span></a></h1>
					<nav id="nav">
						<ul>
							<li><a class="gray" href="index.php">Home</a></li>
							<li><a class="gray" href="aboutpage.php">About Us</a></li>
							<li class = "current"><a href="" class="button special">Login</a></li>
							<li><a class="button special" href="signuppage.php">Sign Up</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<article id="main">

					<header class="special container">
						<span class="icon fa-chevron-circle-up"></span>
						<h2>Login</h2>
					</header>
			<!-- Three -->
						<section class="wrapper style3 container">

							<!-- Registration form -->

							<div id="content">

								<div class="signup-wrapper">

						          <form class="form-horizontal" id="myForm" action="login.php" method="post">
						  
						            <!-- Name input-->
						            <div class="form-group">
						            	<label class="col-md-3 control-label" for="username">Username</label>
						            	<input id="username" type="email" name="email" placeholder="youremail@gmail.com" class="form-control required">
						            </div>

						            <!-- Email input-->
						            <div class="form-group">
						              <label class="col-md-3 control-label" for="email">Password</label>
						              <div class="col-md-9">
						                <input id="password" type="password" name="password" placeholder="Password" class="form-control required">
						              </div>
						            </div>

   									<!-- Submit Button -->
   									<div style="text-align:center;">
						           		<input type="submit" id="login" class="btn btn-primary btn-md">
						        	</div>
						          </form>
						      
						      	  <!-- Signup link -->
						          <div style="text-align:center;">
						          	<br>
						          	<br>
						          	<div hidden id="errorMessage"></div>
						          	<br>
						          	<br>
						          	Don't have an account yet? <a href="signup.html">Sign Up Now!</a>
						          </div>

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
			<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<!-- Form submit & validation  -->
			<script type='text/javascript'>
			// referenced: http://stackoverflow.com/questions/280759/jquery-validate-how-to-add-a-rule-for-regular-expression-validation
			//  This method allows for generic regex expressions to be applied to the validator
		    $.validator.addMethod(
			    "regex",
			    function(value, element, regexp) {
			        var check = false;
			        return this.optional(element) || regexp.test(value);
			    },
			    "Please check your input."
			);

			$('#myForm').validate({

			    submitHandler: function(form) {

			        $.ajax({
			            url: form.action,
			            type: form.method,
			            data: { username: $('#username').val(), 
			      	  			password: $('#password').val()	},
			      	  	dataType: 'json',
			            success: function(response) {
			                if(response.result) {
			                	window.location = "memberpage.php"; // Redirecting To Member Page
			                } else {
			          			// no match, display that there was a wrong user/pass combo
			          			$('#errorMessage').show();
			          			$('#errorMessage').html("<font color='red'>The username or password was incorrect.  Try again.</font>");
			                }
			            }            
			        });
			    }
			});
			</script>
