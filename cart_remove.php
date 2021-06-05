<?php
    require 'includes/common.php';

    $id = $_GET['id'];

    $delQuery = mysqli_query($conn, "DELETE FROM `users_items` WHERE id = '".$id."'");

    if($delQuery){
        header('location: cart.php');
    }
?>