<?php
$curPpageTitle = "Add User"; 
include("inc/header.php");
?>

<div class="card">
                            <div class="card-header">Add New User</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST" action="i_adduser.php">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Name</label>
                                                <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Username</label>
                                                <input type="text" class="form-control" name="username" placeholder="@username" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Email</label>
                                                <input type="email" class="form-control" name="email" placeholder="example@abc.com" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Passowrd</label>
                                                <input type="password" class="form-control" name="password" placeholder="********" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Role</label>
                                                <select class="form-control" id="single-select" name="role" required>
                                                    <option selected disabled>Select Role...</option>
                                                    <option value="1">Admin</option>
                                                    <option value="2">Data Provider</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Add User</button>
                                    </form>
                                </div>
                            </div>
                        </div>

<?php include("inc/footer.php");?>