<?php  require_once 'views/include/admin-header.php';?>
<!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Edit User</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="index.php?controller=UserController&action=update&user_id=<?php echo $user['id'] ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="name" class=" form-control-label">Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="name" value="<?php echo $user['name'] ?>" placeholder="Enter Name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email" class="form-control-label">Email</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="email" id="email" name="email" value="<?php echo $user['email'] ?>"  placeholder="Enter Email" class="form-control">
                                                
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="moblie" class="form-control-label">Mobile</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="" name="mobile" value="<?php echo $user['mobile'] ?>"  placeholder="Enter Mobile" class="form-control">
                                              
                                                </div>
                                            </div>
                                            <?php if ($_SESSION['role'] === 'admin') {?>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="role" class=" form-control-label">Role</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="role" id="role"  class="custom-select" >
                                                        <option value="admin">Admin</option>
                                                        <option value="staff">Staff</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <?php } ?>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label"> Currnent Password:</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                   <?php echo $user['password'] ?>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label"> New Password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" id="password-input" name="new_password"   class="form-control" pattern=".{6,}">
                                                </div>
                                                <p class='error' style="color:red;">  <?php if(isset($err['password'])) echo $err['password']; ?></p>
                                            </div>
                                            <div class="row form-group" >
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Confirm Password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" id="password-input" name="confirm_password" class="form-control" pattern=".{6,}">
                                                    <p class='error' style="color:red;">  <?php if(isset($err)) echo $err; ?></p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-check-square"></i> Submit
                                        </button>
                                        <!-- <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button> -->
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
            <?php  require_once 'views/include/admin-footer.php';?>