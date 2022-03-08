<?php
session_start();
include("inc/connection.php");

$username = $_POST['username'];
$pass = $_POST['pass'];

$query = "SELECT * FROM `user` WHERE `username` = '$username' AND `password` = '$pass';";
$done = mysqli_query($conn,$query);
$count = mysqli_num_rows($done);

if($count != 0){
    
    while($result = mysqli_fetch_assoc($done)){
        
        $userData = array(
            "userId" => $result['user_id'],
            "role" => $result['role'],
            "name" => $result['name'],
            "username" => $result['username'],
            "email" => $result['email'],
            "profile_pic" => $result['profile_pic'],
            "isLogin" => 1,
        );

        
        $_SESSION["userData"] = $userData;

            echo $_SESSION["userData"]['role'];
        
        if($_SESSION["userData"]['role'] == 1){
            header("location:index.php");
        }else{
            header("location:indexDataCollector.php");
        }
       
        
    }

}




?>