<?php

include("inc/connection.php");

$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];

if($role == 1){
    $profile = "vmedia.png";
}else{
    $profile = "datacollector.png";
}


$insertUserQuery = "INSERT INTO `user`(`name`, `username`, `password`, `email`, `profile_pic`, `role`) VALUES ('$name','$username','$password','$email','$profile','$role')";
$done = mysqli_query($conn,$insertUserQuery);
if($done){
    header("location:users.php");
}

?>