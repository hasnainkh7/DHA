<?php

include("inc/connection.php");
$projectName = $_POST['projectName'];
$projectLocations = $_POST['locations'];
$description = $_POST['description'];
$today = date("m-d-Y h:i:s A");
$randomId = rand(99,999);

echo $projectInsertQuery = "INSERT INTO `projects`(`project_id`, `project_name`, `description`, `image`, `last_updated`) VALUES ('$randomId','$projectName','$description','logo3.png','$today')";

$projectInserted = mysqli_query($conn,$projectInsertQuery);

if($projectInserted){

    foreach ($projectLocations as $selectedOption){


        echo $selectedOption."\n";
        $projectDataInsertQuery = "INSERT INTO `project_data`(`project_id`, `location_id`) VALUES ('$randomId','$selectedOption')";
        $projectDataInserted = mysqli_query($conn,$projectDataInsertQuery);
        
    }
        header('location:addProjectStepTwo.php?projectID='.$randomId.'');
}

 

?>