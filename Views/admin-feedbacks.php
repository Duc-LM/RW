<?php if (isset($_SESSION['role'])) {  require_once 'views/include/admin-header.php';?>
 <!-- MAIN CONTENT-->
 <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- DATA-->
                                <div class="user-data m-b-30">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-account-calendar"></i>user feedback:</h3>
                                        <hr>
                                    <div class="table-responsive table-data">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <td>name</td>
                                                    <td>email</td>
                                                    <td>message</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ( (array)$feedbackList as $feedback) {?>
                                                <tr>
                                                    <td>
                                                        <?php echo $feedback['name']; ?>
                                                    </td>
                                                    <td>
                                                    <?php echo $feedback['email']; ?>
                                                    </td>
                                                    <td>
                                                    <?php echo $feedback['content']; ?>
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
                                <!-- END  DATA-->
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
            <?php  require_once 'views/include/admin-footer.php';} else header('index.php');?>