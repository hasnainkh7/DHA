<?php

$curPpageTitle = "Add Project Data";
include("inc/header.php");

$dataId = $_GET['dataId'];

$selectPriceDataQuery = "SELECT * FROM `project_pricing_data` WHERE `id` = $dataId";
$selectPriceDataDone = mysqli_query($conn,$selectPriceDataQuery);
while($selectPriceDataResult = mysqli_fetch_assoc($selectPriceDataDone)){
    $projectDataId = $selectPriceDataResult['project_data_id'];
    $addedDate = $selectPriceDataResult['date'];
    $addedTime = $selectPriceDataResult['time'];
    $status = replacePriceStatusFromIdToName($selectPriceDataResult['is_approved']);
    $dataCollector = replaceUserfromIdToNameReturn($selectPriceDataResult['data_collector_id']);
}


?>

<div class="row">
    <div class="col-6 col-md-2 mb-3">
        <h2 class="font-w600 fs-18">Project Name:<br><span class=" text-black font-w600 fs-32"><?php replaceProjectfromDataIdToName($projectDataId); ?></span></h2>
    </div>
    <div class="col-6 col-md-2 mb-3">
        <h2 class="font-w600 fs-18">Location:<br><span class=" text-black font-w600 fs-32"><?php echo replaceLocationfromProjectDataIdToName($projectDataId); ?></span></h2>
    </div>
    <div class="col-6 col-md-2 mb-3">
        <h2 class="font-w600 fs-18">Date:<br><span class=" text-black font-w600 fs-32"><?php echo $addedDate; ?></span></h2>
    </div>
    <div class="col-6 col-md-2 mb-3">
        <h2 class="font-w600 fs-18">Time:<br><span class=" text-black font-w600 fs-32"><?php echo $addedTime; ?></span></h2>
    </div>
    <div class="col-6 col-md-2 mb-3">
        <h2 class="font-w600 fs-18">Data Collector:<br><span class=" text-black font-w600 fs-32"><?php echo $dataCollector; ?></span></h2>
    </div>
    <div class="col-6 col-md-2 mb-3">
        <h2 class="font-w600 fs-18">Status:<br><span class=" text-black font-w600 fs-32"><?php echo $status; ?></span></h2>
    </div>
</div>

<div class="card">
                            <div class="card-header">View Pricings</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="i_addprojectData.php" method="GET">
                                        <div class="form">
                                            <input name="projectDataId" type="hidden" value="<?php echo $projectDataId; ?>">
                                            <?php getProjectDenominationsForAddProjectDataView($projectDataId);?>
                                        </div>
                                        <!-- <button type="submit" class="btn btn-primary">Approve</button> -->
                                        <a class="btn btn-primary" href="approveProjectPricingData.php?dataId=<?php echo $dataId; ?>">Approve</a>
                                    </form>
                                </div>
                            </div>
                        </div>

<?php include("inc/footer.php");?>