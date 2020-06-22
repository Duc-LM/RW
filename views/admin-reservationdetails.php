<?php  require_once 'views/include/admin-header.php';?>

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
                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Customer Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="text-input" placeholder="Enter Name" value="Lai Minh Duc" class="form-control">
                                                    <small class="help-block form-text">Please enter customer name</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="phone" class=" form-control-label">Phone</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <input type="tel" id="phone" name="phone" value="0123456789" required>
                                                    <small class="help-block form-text">Please enter phone number</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="guest" class=" form-control-label">Number of Guests</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="guest" name="guest" placeholder="Number of Guests" value="4" class="form-control">
                                                    <small class="help-block form-text">Please enter number of guests</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="date" class=" form-control-label">Date</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" name="date" placeholder="Date" class="form-control" value="26/06/2020">
                                                    <small class="help-block form-text">Please enter the date</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="time" class=" form-control-label">Time</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="time" name="time" placeholder="Time" value="19:00" min="10:00" max="21:00" class="form-control">
                                                    <small class="help-block form-text">Please enter the time</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="message" class=" form-control-label">Message</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="message" placeholder="Message Content.." value="Content Message" rows="5" class="form-control">
                                                </div>
                                            </div>                                                       
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-check-square"></i> Submit
                                        </button>
                                        <!-- <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button> -->
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