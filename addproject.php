<?php
$curPpageTitle = "Add Project"; 
include("inc/header.php");
?>

<div class="card">
                            <div class="card-header">Add New Project</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="addProjectStepTwo.php" method="GET">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Project Name</label>
                                                <input type="text" class="form-control" name="projectName" placeholder="Enter Project Name" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Location</label>
                                                <select id="single-select">
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