<?php
    require '../include/common.php';
    $item_id = $_GET["id"]; 
    $user_id = $_SESSION['user_id'];
        
    $query = "DELETE FROM users_items WHERE product_id='$item_id' AND user_id='$user_id' ";
    $result = mysqli_query($con , $query) or die(mysqli_error($con));
    header("location:../cart.php");
?>