<?php

    require 'includes/common.php';
    include 'includes/header.php';
?>

    <div class="containt1"> 
        <div class="row"> 
            <div class="table-responsive">
                <table class="table table-striped col-offset-sm-4 col-sm-4 ">
                    <thead>
                        <tr>
                            <th class = "text-center">Item number</th> 
                            <th class = "text-center">Item Name</th>
                            <th class = "text-center">Price</th>
                            <th></th>
                        </tr> 
                    </thead>
                    <tbody> 
                        <?php
                         $cartData = mysqli_query($conn, "SELECT i.name, i.price, ui.* FROM `users_items` ui INNER JOIN items i WHERE ui.item_id = i.id AND ui.user_id = '".$_SESSION['loginData']['id']."'");
                         $total = 0;
                         while($row = mysqli_fetch_assoc($cartData)){
                        ?> 
                        <tr class = "text-center"><td><?= $row['id']; ?></td> <td><?= $row['name']; ?></td> <td><?= $row['price']; ?></td> <td class = "text-center"><a href = "cart_remove.php?id=<?= $row['id'] ?>">X</a></td></tr> 
                        
                        <?php 
                            $total += $row['price'];
                         }
                        ?>
                        <tr class = "text-center"><td></td> <td>Total</td> <td>Rs <?= $total; ?></td> <td class = "text-center"><a href="<?= ($total != 0) ? "success.php" : '#' ?>" class = 'btn btn-info'>Confirm Order</a></td></tr> 
                    </tbody>          
                </table>
            </div>
        </div>
    </div>

<?php
    include 'includes/footer.php';
?>