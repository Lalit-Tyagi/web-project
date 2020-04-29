<?php
require"includes/common.php";
if (isset($_SESSION['email'])) {
    header('location:product.php');
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Home | Lifestyle Store</title>


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
    <body style="padding-top: 50px;">
        <?php
        include"includes/header.php";
        ?>
        <div>
            <div id = "banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1>We sell lifestyle.</h1>
                            <p>Flat 40% OFF on premium brands </p>
                            <br/>
                            <a  href="product.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row text-center" id="item_list">
                <div class="col-sm-4">
                    <a href="product.php#cameras" >
                        <div class="thumbnail">
                            <img src="img/1.jpg" alt="Camera">
                            <div class="caption">
                                <h3>Cameras</h3>
                                <p>Choose among the best available in the world.</p>
                            </div>
                        </div> 
                    </a>
                </div>

                <div class="col-sm-4">
                    <a href="product.php#watches" >
                        <div class="thumbnail">
                            <img src="img/7.jpg" alt="Watch">
                            <div class="caption">
                                <h3>Watches</h3>
                                <p>Original watches from the best brands.</p>
                            </div>
                        </div> 
                    </a>
                </div>

                <div class="col-sm-4">
                    <a href="product.php#shirts" >
                        <div class="thumbnail">
                            <img src="img/24.jpg" alt="Shirt">
                            <div class="caption">
                                <h3>Shirts</h3>
                                <p>Our exquisite collection of shirts.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>       
    </body>
</html>