<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css" > 
        <title>Contact Us | enLink</title>
    </head>
    <body>
        <!--header -->
        <div class="contactpage">
        <?php
        include 'include/header.php';
        ?>
        <!-- header end -->
        <div class="container">
            <div class='row'>
                <div class='col-xs-8'>
                    <h2 style='font-weight:lighter;'>LIVE SUPPORT</h2>
                    <h4 style='font-weight:lighter;'>24 hours | 7 days a week | 365 days a year Live Technical Support</h4>
                </div>
                <div class='col-xs-4'>
                    <img src='image/contact.png' class='img-responsive' alt='Live Support 24x7'>
                </div>
            </div>
            <div class='row'>
                <div class='col-xs-7 col-sm-7 col-md-7 col-lg-7'>
                    <h2 style='font-weight:lighter;'>CONTACT US</h2>
                    <form action="script/contact_script.php" method="POST">
                        <div class='form-group'>
                        Name:<input type='text' class='form-control' name='name'>
                        </div>
                        <div class='form-group'>
                        Email:<input type='email' class='form-control' name='email'>
                        </div>
                        <div class='form-group'>
                        <label for="message">Message:</label>
                        <textarea name='message' id='message' rows='4'  style='resize:none;' class='tasize'></textarea>
                        </div>
                        <?php
                            if(isset($_GET['m'])){
                            echo "<h3 style='color:blue;'>{$_GET['m']}</h3>";}
                        ?>
                        <div class='form-group'>
                        <button type='submit' class='btn btn-primary'>Submit</button>
                        </div>
                    </form>
                </div>
                <div class='col-xs-5 col-sm-5 col-md-5 col-lg-5'>
                    <h2 style='font-weight:lighter;'>Company Information:</h2>
                    <p style='font-weight:lighter;'>New Delhi,</p>
                    <p style='font-weight:lighter;'>India</p>
                    <p style='font-weight:lighter;'>Phone:(00)-222-666-444</p>
                    <p style='font-weight:lighter;'>Fax:(000) 000 00 00 0</p>
                    <p style='font-weight:lighter;'>Email: info@enLink.com</p>
                    <p style='font-weight:lighter;'>Follow on: Facebook, Twitter</p>
                </div>
            </div>
        </div>
        <!-- footer -->
        
        <?php
        include 'include/footer.php';
        ?>
        </div>
        <!-- footer end -->
    </body>
</html>
