<?php

    require "includes/common.php";
    include "includes/header.php";

?>
    <div class="containt">
        <div class="row">
            <div class="col-xs-offset-4 col-xs-4">
                <div class="panel panel-default"> 
                        <div class="panel panel-heading">
                            <h3><i>Signup</i></h3>
                    </div> 
                    <div class="panel-body">
                        
                        <form method = "POST" action = "signup_script.php">
                            <div class="form-group"> 
                                <input type="text" name = "name" class="form-control input-md" pattern = "[A-Za-z ]+" placeholder="Name" required> 
                            </div> 
                            <div class="form-group"> 
                                
                                <input type="email" name = "email" class="form-control input-md" placeholder="Email" required> 
                            </div> 
                            <div class="form-group"> 
                                
                                <input type="password" name = "password" class="form-control input-md" placeholder="Password" required> 
                            </div> 
                            <div class="form-group"> 
                                
                                <input type="text" name = "contact" class="form-control input-md" pattern = "[0-9]+" placeholder="Contact" required> 
                            </div> 
                            <div class="form-group"> 
                                
                                <input type="text" name = "city" class="form-control input-md" pattern = "[A-Za-z]+" placeholder="City" required> 
                            </div> 
                            <div class="form-group"> 
                                
                                <input type="text" name = "address" class="form-control input-md" placeholder="Adress" required> 
                            </div> 
                            
                            <button type = "submit" class="btn btn-primary">Submit</button>
                        </form>
                        
                    </div> 
                    
            </div>
        </div>
    </div>

<?php
    include "includes/footer.php";
?>