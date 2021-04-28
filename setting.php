<?php
    require 'include/common.php';
    if (!isset($_SESSION['email'])) { 
       header('location: index.php');     
   }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css" > 
        <title>Settings | enLink</title>
    </head>
    <body>
       <?php
        include 'include/header.php';
        ?>
        <div class="container-fluid" style="margin-top:90px;">
            <div class="row">
                <div class=" col-sm-4 col-sm-offset-4">
                    <h4>Change Password</h4>
                    <form action="script/setting_script.php" method="POST">
                        <div class="form-group">
                            <input type="password" class="form-control" name="oldpassword"  placeholder="Old Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="newpassword" placeholder="New Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="newpasswordre"  placeholder="Re-type New Password" required = "true">
                        </div>
                        <button type="submit" class="btn btn-primary">Change</button>
                    </form>
                    <?php
                        if(isset($_GET['message'])){
                            echo "<h3>{$_GET['message']}</h3>";
                        }
                    ?>
                </div>
            </div>
        </div>
        
        <?php 
        include 'include/footer.php';
       ?>
        
    </body>
</html>
        
        
        
        
        
        
        


  
