<?php

    session_start();

    include ('connection.php');

    if (isset($_POST["submit"])) {

        $email = $_POST['email'];
        $password = $_POST['password'];
        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];
        $position = $_POST['position'];
        $phonenumber = $_POST['phonenumber'];
        
        $users_check = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
        $result = mysqli_query($conn, $users_check);
        $users = mysqli_fetch_assoc($result);
        
        if ($users['email'] === $email) {
            echo "<script>alert('Email already exists');</script>";
        } else {

            $query = "INSERT INTO users (user_id,email, password, f_name, l_name, position, phonenumber, userlevel)
            VALUE ('','$email','$password','$f_name','$l_name','$position','$phonenumber','user')";
            $result = mysqli_query($conn, $query);

            if ($result) {
                $_SESSION['success'] = "Insert user successfully";
                header("Location: index.php");
            } else {
                $_SESSION['error'] = "Something went wrong";
                header("Location: index.php");
            }
        }
    }


?>