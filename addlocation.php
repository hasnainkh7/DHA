<?php
$curPpageTitle = "Add Location"; 
include("inc/header.php");
?>

<div class="card">
                            <div class="card-header">Add New Location</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="i_addlocation.php" method="POST">

                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Location Name</label>
                                                <input type="text" class="form-control" name="location" placeholder="Enter Location Name">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Add Location</button>
                                    </form>
                                </div>
                            </div>
                        </div>

<?php include("inc/footer.php");?>