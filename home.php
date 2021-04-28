<?php
    require 'include/common.php';
    if (!isset($_SESSION['email'])) { 
       $error="<center><h3 style='color:red;'>To buy products. Login or Signup <h3></center>";
       header('location: index.php?message='.$error);     
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
        <title>Home | enLink</title>
    </head>
    <body>
        <?php
        include 'include/header.php';
        include 'include/check_if_added.php';
        ?>
        <?php
            if(isset($_GET['message'])){
                echo "<center><h3 style='font-weight:bold;'>{$_GET['message']}</h3></center>";
            }
        ?>
        <div class="container-fluid">
            <!-- first row-->
            <div class="row text-center" id="twl">
                <div class="col-xs-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                                <img src="image/products/b1.jpeg" class='img-responsive' alt=""> 
                        </div>
                        <div class="panel-footer">
                                    <h4>Boat</h4>
                                    <h5>Rs.2999</h5>
                                    <?php 
                                        if (!isset($_SESSION['email'])) { ?> 
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                    <?php } 
                                        else {
                                            if (check_if_added_to_cart(1)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } 
                                            else { ?> 
                                            <a href="script/cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php } } ?>
                        </div>    
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="image/products/j1.jpeg" class='img-responsive' alt="">
                        </div>
                        <div class="panel-footer">                                   
                                    <h4>JBL</h4>
                                    <h5>Rs.5999</h5>
                                    <?php 
                                        if (!isset($_SESSION['email'])) { ?> 
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                    <?php } 
                                        else {
                                            if (check_if_added_to_cart(2)) { 
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } else {  ?> 
                                        <a href="script/cart_add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php } } ?>                     
                        </div>    
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                                <img src="image/products/p1.jpeg" class='img-responsive' alt="">
                        </div>
                        <div class="panel-footer">
                                    <h4>Ptron</h4>
                                    <h5>Rs.899</h5>
                                    <?php 
                                        if (!isset($_SESSION['email'])) { ?> 
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                    <?php } 
                                        else {
                                            if (check_if_added_to_cart(3)) { 
                                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } else { ?> 
                                        <a href="script/cart_add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php } } ?>
                                
                        </div>    
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                                <img src="image/products/s1.jpeg" class='img-responsive' alt="">
                        </div>
                        <div class="panel-footer">
                                    <h4>Sony</h4>
                                    <h5>Rs.1799</h5>
                                    <?php 
                                        if (!isset($_SESSION['email'])) { ?> 
                                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                                        <?php } 
                                        else {
                                            if (check_if_added_to_cart(4)) { 
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } 
                                            else { 
                                        ?> 
                                            <a href="script/cart_add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                    <?php } } ?>
                        </div>    
                    </div>
                </div>
            </div>
            <!-- second row-->
            <div class="row text-center" id="iwl">
                <div class="col-xs-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="image/products/b2.jpeg" class='img-responsive' alt="">
                        </div>
                        <div class="panel-footer">
                                    <h4>Boat</h4>
                                    <h5>Rs.1999</h5>
                                     <?php 
                            if (!isset($_SESSION['email'])) { ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } 
                            else {
                                if (check_if_added_to_cart(5)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } 
                                else { 
                            ?> 
                                <a href="script/cart_add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                            <?php } } ?>
                        </div>                         
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="image/products/j2.jpeg" class='img-responsive' alt="">
                        </div>
                        <div class="panel-footer">
                                    <h4>JBL</h4>
                                    <h5>Rs.1899</h5>
                                    <?php 
                            if (!isset($_SESSION['email'])) { ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } 
                            else {
                                if (check_if_added_to_cart(6)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } 
                                else { 
                            ?> 
                                <a href="script/cart_add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                            <?php } } ?>
                        </div>                      
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="image/products/p2.jpeg" class='img-responsive' alt="">
                        </div>
                        <div class="panel-footer">
                                    <h4>Ptron</h4>
                                    <h5>Rs.520</h5>
                                    <?php 
                            if (!isset($_SESSION['email'])) { ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } 
                            else {
                                if (check_if_added_to_cart(7)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } 
                                else { 
                            ?> 
                                <a href="script/cart_add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                            <?php } } ?>
                        </div>   
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="panel panel-default">
                       <div class="panel-body">
                           <img src="image/products/s2.jpeg" class='img-responsive' alt="">
                       </div>
                        <div class="panel-footer">
                                    <h4>Sony</h4>
                                    <h5>Rs.1899</h5>
                                   <?php 
                            if (!isset($_SESSION['email'])) { ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } 
                            else {
                                if (check_if_added_to_cart(8)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } 
                                else { 
                            ?> 
                                <a href="script/cart_add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                            <?php } } ?>
                        </div>   
                    </div>
                </div>
            </div>
            <!-- third row -->
            <div class="row text-center" id="iw">
                <div class="col-xs-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="image/products/b3.jpeg" class='img-responsive' alt="">
                        </div>
                        <div class="panel-footer">
                                    <h4>Boat</h4>
                                    <h5>Rs.399</h5>
                                    <?php 
                            if (!isset($_SESSION['email'])) { ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } 
                            else {
                                if (check_if_added_to_cart(9)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } 
                                else { 
                            ?> 
                                <a href="script/cart_add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                            <?php } } ?>
                        </div> 
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="image/products/j3.jpeg" class='img-responsive' alt="">
                        </div>
                        <div class="panel-footer">
                                    <h4>JBL</h4>
                                    <h5>Rs.699</h5>
                                    <?php 
                            if (!isset($_SESSION['email'])) { ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } 
                            else {
                                if (check_if_added_to_cart(10)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } 
                                else { 
                            ?> 
                                <a href="script/cart_add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                            <?php } } ?>
                        </div> 
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="image/products/p3.jpeg" class='img-responsive' alt="">
                        </div>
                        <div class="panel-footer">
                                    <h4>Ptron</h4>
                                    <h5>Rs.599</h5>
                                    <?php 
                            if (!isset($_SESSION['email'])) { ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } 
                            else {
                                if (check_if_added_to_cart(11)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } 
                                else { 
                            ?> 
                                <a href="script/cart_add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                            <?php } } ?>
                        </div>    
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="panel panel-default">
                       <div class="panel-body">
                           <img src="image/products/s3.jpeg" class='img-responsive' alt="">
                       </div>
                        <div class="panel-footer">
                                    <h4>Sony</h4>
                                    <h5>Rs.899</h5>
                                    <?php 
                            if (!isset($_SESSION['email'])) { ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } 
                            else {
                                if (check_if_added_to_cart(12)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } 
                                else { 
                            ?> 
                                <a href="script/cart_add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                            <?php } } ?>
                        </div>    
                    </div>
                </div>
            </div>
            <!-- fourth row -->
            <div class="row text-center" id="owl">
                <div class="col-xs-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="image/products/b4.jpeg" class='img-responsive' alt="">
                        </div>
                        <div class="panel-footer">
                                    <h4>Boat</h4>
                                    <h5>Rs.1499</h5>
                                    <?php 
                            if (!isset($_SESSION['email'])) { ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } 
                            else {
                                if (check_if_added_to_cart(13)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } 
                                else { 
                            ?> 
                                <a href="script/cart_add.php?id=13" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                            <?php } } ?>
                        </div>    
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="image/products/j4.jpeg" class='img-responsive' alt="">
                        </div>
                        <div class="panel-footer">
                                    <h4>JBL</h4>
                                    <h5>Rs.3990</h5>
                                    <?php 
                            if (!isset($_SESSION['email'])) { ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } 
                            else {
                                if (check_if_added_to_cart(14)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } 
                                else { 
                            ?> 
                                <a href="script/cart_add.php?id=14" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                            <?php } } ?>
                        </div>    
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="image/products/p4.jpeg" class='img-responsive' alt="">
                        </div>    <div class="panel-footer">
                                    <h4>Ptron</h4>
                                    <h5>Rs.2599</h5>
                                    <?php 
                            if (!isset($_SESSION['email'])) { ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } 
                            else {
                                if (check_if_added_to_cart(15)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } 
                                else { 
                            ?> 
                                <a href="script/cart_add.php?id=15" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                            <?php } } ?>
                        </div>    
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="panel panel-default">
                       <div class="panel-body">
                            <img src="image/products/s4.jpeg" class='img-responsive' alt="">
                       </div>
                       <div class="panel-footer">
                                    <h4>Sony</h4>
                                    <h5>Rs.12400</h5>
                                    <?php 
                            if (!isset($_SESSION['email'])) { ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } 
                            else {
                                if (check_if_added_to_cart(16)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } 
                                else { 
                            ?> 
                                <a href="script/cart_add.php?id=16" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                            <?php } } ?>
                        </div>    
                    </div>
                </div>
            </div>
            <!-- fifth row -->
            <div class="row text-center" id="ow">
                <div class="col-xs-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="image/products/b5.jpeg" class='img-responsive' alt="">
                        </div>
                        <div class="panel-footer">
                                    <h4>Boat</h4>
                                    <h5>Rs.799</h5>
                                    <?php 
                            if (!isset($_SESSION['email'])) { ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } 
                            else {
                                if (check_if_added_to_cart(17)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } 
                                else { 
                            ?> 
                                <a href="script/cart_add.php?id=17" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                            <?php } } ?>
                        </div>    
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="image/products/j5.jpeg" class='img-responsive' alt="">
                        </div>
                        <div class="panel-footer">
                                    <h4>JBL</h4>
                                    <h5>Rs.799</h5>
                                    <?php 
                            if (!isset($_SESSION['email'])) { ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } 
                            else {
                                if (check_if_added_to_cart(18)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } 
                                else { 
                            ?> 
                                <a href="script/cart_add.php?id=18" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                            <?php } } ?>
                        </div>    
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="image/products/p5.jpeg" class='img-responsive' alt="">
                        </div>
                        <div class="panel-footer">
                                    <h4>Ptron</h4>
                                    <h5>Rs.1799</h5>
                                    <?php 
                            if (!isset($_SESSION['email'])) { ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } 
                            else {
                                if (check_if_added_to_cart(19)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } 
                                else { 
                            ?> 
                                <a href="script/cart_add.php?id=19" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                            <?php } } ?>
                        </div>    
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="panel panel-default">
                       <div class="panel-body">
                           <img src="image/products/s5.jpeg" class='img-responsive' alt="">
                       </div>
                        <div class="panel-footer">
                                    <h4>Sony</h4>
                                    <h5>Rs.1955</h5>
                                    <?php 
                            if (!isset($_SESSION['email'])) { ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } 
                            else {
                                if (check_if_added_to_cart(20)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } 
                                else { 
                            ?> 
                                <a href="script/cart_add.php?id=20" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                            <?php } } ?>
                        </div>    
                    </div>
                </div>
            </div>
            <!-- sixth row -->
            <div class="row text-center" id="ov">
                <div class="col-xs-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="image/products/b6.jpeg" class='img-responsive' alt="">
                        </div>
                        <div class="panel-footer">
                                    <h4>Boat</h4>
                                    <h5>Rs.2999</h5>
                                   <?php 
                            if (!isset($_SESSION['email'])) { ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } 
                            else {
                                if (check_if_added_to_cart(21)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } 
                                else { 
                            ?> 
                                <a href="script/cart_add.php?id=21" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                            <?php } } ?>
                        </div>    
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="image/products/j6.jpeg" class='img-responsive' alt="">
                        </div>
                        <div class="panel-footer">
                                    <h4>JBL</h4>
                                    <h5>Rs.5999</h5>
                                    <?php 
                            if (!isset($_SESSION['email'])) { ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } 
                            else {
                                if (check_if_added_to_cart(22)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } 
                                else { 
                            ?> 
                                <a href="script/cart_add.php?id=22" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                            <?php } } ?>
                        </div>    
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="image/products/p6.jpeg" class='img-responsive' alt="">
                        </div>
                        <div class="panel-footer">
                                    <h4>Ptron</h4>
                                    <h5>Rs.1499</h5>
                                    <?php 
                            if (!isset($_SESSION['email'])) { ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } 
                            else {
                                if (check_if_added_to_cart(23)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } 
                                else { 
                            ?> 
                                <a href="script/cart_add.php?id=23" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                            <?php } } ?>
                        </div>    
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="panel panel-default">
                       <div class="panel-body">
                           <img src="image/products/s6.jpeg" class='img-responsive' alt="">
                       </div>
                        <div class="panel-footer">
                                    <h4>Sony</h4>
                                    <h5>Rs.4150</h5>
                                    <?php 
                            if (!isset($_SESSION['email'])) { ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } 
                            else {
                                if (check_if_added_to_cart(24)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } 
                                else { 
                            ?> 
                                <a href="script/cart_add.php?id=24" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                            <?php } } ?>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
