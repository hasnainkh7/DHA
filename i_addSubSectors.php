<?php

include("inc/connection.php");

$projectDataId = $_GET['projectDataId'];

echo $projectDataId."<br>";

$query = "SELECT * FROM project_sector WHERE projectData_id = $projectDataId";
$done = mysqli_query($conn,$query);
 
while($result = mysqli_fetch_assoc($done)){

    $sectorDataID = $result['id'];
    $subSectorGetID = 'sub_SectorsOf'.$sectorDataID;
    
    $sectorGetData = $_GET[$subSectorGetID];
    
        foreach ($sectorGetData as $selectedOption){
    
            echo "Selected OPTION: ".$selectedOption."<br>";
            echo "SECTOR DATA ID: ".$sectorDataID."<br><br><br>";

            $insertSubSectorQuery = "INSERT INTO `project_sub_sector`(`sub_sector_id`, `project_sector_id`) VALUES ('$selectedOption','$sectorDataID')";
            $insertSubSectorDone = mysqli_query($conn,$insertSubSectorQuery);

    
        }
    
    header('location:addProjectStepFive.php?projectDataId='.$projectDataId.'');

}
?>