<?php
$curPpageTitle = "All Users"; 
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
                                                <th>Role</th>
                                                <th>Name</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                    <?php getUserTable(); ?>

                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>

</div>
<?php include("inc/footer.php");?>