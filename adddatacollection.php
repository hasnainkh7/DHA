<?php
$curPpageTitle = "Data Collection Form"; 
include("inc/header.php");
?>
<style>
.form-wizard{
    border: none !important;
}
.sw-theme-default>.nav{
    padding-bottom: 30px !important;
    box-shadow: none !important;
}

.tab-content{
    height: 600px !important;
}

.selectCard{
    border: 1px solid rgba(0, 0, 0, 0.1);
}

#subSectorRowA, #subSectorRowB{
    display: none;
}
.form-control{
    color: black !important;
}
</style>

                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <div class="card-body">
								<div id="smartwizard" class="form-wizard order-create">
									<ul class="nav nav-wizard">
										<li><a class="nav-link" href="#projectDetails"> 
											<span>1</span> 
										</a></li>
										<li><a class="nav-link" href="#sectorDetails">
											<span>2</span>
										</a></li>
										<li><a class="nav-link" href="#subSectorDetails">
											<span>3</span>
										</a></li>
										<li><a class="nav-link" href="#acceptance">
											<span>4</span>
										</a></li>
									</ul>
									<div class="tab-content">
										<div id="projectDetails" class="tab-pane" role="tabpanel">
											<div class="row">
                                                <div class="col-md-12 mb-4">
                                                    <h3>Project Details</h3>
                                                </div>
                                                <div class="col-lg-6 mb-2">
													<div class="form-group">
														<label class="text-label">Date*</label>
														<input type="date" name="date" class="form-control" required value="< ?php echo $currentDate;?>">
													</div>
												</div>
												<div class="col-lg-6 mb-2">
													<div class="form-group">
														<label class="text-label">Select Project*</label>
														<select class="form-control default-select" id="projectname">
                                                            <option>DHA</option>
                                                            <option>Askari</option>
                                                            <option>Malir</option>
                                                        </select>
													</div>
												</div>
                                                <div class="col-lg-6 mb-2">
													<div class="form-group">
														<label class="text-label">Select Project Location*</label>
														<select class="form-control default-select" id="projectname">
                                                            <option>Karachi</option>
                                                            <option>Islamabad</option>
                                                            <option>Lahore</option>
                                                        </select>
													</div>
												</div>
											</div>
										</div>
										<div id="sectorDetails" class="tab-pane" role="tabpanel">
                                            <div class="row">
                                                <div class="col-md-12 mb-4">
                                                    <h3>Sector Details</h3>
                                                </div>
                                                <div class="col-sm-3">
                                                        <div class="card selectCard avtivity-card myCardNow" onclick="bgGreenOnClick()">
                                                            <div class="card-body">
                                                                <div class="media align-items-center">
                                                                    <div class="media-body text-center">
                                                                        <span class="title text-black font-w600 myCardNowSpan">A</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="effect bg-success"></div>
                                                        </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="card selectCard avtivity-card myCardNow" onclick="bgGreenOnClick1()">
                                                        <div class="card-body">
                                                            <div class="media align-items-center">
                                                                <div class="media-body text-center">
                                                                    <span class="myCardNowSpan title text-black font-w600">B</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="effect bg-success"></div>
                                                    </div>
                                            </div>
											</div>

                                            <div class="row" id="subSectorRowA">
                                                <div class="col-md-12 mb-4">
                                                    <h3>Sub Sector Details A</h3>
                                                </div>
                                                <div class="col-sm-3">
                                                        <div class="card selectCard avtivity-card myCardNow">
                                                            <div class="card-body">
                                                                <div class="media align-items-center">
                                                                    <div class="media-body text-center">
                                                                        <span class="title text-black font-w600 myCardNowSpan">AA</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="effect bg-success"></div>
                                                        </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="card selectCard avtivity-card myCardNow">
                                                        <div class="card-body">
                                                            <div class="media align-items-center">
                                                                <div class="media-body text-center">
                                                                    <span class="myCardNowSpan title text-black font-w600">AB</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="effect bg-success"></div>
                                                    </div>
                                                </div>
											</div>

                                            <div class="row" id="subSectorRowB">
                                                <div class="col-md-12 mb-4">
                                                    <h3>Sub Sector Details B</h3>
                                                </div>
                                                <div class="col-sm-3">
                                                        <div class="card selectCard avtivity-card myCardNow">
                                                            <div class="card-body">
                                                                <div class="media align-items-center">
                                                                    <div class="media-body text-center">
                                                                        <span class="title text-black font-w600 myCardNowSpan">BA</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="effect bg-success"></div>
                                                        </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="card selectCard avtivity-card myCardNow">
                                                        <div class="card-body">
                                                            <div class="media align-items-center">
                                                                <div class="media-body text-center">
                                                                    <span class="myCardNowSpan title text-black font-w600">BB</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="effect bg-success"></div>
                                                    </div>
                                                </div>
											</div>
										</div>
										<div id="subSectorDetails" class="tab-pane" role="tabpanel">
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <h2 class="font-w600 fs-16">Sector:<br><span class=" text-black font-w600 fs-32">A</span></h2>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h2 class="font-w600 fs-16">Sub Sector:<br><span class=" text-black font-w600 fs-32">AB</span></h2>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                                <div class="col-md-6 pr-4">
                                                    <div class="row mb-3">
                                                        <div class="col-md-12">
                                                            <p class="text-title text-primary fs-20">Residential</p>
                                                        </div>
                                                    </div>
                                                    <div class="formDiv">
                                                        <div class="row">
                                                            <div class="col-sm-4 mb-2">
                                                                <h4>125 Sq. Yards</h4>
                                                            </div>
                                                            <div class="col-6 col-sm-4 mb-2">
                                                                <div class="form-group">
                                                                    <input class="form-control" placeholder="Min" type="number" name="input1" >
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-sm-4 mb-2">
                                                                <div class="form-group">
                                                                    <input class="form-control" placeholder="Max" type="number" name="input2" id="input2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-4 mb-2">
                                                                <h4>250 Sq. Yards</h4>
                                                            </div>
                                                            <div class="col-6 col-sm-4 mb-2">
                                                                <div class="form-group">
                                                                    <input class="form-control" placeholder="Min" type="number" name="input1" >
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-sm-4 mb-2">
                                                                <div class="form-group">
                                                                    <input class="form-control" placeholder="Max" type="number" name="input2" id="input2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-4 mb-2">
                                                                <h4>300 Sq. Yards</h4>
                                                            </div>
                                                            <div class="col-6 col-sm-4 mb-2">
                                                                <div class="form-group">
                                                                    <input class="form-control" placeholder="Min" type="number" name="input1" >
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-sm-4 mb-2">
                                                                <div class="form-group">
                                                                    <input class="form-control" placeholder="Max" type="number" name="input2" id="input2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-4 mb-2">
                                                                <h4>500 Sq. Yards</h4>
                                                            </div>
                                                            <div class="col-6 col-sm-4 mb-2">
                                                                <div class="form-group">
                                                                    <input class="form-control" placeholder="Min" type="number" name="input1" >
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-sm-4 mb-2">
                                                                <div class="form-group">
                                                                    <input class="form-control" placeholder="Max" type="number" name="input2" id="input2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-4 mb-2">
                                                                <h4>100 Sq. Yards</h4>
                                                            </div>
                                                            <div class="col-6 col-sm-4 mb-2">
                                                                <div class="form-group">
                                                                    <input class="form-control" placeholder="Min" type="number" name="input1" >
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-sm-4 mb-2">
                                                                <div class="form-group">
                                                                    <input class="form-control" placeholder="Max" type="number" name="input2" id="input2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row mb-3">
                                                        <div class="col-md-12">
                                                            <p class="text-title text-primary fs-20">Commercial</p>
                                                        </div>
                                                    </div>
                                                    <div class="formDiv">
                                                        <div class="row">
                                                            <div class="col-sm-4 mb-2">
                                                                <h4>100 Sq. Yards</h4>
                                                            </div>
                                                            <div class="col-6 col-sm-4 mb-2">
                                                                <div class="form-group">
                                                                    <input class="form-control" placeholder="Min" type="number" name="input1" >
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-sm-4 mb-2">
                                                                <div class="form-group">
                                                                    <input class="form-control" placeholder="Max" type="number" name="input2" id="input2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-4 mb-2">
                                                                <h4>200 Sq. Yards</h4>
                                                            </div>
                                                            <div class="col-6 col-sm-4 mb-2">
                                                                <div class="form-group">
                                                                    <input class="form-control" placeholder="Min" type="number" name="input1" >
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-sm-4 mb-2">
                                                                <div class="form-group">
                                                                    <input class="form-control" placeholder="Max" type="number" name="input2" id="input2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
										</div>
										<div id="acceptance" class="tab-pane" role="tabpanel">
											
											<div class="row">
												<div class="col-12">
													<div class="skip-email text-center">
														<p style="padding: 0px 200px;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam laborum natus fugiat nisi! Assumenda, minima? Quos nam cupiditate rem, sapiente, corrupti maxime quas perspiciatis distinctio veritatis deserunt possimus excepturi aliquid?</p>
														<div class="custom-control custom-checkbox mb-3 checkbox-success">
                                                            <input type="checkbox" class="custom-control-input" id="customCheckBox3" required>
                                                            <label class="custom-control-label" for="customCheckBox3">I Accept terms and conditions</label>
                                                        </div>
                                                        <button class="btn btn-lg btn-primary">Submit</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
                </div>


<script>

function bgGreenOnClick(){
   var element = document.getElementsByClassName("myCardNow")[0];
   var elementSpan = document.getElementsByClassName("myCardNowSpan")[0];

        if(element.classList.contains("bg-primary")){
            element.classList.remove("bg-primary");
            elementSpan.classList.add("text-black");
            elementSpan.classList.remove("text-white");

            document.getElementById("subSectorRowA").style.display = "none";
        }else{
            element.classList.add("bg-primary");
            elementSpan.classList.add("text-white");
            elementSpan.classList.remove("text-black");

            document.getElementById("subSectorRowA").style.display = "flex";
        }
      
}
function bgGreenOnClick1(){
   var element = document.getElementsByClassName("myCardNow")[1];
   var elementSpan = document.getElementsByClassName("myCardNowSpan")[1];

        if(element.classList.contains("bg-primary")){
            element.classList.remove("bg-primary");
            elementSpan.classList.add("text-black");
            elementSpan.classList.remove("text-white");

            document.getElementById("subSectorRowB").style.display = "none";
        }else{
            element.classList.add("bg-primary");
            elementSpan.classList.add("text-white");
            elementSpan.classList.remove("text-black");

            document.getElementById("subSectorRowB").style.display = "flex";
        }
      
}



</script>
<?php include("inc/footer.php");?>