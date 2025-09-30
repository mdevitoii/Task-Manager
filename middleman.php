<!-- Michael DeVito -->
<!-- Verifies logins from login.php and new accounts from register.php -->

<?php 

    session_start();

    require_once('middleman.php');
    require_once('./db/database.php');
    $_SESSION['error'] = '';


    $users = [
        01 => [
            "username" => "admin",
            "email" => null,
            "name" => "Admin",
            "password" => "5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8",
        ],
        02 => [
            "username" => "mdevito",
            "email" => "michael@gmail.com",
            "name" => "Michael",
            "password" => "282257d71195c97c7d5e0b7366bf6c031d53778a23bed748964b93c305a4db8d",
        ],
    ];

    // getting details from form on other page
    // var = $_POST[id]
    if (!isset($_SESSION['form'])) {
        header("Location: login.php");
        die("Form not found.");
    } else {
        if ($_SESSION['form'] == 'login') {
            check_login();
        } elseif ($_SESSION['form'] == 'register') {
            register_user();
        }
    }
    unset($_SESSION['form']);

    function check_login() {
        global $users;
        $input_user = $_POST['uid'];
        $input_pwd = $_POST['pwd'];
        $hashed_pwd = hash('SHA256',$input_pwd); // stores hash of inputted passwd to be checked against real password hashes

        foreach ($users as $user) {
            if ($user["username"] === $input_user && $user["password"] === $hashed_pwd) {

                $_SESSION["username"] = $user["username"];

                switch ($user["username"]) {
                    case "admin":
                        header("Location: admin.php");
                        break;
                    default:
                        header("Location: home.php");
                        break;
                }
                exit;
            }
        }
    }

    function register_user() {
        global $users;

        $input_user = $_POST['user'];
        $input_email = $_POST['email'];
        $input_pass = $_POST['pass'];
        $input_name = $_POST['name'];

        foreach ($users as $user) {
            if ($user['username'] === $input_user) {
                $_SESSION['error'] = 'Username already exists!';
                header("Location: register.php");
                exit;
            } elseif ($user['email'] === $input_email) {
                $_SESSION['error'] = 'Email already has an account!';
                header("Location: register.php");
                exit;
            }
        }

        // if there is no conflict with current credentials, register a new user
        $user = [
            'user' => $input_user,
            'name' => $input_name,
            'email' => $input_email,
            'password' => $input_pass,
            'role' => 'user',
        ];
        createUser($user);
        
        // once done successful registration...
        $_SESSION['error'] = 'Registration successful!';
        header("Location: login.php");
        exit;

    }

?> 