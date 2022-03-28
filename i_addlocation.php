<?php

include("inc/connection.php");

$location = $_POST['location'];

$inserQuery = "INSERT INTO `location`(`location_name`) VALUES ('$location')";
$done = mysqli_query($conn,$inserQuery);
if($done){
    header("location:locations.php");
}
?>