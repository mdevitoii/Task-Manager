<!-- Michael DeVito II -->
<!-- Login/Home page for Task Manager -->

<?php 
    session_start();

    if (isset($_SESSION['username'])) { // checks to make sure that anyone logged in is not on this page
        header("Location: home.php");
    }
    
?>

<html>
    <head>

    </head>
    <body>

        <h3>Task Manager Login Page</h3>
        <form method="POST" action="check_login.php" id="myform">
            Username: <input type='text' name="uid" id="uid"><br><br>
            Password: <input type='password' name="pwd" id="pwd"><br>
            <input type="submit" value="Login">
        </form>

    </body>
</html>