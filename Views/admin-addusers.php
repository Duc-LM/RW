<?php if (isset($_SESSION['role'])) {require_once 'views/include/admin-header.php'; ?>
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                   
                    <div class="card">
                        <div class="card-header">
                            <strong>Create New User</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="index.php?controller=UserController&action=registerHandle" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="name" class=" form-control-label">Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="name" name="name" placeholder="Enter Name" class="form-control" required>

                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="email" class=" form-control-label">Email</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="email" id="email" name="email" placeholder="Enter Email" class="form-control" required>
                                         <p class='error' style="color:red;">  <?php if(isset($err['email'])) echo $err['email']; ?></p>   
                                    </div>
                                </div>
                                <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="moblie" class="form-control-label">Mobile</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="" name="mobile" value="Enter Mobile"  placeholder="Enter Mobile" class="form-control">
                                                </div>
                                            </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="role" class=" form-control-label">Role</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="role" id="role" class="custom-select">
                                            <option value="admin">Admin</option>
                                            <option value="staff">Staff</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="password" class=" form-control-label">Password</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="password" id="password" name="password" placeholder="Password" class="form-control" required pattern=".{6,}">

                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="confirm_password" class=" form-control-label">Confirm Password</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" class="form-control" required pattern=".{6,}">
                                        <p class='error' style="color:red;">  <?php if(isset($err['password'])) echo $err['password']; ?></p>
                                    </div>
                                   
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-check-square"></i> Submit
                                    </button>

                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->
<?php require_once 'views/include/admin-footer.php'; } else header('Location: index.php')?>