<!-- Michael DeVito -->
<!-- Verifies logins from login.php -->

<?php 

    session_start();

    $users = [
        01 => [
            "username" => "admin",
            "password" => "5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8",
        ],
        02 => [
            "username" => "michael",
            "password" => "282257d71195c97c7d5e0b7366bf6c031d53778a23bed748964b93c305a4db8d",
        ],
    ];

    // getting details from form on other page
    // var = $_POST[id]
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

    $_SESSION["error"] = "Something is wrong with your permissions. Please contact your administrator.";    
    echo "error";
    //header("Location: login.php");

?> 