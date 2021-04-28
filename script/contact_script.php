<?php
include '../include/common.php';
$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$msg = mysqli_real_escape_string($con, $_POST['message']);
$user_contact_query = "insert into contact(name, email, message) values ('$name', '$email', '$msg')";
$user_query_submit=mysqli_query($con, $user_contact_query) or die(mysqli_error($con));
$success = "<span>Thank You for contacting us</span>";
header("location:../contact.php?m=".$success)
    
?>

