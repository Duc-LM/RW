 <!-- MAIN CONTENT-->
 <?php  if (isset($_SESSION['role'])) {require_once 'views/include/admin-header.php';?>
 <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- DATA-->
                                <div class="user-data m-b-30">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-account-calendar"></i>Posts:</h3>
                                        <hr>
                                        <a href="index.php?controller=PostController&action=createForm" style="position: relative; float:right; margin-right: 10px"><button type="button" class="btn btn-primary">Create</button></a>
                                    <div class="table-responsive table-data">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <td>title</td>
                                                    <td>author</td>
                                                    <td>actions</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach((array)$postList as $post ) {?>
                                                <tr>
                                                    <td>
                                                       <?php echo $post['title']; ?>
                                                    </td>
                                                    <td>
                                                    <?php echo $post['author']; ?>
                                                    </td>
                    
                                                    <td>
                                                        <a href="index.php?controller=PostController&action=updateForm&id=<?php echo $post['id'] ?>">
                                                        <button type="button" class="btn btn-success">Edit</button></a>
                                                        <a href="index.php?controller=PostController&action=deletePost&id=<?php echo $post['id'] ?>">
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
<?php  require_once 'views/include/admin-footer.php';} else header('Location: index.php')?>