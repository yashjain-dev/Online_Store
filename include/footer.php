<div class="container-fliud">
<?php
    if(!isset($_SESSION['email'])){
?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-4">
                <ul type="none">
                    <h4>Information</h4>
                    <li><a href="about.php" style="color:white;">About Us</a></li>
                    <li><a href="contact.php" style="color:white;">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-xs-4">
                <ul type="none">
                    <h4>My Account</h4>
                    <li><a href="login.php" style="color:white;">Login</a></li>
                    <li><a href="signup.php" style="color:white;">Signup</a></li>
                </ul>
            </div>
            <div class="col-xs-4">
                <ul type="none">
                    <h4>Contact Us</h4>
                    <li>Contact: +91-123-000000</li>
                    
                </ul>
            </div>
        </div>
    </div>
</footer>
<?php 
    } else { 
?>
<footer style="position:fixed; height:50px; width: 100%;"> 
    <div class="container">
        
            <p class="text-center">Copyright &copy; enLink . All Rights Reserved | Contact Us: +91-123-000000</p> 
        
    </div> 
</footer>

<?php } ?>
</div>