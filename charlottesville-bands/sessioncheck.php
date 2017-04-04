<?php
	// Starting Session
	session_start();

	// if there is a login session, reroute to member homepage
	if(isset($_SESSION['name'])) {
		header ('Location: memberpage.php');
		exit();
	}

?>
