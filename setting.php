<?php
require"includes/common.php";
if (!isset($_SESSION['email'])) {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
    <head>
        <title>Settings | Lifestyle Store</title>

        <!-- Latest compiled and minified CSS -->
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
        if (isset($_GET['error'])) {
            switch ($_GET['error']) {
                case "0706": echo"<div class='text-center text-warning'>Your password and confirmation password do not match.</div>";
                    break;
                case "0708": echo"<div class='text-center text-warning'>you new password is same as old,use a diffrent new password.</div>";
                    break;
                case "0707": echo"<div class='text-center text-warning'>Incorrect Old password.</div>";
                    break;
                case "0709": echo"<div class='text-center text-success'>Your password is successfully changed.</div>";
                    break;
                case "0701": echo"<div class='text-center text-warning'>Password should contain 8-13 character</div>";
                    break;
            }
        }
        ?>
        <div class="container-fluid">   
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3" id="settings-container">
                    <h4>Change Password</h4>
                    <form action="setting_script.php" method="POST">
                        <div class="form-group">
                            <input type="password" placeholder="Old Password" name="old-password" class="form-control " required="required">
                        </div>
                        <div class="form-group">
                            <input type="password"  placeholder="New Password" name="new-password" class="form-control " required="required">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Re-type New Password" name="retype-password" class="form-control " required="required" >
                        </div>
                        <button type="submit" class="btn btn-primary">Change</button>
                    </form>
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
