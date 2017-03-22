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

    // insert and query db
	$insert_q = "INSERT INTO siteusers VALUES('$name', '$email', '$address', '$city', '$state', '$zipcode')";
	$result = mysqli_query($conn, $insert_q);
    // will set result to the status of the insertion -- false if the email was already present
    echo json_encode( array('result' => $result) );
?>