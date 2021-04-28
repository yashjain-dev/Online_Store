<?php
    require '../include/common.php';
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $regex_email = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3})$";
    if (!preg_match($regex_email, $email)) {
        header('location: ../index.php?email_error=enter correct email');
    }   
    $password =mysqli_real_escape_string($con, $_POST['password']);
    if (strlen($password) < 6) {
        header('location: ../index.php?password_error=enter correct password');
    }
    $password=md5($password);
    $query_email="SELECT * FROM users WHERE email='$email'";
    $query_email_result=mysqli_query($con,$query_email) or die(mysqli_error($con));
    if(mysqli_num_rows($query_email_result)!=0){
        $query="SELECT id,email FROM users WHERE email='$email' and password='$password'";
        $query_result=mysqli_query($con, $query) or die(mysqli_error($con));
        $total_rows_fetched = mysqli_num_rows($query_result);
        if($total_rows_fetched!=0){
            $row = mysqli_fetch_array($query_result);
            $_SESSION['email'] = $email;
            $_SESSION['user_id'] = $row['id'];
            header('location: ../home.php');
        }
        else{  
            $perror = "<span style='color:red;'>Password entered is incorrect</span>";
            header('location: ../index.php?message='.$perror);
        } 
    }
    else{
        $error="<span style='color:red;'>Email not exists. Please signup</span>";
       header('location:../index.php?message='.$error);
    }
?>

