<?php
   require 'include/common.php';
   if (isset($_SESSION['email'])) { 
       header('location: home.php');     
   }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css" > 
        <title>Welcome | enLink</title>
    </head>
    <body>
        <div class="indexpage">
       <?php
        include 'include/header.php';
        ?>
        
        <?php
            if(isset($_GET['message'])){
                echo "<center><h3 style='font-weight:bold;'>{$_GET['message']}</h3></center>";
            }
        ?>
        <!-- cover image -->
                <div id = "banner_image">
                    <div class='container' style='height:400px;'>
                        <center>
                    <div id='banner-content'>
                        <h1 style='color:yellow; font-size:100px; font-weight:bold;'>enLink</h1>
                        <h4 style='font-size:40px;'>You shop, We ship</h4>
                            <a  href="home.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
        <!-- cover end-->
        <!-- item list -->
        <br>
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-xs-4">
                    <div class="panel panel-default">
                        <div class="panel-body"  style='background-color:#FFCE57;'>
                            <center>
                                <a href="home.php#twl">
                                <img src="image/8.jpeg" class='img-responsive' alt="">
                                <div>
                                    <button type="submit" class="btn btn-primary btn-block">Order Now!</button>
                                </div>     
                                </a>
                            </center>
                        </div>    
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="panel panel-default">
                        <div class="panel-body"  style='background-color:#FFCE57;'>
                            <center>
                                <a href="home.php#iwl">
                                <img src="image/9.jpeg" class='img-responsive' alt="">
                                <div>
                                    <button type="submit" class="btn btn-primary btn-block">Order Now!</button>
                                </div>   
                                </a>
                            </center>
                        </div>    
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="panel panel-default">
                       <div class="panel-body"  style='background-color:#FFCE57;'>
                            <center>
                                <a href="home.php#iw">
                                <img src="image/10.jpeg" class='img-responsive' alt="">
                                <div>
                                    <button type="submit" class="btn btn-primary btn-block">Order Now!</button>
                                </div>   
                                </a>
                            </center>
                        </div>    
                    </div>
                </div>
                </div>
            <div class="row text-center" id="item_list">
                    <div class="col-xs-4">
                    <div class="panel panel-default">
                        <div class="panel-body"  style='background-color:#FFCE57;'>
                            <center>
                                <a href="home.php#owl">
                                <img src="image/11.jpeg" class='img-responsive' alt="">
                                <div>
                                    <button type="submit" class="btn btn-primary btn-block">Order Now!</button>
                                </div>   
                                </a>
                            </center>
                        </div>    
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="panel panel-default">
                       <div class="panel-body"  style='background-color:#FFCE57;'>
                            <center>
                                <a href="home.php#ow">
                                <img src="image/12.jpeg" class='img-responsive' alt="">
                                <div>
                                    <button type="submit" class="btn btn-primary btn-block">Order Now!</button>
                                </div>   
                                </a>
                            </center>
                        </div>    
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="panel panel-default">
                        <div class="panel-body"  style='background-color:#FFCE57;'>
                            <center>
                                <a href="home.php#ov">
                                <img src="image/13.jpeg" class='img-responsive' alt="">
                                <div>
                                    <button type="submit" class="btn btn-primary btn-block">Order Now!</button>
                                </div>   
                                </a>
                            </center>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
        <!-- item end -->
        <?php
        include 'include/footer.php';
        ?>
    </div>
    </body>
</html>
