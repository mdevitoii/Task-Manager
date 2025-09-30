<?php 

    session_start();
    $_SESSION['form'] = 'register';
    
    if (isset($_SESSION['error'])) {
        echo '<h2>'.$_SESSION['error'].'</h2>';
        unset($_SESSION['error']);
    } else {
        echo 'error not set';
    }

    // registration page
    /*
     * Needs: client side and server side validation
     * 
     * Registration form:
     * username, email, role, password, confirm password
     * 
     * verify on client-side with javascript
     * verify on server-side with php
     * 
     * password must be:
     * 8 length, 1 uppercase, 1 lowercase, number
     * 
     * create a class for credentials and make them private variables
     * access them through an object
     * 
    */

?>

<html>
    <head></head>
    <body>
        <h1>Registration Page</h1>

        <form method="POST" action="middleman.php" id="registration">
            <p>
                First Name: <input type="text" id="name" name="name"><br>
                Email:      <input type='text' id='email' name='email'><br>
                Username:   <input type="text" id="user" name="user"><br>
                Password:   <input type="password" id="pass" name="pass"><br>
                <input type="submit" value="Create Account">
            </p>
        </form>

        <a href="login.php">Back to Login</a>

    </body>
</html>