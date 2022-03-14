<?php

include("inc/connection.php");

$projectDataId = $_GET['projectDataId'];

echo "Project ID: ".$projectDataId."<br>";
$query = "SELECT * FROM project_data WHERE id = $projectDataId";
$done = mysqli_query($conn,$query);

while($result = mysqli_fetch_assoc($done)){
    
    $sectorQuery = "SELECT * FROM project_sector WHERE projectData_id = $projectDataId";
    $sectorDone = mysqli_query($conn,$sectorQuery);

    while($sectorResult = mysqli_fetch_assoc($sectorDone)){
        echo "<br>".$sectorResult['id']."<br>";

        $projectSectorId = $sectorResult['id'];

        $getSectorKeyValue = "denominationValueOfSubSubSector".$projectSectorId;
        echo "get Sector key values: ".$getSectorKeyValue."<br>";
        $getSectorValue = $_GET[$getSectorKeyValue];

        $getStatusKeyValue = "statusOf".$projectSectorId;
        $getStatusValue = $_GET[$getStatusKeyValue];

        foreach ($getSectorValue as $selectedOption){
            echo $selectedOption."<br>";

            foreach ($getStatusValue as $selectedStatusOption){
                echo $selectedStatusOption."<br>";

                $InsertQuery = "INSERT INTO `project_denominations`(`denomination_id`, `plot_status`, `data_of`) VALUES ('$selectedOption','$selectedStatusOption','$projectSectorId')";
                echo $InsertQuery."<br>";
                $dataInserted = mysqli_query($conn,$InsertQuery);
                if($dataInserted){
                    echo "Denomination Inserted";
                }



            }
        }

        

        $subSectorQuery = "SELECT * FROM project_sub_sector WHERE project_sector_id = $projectSectorId";
        $subSectorDone = mysqli_query($conn,$subSectorQuery);

        while($subSectorResult = mysqli_fetch_assoc($subSectorDone)){

            $projectSubSectorId = $subSectorResult['id'];
            $getSubSectorKeyValue = "denominationValueOfSubSubSector".$projectSubSectorId;
            echo "get Sub Sector key values: ".$getSubSectorKeyValue."<br>";
            $getSubSectorValue = $_GET[$getSubSectorKeyValue];

            $getStatusKeyValue = "statusOf".$projectSubSectorId;
            $getStatusValue = $_GET[$getStatusKeyValue];

            foreach ($getSubSectorValue as $selectedOption){
                echo $selectedOption."<br>";

                foreach ($getStatusValue as $selectedStatusOption){
                    echo $selectedStatusOption."<br>";
                    $InsertQuery = "INSERT INTO `project_denominations`(`denomination_id`, `plot_status`, `data_of`) VALUES ('$selectedOption','$selectedStatusOption','$projectSubSectorId')";
        

                    $dataInserted = mysqli_query($conn,$InsertQuery);
                    if($dataInserted){
                        echo "Denomination Inserted";
                    }

                }
            }

            $subSubSectorQuery = "SELECT * FROM project_sub_sub_sector WHERE project_sub_sector_id = $projectSubSectorId";
            $subSubSectorDone = mysqli_query($conn,$subSubSectorQuery);

            while($subSubSubSectorResult = mysqli_fetch_assoc($subSubSectorDone)){
                $projectSubSubSectorId = $subSubSubSectorResult['id'];
                $getSubSubSectorKeyValue = "denominationValueOfSubSubSector".$projectSubSubSectorId;

                $getSubSubSectorValue = $_GET[$getSubSubSectorKeyValue];

                $getStatusKeyValue = "statusOf".$projectSubSectorId;
                $getStatusValue = $_GET[$getStatusKeyValue];

                foreach ($getSubSubSectorValue as $selectedOption){
                    echo $selectedOption."<br>";

                    foreach ($getStatusValue as $selectedStatusOption){
                        echo $selectedStatusOption."<br>";
                        $InsertQuery = "INSERT INTO `project_denominations`(`denomination_id`, `plot_status`, `data_of`) VALUES ('$selectedOption','$selectedStatusOption','$projectSubSubSectorId')";
                        
                        $dataInserted = mysqli_query($conn,$InsertQuery);
                        if($dataInserted){
                            echo "Denomination Inserted";
                        }

                    }
                }
            }

        }



    }

}
header("location:projectdata.php?projectDataId=".$projectDataId);
?>