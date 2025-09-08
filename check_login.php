<!-- Michael DeVito -->
<!-- Verifies logins from login.php -->

<?php 

    session_start();

    $users = [
        01 => [
            "username" => "admin",
            "password" => "password",
        ],
        02 => [
            "username" => "michael",
            "password" => "devito",
        ],
    ];

    // getting details from form on other page
    // var = $_POST[id]
    $input_user = $_POST['uid'];
    $input_pwd = $_POST['pwd'];

    foreach ($users as $user) {
        if ($user["username"] === $input_user && $user["password"] === $input_pwd) {

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

    $_SESSION["error"] = "Something is wrong with your permissions. Please contact your administrator.";    
    echo "error";
    //header("Location: login.php");

?> 