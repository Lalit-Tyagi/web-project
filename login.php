<?php
require"includes/common.php";
if (isset($_SESSION['email'])) {
    header('location:product.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login | LifeStyle Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div id="content">

            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">      
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>LOGIN</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning">
                                    Login to make a purchase
                                </p>
                                <form method="POST" action="login_submit.php">
                                    <div class="text-warning text-center">
                                        <?php
                                        if (isset($_GET['login_error'])) {
                                            echo $_GET['login_error'];
                                        }                                        
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" placeholder="Email" name="email" class="form-control " required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" placeholder="password" name="password" class="form-control " required="required">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Login</button>
                                    <br>
                                    <br>
                                </form>
                                <br/>                           
                            </div>
                            <div class="panel-footer">
                                Don't have an account? <a href="signup.php">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-fixed-bottom">
        	<?php
        	include 'includes/footer.php';
       		?>
    	</div>
    </body>
</html>
