<?php
require '../include/common.php';
$item_id=$_GET['id'];
$user_id= $_SESSION['user_id'];
$insert_query="INSERT INTO users_items(user_id, product_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
 
$insert_query_result=mysqli_query($con, $insert_query) or die(mysqli_error($con));

header('location:../home.php');
?>
