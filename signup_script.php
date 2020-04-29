<?php

require"includes/common.php";

$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
if (strlen($_POST['password']) < 8) {
    header("location:signup.php?signup_error=Password should contain 8-13 character");
} else {
    $password = md5($_POST['password']);
    $contact = mysqli_real_escape_string($con, $_POST['contact']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $select_query = "select * from users where email='$email'";
    $select_result = mysqli_query($con, $select_query);
    if (mysqli_num_rows($select_result) > 0) {
        header("location:signup.php?signup_error=This email is already registered!! try signing up from a diffrent account");
    } else {
        $query = "INSERT INTO `users`(`name`, `email`, `password`, `contact`, `city`, `address`) VALUES ('$name','$email','$password','$contact','$city','$address')";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        header("location:login.php");
    }
}
?>