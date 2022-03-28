<?php

include("inc/connection.php");
$dataId = $_GET['dataId'];


$updateApproveQuery = "UPDATE `project_pricing_data` SET `is_approved`='1' WHERE `id`='$dataId'";
$updateApproveDone = mysqli_query($conn,$updateApproveQuery);

if($updateApproveDone){

    echo $updatePricesApproveQuery = "UPDATE `project_pricings` SET `is_approved`='1' WHERE `data_id`='$dataId'";
    $updatePricesApproveResult = mysqli_query($conn,$updatePricesApproveQuery);

    if($updatePricesApproveResult){
        header("location:datacollection.php");
    }
}


?>