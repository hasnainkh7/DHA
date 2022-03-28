<?php
$curPpageTitle = "Add Plot Type"; 
include("inc/header.php");
?>

<div class="card">
                            <div class="card-header">Add New Plot Type</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="i_addPlotType.php" method="POST">

                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Plot Type</label>
                                                <input type="text" class="form-control" name="plotName" placeholder="Enter Plot Type">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Add Plot Type</button>
                                    </form>
                                </div>
                            </div>
                        </div>

<?php include("inc/footer.php");?>