<?php
$curPpageTitle = "All Users"; 
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
                                                <th>#</th>
                                                <th>Role</th>
                                                <th>Name</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Tools</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Admin</td>
                                                <td>V Media</td>
                                                <td>vmediamanager</td>
                                                <td> <a href="mailto:info@vmedia.pk">info@vmedia.pk</a></td>
                                                <td>
                                                    <div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Data Provider</td>
                                                <td>John Smith</td>
                                                <td>JonhSmitManager</td>
                                                <td> <a href="mailto:info@JonhSmitManager.pk">info@jonhsmit.pk</a></td>
                                                <td>
                                                    <div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>

</div>
<?php include("inc/footer.php");?>