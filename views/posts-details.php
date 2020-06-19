<?php require_once 'views/include/header.php'; ?>
<!-- Page Content -->
  <div class="container-fluid post-details">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-12">
          <div class="grid-post m-5 p-5">

        <!-- Title -->
        <h1 class="post-header">Example Header</h1>

        <!-- Author -->
        <p class="lead">
          by Admin
        </p>

        <hr>

        <!-- Date/Time
        <p>Posted on January 1, 2019 at 12:00 PM</p>

        <hr> -->

        <!-- Preview Image -->
        <img class="img-thumbnail rounded" src="../resources/img/banner.jpg" alt="">

        <hr>

        <!-- Post Content -->
        <p class="content">This is the example content for the example posts. This is the example content for the example posts. This is the example content for the example posts.</p>

        <hr>

        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label for="Name">Name:</label>
                    <input class="form-control" type="text" name="name" required>
                </div>
              <div class="form-group">
                <label for="Name">Comment:</label>
                <textarea class="form-control" name="content" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

        <!-- Single Comment -->
        <div class="media mb-4">
          <div class="media-body">
            <h5 class="mt-0">Commenter Name</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          </div>
        </div>

        <!-- Comment with nested comments -->
        <div class="media mb-4">
          <div class="media-body">
            <h5 class="mt-0">Commenter Name</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

            <div class="media mt-4">
              <div class="media-body">
                <h5 class="mt-0">Commenter Name</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </div>

            <div class="media mt-4">
              <div class="media-body">
                <h5 class="mt-0">Commenter Name</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
      </div>
    </div>
    <!-- /.row -->

  <!-- /.container -->
  <?php require_once 'views/include/footer.php'; ?>       