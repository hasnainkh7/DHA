<?php

function replaceProjectfromIdToName($projectId){
    include("connection.php");
    $gPNQuery = "SELECT * FROM projects WHERE project_id = $projectId";
    $gPNData = mysqli_query($conn,$gPNQuery);
    $gPNResult = mysqli_fetch_assoc($gPNData);

    echo $gPNResult['project_name'];
}

function replaceRolefromIdToName($roleId){
    include("connection.php");
    if($roleId == 1){
        echo "Admin";
    }elseif ($roleId == 2) {
        echo "Data Provider";
    }

}


function replaceUnitfromIdToName($unitId){
    include("connection.php");
    $gSNQuery = "SELECT * FROM units WHERE id = $unitId";
    $gSNData = mysqli_query($conn,$gSNQuery);
    $gSNResult = mysqli_fetch_assoc($gSNData);

    return $gSNResult['unit_name'];
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

    return $gSNResult['sub_sub_sector_name'];
}

function replaceLocationfromIdToName($locationId){
    include("connection.php");
    $gLNQuery = "SELECT * FROM location WHERE location_id = $locationId";
    $gLNData = mysqli_query($conn,$gLNQuery);
    $gLNResult = mysqli_fetch_assoc($gLNData);

    return $gLNResult['location_name'];
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

function getSubSectorsForAddSubSubSectorsForAddProject($projectSectorDataId){
    include("connection.php");
    $gSSSFAPQuery = "SELECT * FROM project_sub_sector WHERE project_sector_id = $projectSectorDataId";
    $gSSSFAPData = mysqli_query($conn,$gSSSFAPQuery);
    $l = rand(99,99999);
    while($gSSSFAPResult = mysqli_fetch_assoc($gSSSFAPData)){
        echo "
        <div class='accordion__item'>
            <div class='accordion__header' data-toggle='collapse' data-target='#no-gutter_collapse".$l."'>
                <span class='accordion__header--text title text-black fs-22'>Sub Sector ".replaceSUBSectorfromIdToName($gSSSFAPResult['sub_sector_id'])."</span>
                <span class='accordion__header--indicator'></span>
            </div>
            <div id='no-gutter_collapse".$l."' class='collapse accordion__body' data-parent='#accordion-three'>
                <div class='accordion__body--text'>
                    <div class='row'>
                    ";
                    getSubSubSectorsForAddProject($gSSSFAPResult['id']);

            echo    "</div></div>
            </div>
        </div>";
        $l++;
    }

}


function getSectorsForAddSubSubSectorsForAddProject($projectDataId){

    include("connection.php");
    $gSSFAPQuery = "SELECT * FROM project_sector WHERE projectData_id = $projectDataId";
    $gSSFAPData = mysqli_query($conn,$gSSFAPQuery);
    $i = rand(99,99999);
    while($gSSFAPResult = mysqli_fetch_assoc($gSSFAPData)){
        echo "<div class='row mb-2'>
            <div class='col-md-12'>
                <h3>Sector ".replaceSectorfromIdToName($gSSFAPResult['sector_id'])."</h3>
            </div>
        </div>";
        echo "<div class='row mb-4'>
        <div class='col-md-12'>
            <div id='accordion-three' class='accordion accordion-no-gutter accordion-header-bg'>
        ";
            getSubSectorsForAddSubSubSectorsForAddProject($gSSFAPResult['id']);
        echo "</div></div>
            </div>";
        $i++;
    }
}

function getDenominationsValuesForAddProject($denominationTypeId,$projectSubSubSectorDataId){
    include("connection.php");
    $gDVQuery = "SELECT * FROM plot_denomination WHERE plot_type = $denominationTypeId";
    $gDVData = mysqli_query($conn,$gDVQuery);
    $o = rand(99,999);
    echo "<div class='row ml-2'>";
    while($gDVResult = mysqli_fetch_assoc($gDVData)){
        echo "
        <div class='col-md-3'>
            <div class='custom-control custom-checkbox mb-3 check-xs'>
				<input type='checkbox' name='denominationValueOfSubSubSector".$projectSubSubSectorDataId."[]' value='".$gDVResult['plot_den_id']."' class='custom-control-input' id='denominationvalue".$o."'>
				<label class='custom-control-label' for='denominationvalue".$o."' >".$gDVResult['plot_den']." ".replaceUnitfromIdToName($gDVResult['unit'])."</label>
			</div>
        </div>";

        $o++;
    }

    echo "</div>";

}

function getDenominationsTypesForAddProject($projectSubSubSectorDataId){
    include("connection.php");
    $gPTQuery = "SELECT * FROM plot_type";
    $gPTDone = mysqli_query($conn,$gPTQuery);

    echo "
    <div class='row ml-2'>
        <div class='col-md-12'>
            <div class='row'>";
    while($gPTResult = mysqli_fetch_assoc($gPTDone)){
        echo "
        <div class='col-md-6'>
            <h3 class='fs-16'>".$gPTResult['plot_type']."</h3>
        ";
            getDenominationsValuesForAddProject($gPTResult['id'],$projectSubSubSectorDataId);

        echo "</div>";
    }

    echo "
            </div>
        </div>
    </div>
        ";
}

function getDenominationsSubSubSectorsForAddProject($projectSubSubSectorDataId){
    include("connection.php");
    $gSSFAPQuery = "SELECT * FROM project_sub_sub_sector WHERE project_sub_sector_id = $projectSubSubSectorDataId";
    $gSSFAPData = mysqli_query($conn,$gSSFAPQuery);
    while($gSSFAPResult = mysqli_fetch_assoc($gSSFAPData)){
        echo "
        <div class='row ml-2'>
            <div class='col-md-12'>
                <h3 class='fs-20'>Sub Sub Sector ".replaceSubSubSectorfromIdToName($gSSFAPResult['sub_sub_sector_id'])."</h3>
        ";
        getDenominationsTypesForAddProject($gSSFAPResult['id']);
        echo "
        </div> 
        </div>";
    }
}

function getDenominationsSubSectorsForAddProject($projectSectorDataId){
    include("connection.php");
    $gSSFAPQuery = "SELECT * FROM project_sub_sector WHERE project_sector_id = $projectSectorDataId";
    $gSSFAPData = mysqli_query($conn,$gSSFAPQuery);
    while($gSSFAPResult = mysqli_fetch_assoc($gSSFAPData)){
        echo "
        <div class='row ml-2'>
            <div class='col-md-12 mb-2'>
                <h3 class='fs-22 text-black'>Sub Sector ".replaceSubSectorfromIdToName($gSSFAPResult['sub_sector_id'])."</h3>
        ";

            getDenominationsSubSubSectorsForAddProject($gSSFAPResult['id']);
        echo "
        </div>
        </div>
        ";
    }
}

function getDenominationsSectorsForAddProject($projectDataId){
    include("connection.php");
    $gSSFAPQuery = "SELECT * FROM project_sector WHERE projectData_id = $projectDataId";
    $gSSFAPData = mysqli_query($conn,$gSSFAPQuery);
    while($gSSFAPResult = mysqli_fetch_assoc($gSSFAPData)){
        echo "
        <div class='row mb-4'>
            <div class='col-md-12'>
                <h3 class='text-green fs-28'>Sector ".replaceSectorfromIdToName($gSSFAPResult['sector_id'])."</h3>
        ";
            getDenominationsSubSectorsForAddProject($gSSFAPResult['id']);
        echo "
        </div>
        </div>";
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



// projects data 

function getProjectSubSubSectorsData($projectDataId,$sectorId,$projectSubSectorDataId,$subSectorId){
    include("connection.php");
    $gProLQuery = "SELECT * FROM project_sub_sub_sector WHERE project_sub_sector_id = $projectSubSectorDataId";
    $gProLData = mysqli_query($conn,$gProLQuery);

    while($gProLResult = mysqli_fetch_assoc($gProLData)){
        echo "
        <div class='col-4 col-sm-2'>
                <a href='sssector.php?projectData_id=".$projectDataId."&SectorId=".$sectorId."&projectSubSectorId=".$projectSubSectorDataId."&SubSectorId=".$subSectorId."&subSubSectorId=".$gProLResult['sub_sub_sector_id']."'>
                <div class='card avtivity-card'>
                    <div class='card-body'>
                        <div class='media align-items-center'>
                            <div class='media-body text-center'>
                                <span class='title text-black font-w600'>".replaceSubSubSectorfromIdToName($gProLResult['sub_sub_sector_id'])."</span>
                            </div>
                        </div>
                    </div>
                    <div class='effect bg-success'></div>
                </div>
                </a>
            </div>";
    }

}

function getProjectSubSectorsData($projectSectorDataId,$projectDataId,$sectorId){
    include("connection.php");
    $gProLQuery = "SELECT * FROM project_sub_sector WHERE project_sector_id = $projectSectorDataId";
    $gProLData = mysqli_query($conn,$gProLQuery);

    while($gProLResult = mysqli_fetch_assoc($gProLData)){
        echo "
        <div class='col-4 col-sm-2'>
                <a href='subsectordata.php?projectData_id=".$projectDataId."&SectorId=".$sectorId."&projectSubSectorId=".$gProLResult['id']."&SubSectorId=".$gProLResult['sub_sector_id']."'>
                <div class='card avtivity-card'>
                    <div class='card-body'>
                        <div class='media align-items-center'>
                            <div class='media-body text-center'>
                                <span class='title text-black font-w600'>".replaceSubSectorfromIdToName($gProLResult['sub_sector_id'])."</span>
                            </div>
                        </div>
                    </div>
                    <div class='effect bg-success'></div>
                </div>
                </a>
            </div>";
    }

}

function getProjectSectorsData($projectDataId){
    include("connection.php");
    $gProLQuery = "SELECT * FROM project_sector WHERE projectData_id = $projectDataId";
    $gProLData = mysqli_query($conn,$gProLQuery);

    while($gProLResult = mysqli_fetch_assoc($gProLData)){
        echo "
        <div class='col-4 col-sm-2'>
                <a href='sectordata.php?projectData_id=".$projectDataId."&projectSectorId=".$gProLResult['id']."&SectorId=".$gProLResult['sector_id']."'>
                <div class='card avtivity-card'>
                    <div class='card-body'>
                        <div class='media align-items-center'>
                            <div class='media-body text-center'>
                                <span class='title text-black font-w600'>".replaceSectorfromIdToName($gProLResult['sector_id'])."</span>
                            </div>
                        </div>
                    </div>
                    <div class='effect bg-success'></div>
                </div>
                </a>
            </div>";
    }

}

function getProjectLocationsData($projectId){
    include("connection.php");
    $gProLQuery = "SELECT * FROM project_data WHERE project_id = $projectId";
    $gProLData = mysqli_query($conn,$gProLQuery);

    echo "
    <div class='col-md-12'>
        <div class='row'>"
    ;

    while($gProLResult = mysqli_fetch_assoc($gProLData)){
        echo "
        <div class='col-sm-3'>
                <a href='projectdata.php?projectDataId=".$gProLResult['id']."'>
                <div class='card avtivity-card'>
                    <div class='card-body'>
                        <div class='media align-items-center'>
                            <div class='media-body text-center'>
                                <span class='title text-black font-w600'>".replaceLocationfromIdToName($gProLResult['location_id'])."</span>
                            </div>
                        </div>
                    </div>
                    <div class='effect bg-success'></div>
                </div>
                </a>
            </div>";
    }

    echo "</div>
    </div>";
}

function getProjectData(){
    include("connection.php");
    $gProQuery = "SELECT * FROM projects";
    $gProData = mysqli_query($conn,$gProQuery);
    while($gProResult = mysqli_fetch_assoc($gProData)){
        echo "
        <div class='row'>
            <div class='col-md-8 mb-3'>
                <h2 class='text-black font-w600 fs-32'>".$gProResult['project_name']."</h2>
                <p><strong>Last Updated:</strong> 12 Feb 2022</p>
            </div>
            <div class='col-md-4 text-right mb-3'>
                <div class='d-inline'>
			        <a href='#' class='btn btn-primary shadow btn-xs sharp mr-1'><i class='fa fa-pencil'></i></a>
			        <a href='#' class='btn btn-danger shadow btn-xs sharp'><i class='fa fa-trash'></i></a>
		        </div>
            </div>
        ";
            getProjectLocationsData($gProResult['project_id']);
        echo "</div>";
    }
}


?>