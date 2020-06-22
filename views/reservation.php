<?php require_once 'views/include/header.php'; ?>
<!--Form-->
<div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=California%20city+(Your%20Business%20Name)&ie=UTF8&t=&z=15&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.mapsdirections.info/en/measure-map-radius/">Draw Map Circle</a></iframe></div>
    <div class="container-fluid reservation">
      <div class="row">
        <div class="col-12">
      <div class="form-reservation m-5">
        <form action="index.php?controller=ReservationController&action=createReservation" method="post">
            <div class="header-container">
                <h1 class="header">Online Reservation</h1>
            </div>
                <div class="feedback-form">
                    <div class="form-group">
                        <label for="Name">Customer Name</label>
                        <input type="text" class="form-control" name="cus_name" aria-describedby="emailHelp" required>
                    </div>
                    <div class="form-group">
                        <label for="Phone">Phone</label>
                        <input type="tel" class="form-control" name="phone" required >
                    </div>
                    <div class="form-group">
                        <label for="Guests">Number of Guests</label>
                        <input type="number" class="form-control" name="no_of_guests" required>
                    </div>
                    <div class="form-group">
                        <label for="Date">Date</label>
                        <input type="date" class="form-control" name="date" required>
                    </div>
                    <div class="form-group">
                        <label for="Time">Time</label>
                        <input type="time" class="form-control" name="time" min="10:00" max="21:00" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="address">Restaurant:</label>
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
    </div>
    </div>
    <?php require_once 'views/include/footer.php'; ?>       