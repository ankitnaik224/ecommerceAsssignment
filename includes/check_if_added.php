<?php
    

    function check_if_added($itemId) {
        $conn = mysqli_connect("localhost", "root", "", "store");

        $res = mysqli_query($conn, "SELECT * FROM `users_items` WHERE item_id = '".$itemId."' AND user_id = '".$_SESSION['loginData']['id']."' AND status = 'Added to cart'");

        if(mysqli_num_rows($res) >= 1){
            return 1;
        }else{
            return 0;
        }
    }

?>