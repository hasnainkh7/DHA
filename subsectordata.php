<?php
$curPpageTitle = "Project Data > Sector Data > Sub Sector Data"; 
include("inc/header.php");

$projectDataId = $_GET['projectData_id'];
$SectorId = $_GET['SectorId'];
$projectSubSectorId = $_GET['projectSubSectorId'];
$SubSectorId = $_GET['SubSectorId'];

$getProjectDataQuery = "SELECT * FROM `project_data` WHERE id = $projectDataId";
$getProjectDataData = mysqli_query($conn,$getProjectDataQuery);
$getProjectDataResult = mysqli_fetch_assoc($getProjectDataData);

?>



<div class="row mt-4">

    <div class="col-6 col-md-2 mb-4">
        <h2 class="font-w600 fs-18">Project Name:<br><span class=" text-black font-w600 fs-32"><?php replaceProjectfromIdToName($getProjectDataResult['project_id']); ?></span></h2>
    </div>
    <div class="col-6 col-md-2 mb-3">
        <h2 class="font-w600 fs-18">Location:<br><span class="text-black font-w600 fs-32"><?php echo replaceLocationfromIdToName($getProjectDataResult['location_id']); ?></span></h2>
    </div>
    <div class="col-6 col-md-2 mb-3">
        <h2 class="font-w600 fs-18">Sector:<br><span class="text-black font-w600 fs-32"><?php echo replaceSectorfromIdToName($SectorId); ?></span></h2>
    </div>
    <div class="col-6 col-md-2 mb-3">
        <h2 class="font-w600 fs-18">Sub Sector:<br><span class="text-black font-w600 fs-32"><?php echo replaceSubSectorfromIdToName($SubSectorId); ?></span></h2>
    </div>
    <div class="col-6 col-md-4 text-right mb-3">
        <p><strong>Last Updated:</strong><br> 12 Feb 2022</p>
    </div>

    <div class="col-md-12 mt-2">

        <div class="row mb-2">
            <div class="col-md-12">
                <h2 class="text-primary font-w600 fs-28 ">Sub Sub Sectors</h2>
            </div>
        </div>
        <div class="row">
            <?php getProjectSubSubSectorsData($projectDataId,$SectorId,$projectSubSectorId,$SubSectorId);  ?>
        </div>
    </div>


</div>

<div class="row">
<div class="col-md-12 mt-4">

<div class="row mb-2">
    <div class="col-md-12">
        <h2 class="text-primary font-w600 fs-28 ">Performance</h2>
    </div>
</div>
<div class="row">
    
    <div class="col-sm-2">
        <div class="widget-stat card">
			<div class="card-body p-4">
				<div class="media ai-icon">
					<span class="mr-2 bgl-danger">
						<!-- <i class="ti-user"></i> -->
						<i class="text-danger fa fa-arrow-down"></i>
					</span>
					<div class="media-body">
						<p class="mb-1">1 Week</p>
						<h4 class="mb-0 fs-18 text-danger font-w600">-9.60%</h4>
					</div>
				</div>
			</div>
		</div>
    </div>

    <div class="col-sm-2">
        <div class="widget-stat card">
			<div class="card-body p-4">
				<div class="media ai-icon">
					<span class="mr-2 bgl-success">
						<!-- <i class="ti-user"></i> -->
						<i class="text-success fa fa-arrow-up"></i>
					</span>
					<div class="media-body">
						<p class="mb-1">2 Weeks</p>
						<h4 class="mb-0 fs-18 text-success font-w600">+3.60%</h4>
					</div>
				</div>
			</div>
		</div>
    </div>

    <div class="col-sm-2">
        <div class="widget-stat card">
			<div class="card-body p-4">
				<div class="media ai-icon">
					<span class="mr-2 bgl-danger">
						<!-- <i class="ti-user"></i> -->
						<i class="text-danger fa fa-arrow-down"></i>
					</span>
					<div class="media-body">
						<p class="mb-1">3 Weeks</p>
						<h4 class="mb-0 fs-18 text-danger font-w600">-3.60%</h4>
					</div>
				</div>
			</div>
		</div>
    </div>

    <div class="col-sm-2">
        <div class="widget-stat card">
			<div class="card-body p-4">
				<div class="media ai-icon">
					<span class="mr-2 bgl-success">
						<!-- <i class="ti-user"></i> -->
						<i class="text-success fa fa-arrow-up"></i>
					</span>
					<div class="media-body">
						<p class="mb-1">1 Month</p>
						<h4 class="mb-0 fs-18 text-success font-w600">+3.60%</h4>
					</div>
				</div>
			</div>
		</div>
    </div>

    <div class="col-sm-2">
        <div class="widget-stat card">
			<div class="card-body p-4">
				<div class="media ai-icon">
					<span class="mr-2 bgl-danger">
						<!-- <i class="ti-user"></i> -->
						<i class="text-danger fa fa-arrow-down"></i>
					</span>
					<div class="media-body">
						<p class="mb-1">3 Months</p>
						<h4 class="mb-0 fs-18 text-danger font-w600">-3.60%</h4>
					</div>
				</div>
			</div>
		</div>
    </div>

    <div class="col-sm-2">
        <div class="widget-stat card">
			<div class="card-body p-4">
				<div class="media ai-icon">
					<span class="mr-2 bgl-success">
						<!-- <i class="ti-user"></i> -->
						<i class="text-success fa fa-arrow-up"></i>
					</span>
					<div class="media-body">
						<p class="mb-1">1 Year</p>
						<h4 class="mb-0 fs-18 text-success font-w600">+3.60%</h4>
					</div>
				</div>
			</div>
		</div>
    </div> 
</div>
</div>
</div>

<div class="row">
    <div class="col-md-12 mt-4">
        <div class="row mb-2">
            <div class="col-md-12">
                <h2 class="text-primary font-w600 fs-28 ">Residential</h2>
                <p>This data is based on One Week Average Performance</p>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead>
                                    <tr class="text-black">
                                        <th>125 Sq. Yards</th>
                                        <th>200 Sq. Yards</th>
                                        <th>250 Sq. Yards</th>
                                        <th>300 Sq. Yards</th>
                                        <th>500 Sq. Yards</th>
                                        <th>1000 Sq. Yards</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-success">Min</th>
                                                            <th class="text-danger">Max</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-success">Rs. 100</td>
                                                            <td class="text-danger">Rs. 400</td>
                                                        </tr>
                                                    </tbody>
                                            </table>
                                        </td>
                                        <td>
                                            <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-success">Min</th>
                                                            <th class="text-danger">Max</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-success">Rs. 100</td>
                                                            <td class="text-danger">Rs. 400</td>
                                                        </tr>
                                                    </tbody>
                                            </table>
                                        </td>
                                        <td>
                                            <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-success">Min</th>
                                                            <th class="text-danger">Max</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-success">Rs. 100</td>
                                                            <td class="text-danger">Rs. 400</td>
                                                        </tr>
                                                    </tbody>
                                            </table>
                                        </td>
                                        <td>
                                            <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-success">Min</th>
                                                            <th class="text-danger">Max</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-success">Rs. 100</td>
                                                            <td class="text-danger">Rs. 400</td>
                                                        </tr>
                                                    </tbody>
                                            </table>
                                        </td>
                                        <td>
                                            <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-success">Min</th>
                                                            <th class="text-danger">Max</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-success">Rs. 100</td>
                                                            <td class="text-danger">Rs. 400</td>
                                                        </tr>
                                                    </tbody>
                                            </table>
                                        </td>
                                        <td>
                                            <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-success">Min</th>
                                                            <th class="text-danger">Max</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-success">Rs. 100</td>
                                                            <td class="text-danger">Rs. 400</td>
                                                        </tr>
                                                    </tbody>
                                            </table>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 mt-4">
        <div class="row mb-2">
            <div class="col-md-12">
                <h2 class="text-primary font-w600 fs-28 ">Commercial</h2>
                <p>This data is based on One Week Average Performance</p>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead>
                                    <tr class="text-black">
                                        <th>4 Marla</th>
                                        <th>8 Marla</th>
                                        <th>12 Marla</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-success">Min</th>
                                                            <th class="text-danger">Max</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-success">Rs. 100</td>
                                                            <td class="text-danger">Rs. 400</td>
                                                        </tr>
                                                    </tbody>
                                            </table>
                                        </td>

                                        <td>
                                            <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-success">Min</th>
                                                            <th class="text-danger">Max</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-success">Rs. 100</td>
                                                            <td class="text-danger">Rs. 400</td>
                                                        </tr>
                                                    </tbody>
                                            </table>
                                        </td>
                                        <td>
                                            <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-success">Min</th>
                                                            <th class="text-danger">Max</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-success">Rs. 100</td>
                                                            <td class="text-danger">Rs. 400</td>
                                                        </tr>
                                                    </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
        </div>
    </div>
</div>
<?php include("inc/footer.php");?>