<?php
require 'includes/common.php';
$id=$_GET['id'];
$query="DELETE FROM `users_item` WHERE id='$id';";
$result = mysqli_query($con, $query)or die(mysqli_error($con));
header('location:cart.php?removed=removed item from cart');