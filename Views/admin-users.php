<?php if (isset($_SESSION['role'])) { require_once 'views/include/admin-header.php';?>
 <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- USER DATA-->
                                <div class="user-data m-b-30">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-account-calendar"></i>user data</h3>
                                        <hr>
                                        <a href="index.php?controller=UserController&action=registerForm" style="position: relative; float:right; margin-right: 10px">
                                        <button type="button" class="btn btn-primary" >Create</button></a>
                                    <div class="table-responsive table-data">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <td>name</td>
                                                    <td>email</td>
                                                    <td>mobile</td>
                                                    <td>role</td>
                                                    <td>actions</td>
                                                </tr>
                                            </thead>
                                            <?php foreach ((array)$userList as $user) {?>
                                            <tbody>
                                                <tr>
                                                    <td> <?php echo $user['name'] ?>
                                                    </td>
                                                    <td>
                                                    <?php echo $user['email'] ?>
                                                    </td>
                                                    <td>
                                                    <?php echo $user['mobile'] ?>
                                                    </td>
                                                    <td>
                                                        <span class="role user"><?php echo $user['role'] ?></span>
                                                    </td>
                                                    <td>
                                                        <a href="index.php?controller=UserController&action=updateForm&user_id=<?php echo $user['id'] ?>">
                                                            <button type="button" class="btn btn-success">Edit</button></a>
                                                        <a href="index.php?controller=UserController&action=delete&user_id=<?php echo $user['id'] ?>">
                                                            <button type="button" class="btn btn-danger">Delete</button></a>
                                    
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- <div class="user-data__footer">
                                        <button class="au-btn au-btn-load">load more</button>
                                    </div> -->
                                </div>
                                <!-- END USER DATA-->
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
            <?php  require_once 'views/include/admin-footer.php';} else header('index.php')?>