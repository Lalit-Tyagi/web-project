<?php
require 'includes/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cart | Lifestyle Store</title>


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
        <div class="container-fluid " id = "content">
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped table-hover table-sm">
                        <thead>
                            <tr>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $user_id = $_SESSION['user_id'];
                            $total = 0;
                            $query = "SELECT item_id,name,price,users_item.id FROM users_item INNER JOIN items ON users_item.item_id = items.id WHERE user_id='$user_id'and status='Added to cart'";
                            $result = mysqli_query($con, $query)or die(mysqli_error($con));
                            $idarray = array();
                            $count=1;
                            while ($row = mysqli_fetch_array($result)) {
                                ?>
                                <tr>
                                    <td>
                                        <?php
                                        echo $count++;
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        echo $row['name'];
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $total = $total + $row['price'];
                                        echo $row['price'];
                                        ?>
                                    </td>
                                    <td>
                                        <a href = "cart-remove.php?id=<?php
                                    array_push($idarray, $row['id']);
                                    echo $row['id'];
                                        ?>" class = "remove_item_link"> Remove</a>;
                                    </td>
                                <?php } ?>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Total</td>
                                <td>Rs <?php echo $total ?></td>
                                <td>
                                    <?php
                                    echo '<a class="btn btn-block btn-primary"href="success.php?'.http_build_query(array('cluster' => $idarray)) . '">Confirm Order</a>';
                                    ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
