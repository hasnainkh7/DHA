<?php
$curPpageTitle = "All Denominations"; 
include("inc/header.php");
?>

<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">

                                    <table id='example' class='display min-w850'>
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Denomination</th>
                                                <th>Plot Type</th>
                                                <th>Unit</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php getDenoTable(); ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>

</div>
<?php include("inc/footer.php");?>