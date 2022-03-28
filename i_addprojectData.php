<?php
session_start();

include("inc/connection.php");

$projectDataId = $_POST['projectDataId'];

$userData = $_SESSION["userData"]['userId'];

$getProDenoQuery = "SELECT * FROM `project_denominations`";
$getProDenoDone = mysqli_query($conn, $getProDenoQuery);

$today = date("m-d-Y");
$time = date("h:i:s A");
$month = date("m");

$randomId = rand(0,99);
$randomId = "900".$randomId;

     
$insertPricingDataQuery = "INSERT INTO `project_pricing_data`(`id`, `date`, `time`, `project_data_id`, `data_collector_id`, `is_approved`) VALUES ('$randomId','$today','$time','$projectDataId','$userData','0')";
$insertPricingDataDone = mysqli_query($conn,$insertPricingDataQuery);

if($insertPricingDataDone){
    echo "a";
    while($getProDenoResult = mysqli_fetch_assoc($getProDenoDone)){

        $getMinValueKey =  "minDenoOf".$getProDenoResult['data_of'].$getProDenoResult['denomination_id'];
        $getMaxValueKey =  "maxDenoOf".$getProDenoResult['data_of'].$getProDenoResult['denomination_id'];
    
        $projectDenoId = $getProDenoResult['id'];
    
        $minValue = $_POST[$getMinValueKey];
        $maxValue = $_POST[$getMaxValueKey];
    
        echo "Min Value ".$minValue."<br>";
        echo "Max Value ".$maxValue."<br>";
    
    
            $insertPriceQuery = "INSERT INTO `project_pricings`( `date`, `month`, `min`, `max`, `project_deno_id`, `is_approved`, `data_id`) VALUES ('$today','$month','$minValue','$maxValue','$projectDenoId','0','$randomId')";
            $insertPriceDone = mysqli_query($conn,$insertPriceQuery);
    
            if($insertPriceDone){
                header("location:projects.php");   
            }

    
                
        
    }
}



?>

