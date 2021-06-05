<?php
    require "includes/common.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //check email
        $email = mysqli_real_escape_string($conn, $_POST['email']);

        $checkEmail = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '".$email."'");

        if(mysqli_num_rows($checkEmail) > 0){
            echo '<center><h1>Email Already Exists</h1></center>';
        }else{
            //register user
            $password = md5($_POST['password']);
            $registerUser = mysqli_query($conn, "INSERT INTO `users`(`name`, `email`, `password`, `contact`, `city`, `address`) VALUES ('".mysqli_real_escape_string($conn, $_POST['name'])."', '".mysqli_real_escape_string($conn, $_POST['email'])."', '".$password."', '".mysqli_real_escape_string($conn, $_POST['contact'])."', '".mysqli_real_escape_string($conn, $_POST['city'])."', '".mysqli_real_escape_string($conn, $_POST['address'])."')");

            if($registerUser){
                echo '<center><h1>User Created Successfully</h1><a href = "login.php">Login</a></center>';
            }else{
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    }
?>