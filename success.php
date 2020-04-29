<?php
require"includes/common.php";
if(!isset($_SESSION['email']))
{
    header("location:index.php");
}
foreach ($_GET['cluster'] as $val) { 
    $query="UPDATE users_item SET status='Confirmed' WHERE id=$val;";
    $result= mysqli_query($con, $query) or die(mysqli_error($con));
}
?>
<!DOCTYPE html>
<html>
    <head>
    <head>
        <title>Success | Lifestyle store</title>


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
        ?>
        <div class="container-fluid" id="content">   
            <div class="col-md-12">
                <div class="jumbotron">

                    <h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3><hr>
                    <p align="center">Click <a href="product.php">here</a> to purchase any other item.</p>

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
