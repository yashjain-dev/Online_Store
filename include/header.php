<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<nav>
    <div class="navbar navbar-default navbar-fixed-top"> 
    <div class="container"> 
        <div class="navbar-header"> 
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
            </button> 
            <a class="navbar-brand" href="index.php" style="font-style:oblique; font-size:30px; font-weight:bold;">enLink </a> 
        </div> 
        <div class="collapse navbar-collapse" id="myNavbar"> 
            <ul class="nav navbar-nav navbar-right">
                <?php 
                    if (isset($_SESSION['email'])) { ?> 
                        <li>
                            <a href = "cart.php" class="text-center"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a>
                        </li> 
                        <li>
                            <a href = "setting.php" class="text-center"><span class = "glyphicon glyphicon-user"></span> Settings</a>
                        </li> 
                        <li>
                            <a href = "logout.php" class="text-center"><span class = "glyphicon glyphicon-log-in"></span> Logout</a>
                        </li> 
               
                <?php } 
                    else { ?> 
                        <li>
                            <a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
                        </li> 
                        <li>
                            <a href="" data-toggle='modal' data-target='#loginModal'><span class="glyphicon glyphicon-log-in"></span> Login</a>
                        </li> 
                        <li>
                            <a href="about.php" class="text-center"><span class="glyphicon glyphicon-tasks"></span> About Us</a>
                        </li> 
                        <li>
                            <a href="contact.php" class="text-center"><span class="glyphicon glyphicon-phone"></span> Contact Us</a>
                        </li> 
                <?php } ?> 
            </ul> 
            
        </div>
    </div> 
</div>
</nav>
<!-- login modal -->

  <div class="modal fade" role="dialog" id="loginModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">LOGIN</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <div class='modal-body'>
                    <h5>Don't have an account? <a href='signup.php'>register</a></h5>
                    <form action='script/login_script.php' method='POST'>
                    <div class='form-group'>
                        <input type='email' name='email' class='form-control' placeholder='Email' pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3})$" required>
                    </div>
                    <div class='form-group'>
                        <input type='password' name='password' class='form-control' placeholder='Password' pattern=".{6,}" required>
                    </div>    
                    <div class='form-group'>
                        <button type='submit' class='btn btn-primary'>Login</button>
                    </div>
                    </form>
                    <a href='forget_password.php'>Forget Password?</a>
                </div>       
            </div>
        </div>
    </div>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>