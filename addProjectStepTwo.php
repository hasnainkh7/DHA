<?php
$curPpageTitle = "Select Location"; 
include("inc/header.php");
$projectId = $_GET['projectID'];

?>
<div class="row">
<div class="col-6 col-md-2 mb-3">
        <h2 class="font-w600 fs-18">Project Name:<br><span class=" text-black font-w600 fs-32"><?php replaceProjectfromIdToName($projectId); ?></span></h2>
    </div>
</div>

<div class="card">
                            <div class="card-header">Select Location to Add Project Data</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="addProjectStepThree.php" method="GET">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Location</label>
                                                <input type="hidden" name="projectId" value="<?php echo $projectId; ?>">
                                                <select name="location" id="single-select">
                                                    <?php getProjectsLocationsSelect($projectId);?>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Next Step</button>
                                    </form>
                                </div>
                            </div>
                        </div>

<?php include("inc/footer.php");?>