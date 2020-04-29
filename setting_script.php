<?php

require 'includes/common.php';
if (!isset($_SESSION['email'])) {
    header('location:index.php');
}
if (strlen($_POST['old-password']) < 8 || strlen($_POST['new-password']) < 8 || strlen($_POST['retype-password']) < 8) {
    header("location:setting.php?error=0701");
}
$old = md5($_POST['old-password']);
$new = md5($_POST['new-password']);
$retype = md5($_POST['retype-password']);

$user_id = $_SESSION['user_id'];
$query = "select password from users where id='$user_id'";
$result = mysqli_query($con, $query)or die(mysqli_error($con));
$row = mysqli_fetch_array($result);
if (strlen($_POST['old-password']) < 8 || strlen($_POST['new-password']) < 8 || strlen($_POST['retype-password']) < 8) {
    header("location:setting.php?error=0701");
} elseif ($new != $retype) {
    header("location:setting.php?error=0706");
} elseif ($row['password'] != $old) {
    header("location:setting.php?error=0707");
} elseif ($row['password'] == $new) {
    header("location:setting.php?error=0708");
} elseif ($row['password'] == $old) {
    $update_query = "UPDATE users SET password='$new' WHERE id='$user_id'";
    $result = mysqli_query($con, $update_query)or die(mysqli_error($con));
    header("location:setting.php?error=0709");
}