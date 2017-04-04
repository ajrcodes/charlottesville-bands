<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<!--
	CS4753 - E-commerce
	Semester Project
	Group members:  Andrew Roberts (ajr5re), Ryan Donovan (rad9vy)

	Current Version:  Milestone 1
-->

<?php
	include ('db.php');
	session_start();

	if((!isset($_SESSION['username'])) && (!isset($_SESSION['password'])) ) {
		header ('Location: index.html');
		exit();
	}
	else {
		header ('Location: memberpage.php');
	}
?>