<?php

function replaceProjectfromIdToName($projectId){
    include("connection.php");
    $gPNQuery = "SELECT * FROM projects WHERE project_id = $projectId";
    $gPNData = mysqli_query($conn,$gPNQuery);
    $gPNResult = mysqli_fetch_assoc($gPNData);

    echo $gPNResult['project_name'];
}

function replaceProjectfromDataIdToName($projectDataId){
    include("connection.php");

    $gPDQuery = "SELECT * FROM `project_data` WHERE id = $projectDataId";
    $gPDData = mysqli_query($conn,$gPDQuery);
    $gPDResult = mysqli_fetch_assoc($gPDData);
    echo replaceProjectfromIdToName($gPDResult['project_id']);

}

function replacePlotStatusfromDataIdToName($plotStatusId){
    include("connection.php");

    $gPSQuery = "SELECT * FROM `status` WHERE status_id = $plotStatusId";
    $gPSData = mysqli_query($conn,$gPSQuery);
    $gPSResult = mysqli_fetch_assoc($gPSData);
    return $gPSResult['status'];

}

function replaceDenominationfromIdToName($plotDenoId){

    include("connection.php");
    $gPDQuery = "SELECT * FROM plot_denomination WHERE plot_den_id = $plotDenoId";
    $gPDData = mysqli_query($conn,$gPDQuery);
    $gPDResult = mysqli_fetch_assoc($gPDData);

    return $gPDResult['plot_den'];
}

function replaceDenominationUnitfromIdToName($plotDenoId){
    include("connection.php");
    $gPDQuery = "SELECT * FROM plot_denomination WHERE plot_den_id = $plotDenoId";
    $gPDData = mysqli_query($conn,$gPDQuery);
    $gPDResult = mysqli_fetch_assoc($gPDData);
    $denoId = $gPDResult['unit'];
    $gUNQuery = "SELECT `id`, `unit_name` FROM `units` WHERE id = $denoId";
    $gUNData = mysqli_query($conn,$gUNQuery);
    $gUNResult = mysqli_fetch_assoc($gUNData);

    return $gUNResult['unit_name'];
}

function replaceDenominationStatusfromIdToName($plotDenoId){
    include("connection.php");
    $gPDQuery = "SELECT * FROM plot_denomination WHERE plot_den_id = $plotDenoId";
    $gPDData = mysqli_query($conn,$gPDQuery);
    $gPDResult = mysqli_fetch_assoc($gPDData);
    $plotTypeId = $gPDResult['plot_type'];
    $gUNQuery = "SELECT * FROM `status` WHERE status_id = $plotTypeId";
    $gUNData = mysqli_query($conn,$gUNQuery);
    $gUNResult = mysqli_fetch_assoc($gUNData);

    return $gUNResult['plot_type'];
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
        echo "<option value=".$gPSResult['project_id'].">
        ".$gPSResult['project_name']."
        </option>";
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
        <div class='col-sm-2 col-6'>
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
    $one = 1;
    $gSSFAPQuery = "SELECT * FROM project_sector WHERE projectData_id = $projectDataId AND has_sub_sector = 1";
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


function getDenominationStatusToggle($projectSubSubSectorDataId){

    include("connection.php");
    $gSTQuery = "SELECT * FROM `status`";
    $gSTData = mysqli_query($conn,$gSTQuery);

    echo "<div class='btn-group btn-group-toggle mb-3' data-toggle='buttons'>";
    while($gSTResult = mysqli_fetch_assoc($gSTData)){
    echo "
                <label class='btn btn-xs btn-primary' style='margin-right: 2px;'>
                    <input type='radio' name='statusOf".$projectSubSubSectorDataId."[]' value='".$gSTResult['status_id']."' id='".$gSTResult['status_id']."' autocomplete='off'> ".$gSTResult['status']."
                </label>
                ";
    }
    echo "</div>";
}
function getDenominationsValuesForAddProject($denominationTypeId,$projectSubSubSectorDataId){
    include("connection.php");
    $gDVQuery = "SELECT * FROM plot_denomination WHERE plot_type = $denominationTypeId";
    $gDVData = mysqli_query($conn,$gDVQuery);
    $o = rand(564,9999999);
    echo "<div class='row ml-2'>";
    while($gDVResult = mysqli_fetch_assoc($gDVData)){

        $l = rand(564,9999999);
        echo "
        <div class='col-md-3'>
            <div class='custom-control custom-checkbox mb-2 check-xs'>
                <input type='checkbox' name='denominationValueOfSubSubSector".$projectSubSubSectorDataId."[]' value='".$gDVResult['plot_den_id']."' class='custom-control-input' id='denominationvalue".$o.$denominationTypeId.$l."'>
				<label class='custom-control-label' for='denominationvalue".$o.$denominationTypeId.$l."' >".$gDVResult['plot_den']." ".replaceUnitfromIdToName($gDVResult['unit'])."</label>
			</div>";
           
            getDenominationStatusToggle($projectSubSubSectorDataId);
        echo "
        </div>";

        $o +=rand(99,999);
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
            <div class='pt-2 pb-2 col-md-12'>
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

            getDenominationsTypesForAddProject($gSSFAPResult['id']);
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
            // getDenominationsTypesForAddProject($gSSFAPResult['id']);
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

    if(mysqli_num_rows($gProLData) != 0){
        while($gProLResult = mysqli_fetch_assoc($gProLData)){
            echo "
            <div class='col-4 col-sm-2'>
                    <a href='sssector.php?projectData_id=".$projectDataId."&SectorId=".$sectorId."&projectSubSectorId=".$projectSubSectorDataId."&SubSectorId=".$subSectorId."&subSubSectorId=".$gProLResult['sub_sub_sector_id']."&projectSubSubSectorId=".$gProLResult['id']."'>
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
    }else{
        echo "
        <div class='col-12 col-sm-12'>
                <p>This Sector has No Sub Sub Sectors<p>
            </div>";
    }

}

function getProjectSubSectorsData($projectSectorDataId,$projectDataId,$sectorId){
    include("connection.php");
    $gProLQuery = "SELECT * FROM project_sub_sector WHERE project_sector_id = $projectSectorDataId";
    $gProLData = mysqli_query($conn,$gProLQuery);

    if(mysqli_num_rows($gProLData) != 0){
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
    }else{
        echo "
        <div class='col-12 col-sm-12'>
                <p>This Sector has No Sub Sectors<p>
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

function getPlotTypeDenomonationByTypeTable($dataOf,$plotTypeID){
    include("connection.php");
    $gPTDQuery = "SELECT * FROM plot_denomination WHERE plot_type = $plotTypeID";
    $gPTDDone = mysqli_query($conn,$gPTDQuery);

    while($gPTDResult = mysqli_fetch_assoc($gPTDDone)){
        echo "<h3>".$gPTDResult['plot_den_id']."</h3>";
    }

}

function getPlotTypeDenomonationResTable($dataOf){
    include("connection.php");
    $gPTQuery = "SELECT * FROM plot_type";
    $gPTDone = mysqli_query($conn,$gPTQuery);

    while($gPTResult = mysqli_fetch_assoc($gPTDone)){
        echo "
        <div class='row'>
    <div class='col-md-12 mt-4'>
        <div class='row mb-2'>
            <div class='col-md-12'>
                <h2 class='text-primary font-w600 fs-28 '>".$gPTResult['plot_type']."</h2>
            </div>
        </div>
		<div class='row'>
            <div class='col-lg-12'>
                <div class='card'>
                    <div class='card-body'>
                        <div class='table-responsive'>
                            <table class='table text-center denoTable'>
                                <thead class='denoTableH'>
                                    <tr class='text-black'>";

                                    getProjectSectorDenomonationTable($dataOf,$gPTResult['id']);

        echo "</tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
        </div>
    </div>
</div>";
    }
}

function getProjectSectorDenomonationTable($dataOf,$plotTypeID){

    include("connection.php");

    $getDenoQuery = "SELECT * FROM `plot_denomination` WHERE plot_type = $plotTypeID";
    $getDenoDone = mysqli_query($conn,$getDenoQuery);

    $denoIdByType[] = "";

    $l = 0;
    while($getDenoResult = mysqli_fetch_assoc($getDenoDone)){
        $denoIdByType[$l] = $getDenoResult['plot_den_id'];
        $l++;
    }

    $e = 1;
    $orQuery = "data_of = ".$dataOf." AND denomination_id = 1";
    while($e <= count($denoIdByType)-1){
        $orQuery = $orQuery." OR data_of = ".$dataOf." AND denomination_id = ".$denoIdByType[$e];
        $e++;
    }
    
    $gProSectorDenominationTableQuery = "SELECT * FROM `project_denominations` WHERE $orQuery";
    $gProSectorDenominationTableData = mysqli_query($conn,$gProSectorDenominationTableQuery);
    $DenoIdArray[] = "";
    $j = 0;

    if(mysqli_num_rows($gProSectorDenominationTableData)!=0){
        while($gProSectorDenominationTableResult = mysqli_fetch_assoc($gProSectorDenominationTableData)){
            echo "
            <th>".replaceDenominationfromIdToName($gProSectorDenominationTableResult['denomination_id'])." ".replaceDenominationUnitfromIdToName($gProSectorDenominationTableResult['denomination_id'])." <span class='badge light badge-success'>".replacePlotStatusfromDataIdToName($gProSectorDenominationTableResult['plot_status'])."</span</th>
            ";
            $DenoIdArray[$j] = $gProSectorDenominationTableResult['id'];
            $j++;
        }
        
        
        $i = 0;
        echo "<tr>";

        while($i<count($DenoIdArray)){
    
            $donoId = $DenoIdArray[$i];
            $gDenoPriceQuery = "SELECT * FROM `project_pricings` WHERE `project_deno_id` = $donoId";
            $gDenoPriceDone = mysqli_query($conn,$gDenoPriceQuery);
    
            while($gDenoPriceResult = mysqli_fetch_assoc($gDenoPriceDone)){
                echo "<td>
                <table class='table text-center'>
                    <tr>
                        <th>Min</th>
                        <th>Max</th>
                    </tr>
                    <tr>
                        <th>".$gDenoPriceResult['min']." Lakh</th>
                        <th>".$gDenoPriceResult['max']." Lakh</th>
                    </tr>
                </table>
        
                </td>";
            }
            $i++;
        }
        echo "</tr>";
    }else{
        echo "
            <p>There is no Data</p>";
    }
    
    
}


function getProjectLocationsForAddProjectData($projectId){
    include("connection.php");
    $gLSQuery = "SELECT * FROM project_data WHERE project_id = $projectId";
    $gLSData = mysqli_query($conn,$gLSQuery);
    while($gLSResult = mysqli_fetch_assoc($gLSData)){
        echo "<option value='".$gLSResult['id']."'>".replaceLocationfromIdToName($gLSResult['location_id'])."</option>";
    }
}

function getDenominationsForAddProjectData($dataOf,$plotDenID){

    include("connection.php");
    $gDBTQuery = "SELECT * FROM `project_denominations` WHERE `data_of` = $dataOf AND `denomination_id` = '$plotDenID'";
    $gDDone = mysqli_query($conn,$gDBTQuery);

    if(mysqli_num_rows($gDDone) != 0 ){
        while($gDResult = mysqli_fetch_assoc($gDDone)){
            echo "
            <style>
            #myNoDataCol".$plotDenID.$dataOf."{
                background-color:red;
                display:none;
            }
            </style>
            <div class='row ml-2 mb-3'>
            <div class='col-md-3'>
                <h3 class='fs-18'>".replaceDenominationfromIdToName($gDResult['denomination_id'])." ".replaceDenominationUnitfromIdToName($gDResult['denomination_id'])."<h3>
            </div>
            <div class='col-md-4'>
                <input type='number' name='minDenoOf".$dataOf.$gDResult['denomination_id']."' class='form-control' placeholder='Min' required>
            </div>
            <div class='col-md-4'>
                <input type='number' name='maxDenoOf".$dataOf.$gDResult['denomination_id']."' class='form-control' placeholder='Max' required>
            </div>
        </div>";
        }
    }
    
    
}

function getPlotTypeForAddProjectData($dataOf){
    include("connection.php");
    $gPTQuery = "SELECT * FROM plot_type";
    $gPTDone = mysqli_query($conn,$gPTQuery);
    echo "
    <div class='row mb-2'>";
    while($gPTResult = mysqli_fetch_assoc($gPTDone)){
        echo "<div class='col-md-6'>
            <h4 class='text-primary'>".$gPTResult['plot_type']."</h4>";
        $plotId = $gPTResult['id'];

        $gPTDQuery = "SELECT * FROM plot_denomination WHERE plot_type = $plotId";
        $gPTDDone = mysqli_query($conn,$gPTDQuery);

        while($gPTDResut = mysqli_fetch_assoc($gPTDDone)){
            $plotDenID = $gPTDResut['plot_den_id'];
            getDenominationsForAddProjectData($dataOf,$plotDenID);
        }

        echo "</div>";

    }
    echo "</div>
    ";
    
}

function getProjectSubSubSectorForAddProjectData($projectSubSubSectorDataId){
    include("connection.php");
    $gPSSQuery = "SELECT * FROM project_sub_sub_sector WHERE project_sub_sector_id = $projectSubSubSectorDataId";
    $gPSSDone = mysqli_query($conn,$gPSSQuery);
    while($gPSSResult = mysqli_fetch_assoc($gPSSDone)){
        echo "
        <div class='row ml-4'>
             <div class='col-lg-12'>
                 <h3 class='text-title text-black fw-900 fs-22'>Sub Sub Sector: ".replaceSubSectorfromIdToName($gPSSResult['sub_sub_sector_id'])."</h3>";
                 getPlotTypeForAddProjectData($gPSSResult['id']);
                 getProjectSubSubSectorForAddProjectData($gPSSResult['id']);
         echo "</div>
         </div>";
    }
}

function getProjectSubSectorForAddProjectData($projectSubSectorDataId){
    include("connection.php");
    $gPSSQuery = "SELECT * FROM project_sub_sector WHERE project_sector_id = $projectSubSectorDataId";
    $gPSSDone = mysqli_query($conn,$gPSSQuery);
    while($gPSSResult = mysqli_fetch_assoc($gPSSDone)){
        echo "
        <div class='row ml-4 mb-2'>
             <div class='col-lg-12'>
                 <h3 class='text-title text-black fw-900 fs-24'>Sub Sector: ".replaceSubSectorfromIdToName($gPSSResult['sub_sector_id'])."</h3>";
                 getPlotTypeForAddProjectData($gPSSResult['id']);
                 getProjectSubSubSectorForAddProjectData($gPSSResult['id']);
         echo "</div>
         </div>";
    }
}
function getProjectDenominationsForAddProjectData($projectDataId){
    include("connection.php");
    $gPDQuery = "SELECT * FROM project_sector WHERE projectData_id = $projectDataId";
    $gPDData = mysqli_query($conn,$gPDQuery);
    while($gPDResult = mysqli_fetch_assoc($gPDData)){
       echo "
       <div class='row mb-4'>
            <div class='col-lg-12'>
                <h2 class='text-title text-primary fw-900 fs-26'>Sector: ".replaceSectorfromIdToName($gPDResult['sector_id'])."</h2>";
                getPlotTypeForAddProjectData($gPDResult['id']);
                getProjectSubSectorForAddProjectData($gPDResult['id']);
        echo "</div>
        </div>";
    }
}

?>