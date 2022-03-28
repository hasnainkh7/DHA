<?php

$curPpageTitle = "Add Project Data";


$projectDataId = $_GET['projectDataId'];
$userRole = $_GET['userRole'];

if($userRole == 1){
    include("inc/header.php");
}else{
    include("inc/dataCollectorheader.php");
}
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
                                    <form action="i_addprojectData.php" method="POST">
                                        <div class="form">
                                            <input name="projectDataId" type="hidden" value="<?php echo $projectDataId; ?>">
                                            <?php getProjectDenominationsForAddProjectData($projectDataId);?>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Next Step</button>
                                    </form>
                                </div>
                            </div>
                        </div>

<?php include("inc/footer.php");?>