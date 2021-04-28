<?php
function check_if_added_to_cart($item_id){
    $con=mysqli_connect("localhost","root","","shopping","3306") or die(mysqli_error($con));
    $user_id=$_SESSION['user_id'];
    $select_query="SELECT * FROM users_items WHERE product_id='$item_id' AND user_id ='$user_id' and status='Added to cart'";
    $select_query_result=mysqli_query($con, $select_query) or die(mysqli_error($con));
    $total_rows_fetched = mysqli_num_rows($select_query_result);
    if($total_rows_fetched>=1){
        $count=1;
    }
    else{
        $count=0;
    }
    return $count;
}
?>
