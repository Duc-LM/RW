<?php require_once 'views/include/admin-header.php'; ?>
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- DATA-->
                    <div class="user-data m-b-30">
                        <h3 class="title-3 m-b-30">
                            <i class="zmdi zmdi-account-calendar"></i>Reservations:</h3>
                        <hr>
                        <a href="admin-addreservations.php" style="position: relative; float:right; margin-right: 10px"><button type="button" class="btn btn-primary">Create</button></a>
                        <div class="table-responsive table-data">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td>Customer</td>
                                        <td>No. Guests</td>
                                        <td>Phone</td>
                                        <td>Date</td>
                                        <td>Time</td>
                                        <td>Address</td>
                                        <td>Actions</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ((array)$reservationList as $reservation)  {?>
                                    <tr>
                                        <td>
                                           <?php echo $reservation['cus_name'] ?>
                                        </td>
                                        <td>
                                        <?php echo $reservation['no_of_guests'] ?>
                                        </td>
                                        <td>
                                        <?php echo $reservation['phone'] ?>
                                        </td>
                                        <td>
                                        <?php echo $reservation['date'] ?>
                                        </td>
                                        <td>
                                        <?php echo $reservation['time'] ?>
                                        </td>
                                        <td>
                                        <?php echo $reservation['address'] ?>
                                        </td>
                                        <td>
                                            <a href="index.php?controller=ReservationController&action=updateForm&id=<?php echo $reservation['id']?>">
                                                <button type="button" class="btn btn-success">Edit</button></a>
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <?php }?>
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
<?php require_once 'views/include/admin-footer.php'; ?>