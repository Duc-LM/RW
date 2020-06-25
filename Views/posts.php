<?php require_once 'views/include/header.php'; ?>

<!--Posts-->
<div class="container-fluid posts">
<div class="row">
    <div class="col-xl-12">
        <div class="grid-post m-5">
            <div class="row">
                <?php if (($postList === 0)) { ?>
                    <div class="col-10"> There are no posts </div>
                <?php } else foreach ((array) $postList as $post) { ?>
                    <div class="col-md-6 d-flex justify-content-center">
                        <img src="<?php echo $post['image'] ?>" class="image img-thumbnail">
                    </div>
                    <div class="col-md-6">
                        <h1 class="post-header"><?php echo $post['title'] ?></h1>
                        <p class="author">Posted by <?php echo $post['author'] ?></p>
                        <p class="shortContent"><?php echo strip_tags($post['content']) ?></p>
                        <a href="index.php?controller=PostController&action=viewPost&id=<?php echo $post['id']?>" class="for-more">MORE</a>
                        </div>
                    <?php  }  ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require_once 'views/include/footer.php'; ?>