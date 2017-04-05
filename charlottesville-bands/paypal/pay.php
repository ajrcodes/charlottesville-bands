<?php

// Namespaces
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;

include_once 'db.php';
require 'startpaypal.php';

if(isset($_GET['approved'])) {

	$approved = $_GET['approved'] === 'true';

	if($approved) {

		$payerId = $_GET['PayerID'];
		$userID = $_SESSION['user_id'];

		// Get payment_id from database
		$hash = $_SESSION['paypal_hash'];
		$select_q = "SELECT * FROM transactions_paypal WHERE hash = '$hash'";
		$result = mysqli_query($conn, $select_q);

		// fetch data
    	$row = mysqli_fetch_array($result);
	    $paymentId = $row['payment_id'];

	    // Get payment credentials
	    $payment = Payment::get($paymentId, $apiContext);

	    // Setup payment execution
	    $execution = new PaymentExecution();
	    $execution->setPayerId($payerId);

	    // Charge user
	    $payment->execute($execution, $apiContext);

	    // INSERT HERE --> PAYMENT VERIFICATION AND UPDATE DB TO SHOW THE COMPLETION

	    header('Location: http://localhost/charlottesville-bands/confirm.php');

	} else {
		header('Location: http://localhost/charlottesville-bands/memberpage.php');
	}

}

?>
