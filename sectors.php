<?php
$curPpageTitle = "All Sectors"; 
include("inc/header.php");
?>

<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display min-w850">
                                        <thead>
                                            <tr>
                                                <th>Sector Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php getSectorTable();?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>


<?php include("inc/footer.php");?>