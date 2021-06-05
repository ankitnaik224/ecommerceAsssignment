<?php
    require 'includes/common.php';

    if(!isset($_SESSION['loginData'])){
        header('location: index.php');
    }else{
        $userId = $_SESSION['loginData']['id'];
        $query = mysqli_query($conn, "UPDATE `users_items` SET `status` = 'Confirmed' WHERE user_id = '".$userId."'");

        if($query){
            echo '<center><h1>Order Confirmed Successfully. Thank you for shopping with us <a href = "products.php">Click Here</a> to purchase any other item.</h1></center>';
        }
    }
?>