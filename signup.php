<?php
require"includes/common.php";
if (isset($_SESSION['email'])) {
    header('location:product.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up | Lifestyle Store</title>
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
        <div class="container-fluid decor_bg" id="content">
            <div class="row">
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <div class="text-center text-warning">
                            <?php
                            if (isset($_GET['signup_error'])) {
                                echo $_GET['signup_error'];
                            }
                            ?>
                        </div>
                        <h2>SIGN UP</h2>
                        <form method="POST" action="signup_script.php">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="name"  required="required"> 
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" name="email" required="required">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" required="required">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="contact" placeholder="Contact" maxlength="10" size="10" required="required">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="city" placeholder="City" required="required">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="address" placeholder="Address" required="required">
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </form>
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
