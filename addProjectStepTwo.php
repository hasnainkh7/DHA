<?php
$curPpageTitle = "Add Project > Add Sectors"; 
include("inc/header.php");
?>

<style>

.card input {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  cursor: pointer;
}

input[type=checkbox]:checked ~ div {
  background-color: var(--portalGreen);
}

input[type=checkbox]:checked ~ .title {
  color: #ffffff !important;
}
</style>

<div class="row">
<div class="col-6 col-md-2 mb-3">
        <h2 class="font-w600 fs-18">Project Name:<br><span class=" text-black font-w600 fs-32">DHA</span></h2>
    </div>
    <div class="col-6 col-md-2 mb-3">
        <h2 class="font-w600 fs-18">Location:<br><span class="text-black font-w600 fs-32">Islamabad</span></h2>
    </div>
</div>

<div class="card">
                            <div class="card-header">Add Sectors</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="addProjectStepThree.php" method="GET">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <div class="row mb-2">
                                                    <div class="col-md-12">
                                                        <label>Sectors</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-2 col-6">
                                                        <div class="card avtivity-card bg-light">
                                                            <input type="checkbox" name="sector1" id="feature1"/>
                                                            <div class="card-body">
                                                                <div class="media align-items-center">
                                                                    <div class="media-body text-center">
                                                                        <span class="title text-black font-w600">A</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="effect bg-success"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2 col-6">
                                                        <div class="card avtivity-card bg-light">
                                                            <input type="checkbox" name="sector2" id="feature1"/>
                                                            <div class="card-body">
                                                                <div class="media align-items-center">
                                                                    <div class="media-body text-center">
                                                                        <span class="title text-black font-w600">B</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="effect bg-success"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2 col-6">
                                                        <div class="card avtivity-card bg-light">
                                                            <input type="checkbox" name="sector3" id="feature1"/>
                                                            <div class="card-body">
                                                                <div class="media align-items-center">
                                                                    <div class="media-body text-center">
                                                                        <span class="title text-black font-w600">C</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="effect bg-success"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-12">
                                                        <div class="custom-control custom-checkbox mb-3 check-xs">
											                <input type="checkbox" class="custom-control-input" id="denomination1" required>
											                <label class="custom-control-label" for="denomination1">Want to Add Sub Sectors?</label>
										                </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Next Step</button>
                                    </form>
                                </div>
                            </div>
                        </div>

<?php include("inc/footer.php");?>