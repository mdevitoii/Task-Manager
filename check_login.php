<!-- Michael DeVito -->
<!-- Verifies logins from login.php -->

<?php 

    session_start();

    $user = 'devito';
    $password = 'michael';

    // getting details from form on other page
    // var = $_POST[id]
    $u = $_POST['uid'];
    $p = $_POST['pwd'];

    echo $u.' '.$p; // testing

    if ($u === $user && $p === $password) { // make sure values are identical (===)
        $_SESSION['username'] = $user; // makes session variable username

        header("Location: home.php"); // sends user to dashboard

        exit;
    };
    header("Location: login.php");


?>