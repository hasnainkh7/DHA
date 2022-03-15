<?php
$curPpageTitle = "Project Data > Sector > Sub Sector > Sub Sub Sector"; 
include("inc/header.php");

$projectDataId = $_GET['projectData_id'];
$SectorId = $_GET['SectorId'];
$projectSubSectorId = $_GET['projectSubSectorId'];
$SubSectorId = $_GET['SubSectorId'];
$subSubSectorId = $_GET['subSubSectorId'];

$getProjectDataQuery = "SELECT * FROM `project_data` WHERE id = $projectDataId";
$getProjectDataData = mysqli_query($conn,$getProjectDataQuery);
$getProjectDataResult = mysqli_fetch_assoc($getProjectDataData);

?>



<div class="row mt-4">

    <div class="col-6 col-md-2 mb-4">
        <h2 class="font-w600 fs-18">Project Name:<br><span class=" text-black font-w600 fs-32"><?php replaceProjectfromIdToName($getProjectDataResult['project_id']); ?></span></h2>
    </div>
    <div class="col-6 col-md-2 mb-3">
        <h2 class="font-w600 fs-18">Location:<br><span class="text-black font-w600 fs-32"><?php echo replaceLocationfromIdToName($getProjectDataResult['location_id']); ?></span></h2>
    </div>
    <div class="col-6 col-md-2 mb-3">
        <h2 class="font-w600 fs-18">Sector:<br><span class="text-black font-w600 fs-32"><?php echo replaceSectorfromIdToName($SectorId); ?></span></h2>
    </div>
    <div class="col-6 col-md-2 mb-3">
        <h2 class="font-w600 fs-18">Sub Sector:<br><span class="text-black font-w600 fs-32"><?php echo replaceSubSectorfromIdToName($SubSectorId); ?></span></h2>
    </div>
    <div class="col-6 col-md-2 mb-3">
        <h2 class="font-w600 fs-18">Sub Sub Sector:<br><span class="text-black font-w600 fs-32"><?php echo replaceSubSubSectorfromIdToName($subSubSectorId); ?></span></h2>
    </div>
    <div class="col-6 col-md-2 text-right mb-3">
        <p><strong>Last Updated:</strong><br> 12 Feb 2022</p>
    </div>

</div>

<?php getPlotTypeDenomonationResTable($subSubSectorId);?>
<?php include("inc/footer.php");?>