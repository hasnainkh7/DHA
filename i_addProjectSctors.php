<?php

include("inc/connection.php");
$projectSectors = $_POST['sectors'];
$projectId = $_POST['projectId'];
$locationId = $_POST['locationId'];

$selectProjectIdQuery = "SELECT * FROM `project_data` WHERE project_id = $projectId AND location_id = $locationId";
$selectProjectIdDone = mysqli_query($conn,$selectProjectIdQuery);
$selectProjectIdResult = mysqli_fetch_assoc($selectProjectIdDone);

$ProjectDataId = $selectProjectIdResult['id'];

echo $ProjectDataId;
    echo "<br>";
foreach ($projectSectors as $selectedOption){

    echo $selectedOption;
    echo "<br>";
    
    
    $projectSectorDataInsertQuery = "INSERT INTO `project_sector`(`sector_id`, `projectData_id`, `has_sub_sector`) VALUES ('$selectedOption','$ProjectDataId','1')";
    $projectSectorDataInserted = mysqli_query($conn,$projectSectorDataInsertQuery);
    if($projectSectorDataInserted){
        echo "indersted";
    }
}
    header('location:addProjectStepFour.php?projectDataId='.$ProjectDataId.'');

?>