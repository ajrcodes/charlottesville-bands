<?php
	
	// setup connection
	include_once 'db.php';

	// get posted variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipcode = $_POST['zipcode'];

    // format check the inputs & record any errors 
    $errors = array();



    if (!$errors) {
		// insert into MySQL db
		$insert_q = "INSERT INTO siteusers VALUES('$name', '$email', '$address', '$city', '$state', '$zipcode')";
		mysqli_query($conn, $insert_q);
		echo json_encode( array('result' => true ) );
	}

?>
