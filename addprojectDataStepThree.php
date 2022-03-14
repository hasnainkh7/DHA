<?php
$curPpageTitle = "Add Project Data"; 
include("inc/header.php");

$projectDataId = $_GET['projectDataId'];
?>

<div class="row">
    <div class="col-6 col-md-2 mb-3">
        <h2 class="font-w600 fs-18">Add Project Data:<br><span class=" text-black font-w600 fs-32">Step <span class="text-primary">03.</span></span></h2>
    </div>
    <div class="col-6 col-md-2 mb-3">
        <h2 class="font-w600 fs-18">Project Name:<br><span class=" text-black font-w600 fs-32"><?php replaceProjectfromDataIdToName($projectDataId); ?></span></h2>
    </div>
</div>

<div class="card">
                            <div class="card-header">Add Pricings</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="addprojectDataStepThree.php" method="GET">
                                        <div class="form">
                                            <?php getProjectDenominationsForAddProjectData($projectDataId);?>

                                            
                                        </div>
                                        <button type="submit" class="btn btn-primary">Next Step</button>
                                    </form>
                                </div>
                            </div>
                        </div>

<?php include("inc/footer.php");?>