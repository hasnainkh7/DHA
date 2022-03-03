<?php
$curPpageTitle = "Add User"; 
include("inc/header.php");
?>

<div class="card">
                            <div class="card-header">Add New User</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Name</label>
                                                <input type="text" class="form-control" placeholder="Enter Name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Username</label>
                                                <input type="text" class="form-control" placeholder="@username">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Email</label>
                                                <input type="email" class="form-control" placeholder="example@abc.com">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Passowrd</label>
                                                <input type="password" class="form-control" placeholder="********">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Profile Picture</label>
                                                <input type="file" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Role</label>
                                                <select class="form-control" id="single-select" required>
                                                    <option selected disabled>Select Role...</option>
                                                    <option>Admin</option>
                                                    <option>Data Provider</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Add User</button>
                                    </form>
                                </div>
                            </div>
                        </div>

<?php include("inc/footer.php");?>