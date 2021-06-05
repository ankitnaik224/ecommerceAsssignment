<?php
    require "includes/common.php";

    $itemId = $_GET['id'];

    $addCart = mysqli_query($conn, "INSERT INTO `users_items`(`user_id`, `item_id`, `status`) VALUES ('".$_SESSION['loginData']['id']."', '".$itemId."', 'Added to cart')");

    if($addCart){
        header("location: products.php");
    }

?>