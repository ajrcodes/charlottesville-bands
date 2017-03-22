<?php
// Namespaces
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;

session_start();
$_SESSION['user_id'] = 1;
// 1. Autoload the SDK Package. This will include all the files and classes to your autoloader
// Used for composer based installation
require __DIR__  . '/../vendor/autoload.php';
// Use below for direct download installation
// require __DIR__  . '/PayPal-PHP-SDK/autoload.php';

// 2. Provide your Secret Key. Replace the given one with your app clientId, and Secret
// https://developer.paypal.com/webapps/developer/applications/myapps
$apiContext = new ApiContext(
    new OAuthTokenCredential(
        'AXCKlFQDEakrOZL10JiaA9Ltc20abO4_Nq3RbilyeNjPdFkbdsW5ZiBpi036xvZ7TrJ4avd5OnvYe_Lx',     // ClientID
        'EF7iBdaLsiGHSv2N6E7ZKP9SqiWm-PACCd1cJoF0LfZsGPErt0FuUB9uvtxDjvYW7m5yGs2-I9Epc0kv'      // ClientSecret
    )
);

$apiContext->setConfig([
	'mode' => 'sandbox',
	'http.ConnectionTimeOut' => 30,
	'log.LogEnabled' => false,
	'log.FileName' => '',
	'log.LogLevel' => 'FINE',
	'validation' => 'log'
]);

?>
