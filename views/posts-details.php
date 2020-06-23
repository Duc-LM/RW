<?php require_once 'views/include/header.php'; ?>
<!-- Page Content -->
  <div class="container-fluid post-details">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-12">
          <div class="grid-post m-5 p-5">

        <!-- Title -->
        <h1 class="post-header"> <?php echo $post['title']?></h1>

        <!-- Author -->
        <p class="lead">
          by <?php echo $post['author']?>
        </p>

        <hr>

        <!-- Date/Time
        <p>Posted on January 1, 2019 at 12:00 PM</p>

        <hr> -->

        <!-- Preview Image -->
        <img class="img-thumbnail rounded" src=" <?php echo $post['image']?>" alt="">

        <hr>

        <!-- Post Content -->
        <p class="content">
        <?php echo str_replace( '&', '&amp;', $post['content'] ); ?>
        </p>

        <hr>

        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Create new comment:</h5>
          <div class="card-body">
            <form action="index.php?controller=CommentController&action=createComment&post_id=<?php echo $post['id'];?> " method="post" enctype="multipart/form-data" class="form-horizontal" >
                <div class="form-group">
                    <input class="form-control" type="text" name="name" id="name" placeholder="Enter Name" required>
                </div>
                <div class="form-group">
                   
                    <input class="form-control" type="email" name="email" placeholder="Enter Email" id="email" required>
                </div>
              <div class="form-group">
                <textarea class="form-control" name="content" id="content" placeholder="Enter Comment" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

        <!-- Single Comment -->
        
        <?php if($commentList !== 0) 
              foreach ((array)$commentList as $comment) {  ?>
        <div class="media mb-4">
          <div class="media-body">
            <h5 class="mt-0"><?php echo $comment['name']?></h5>
            <h7 class="mt-0"><?php echo $comment['email']?></h7>
            <p><?php echo $comment['content']?></p>
              

          </div>
        </div>
<?php }?>
      </div>
    </div>
      </div>
    </div>
    <!-- /.row -->

  <!-- /.container -->
  <?php require_once 'views/include/footer.php'; ?>       