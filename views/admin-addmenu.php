<!-- MAIN CONTENT-->
<?php if (isset($_SESSION['role'])) {
    require_once 'views/include/admin-header.php'; ?>
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Create Form</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="index.php?controller=MenuController&action=createMenu" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="name" class=" form-control-label">Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="name" name="name" placeholder="Enter Name" class="form-control" required>
                                        <p class='error' style="color:red;">  <?php if(isset($err['name'])) echo $err['name']; ?></p>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="price" class=" form-control-label">Price</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="number" id="price" name="price" placeholder="Enter Price" class="form-control" required>
                                       
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="category" class=" form-control-label">Category</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="category" id="category" class="custom-select">
                                            <option value="appetizer">Appetizer</option>
                                            <option value="main dish">Main dish</option>
                                            <option value="dessert">Dessert</option>
                                            <option value="drinks">Drinks</option>
                                        </select>
                                    </div>
                                    <p class='error' style="color:red;">  <?php if(isset($err['category'])) echo $err['category']; ?></p>
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
<?php require_once 'views/include/admin-footer.php'; } else header('Location: index.php');?>