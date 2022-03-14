<?php

include("inc/connection.php");

$projectDataId = $_GET['projectDataId'];


$query = "SELECT * FROM project_sector WHERE projectData_id = $projectDataId";
$done = mysqli_query($conn,$query);
 
while($result = mysqli_fetch_assoc($done)){

    $projectSectorDataId = $result['id'];
    $selectSubSectorquery = "SELECT * FROM project_sub_sector WHERE project_sector_id = $projectSectorDataId";
    $selectSubSectorDone = mysqli_query($conn,$selectSubSectorquery);

        echo "<br><br>Data of Sector ID: ".$projectSectorDataId."<br>";
        while($selectSubSectorResult = mysqli_fetch_assoc($selectSubSectorDone)){
            echo $selectSubSectorResult['id']."<br>";
            $GetDataKey = "sub_sub_SectorsOf".$selectSubSectorResult['id'];
            $GetDataText = $_GET[$GetDataKey];

            foreach ($GetDataText as $selectedOption){
    
                $subSectorProjectDataId = $selectSubSectorResult['id'];
                echo "Selected OPTION: ".$selectedOption."<br>";
                echo "Sub SECTOR DATA ID: ".$subSectorProjectDataId."<br>";

                

                if($selectedOption == 2){
                    $updateSubSectorQuery = "UPDATE `project_sub_sector` SET `has_sub_sub_sector`='0' WHERE `id`='$subSectorProjectDataId'";
                    $updateSubSectorDone = mysqli_query($conn,$updateSubSectorQuery);

                    if($updateSubSectorDone){
                            echo 'Sub Sector Updated';
                    }

                }else{
                    $insertSubSubSectorQuery = "INSERT INTO `project_sub_sub_sector`(`sub_sub_sector_id`, `project_sub_sector_id`) VALUES ('$selectedOption','$subSectorProjectDataId')";
                    $insertSubSubSectorDone = mysqli_query($conn,$insertSubSubSectorQuery);
                    
                    if($insertSubSubSectorDone){
                            echo 'data inserted';
                    }
                }
                echo "<br>************<br><br>";
                
    
        
            }
        }
        
        echo "-------------<br>";
       
    
    header('location:addProjectStepSix.php?projectDataId='.$projectDataId.'');

}
?>
