<?php
require 'includes/common.php';
$item_id=$_GET['item_id'];
$user_id=$_SESSION['user_id'];
$query="INSERT INTO users_item (user_id,item_id,status)values('$user_id','$item_id','Added to cart')";
$result= mysqli_query($con, $query)or die(mysqli_error($con));
header("location:product.php");
