<?php include('../../config/autoload.php'); ?>

<?php
$page_title = 'Dashboard';
include(ADMIN_TEMPLATES . 'header.php');
?>

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <?php include(ADMIN_TEMPLATES . 'sidebar.php'); ?>
    <!-- End of Sidebar -->

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <!-- Topbar -->
            <?php include(ADMIN_TEMPLATES . 'topbar.php'); ?>
            <!-- End of Topbar -->

            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <a href="<?= ADMIN_PROJECT_ROOT ?>blog" class="h5 m-0"><i class="fas fa-angle-left"></i> Go back to blog list</a>
                </div>

                <?php
                    $query = "select * from blogs where id = ".$_GET['id'];
                    $result = simple_read($query);
                ?>

                <div class="card shadow mb-4">
                    <div class="card-body">
                        <h5 class="text-info">Update New Blog</h5>
                        <form action="model" class="mt-3" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="blog_id" value="<?= $_GET['id'] ?>">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control" value="<?= $result[0]['title'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <img src="<?= BASEURL.$result[0]['image'] ?>" alt="" width="100">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image" id="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="desc">Description</label>
                                <textarea class="form-control" name="desc" id="desc" cols="10" rows="4"><?= $result[0]['description'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" value="1" name="is_published" id="is_published" <?= $result[0]['is_published'] ? "checked" : "" ?>>
                                <label for="is_published">Published</label>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="update_blog" class="btn btn-primary" value="Update Blog">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include(ADMIN_TEMPLATES . 'scripts.php'); ?>

<?php include(ADMIN_TEMPLATES . 'footer.php'); ?>