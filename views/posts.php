<?php require_once 'views/include/header.php'; ?>

<!--Posts-->

        <div class="row">
            <div class="col-xl-12">
                <div class="grid-post m-5">
                    <div class="row">
                     <?php if (($postList === 0)) { ?>
                        <div class="col-10"> There are no posts </div>
                     <?php } else foreach ((array)$postList as $post) { ?>
                            <div class="col-md-6 d-flex justify-content-center">
                            <img src="<?php echo $post['image']?>" class="image img-thumbnail">
                        </div>
                        <div class="col-md-6">
                            <h1 class="post-header"><?php echo $post['title']?></h1>
                            <p class="author">Posted by <?php echo $post['author']?></p>
                            <p class="shortContent"><?php echo $post['content']?></p>
                                <a href="posts-details.html" class="for-more">MORE</a>

                        <?php  }  ?>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once 'views/include/footer.php'; ?>       