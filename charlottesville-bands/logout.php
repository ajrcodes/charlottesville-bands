<?php
	// Starting Session
	session_start();

	// Logout and route to non-member homepage
  	unset($_SESSION["name"]);
 	header('Location: index.php');

?>
