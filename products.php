<?php
    include "includes/common.php";
    include "includes/header.php";
    include "includes/check_if_added.php";
?> 
     
        <div class="row d-flex" style="margin-top: 80px;padding-left: 188px;"> 
            <?php
                $items = mysqli_query($conn, "SELECT * FROM `items`");

                if(mysqli_num_rows($items) > 0){
                    while($row = mysqli_fetch_assoc($items)){
            ?>
                     <div class="items ">
                        <a href="#">   
                            <img src="<?= 'images/'.$row['image'] ?>" alt="alt" class="thumbnail"/> 
                            <div class="caption">
                                <h2> <?= $row['name']; ?> </h2>
                                <p>Price Rs.<?= $row['price']; ?></p>
                                <?php
                                    if(!isset($_SESSION['loginData'])){
                                        echo "<a href = 'login.php' class = 'btn btn-primary btn-block'>Add to cart</a>";
                                    }else{
                                        if(check_if_added($row['id']) !== 0) {
                                            echo "<a href = '#' class = 'btn btn-primary btn-block' disabled>Add to cart</a>";
                                        }else{
                                            echo "<a href = 'cart_add.php?id=".$row['id']."' class = 'btn btn-primary btn-block'>Add to cart</a>";
                                        }
                                    }
                                ?> 
                                
                            </div>
                        </a>
                    </div>    
            <?php       
                    }
                }else{
                    echo '<center><h1>No Data</h1></center>';
                }
            ?>
            
        </div>
    
<?php
    include "includes/footer.php";
?>
