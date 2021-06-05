<?php

    require "includes/common.php";
    include "includes/header.php";

?>
    <div class="containt">
        <div class="row">
            <div class="col-xs-offset-4 col-xs-4">
                <div class="panel panel-primary"> 
                        <div class="panel panel-heading">
                            <h3><i>Login</i></h3>
                    </div> 
                    <div class="panel-body">
                        <p> <b><i>Login to make a purchase</i></b></p>
                        <form method = "POST" action = "login_submit.php">
                            <div class="form-group"> 
                                
                                <input type="email" name = "email" class="form-control input-md" placeholder="Email"> 
                            </div> 
                            <div class="form-group"> 
                                
                                <input type="password" name = "password" class="form-control input-md" placeholder="Password"> 
                            </div>
                            <button class="btn btn-primary" type = "submit">Login</button>
                        </form>
                        
                    </div> 
                    
                    <div class="panel panel-footer">
                        <p>Don't have an account? <a href="signup.php">   Register</a> </p>
                </div>
            </div>
        </div>
    </div>
<?php
    include "includes/footer.php";
?>