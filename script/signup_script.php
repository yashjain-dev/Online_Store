<?php
    require '../include/common.php';
  
  $name = mysqli_real_escape_string($con, $_POST['name']);

  $email = mysqli_real_escape_string($con,$_POST['email']);
 
  $password = MD5(mysqli_real_escape_string($con, $_POST['password']));

  $contact = mysqli_real_escape_string($con, $_POST['contact']);

  $city = mysqli_real_escape_string($con, $_POST['city']);

  $address = mysqli_real_escape_string($con, $_POST['address']);

  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  $regex_num = "/^[789][0-9]{9}$/";

  $query = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);
  
  if ($num != 0) {
    $m = "<span style='color:red;'>Email Already Exists</span>";
    header('location: ../signup.php?m1=' . $m);
  } else if (!preg_match($regex_email, $email)) {
    $m = "<span style='color:red;'>Not a valid Email Id</span>";
    header('location: ../signup.php?m1=' . $m);
  } else if (!preg_match($regex_num, $contact)) {
    $m = "<span style='color:red;'>Not a valid phone number</span>";
    header('location: ../signup.php?m2=' . $m);
  } else {
    
    $query = "INSERT INTO users(name, email, password, contact, city, address)VALUES('" . $name . "','" . $email . "','" . $password . "','" . $contact . "','" . $city . "','" . $address . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    $success="<span style='color:green'>Welcome to enLink.</span>";
    header('location: ../home.php?message='.$success);
  }
?>