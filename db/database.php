<?php
    require_once('config.php');

    $conn = mysqli_connect($servername,$dbuser,$dbpassword,$dbname);

    function query(String $s) : String{
        global $conn;
        if (!$conn) {
            die('Connection to DB failed.');
        }
        $result = mysqli_query($conn,$s);
        return $result;
    }

    function getAllUsers() {
        global $conn;
        $users = [];
        if (!$conn) {
            die('Connection to DB failed.');
        }

        $sql = "SELECT * FROM credentials";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            while ($data = mysqli_fetch_assoc($result)) {
                $users[] = $data;
            }
        }

        return $users;
    }

    function createUser($user) {
        global $conn;
        if (!$conn) {
            die('Connection to DB failed.');
        }
        $username = $user['username'];
        $name = $user['name'];
        $email = $user['email'];
        $password = $user['password'];
        $role = $user['role'];

        $sql = "INSERT INTO `credentials` (`username`, `name`, `email`, `password`, `role`) VALUES ('$username', '$name', '$email', '$password', '$role')"; 

        $result = mysqli_execute_query($conn, $sql);

    }


?>