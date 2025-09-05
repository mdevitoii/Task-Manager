<!-- Michael DeVito -->
<!-- Handles logout requests from home.php -->

<?php

    session_start();

    unset($_SESSION['username']);

    session_destroy();

    header("Location: login.php");

?>