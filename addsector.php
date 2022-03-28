<?php
$curPpageTitle = "Add Sector"; 
include("inc/header.php");
?>

<div class="card">
                            <div class="card-header">Add New Sector</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST" action="i_addSector.php">

                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Sector Name</label>
                                                <input type="text" class="form-control" name="sectorName" placeholder="Enter Sector Name">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Add Sector</button>
                                    </form>
                                </div>
                            </div>
                        </div>

<?php include("inc/footer.php");?>