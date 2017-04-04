<?php
	// Starting Session
	session_start();

	// if there is no login session, reroute to non-member homepage
	if(!isset($_SESSION['name'])) {
		header ('Location: index.html');
		exit();
	}
	
	// else personalize the memberpage and proceed
	else {
		// Storing Session
		$name=$_SESSION['name'];
	}

?>
