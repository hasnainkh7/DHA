<?php
$curPpageTitle = "Add Project > Sectors > Sub Sectors > Sub Sub Sectors > Denominations"; 
include("inc/header.php");

$projectDataId = $_GET['projectDataId'];
?>


<div class="row">
    <div class="col-6 col-md-2 mb-3">
        <h2 class="font-w600 fs-18">Add Project:<br><span class=" text-black font-w600 fs-32">Step <span class="text-primary">06.</span></span></h2>
    </div>
    <div class="col-6 col-md-2 mb-3">
        <h2 class="font-w600 fs-18">Project Name:<br><span class=" text-black font-w600 fs-32">DHA</span></h2>
    </div>
    <div class="col-6 col-md-2 mb-3">
        <h2 class="font-w600 fs-18">Location:<br><span class="text-black font-w600 fs-32">Islamabad</span></h2>
    </div>
</div>
<div class="card">
                            <div class="card-header">Add Denominations</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="i_addProjectDenomination.php" method="GET">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <input name="projectDataId" type="hidden" value="<?php echo $projectDataId;?>">
                                                <?php getDenominationsSectorsForAddProject($projectDataId); ?>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>

<?php include("inc/footer.php");?>