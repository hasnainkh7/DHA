<?php

include("inc/connection.php");

$projectDataId = $_GET['projectDataId'];

echo "Project ID: ".$projectDataId."<br>";

$query = "SELECT * FROM project_sector WHERE projectData_id = $projectDataId";
$done = mysqli_query($conn,$query);
 
while($result = mysqli_fetch_assoc($done)){

    $project_sector_id = $result['id'];

    echo "Project Sector ID: ".$project_sector_id."<br><br>";

    $selectSubSectorQuery = "SELECT * FROM project_sub_sector WHERE project_sector_id = $project_sector_id";
    $selectSubSectorDone = mysqli_query($conn,$selectSubSectorQuery);

    while($selectSubSectorResult = mysqli_fetch_assoc($selectSubSectorDone)){
        $project_sub_sector_id = $selectSubSectorResult['id'];
        echo "Project Sub Sector ID: ".$project_sub_sector_id."<br>";

        $selectSubSubSectorQuery = "SELECT * FROM project_sub_sub_sector WHERE project_sub_sector_id = $project_sub_sector_id";
        $selectSubSubSectorDone = mysqli_query($conn,$selectSubSubSectorQuery);

        while($selectSubSubSectorResult = mysqli_fetch_assoc($selectSubSubSectorDone)){
            $project_sub_sub_sector_id = $selectSubSubSectorResult['id'];
            echo "Project Sub Sub Sector ID: ".$project_sub_sub_sector_id."<br>";

            $getKeyValue = "denominationValueOfSubSubSector".$project_sub_sub_sector_id;
            echo "get key values: ".$getKeyValue."<br>";
            $getValue = $_GET[$getKeyValue];
            
            foreach ($getValue as $selectedOption){
    
                echo "Selected OPTION: ".$selectedOption."<br>";
                echo "SUB SUB SECTOR DATA ID: ".$project_sub_sub_sector_id."<br><br>";
    
                $insertSubSectorQuery = "INSERT INTO `project_denominations`(`denomination_id`, `project_sub_sub_sector_id`) VALUES ('$selectedOption','$project_sub_sub_sector_id')";
                $insertSubSectorDone = mysqli_query($conn,$insertSubSectorQuery);

                if($insertSubSectorDone){
                    echo "Instered!!!!!!";
                }
    
        
            }

        }
        echo "-----<br>";
    }

    echo "<br>";
    
    
    
    header('location:projects.php');

}
?>