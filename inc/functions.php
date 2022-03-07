<?php

function replaceProjectfromIdToName($projectId){
    include("connection.php");
    $gPNQuery = "SELECT * FROM projects WHERE project_id = $projectId";
    $gPNData = mysqli_query($conn,$gPNQuery);
    $gPNResult = mysqli_fetch_assoc($gPNData);

    echo $gPNResult['project_name'];
}

function replaceSectorfromIdToName($sectorId){
    include("connection.php");
    $gSNQuery = "SELECT * FROM sector WHERE sector_id = $sectorId";
    $gSNData = mysqli_query($conn,$gSNQuery);
    $gSNResult = mysqli_fetch_assoc($gSNData);

    return $gSNResult['sector_name'];
}

function replaceSubSectorfromIdToName($subsectorId){
    include("connection.php");
    $gSNQuery = "SELECT * FROM sub_sector WHERE sub_sector_id = $subsectorId";
    $gSNData = mysqli_query($conn,$gSNQuery);
    $gSNResult = mysqli_fetch_assoc($gSNData);

    return $gSNResult['sub_sector_name'];
}

function replaceSubSubSectorfromIdToName($subSubSectorId){
    include("connection.php");
    $gSNQuery = "SELECT * FROM sub_sub_sector WHERE sub_sub_sector_id = $subSubSectorId";
    $gSNData = mysqli_query($conn,$gSNQuery);
    $gSNResult = mysqli_fetch_assoc($gSNData);

    echo $gSNResult['sub_sub_sector_name'];
}

function replaceLocationfromIdToName($locationId){
    include("connection.php");
    $gLNQuery = "SELECT * FROM location WHERE location_id = $locationId";
    $gLNData = mysqli_query($conn,$gLNQuery);
    $gLNResult = mysqli_fetch_assoc($gLNData);

    echo $gLNResult['location_name'];
}

function replaceLocationfromIdToNameSelect($locationId){
    include("connection.php");
    $gLSQuery = "SELECT * FROM location WHERE location_id = $locationId";
    $gLSData = mysqli_query($conn,$gLSQuery);
    while($gLSResult = mysqli_fetch_assoc($gLSData)){
    echo "<option value=".$locationId.">".$gLSResult['location_name']."</option>";
    }
}



// fuctions for select 
function getLocationsSelect(){

    include("connection.php");
    $gLSQuery = "SELECT * FROM location";
    $gLSData = mysqli_query($conn,$gLSQuery);
    while($gLSResult = mysqli_fetch_assoc($gLSData)){
        echo "<option value=".$gLSResult['location_id'].">".$gLSResult['location_name']."</option>";
    }
}

function getProjectsSelect(){

    include("connection.php");
    $gPSQuery = "SELECT * FROM projects";
    $gPSData = mysqli_query($conn,$gPSQuery);
    while($gPSResult = mysqli_fetch_assoc($gPSData)){
        echo "<option value=".$gPSResult['project_id'].">".$gPSResult['project_name']."</option>";
    }
}

function getProjectsLocationsSelect($projectId){

    include("connection.php");
    $gLSQuery = "SELECT * FROM project_data WHERE project_id = $projectId";
    $gLSData = mysqli_query($conn,$gLSQuery);
    while($gLSResult = mysqli_fetch_assoc($gLSData)){
        replaceLocationfromIdToNameSelect($gLSResult['location_id']);
    }
}


// functions for add projects 
function getSectorsForAddProject(){

    include("connection.php");
    $gSFAPQuery = "SELECT * FROM sector";
    $gSFAPData = mysqli_query($conn,$gSFAPQuery);
    while($gSFAPResult = mysqli_fetch_assoc($gSFAPData)){
        echo "
        <div class='col-sm-2 col-6'>
            <div class='card avtivity-card bg-light'>
                <input type='checkbox' name='sectors[]' value='".$gSFAPResult['sector_id']."' id='sectorId_".$gSFAPResult['sector_id']."'/>
                <div class='card-body'>
                    <div class='media align-items-center'>
                         <div class='media-body text-center'>
                            <span class='title text-black font-w600'>".$gSFAPResult['sector_name']."</span>
                        </div>
                    </div>
                </div>
                <div class='effect bg-success'></div>
            </div>
        </div>
        ";
    }
}

function getSubSectorsForAddProject($sectorId){

    include("connection.php");
    $gSFAPQuery = "SELECT * FROM sub_sector";
    $gSFAPData = mysqli_query($conn,$gSFAPQuery);
    while($gSFAPResult = mysqli_fetch_assoc($gSFAPData)){
        echo "
        <div class='col-sm-1 col-6'>
            <div class='card avtivity-card bg-light'>
                <input type='checkbox' name='sub_SectorsOf".$sectorId."[]' value='".$gSFAPResult['sub_sector_id']."' id='sub_sectorId_".$gSFAPResult['sub_sector_id']."'/>
                <div class='card-body'>
                    <div class='media align-items-center'>
                         <div class='media-body text-center'>
                            <span class='title text-black font-w600'>".$gSFAPResult['sub_sector_name']."</span>
                        </div>
                    </div>
                </div>
                <div class='effect bg-success'></div>
            </div>
        </div>
        ";
    }
}

function getSubSubSectorsForAddProject($sub_sectorId){

    include("connection.php");
    $gSFAPQuery = "SELECT * FROM sub_sub_sector";
    $gSFAPData = mysqli_query($conn,$gSFAPQuery);
    while($gSFAPResult = mysqli_fetch_assoc($gSFAPData)){
        echo "
        <div class='col-sm-2 col-6'>
            <div class='card avtivity-card bg-light'>
                <input type='checkbox' name='sub_sub_SectorsOf".$sub_sectorId."[]' value='".$gSFAPResult['sub_sub_sector_id']."' id='sub_sectorId_".$gSFAPResult['sub_sub_sector_id']."'/>
                <div class='card-body'>
                    <div class='media align-items-center'>
                         <div class='media-body text-center'>
                            <span class='title text-black font-w600'>".$gSFAPResult['sub_sub_sector_name']."</span>
                        </div>
                    </div>
                </div>
                <div class='effect bg-success'></div>
            </div>
        </div>
        ";
    }
}


function getAddSubSectorsForAddProject($projectDataId){

    include("connection.php");
    $gSSFAPQuery = "SELECT * FROM project_sector WHERE projectData_id = $projectDataId";
    $gSSFAPData = mysqli_query($conn,$gSSFAPQuery);
    $i = 0;
    while($gSSFAPResult = mysqli_fetch_assoc($gSSFAPData)){
        echo "
        <div class='accordion__item'>
            <div class='accordion__header' data-toggle='collapse' data-target='#no-gutter_collapse".$i."'>
                <span class='accordion__header--text title text-black fs-22'>Sector ".replaceSectorfromIdToName($gSSFAPResult['sector_id'])."</span>
                <span class='accordion__header--indicator'></span>
            </div>
            <div id='no-gutter_collapse".$i."' class='collapse accordion__body' data-parent='#accordion-three'>
                <div class='accordion__body--text'>
                    <div class='row'>";

                    getSubSectorsForAddProject($gSSFAPResult['id']);

            echo    "</div></div>
            </div>
        </div>";
        $i++;
    
    }
}

function getSubSectorsForAddSubSubSectorsForAddProject($projectSector_Id){
    include("connection.php");
    $gSSSFAPQuery = "SELECT * FROM project_sub_sector WHERE project_sector_id = $projectSector_Id";
    $gSSSFAPData = mysqli_query($conn,$gSSSFAPQuery);
    $k = 0;
    while($gSSSFAPResult = mysqli_fetch_assoc($gSSSFAPData)){
        echo "
        <div class='accordion__item'>
            <div class='accordion__header' data-toggle='collapse' data-target='#no-gutter_collapse".$k."'>
                <span class='accordion__header--text title text-black fs-22'>Sub Sector ".replaceSectorfromIdToName($gSSSFAPResult['sub_sector_id'])."</span>
                <span class='accordion__header--indicator'></span>
            </div>
            <div id='no-gutter_collapse".$k."' class='collapse accordion__body' data-parent='#accordion-three'>
                <div class='accordion__body--text'>
                    <div class='row'>";
                    getSubSubSectorsForAddProject($gSSSFAPResult['id']);
            echo    "</div></div>
            </div>
        </div>";
        $k++;
    }
}

function getSectorsForAddSubSubSectorsForAddProject($projectDataId){

    include("connection.php");
    $gSSFAPQuery = "SELECT * FROM project_sector WHERE projectData_id = $projectDataId";
    $gSSFAPData = mysqli_query($conn,$gSSFAPQuery);
    $i = 0;
    while($gSSFAPResult = mysqli_fetch_assoc($gSSFAPData)){
        echo "<div class='row mb-2'>
            <div class='col-md-12'>
                <h3>Sector ".replaceSectorfromIdToName($gSSFAPResult['sector_id'])."</h3>
            </div>
        </div>";
        echo "<div class='row mb-4'>
        <div class='col-md-12'>";
            getSubSectorsForAddSubSubSectorsForAddProject($gSSFAPResult['id']);
        echo "</div>
            </div>";
        $i++;
    }
}



// functions for Table 

function getLocationsTable(){

    include("connection.php");
    $gLTQuery = "SELECT * FROM location";
    $gLTData = mysqli_query($conn,$gLTQuery);
    while($gLTResult = mysqli_fetch_assoc($gLTData)){
        echo "
        <tr>
        <td>".$gLTResult['location_name']."</td>
        <td>
            <div class='d-flex'>
                <a href='#' class='btn btn-primary shadow btn-xs sharp mr-1'><i class='fa fa-pencil'></i></a>
                <a href='#' class='btn btn-danger shadow btn-xs sharp'><i class='fa fa-trash'></i></a>
            </div>
        </td>
        </tr>";
    }
}

function getSectorTable(){

    include("connection.php");
    $gSTQuery = "SELECT * FROM sector ORDER BY sector_id ASC";
    $gSTData = mysqli_query($conn,$gSTQuery);
    while($gSTResult = mysqli_fetch_assoc($gSTData)){
        echo "
        <tr>
        <td>".$gSTResult['sector_name']."</td>
        <td>
            <div class='d-flex'>
                <a href='#' class='btn btn-primary shadow btn-xs sharp mr-1'><i class='fa fa-pencil'></i></a>
                <a href='#' class='btn btn-danger shadow btn-xs sharp'><i class='fa fa-trash'></i></a>
            </div>
        </td>
        </tr>";
    }
}



?>