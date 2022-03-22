<?php

include("inc/connection.php");


$getProDenoQuery = "SELECT * FROM `project_denominations`";
$getProDenoDone = mysqli_query($conn, $getProDenoQuery);

while($getProDenoResult = mysqli_fetch_assoc($getProDenoDone)){
    
    $getMinValueKey =  "minDenoOf".$getProDenoResult['data_of'].$getProDenoResult['denomination_id'];
    $getMaxValueKey =  "maxDenoOf".$getProDenoResult['data_of'].$getProDenoResult['denomination_id'];

    $projectDenoId = $getProDenoResult['id'];

    $minValue = $_GET[$getMinValueKey];
    $maxValue = $_GET[$getMaxValueKey];

    // echo "Min Value ".$minValue."<br>";
    // echo "Max Value ".$maxValue."<br>";

    $today = date("m-d-Y h:i:s A");


    $insertPriceQuery = "INSERT INTO `project_pricings`(`date`, `min`, `max`, `project_deno_id`, `is_approved`) VALUES ('$today','$minValue','$maxValue','$projectDenoId','0')";
    $insertPriceDone = mysqli_query($conn,$insertPriceQuery);

    if($insertPriceDone){
        echo "Inserted<br>";
    }

    header("location:projects.php");
    
}

?>

