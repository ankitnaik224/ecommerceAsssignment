<?php
    require 'includes/common.php';
    include 'includes/header.php';
    if(!isset($_SESSION['loginData'])){
        header('location: index.php');
    }else{
?>
    <div class="containt">
        <div class="row">
            <div class="col-xs-offset-4 col-xs-4">
                <div class="panel panel-primary"> 
                        <div class="panel panel-heading">
                            <h3><i>Change Password</i></h3>
                    </div> 
                    <div class="panel-body">
                        <form method = "POST" action = "setting_script.php">
                            <div class="form-group"> 
                                
                                <input type="text" name = "old_password" class="form-control input-md" placeholder="Old Password" required> 
                            </div> 
                            <div class="form-group"> 
                                
                                <input type="password" name = "new_password" class="form-control input-md" placeholder="Password" required> 
                            </div>
                            <div class = "form-group">
                                <input type="password" name = "retype_password" class="form-control input-md" placeholder="Confirm Password" required>
                            </div>
                            <button class="btn btn-primary" type = "submit">Submit</button>
                        </form>
                        
                    </div> 
                    
            </div>
        </div>
    </div>
<?php
    }
    include 'includes/footer.php';
?>