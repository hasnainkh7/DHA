<?php
$curPpageTitle = "Add Project Data"; 
include("inc/header.php");
?>

<div class="row">
    <div class="col-6 col-md-2 mb-3">
        <h2 class="font-w600 fs-18">Add Project Data:<br><span class=" text-black font-w600 fs-32">Step <span class="text-primary">01.</span></span></h2>
    </div>
</div>

<div class="card">
                            <div class="card-header">Select Project</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="addprojectDataStepTwo.php" method="GET">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Projects</label>
                                                <select class="multi-select" name="projectId" placeholder="Please Select Cities">
                                                    <option readonly>Select Project</option>
                                                    <?php getProjectsSelect();?>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Next Step</button>
                                    </form>
                                </div>
                            </div>
                        </div>

<?php include("inc/footer.php");?>