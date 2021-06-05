<?php
    require 'includes/common.php';
    $oldPassword = $_SESSION['loginData']['password'];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if($oldPassword == md5($_POST['old_password'])){
            if($_POST['new_password'] == $_POST['retype_password']){
                $newPassword = md5($_POST['new_password']);
                $upPassword = mysqli_query($conn, "UPDATE `users` SET `password` = '".$newPassword."' WHERE id = '".$_SESSION['loginData']['id']."'");
                // echo "UPDATE `users` SET `password` = '".$newPassword."' WHERE id = '".$_SESSION['loginData']['id']."'";
                if($upPassword){
                    $_SESSION['loginData']['password'] = md5($_POST['new_password']);
                    header('location: index.php');
                }
            }else{
                echo '<center><h1>Password Doesn\'t match</h1></center>';
            }
        }else{
            echo '<center><h1>Old Password Is Incorrect</h1></center>';
        }
    }
?>