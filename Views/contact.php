<?php require_once 'views/include/header.php'; ?>
<!--Feedback Form-->
<div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=California%20city+(Your%20Business%20Name)&ie=UTF8&t=&z=15&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.mapsdirections.info/en/measure-map-radius/">Draw Map Circle</a></iframe></div>
    <div class="container-fluid fb">
      <div class="row">
        <div class="col-12">
            <div class="feedback m-5">
        <form action="#" method="post">
            <div class="header-container">
                <h1 class="header">Feedback/Contact</h1>
            </div>
                <div class="feedback-form">
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
                    </div>
                      <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="email" class="form-control" name="email" >
                      </div>
                      <div class="form-group">
                        <label for="Phone">Message</label>
                        <textarea class="form-control" rows="5" name="content"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        </div>
        </div>
        </div>
    </div>
    <?php require_once 'views/include/footer.php'; ?>       