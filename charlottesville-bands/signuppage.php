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
							<li><a class="button special" href="loginpage.php">Login</a></li>
							<li class="current"><a class="button special" href="">Sign Up</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<article id="main">

					<header class="special container">
						<span class="icon fa-chevron-circle-up"></span>
						<h2>SIGN UP</h2>
					</header>

					<!-- Three -->
						<section class="wrapper style3 container">

							<!-- Registration form -->

							<div id="content">

								<div class="signup-wrapper">

						          <form class="form-horizontal" id="regForm" action="signup.php" method="post">
						  
						            <!-- Name input-->
						            <div class="form-group">
						            	<label class="col-md-3 control-label" for="name">Name</label>
						            	<input id="name" type="text" name="name" placeholder="Your name" class="form-control required">
						            </div>

						            <!-- Email input-->
						            <div class="form-group">
						              <label class="col-md-3 control-label" for="email">Email</label>
						              <div class="col-md-9">
						                <input id="email" type="email" name="email" placeholder="youremail@gmail.com" class="form-control required">
						              </div>
						            </div>
						    		
						    		<!-- Password input-->
						            <div class="form-group">
						              <label class="col-md-3 control-label" for="password">Password</label>
						              <div class="col-md-9">
						                <input id="password" type="password" name="password" placeholder="" class="form-control required">
						              </div>
						            </div>

						    		<!-- Address input-->
						            <div class="form-group">
						              <label class="col-md-3 control-label" for="address">Address</label>
						              <div class="col-md-9">
						                <input id="address" type="text" name="address" placeholder="123 Main St." class="form-control required">
						              </div>
						            </div>

						            <!-- City input-->
						            <div class="form-group">
						              <label class="col-md-3 control-label" for="city">City</label>
						              <div class="col-md-9">
						                <input id="city" type="text" name="city" placeholder="Charlottesville" class="form-control required">
						              </div>
						            </div>

						            <!-- State input-->
						            <div class="form-group">
						              <label class="col-md-3 control-label" for="state">State</label>
						              <div class="col-md-9">
						                <!--<input id="state" type="text" name="state" placeholder="Virginia" class="form-control required">-->
						                <select id="stateSelect" class="required">
						                	<option value="">Choose an option</option> 
						                	<option value="AL">AL</option>
						                	<option value="AK">AK</option>
						                	<option value="AZ">AZ</option>
						                	<option value="AR">AR</option>
						                	<option value="CA">CA</option>
						                	<option value="CO">CO</option>
						                	<option value="CT">CT</option>
						                	<option value="DE">DE</option>
						                	<option value="FL">FL</option>
						                	<option value="GA">GA</option>
						                	<option value="HI">HI</option>
						                	<option value="ID">ID</option>
						                	<option value="IL">IL</option>
						                	<option value="IN">IN</option>
						                	<option value="IA">IA</option>
						                	<option value="KS">KS</option>
						                	<option value="KY">KY</option>
						                	<option value="LA">LA</option>
						                	<option value="ME">ME</option>
						                	<option value="MD">MD</option>
						                	<option value="MA">MA</option>
						                	<option value="MI">MI</option>
						                	<option value="MN">MN</option>
						                	<option value="MS">MS</option>
						                	<option value="MO">MO</option>
						                	<option value="MT">MT</option>
						                	<option value="NE">NE</option>
						                	<option value="NV">NV</option>
						                	<option value="NH">NH</option>
						                	<option value="NJ">NJ</option>
						                	<option value="NM">NM</option>
						                	<option value="NY">NY</option>
						                	<option value="NC">NC</option>
						                	<option value="ND">ND</option>
						                	<option value="OH">OH</option>
						                	<option value="OK">OK</option>
						                	<option value="OR">OR</option>
						                	<option value="PA">PA</option>
						                	<option value="RI">RI</option>
						                	<option value="SC">SC</option>
						                	<option value="SD">SD</option>
						                	<option value="TN">TN</option>
						                	<option value="TX">TX</option>
						                	<option value="UT">UT</option>
						                	<option value="VT">VT</option>
						                	<option value="VA">VA</option>
						                	<option value="WA">WA</option>
						                	<option value="WV">WV</option>
						                	<option value="WI">WI</option>
						                	<option value="WY">WY</option>
						                </select>
						              </div>
						            </div>

						            <!-- Zipcode input-->
						            <div class="form-group">
						              <label class="col-md-3 control-label" for="zipcode">Zipcode</label>
						              <div class="col-md-9">
						                <input id="zipcode" type="text" name="zipcode" placeholder="22903" class="form-control required">
						              </div>
						            </div>
						    
						            <!-- Form actions -->
						            <div class="form-group">
						              <div class="col-md-12 text-right">
						                <input type="submit" id="signup" class="btn btn-primary btn-md">
						              </div>
						            </div>

						          </form>

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

		$('#regForm').validate({

			rules: {
				name: {
					regex: /^([a-zA-Z]+\s)*[a-zA-Z]+$/
				},

				password: {
					minlength: 5,
				},

				city: {
					regex: /^([a-zA-Z]+\s)*[a-zA-Z]+$/
				},
			
				zipcode:{
					
                	maxlength: 5,
	                regex: /^[0-9]+$/
            	}
			},

		    submitHandler: function(form) {
		    	var state = document.getElementById("stateSelect");
				var stateVal = state.options[state.selectedIndex].value;
		        $.ajax({
		            url: form.action,
		            type: form.method,
		            data: { name: $('#name').val(), 
		      	  			email: $('#email').val(),
		      	  			address: $('#address').val(),
		      	  			password: $('#password').val(),
		      	  			city: $('#city').val(),
		      	  			state: stateVal,
		      	  			zipcode: $('#zipcode').val() },
		      	  	dataType: 'json',
		            success: function(response) {
		                if(response.result) {
		                	alert("Success!");
		                } else {
		                	alert("This email is already registered.  Please login.");
		                }
		            }            
		        });
		    }
		});
		</script>
	</body>
</html>
