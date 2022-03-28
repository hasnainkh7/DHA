<?php

include("inc/connection.php");
$plotName = $_POST['plotName'];

$insertQuery = "INSERT INTO `plot_type`(`plot_type`) VALUES ('$plotName')";
$done = mysqli_query($conn,$insertQuery);
if($done){
    header("location:plottypes.php");
}

?>