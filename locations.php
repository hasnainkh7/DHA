<?php
$curPpageTitle = "All Locations"; 
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
                                                <th>Location Name</th>
                                                <th>Tools</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php getLocationsTable(); ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Location Name</th>
                                                <th>Tools</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>

</div>
<?php include("inc/footer.php");?>