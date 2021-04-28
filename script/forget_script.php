<?php
    require '../include/common.php';
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $regex_email = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3})$";
    if (!preg_match($regex_email, $email)) {
        $error="<span style='color:red;'>Enter correct email</span>";
        header('location: ../forget_password.php?m1='.$error);
    } 
    $query_email="SELECT * FROM users WHERE email='$email'";
    $query_email_result=mysqli_query($con,$query_email) or die(mysqli_error($con));
    if(mysqli_num_rows($query_email_result)!=0){
        $success = "<span style='color:green;'>A reset link has been sent to your mail.</span>";
            header('location: ../forget_password.php?message='.$succes);
    }
    else{
        $perror = "<span style='color:red;'>Invalid Email</span>";
            header('location: ../forget_password.php?message='.$perror);
    }
    
?>
