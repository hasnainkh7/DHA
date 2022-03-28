<?php
$curPpageTitle = "Add Denominations"; 
include("inc/header.php");
?>

<div class="card">
                            <div class="card-header">Add New Denominations</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST" action="i_adddenomination.php">

                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Denomination</label>
                                                <input type="number" class="form-control" name="denomination" placeholder="Enter Denominations">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Plot Type</label>
                                                    <select class="dropdown-groups" name="plotType">
                                                            <?php getPlotTypeSelect(); ?>
                                                    </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Unit</label>
                                                    <select class="dropdown-groups" name="unit">
                                                            <?php getUnitSelect(); ?>
                                                    </select>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Add Sector</button>
                                    </form>
                                </div>
                            </div>
                        </div>
<script>

</script>                        
<?php include("inc/footer.php");?>
