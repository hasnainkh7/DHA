<?php
$curPpageTitle = "Add Project Data"; 
session_start();
if($_SESSION["userData"]['role'] == 1){
    include("inc/header.php");
}elseif ($_SESSION["userData"]['role'] == 2) {
    include("inc/dataCollectorheader.php");
}

$projectId = $_GET['projectId'];
?>

<div class="row">
    <div class="col-6 col-md-2 mb-3">
        <h2 class="font-w600 fs-18">Add Project Data:<br><span class=" text-black font-w600 fs-32">Step <span class="text-primary">02.</span></span></h2>
    </div>
    <div class="col-6 col-md-2 mb-3">
        <h2 class="font-w600 fs-18">Project Name:<br><span class=" text-black font-w600 fs-32"><?php replaceProjectfromIdToName($projectId); ?></span></h2>
    </div>
</div>

<div class="card">
                            <div class="card-header">Select Project Location</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="addprojectDataStepThree.php" method="GET">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Locations</label>
                                                <select class="multi-select" name="projectDataId" placeholder="Please Select Cities">
                                                    <option readonly>Select Location</option>
                                                    <?php getProjectLocationsForAddProjectData($projectId);?>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Next Step</button>
                                    </form>
                                </div>
                            </div>
                        </div>

<?php include("inc/footer.php");?>