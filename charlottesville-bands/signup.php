<?php

    // mailer functionality
    require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    // setup db connection
    include_once 'db.php';

    // get posted variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $encryptedPass = md5($password);
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipcode = $_POST['zipcode'];

    // insert and query db
    $insert_q = "INSERT INTO siteusers VALUES('$name', '$email', '$encryptedPass','$address', '$city', '$state', '$zipcode')";
    $result = mysqli_query($conn, $insert_q);

    // Send the user a confirmation email
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->Mailer   = 'gmail';
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'ajrjazz@gmail.com';                // SMTP username
    $mail->Password = 'cokevanillaR0x';                   // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->setFrom('ajrjazz@gmail.com', 'Charlottesville Bands');
    $mail->addAddress($email);                            // Name is optional
    $mail->addReplyTo('ajrjazz@gmail.com', 'Information');

    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Thanks for registering!';
    $mail->Body    = 'You registered for Charlottesville Bands! <b>Awesome</b>';
    $mail->AltBody = 'You registered for Charlottesville Bands! Awesome.';

    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } 

    // will set result to the status of the insertion -- false if the email was already present
    echo json_encode( array('result' => $result) );
?>