<?php
$curPpageTitle = "Add Denominations"; 
include("inc/header.php");
?>

<div class="card">
                            <div class="card-header">Add New Denominations</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>

                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Denomination</label>
                                                <input type="number" class="form-control" placeholder="Enter Denominations">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Project</label>
                                                    <select class="dropdown-groups">
                                                        <optgroup label="DHA">
                                                            <option>DHA - Karachi</option>
                                                            <option>DHA - Islamabad</option>
                                                            <option>DHA - Lahore</option>
                                                        </optgroup>
                                                        <optgroup label="Askari">
                                                            <option>Askari - Karachi</option>
                                                            <option>Askari - Islamabad</option>
                                                            <option>Askari - Lahore</option>
                                                        </optgroup>
                                                    </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Status</label>
                                                    <select class="dropdown-groups">
                                                            <option>Plot</option>
                                                            <option>File</option>
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
