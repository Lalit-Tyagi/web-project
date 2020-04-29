<?php
require"includes/common.php";
?>
<!DOCTYPE html>
<html>
    <head>
    <head>
        <title>Products | Life Style Store</title>


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
        include 'includes/check_if_added.php';
        ?>
        <div class="container" id ="content">
            <div class="jumbotron home-spacer" id ="product-jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt
                    around, we have all in one place.</p>
            </div>
            <hr>
            <div class="row text-center" id ="cameras">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img alt="" src="img/5.jpg">
                        <center>
                            <div class="caption">
                                <h3>Cannon Eos</h3>
                                <p>Price: Rs.36000.00</p>
                            </div>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <a href="login.php" class="btn btn-primary btn-block">Add to cart</a>
                                <?php
                            } else {
                                if (check_if_added_to_cart(1)) {
                                    echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?item_id=1" class="btn btn-primary btn-block">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </center>
                    </div>           
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img alt="" src="img/2.jpg">
                        <center>
                            <div class="caption">
                                <h3>Sony DSLR</h3>
                                <p>Price: Rs.40000.00</p>

                            </div>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <a href="login.php" class="btn btn-primary btn-block">Add to cart</a>
                                <?php
                            } else {
                                if (check_if_added_to_cart(2)) {
                                    echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?item_id=2" class="btn btn-primary btn-block">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </center>
                    </div>           
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img alt="" src="img/3.jpg">
                        <center>
                            <div class="caption">
                                <h3>Sony DSLR</h3>
                                <p>Price: Rs.50000.00</p>
                            </div>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <a href="login.php" class="btn btn-primary btn-block">Add to cart</a>
                                <?php
                            } else {
                                if (check_if_added_to_cart(3)) {
                                    echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?item_id=3" class="btn btn-primary btn-block">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </center>
                    </div>           
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img alt="" src="img/4.jpg">
                        <center>
                            <div class="caption">
                                <h3>Olympus DSLR</h3>
                                <p>Price: Rs.80000.00</p>
                            </div>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <a href="login.php" class="btn btn-primary btn-block">Add to cart</a>
                                <?php
                            } else {
                                if (check_if_added_to_cart(4)) {
                                    echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?item_id=4" class="btn btn-primary btn-block">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </center>
                    </div>           
                </div>
            </div>
            <div class="row text-center" id ="watches">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img alt="" src="img/9.jpg">
                        <center>
                            <div class="caption">
                                <h3>Titan Model #301</h3>
                                <p>Price: Rs.13000.00</p>
                            </div>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <a href="login.php" class="btn btn-primary btn-block">Add to cart</a>
                                <?php
                            } else {
                                if (check_if_added_to_cart(5)) {
                                    echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?item_id=5" class="btn btn-primary btn-block">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </center>
                    </div>           
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img alt="" src="img/10.jpg">
                        <center>
                            <div class="caption">
                                <h3>Titan Model#201</h3>
                                <p>Price: Rs.3000.00</p>
                            </div>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <a href="login.php" class="btn btn-primary btn-block">Add to cart</a>
                                <?php
                            } else {
                                if (check_if_added_to_cart(6)) {
                                    echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?item_id=6" class="btn btn-primary btn-block">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </center>
                    </div>           
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img alt="" src="img/11.jpg">
                        <center>
                            <div class="caption">
                                <h3>HMT Milqn</h3>
                                <p>Price: Rs.8000.00</p>
                            </div>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <a href="login.php" class="btn btn-primary btn-block">Add to cart</a>
                                <?php
                            } else {
                                if (check_if_added_to_cart(7)) {
                                    echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?item_id=7" class="btn btn-primary btn-block">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>                
                        </center>
                    </div>           
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img alt="" src="img/12.jpg">
                        <center>
                            <div class="caption">
                                <h3>Faber Luba #111</h3>
                                <p>Price: Rs.18000.00</p>
                            </div>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <a href="login.php" class="btn btn-primary btn-block">Add to cart</a>
                                <?php
                            } else {
                                if (check_if_added_to_cart(8)) {
                                    echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?item_id=8" class="btn btn-primary btn-block">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>                       
                        </center>
                    </div>           
                </div>
            </div>
            <div class="row text-center" id ="shirts">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img alt="" src="img/22.jpg">
                        <center>
                            <div class="caption">
                                <h3>H&W</h3>
                                <p>Price: Rs.800.00</p>
                            </div>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <a href="login.php" class="btn btn-primary btn-block">Add to cart</a>
                                <?php
                            } else {
                                if (check_if_added_to_cart(9)) {
                                    echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?item_id=9" class="btn btn-primary btn-block">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </center>
                    </div>           
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img alt="" src="img/6.jpg">
                        <center>
                            <div class="caption">
                                <h3>Luis Phil</h3>
                                <p>Price: Rs.1000.00</p>
                            </div>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <a href="login.php" class="btn btn-primary btn-block">Add to cart</a>
                                <?php
                            } else {
                                if (check_if_added_to_cart(10)) {
                                    echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?item_id=10" class="btn btn-primary btn-block">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>                      
                        </center>
                    </div>           
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img alt="" src="img/13.jpg">
                        <center>
                            <div class="caption">
                                <h3>John Zok</h3>
                                <p>Price: Rs.1500.00</p>
                            </div>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <a href="login.php" class="btn btn-primary btn-block">Add to cart</a>
                                <?php
                            } else {
                                if (check_if_added_to_cart(11)) {
                                    echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?item_id=11" class="btn btn-primary btn-block">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>                       
                        </center>
                    </div>           
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img alt="" src="img/14.jpg">
                        <center>
                            <div class="caption">
                                <h3>Jhalsani</h3>
                                <p>Price: Rs.1300.00</p>
                            </div>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <a href="login.php" class="btn btn-primary btn-block">Add to cart</a>
                                <?php
                            } else {
                                if (check_if_added_to_cart(12)) {
                                    echo '<a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                <a href="cart-add.php?item_id=12" class="btn btn-primary btn-block">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </center>
                    </div>           
                </div>                          
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>        
    </body>
</html>
