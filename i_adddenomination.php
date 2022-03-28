<?php

include("inc/connection.php");

$denomination = $_POST['denomination'];
$plotType = $_POST['plotType'];
$unit = $_POST['unit'];

$insertDenominationQuery = "INSERT INTO `plot_denomination`(`plot_den`, `plot_type`, `unit`) VALUES ('$denomination','$plotType','$unit')";
$insertDenominationDone = mysqli_query($conn,$insertDenominationQuery);

if($insertDenominationDone){
    header("location:denominations.php");
}


?>