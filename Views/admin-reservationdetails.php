<?php if (isset($_SESSION['role'])) { require_once 'views/include/admin-header.php'; ?>

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Edit Reservation Details</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="index.php?controller=ReservationController&action=updateReservation&id=<?php echo $reservation['id'] ?>" method="post">
                                <div class="header-container">
                                    <h1 class="header">Online Reservation</h1>
                                </div>
                                <div class="feedback-form">
                                    <div class="form-group">
                                        <label for="Name">Customer Name</label>
                                        <input type="text" class="form-control" name="cus_name" aria-describedby="emailHelp" value="<?php echo$reservation['cus_name'];?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Phone">Phone:   <?php echo$reservation['phone'];?> </label>
                                       
                                    </div>
                                    <div class="form-group">
                                        <label for="Guests">Number of Guests</label>
                                        <input type="number" class="form-control" name="no_of_guests" value="<?php echo$reservation['no_of_guests'];?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Date">Date</label>
                                        <input type="date" class="form-control" name="date" value="<?php echo$reservation['date'];?>"required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Time">Time</label>
                                        <input type="time" class="form-control" name="time" min="10:00" max="21:00" value="<?php echo$reservation['time'];?>"required>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="address">Restaurant: (You have chosen <?php echo$reservation['address'];?> )</label>
                                        </div>
                                        <select class="custom-select" id="address" name="address">
                
                                            <option value="Aeon Mall">Aeon Mall</option>
                                            <option value="Vincom Center">Vincom Center</option>
                                            <option value="Royal City">Royal City</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>


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
        <?php require_once 'views/include/admin-footer.php'; } else header('index.php')?>