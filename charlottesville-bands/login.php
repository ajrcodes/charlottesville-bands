<?php
    // starts the session
    if (session_id() == "") {
        session_start();
    }

    // setup db connection
    include_once 'db.php';

    // get posted variables
    $username = $_POST['username'];
    $password = $_POST['password'];
    $encryptedPass = md5($password);
    
    // USED: https://www.formget.com/login-form-in-php/

    // SQL query to fetch information of registered users and finds user match.
    $select_q = "SELECT * FROM siteusers WHERE email = '$username' AND password = '$encryptedPass'";
    $query = mysqli_query($conn, $select_q);
    $num_rows = mysqli_num_rows($query);

    if ($num_rows == 1) {
        // then there was a matching password, retrieve it
        $row = mysqli_fetch_array($query);
        $name = $row['name'];

        // login
        $_SESSION['name'] = $name;
        
        $result = true;
    } 

    else {
        // no matching 
        $result = false;
    }
    
    // return either true / false based on whether there was a matching username / password
    echo json_encode( array('result' => $result) );
?>