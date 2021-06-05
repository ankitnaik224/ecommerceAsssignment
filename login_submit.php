<?php

    require "includes/common.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = md5($_POST['password']);

        $loginUser = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '".$email."' AND password = '".$password."'");

        if(mysqli_num_rows($loginUser) > 0){
            echo '<center><h1>Login Successfull</h1></center>';
            $result = mysqli_fetch_array($loginUser, MYSQLI_ASSOC);
            
            $_SESSION['loginData'] = $result;
            // echo $_SESSION['loginData']['email'];
            header("location: products.php");
        }else{
            echo '<center><h1>Please Enter Correct Details</h1><a href = "login.php">Login</a></center>';
        }
    }

?>