<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="style.css" > 
        <title>SignUp | enLink</title>
    </head>
    <body>
        <div class="container-fluid" style="padding: 0;">
            <?php
                include 'include/header.php';
            ?>
            <?php
                if(isset($_GET['message'])){
                    echo "<center><h3>{$_GET['message']}</h3></center>";
                }
            ?>
            <div class="row">
                <div class="container signupform">
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" style="margin-top:80px;">
                        <img src="image/6.jpeg" alt="" class="img-responsive" style="border-radius:10px; display:block; margin-left: auto;
                             margin-right: auto;">
                       
                    </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 px-auto"  style="margin-top:30px;">
                            <h3>SIGN UP</h3>
                            <form  action="script/signup_script.php" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" name="name"  required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3})$" name="email" required>
                                    <?php
                                    if(isset($_GET['m1'])){
                                     echo $_GET['m1'];
                                    }
                                    ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required>
                                    <?php
                                    if(isset($_GET['m2'])){
                                     echo $_GET['m2'];
                                    }
                                    ?>
                                </div>
                                <div class="form-group">
                                    <input  type="text" class="form-control"  placeholder="City" name="city" required>
                                </div>
                                <div class="form-group">
                                    <input  type="text" class="form-control"  placeholder="Address" name="address" required>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </form>    
                           
                    </div>
                </div>      
            </div>
            <div style="margin-top:65px;">
            <?php 
            include 'include/footer.php';
            ?>
        </div>
    </body>
</html>
