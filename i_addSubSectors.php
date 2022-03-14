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
            echo "SECTOR DATA ID: ".$sectorDataID."<br>";
            
            if($selectedOption == 2){
                $UpdateHasNoSectorQuery = "UPDATE `project_sector` SET `has_sub_sector`='0' WHERE `id`='$sectorDataID'";
                $UpdateHasNoSectorDone = mysqli_query($conn,$UpdateHasNoSectorQuery);

                if($UpdateHasNoSectorDone){
                    echo "Updated none sectoor<br><br>";
                }
            }else{
                $insertSubSectorQuery = "INSERT INTO `project_sub_sector`(`sub_sector_id`, `project_sector_id`, `has_sub_sub_sector`) VALUES ('$selectedOption','$sectorDataID','1')";
                $insertSubSectorDone = mysqli_query($conn,$insertSubSectorQuery);
                if($insertSubSectorDone){
                    echo "Inserted Sub Sector<br><br>";
                }
            }
            

            

    
        }
    
    header('location:addProjectStepFive.php?projectDataId='.$projectDataId.'');

}
?>