<?php
require "../include/common.php";
if (!isset($_SESSION['email'])) { 
       header('location: ../index.php');     
}
$oldpassword=md5((mysqli_real_escape_string($con,$_POST['oldpassword'])));
$newpassword=md5(mysqli_real_escape_string($con,$_POST['newpassword']));
$newpasswordre=md5(mysqli_real_escape_string($con,$_POST['newpasswordre']));
$email = $_SESSION['email'];
$select_query = "SELECT * FROM users WHERE email = '$email' AND password = '$oldpassword'";
$select_query_result = mysqli_query($con , $select_query) or die(mysqli_error($con));
$rows = mysqli_num_rows($select_query_result);
if ($newpassword===$newpasswordre && $rows>0){
    $success = "<span style='color:green;'>Your Password Changed Successfully !</span>";
    $update_query = "UPDATE users SET password = '$newpassword' WHERE email = '$email'";
    $update_query_result = mysqli_query($con , $update_query) or die(mysqli_error($con));
    header("location:../setting.php?message=".$success);
}
elseif($newpassword===$newpasswordre){
    $invalid = "<span style='color:red;'>Please enter correct password !</span>";
    header("location:../setting.php?message=".$invalid);
}
else{
    $error="<span style='color:red;'>Please enter the same  new password !</span>";
    header('location:../setting.php?message='.$error);
}
?>

