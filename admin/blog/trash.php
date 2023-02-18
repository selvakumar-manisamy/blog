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

                <?php if (isset($_SESSION['form_error'])) { ?>
                    <div class="alert alert-<?= $_SESSION['form_error_type'] ?> alert-dismissible fade show" role="alert">
                        <strong><?= $_SESSION['form_error'] ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                <?php form_error_unset();
                } ?>

                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Deleted Blogs</h1>
                </div>
                <a href="<?= ADMIN_PROJECT_ROOT ?>blog" class="h5 mb-4 d-inline-block"><i class="fas fa-angle-left"></i> Go back to blog list</a>

                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Created</th>
                                        <th>Operations</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "select * from blogs where deleted_at is not null";
                                    $result = simple_read($query);
                                    foreach ($result as $r) :
                                    ?>
                                        <tr>

                                            <td><?= $r['title'] ?></td>
                                            <td><img src="<?= BASEURL . $r['image'] ?>" alt="<?= $r['title'] ?>" width="100"></td>
                                            <td><?= substr($r['description'], 0, 80) . '...'; ?></td>
                                            <td><?= $r['is_published'] == 1 ? '<span class="btn btn-sm btn-info">Published</span>' : '<span class="btn btn-sm btn-warning">Draft</span>' ?></td>
                                            <td><?= date('d M Y', strtotime($r['created_at'])) ?></td>
                                            <td><a  onclick="return confirm('Are you sure want to restore?')" href="model?restore_id=<?= $r['id'] ?>" class="btn btn-sm btn-primary mr-2">Restore</a><a onclick="return confirm('Are you sure want to delete?')" href="model?hard_delete_id=<?= $r['id'] ?>" class="btn btn-sm btn-danger">Delete</a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include(ADMIN_TEMPLATES . 'scripts.php'); ?>

<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>

<?php include(ADMIN_TEMPLATES . 'footer.php'); ?>