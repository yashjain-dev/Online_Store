<?php
    require 'include/common.php';
    if (!isset($_SESSION['email'])) { 
       header('location: index.php');     
   }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Success | enLink</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css" > 
        
    </head>
    <body>
        <?php include 'include/header.php'; 
        $user_id = $_SESSION["user_id"];
        $query = "SELECT product_id FROM users_items WHERE user_id = '$user_id'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));

        while($row = mysqli_fetch_array($result)){
            $item_id = $row["product_id"];
            $query_update = "UPDATE users_items SET status = 'Confirmed' WHERE product_id = '$item_id'";            
            $result_update = mysqli_query($con, $query_update) or die(mysqli_error($con));
        }
        ?>
        
        <div class="container-fluid" style="margin-top:50px;">
            <div class="col-md-12">
                <div class="jumbotron">
                      <h3 align="center">Your order is confirmed. Thank you for shopping with enLink.</h3>
                      <p align="center">The order shall be delivered to you shortly.</p>
                      <hr>
                    <p align="center">Click <a href="home.php">here</a> to purchase any other item.</p>
                </div>
            </div>
        </div>
        <?php 
        include 'include/footer.php';
       ?>
        
    </body>
</html>
