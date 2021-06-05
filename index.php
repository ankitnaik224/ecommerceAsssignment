<?php
    require "includes/common.php";
    include "includes/header.php";

    if(isset($_SESSION['loginData']['email'])){
        header("location: products.php");
    }
?>
<div id="banner_image"> 
    <div class="container">
        <div id="banner_content">
            <input type="submit" value="Shop Now" class="btn btn-danger btn-lg active">
        </div>
    </div>
</div>

<?php
    include "includes/footer.php";
?>