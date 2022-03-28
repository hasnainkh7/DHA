<?php

include("inc/connection.php");

$sectorName = $_POST['sectorName'];

$insertQuery = "INSERT INTO `sector`(`sector_name`) VALUES ('$sectorName')";
$inserDone = mysqli_query($conn,$insertQuery);

if($inserDone){
    header("location:sectors.php");
}

?>