<?php
$curPpageTitle = "Add Project"; 
include("inc/header.php");
?>

<div class="row">
    <div class="col-6 col-md-2 mb-3">
        <h2 class="font-w600 fs-18">Add Project:<br><span class=" text-black font-w600 fs-32">Step <span class="text-primary">01.</span></span></h2>
    </div>
</div>

<div class="card">
                            <div class="card-header">Add New Project</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="i_addProject.php" method="GET">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Project Name</label>
                                                <input type="text" class="form-control" name="projectName" placeholder="Enter Project Name" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Location</label>
                                                <select class="multi-select" name="locations[]" multiple="multiple" placeholder="Please Slect Cities">
                                                    <?php getLocationsSelect();?>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Next Step</button>
                                    </form>
                                </div>
                            </div>
                        </div>

<?php include("inc/footer.php");?>