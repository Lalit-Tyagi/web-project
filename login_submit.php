<?php
require"includes/common.php";
?>
<?php

$email = mysqli_real_escape_string($con,$_POST['email']);
$password=md5($_POST['password']);
$query="select id , email from users where email='$email' AND password='$password'";
$result = mysqli_query($con, $query)or die(mysqli_error($con));
if(mysqli_num_rows($result)==0){
   header('location:login.php?login_error=Enter Valid Username or password');
}
else{
   $row=mysqli_fetch_array($result);
   $_SESSION["email"] = $row['email'];
   $_SESSION['user_id']=$row['id'];
   header('location:product.php');
}
?>