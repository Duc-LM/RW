<!-- MAIN CONTENT-->
<?php if (isset($_SESSION['role'])) {require_once 'views/include/admin-header.php'; ?>
<script src="https://cdn.ckeditor.com/ckeditor5/19.1.1/classic/ckeditor.js"></script>
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Edit Post</strong>

                        </div>
                        <div class="card-body card-block">

                            <form action="index.php?controller=PostController&action=updatePost" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="title" class=" form-control-label">Title</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="title" name="title" value="<?php echo $post['title'] ?>" placeholder="Enter Title" class="form-control" required>

                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="author" class=" form-control-label">Author</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="author" name="author" value="<?php echo $post['author'] ?>" placeholder="Enter Author" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="tag" class=" form-control-label">Tag</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="tag" name="tag" value="<?php echo $post['tag'] ?>" placeholder="Enter Tag" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="image" class=" form-control-label">Thumbnail Image</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <img src=" <?php echo $post['image'] ?>" alt="" height="150" width="150" />
                                        <input type="file" name="image" id="image" placeholder="Browser Image" class="form-control" accept="image/*" required>

                                    </div>

                                    <p class='error' style="color:red;"> <?php if (isset($err['image'])) echo $err['image']; ?></p>
                                </div>
                                <textarea name="content" id="editor">
                                        &lt;p&gt;This is some sample content.&lt;/p&gt;
                                </textarea>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-check-square"></i> Submit
                            </button>

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
<script src="../resources/vendor/ckeditor/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->
<?php require_once 'views/include/admin-footer.php';} else header('index.php') ?>