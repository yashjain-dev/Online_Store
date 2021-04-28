<?php
    require 'include/common.php';
    if (!isset($_SESSION['email'])) { 
       header('location: index.php');     
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
        <title>Cart | enLink</title>
    </head>
    <body>
        <div class="container-fluid">
            <?php include 'include/header.php'; ?>
            <div class="row decor_bg" style='margin-top:30px;'>
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped table-bordered">
    
                        <!--show table only if there are items added in the cart-->
                        <?php
                        $sum = 0;
                        $id='';
                        $user_id = $_SESSION['user_id'];

                        $query = "SELECT items.price AS Price, items.id, items.product AS Name FROM users_items JOIN items ON users_items.product_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?> 
                        <h4 style='color:green;'><a href='home.php' style='color:green;'>Continue Shopping...</a></h4>
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                            while($row=mysqli_fetch_array($result)){
                                $sum+=$row["Price"];
                                $id.=$row["id"].",";
                                echo "<tr><td>".$row["id"]."</td><td>".$row["Name"]."</td><td>Rs.".$row["Price"]."</td>"
                                        ."<td><a href='script/cart_remove.php?id={$row['id']}' class='remove_item_link'>Remove"
                                        . "</a></td></tr>";
                            }
                            $id=rtrim($id,",");
                                echo "<tr><td></td><td>Total</td><td>Rs.".$sum."</td><td><a href=success.php?"
                                        . "itemsid=".$id."class='btn btn-primary'>Confirm Order</a></td></tr>";
                            ?>
                            </tbody>
                            <?php
                        } else {
                            echo "<center><h3 style='color:blue; margin-top:50px;'>Add items to the cart first! Click <a href='home.php'> here</a> to add.<h3></center>";
                        }
                        ?>
                        <?php
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <?php 
        include 'include/footer.php';
       ?>
        
    </body>
</html>
