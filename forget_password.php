<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css" > 
        <title>Password Reset | enLink</title>
    </head>
    <body>
        <?php
        include 'include/header.php';
        ?>
        <div class="forgetpage">
        <div class="container" style="margin-top:80px;">
            <div class="row">
                <center>
                    <h1 style="color:blue; font-weight:bold;">Find your enLink account</h1>
                </center>
                <div class="col-xs-4 col-lg-4 col-xs-offset-4 col-lg-offset-4">
                    <h4>Enter your email here:</h4>
                    <form action="script/forget_script.php" method="POST">
                        <div class="form-group">
                                <input type="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3})$" name="email" required>
                                <?php
                                if(isset($_GET['m1'])){
                                 echo $_GET['m1'];
                                }
                                ?>
                        </div>
                        <div class="form-group">
                             <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <?php
                                if(isset($_GET['message'])){
                                 echo "<h4>{$_GET['message']}</h4>";
                                }
                        ?>
                    </form>
                </div>
            </div>
        </div>
        </div>
        <div style="margin-top:210px;">
        <?php 
        include 'include/footer.php';
        ?>
        </div>
    </body>
</html>
