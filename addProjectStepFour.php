<?php
$curPpageTitle = "Add Project > Add Sectors > Add Sub Sectors"; 
include("inc/header.php");

$projectDataId = $_GET['projectDataId'];
$getProjectDataQuery = "SELECT * FROM project_data WHERE id = $projectDataId";
$getProjectDataDone = mysqli_query($conn,$getProjectDataQuery);
$getProjectDataResult = mysqli_fetch_assoc($getProjectDataDone);

?>

<style>

.card input {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  cursor: pointer;
}

input[type=checkbox]:checked ~ div {
  background-color: var(--portalGreen);
}

input[type=checkbox]:checked ~ .title {
  color: #ffffff !important;
}
</style>

<div class="row">
<div class="col-6 col-md-2 mb-3">
        <h2 class="font-w600 fs-18">Project Name:<br><span class=" text-black font-w600 fs-32"><?php replaceProjectfromIdToName($getProjectDataResult['project_id']); ?></span></h2>
    </div>
    <div class="col-6 col-md-2 mb-3">
        <h2 class="font-w600 fs-18">Location:<br><span class="text-black font-w600 fs-32"><?php replaceLocationfromIdToName($getProjectDataResult['location_id']); ?></span></h2>
    </div>
</div>

<div class="card">
                            <div class="card-header">Add Sub Sectors</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="i_addSubSectors.php" method="GET">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <div id="accordion-three" class="accordion accordion-no-gutter accordion-header-bg">
                                                    <?php getAddSubSectorsForAddProject($projectDataId); ?>
                                                </div>
                                            </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-12">
                                                        <div class="custom-control custom-checkbox mb-3 check-xs">
                                                            <input type="text" name="projectDataId" value="<?php echo $projectDataId; ?>" required>
                                                            <input type="checkbox" class="custom-control-input" id="denomination1" required>
											                <label class="custom-control-label" for="denomination1">Want to Add Sub Sectors?</label>
										                </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Next Step</button>
                                    </form>
                                </div>
                            </div>
                        </div>

<?php include("inc/footer.php");?>