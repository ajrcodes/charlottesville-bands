<?php
// db $conn object
include_once 'db.php';

// Namespaces
use PayPal\Api\Payer;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Exception\PPConnectionException;

// Dependencies
require 'startpaypal.php';

// Api members
$payer = new Payer();
$details = new Details();
$amount = new Amount();
$item = new Item(); 
$itemList = new ItemList();
$transaction = new Transaction();
$payment = new Payment();
$redirectUrls = new RedirectUrls();

// Dynamically set some of the details
$price=$_GET['price'];
$description = $_GET['description'];

// Payer
$payer->setPaymentMethod('paypal');

// Details
$details->setShipping('0.00')
	->setTax('0.00')
	->setSubtotal($price);

// Amount
$amount->setCurrency('USD')
	->setTotal($price)
	->setDetails($details);

// Item details                          
$item->setQuantity(1)
	->setName($description)          
	->setPrice($price)               
	->setCurrency('USD');  

// Item List
$itemList->setItems(array($item));  

// Transaction
$transaction->setAmount($amount)
	->setDescription($description)
	->setItemList($itemList); 

// Payment
$payment->setIntent('sale')
	->setPayer($payer)
	->setTransactions([$transaction]);

// Redirect URLs
$redirectUrls->setReturnUrl('http://localhost/charlottesville-bands/paypal/pay.php?approved=true')
	->setCancelUrl('http://localhost/charlottesville-bands/paypal/pay.php?approved=false');

$payment->setRedirectUrls($redirectUrls);

try {

	$payment->create($apiContext);

	// Generate and store hash
	$payid = $payment->getId();
	$hash = md5($payid);
	$_SESSION['paypal_hash'] = $hash;

	// form queries
	$insert_q = "INSERT INTO transactions_paypal VALUES('', '1', '$payid', '$hash', '0')";
	mysqli_query($conn, $insert_q);

	// Prepare and execute transaction storage

} catch(PPConnectionException $e) {
	header('Location: /../bands.html');
}

foreach ($payment->getLinks() as $link) {
	if($link->getRel() == 'approval_url') {
		$redirectUrl = $link->getHref();
	}
}

header('Location: ' . $redirectUrl);

?>
