<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
    <base href="<?= config::base(); ?>">
    <title><?= ucfirst($page) ?> | <?= config::name(); ?></title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= config::favicon(); ?>" type="image/x-icon">

    <!-- Schema.org -->
    <meta itemprop="name" content="Stream Dashboard UI Kit">
    <meta itemprop="description" content="Stream Dashboard UI Kit crafted by Htmlstream.">
    <meta itemprop="image" content="assets/admin/img/sduik-preview.png">

    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Components Vendor Styles -->
    <link rel="stylesheet" href="assets/admin/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="assets/admin/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">

    <!--    Datatable-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    <!-- Theme Styles -->
    <link rel="stylesheet" href="assets/admin/css/theme.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Custom Charts -->
    <style>
        .js-doughnut-chart {
            width: 70px !important;
            height: 70px !important;
        }
    </style>
</head>
<!-- End Head -->

<body>

<main class="container-fluid w-100" role="main">

    <div class="u-content">
        <div class="u-body">
            <div class="mb-3">
                <a href="admin" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Go Back</a>
            </div>
            <div class="card">
                <header class="card-header">
                    <h2 class="h3 card-header-title">Add Blog</h2>
                </header>

                <div class="card-body">
                    <form action="" method="post">

                        <?php

                            if(isset($_POST['add'])) {
                                blog::add($_POST['title'], $_POST['category_id'], $_POST['content'], $_POST['status'], $_FILES['thumbnail']);
                            }

                        ?>
                        <div class="form-group mb-4">
                            <label for="defaultInput">Title</label>
                            <input id="defaultInput" class="form-control" type="text" placeholder="Blog Title" name="title">
                        </div>

                        <div class="form-group mb-4">
                            <label for="defaultInput">Thumbnail</label>
                            <input class="form-control" type="file" name="thumbnail">
                        </div>

                        <div class="form-group mb-4">
                            <label for="defaultInput">Category</label>
                            <select name="category_id" id="" class="form-control">
                                <?php
                                $categories = categories::all();

                                foreach($categories as $category) {
                                    $category_name = $category['category'];
                                    $category_id = $category['id'];
                                    ?>
                                    <option value="<?= $category_id ?>"><?= $category_name ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group mb-4">
                            <label for="defaultInput">Content</label>
                            <textarea name="content" id="summernote" class="form-control"></textarea>
                        </div>

                        <div class="form-group col-2" style="padding:0">
                            <label class="d-flex align-items-center justify-content-between">
                                <div class="form-toggle">
                                    <input name="status" type="checkbox">

                                    <div class="form-toggle__item">
                                        <i class="d-inline-block"></i>
                                    </div>
                                </div>
                                <span class="form-label-text">Publish</span>
                            </label>
                        </div>

                        <button class="btn btn-primary btn-block">Add Blog</button>
                    </form>
                </div>
            </div>


        </div>

        <!-- Footer -->
        <footer class="u-footer d-md-flex align-items-md-center text-center text-md-left text-muted text-muted">
            <p class="h5 mb-2 mb-md-0">developed by <a class="link-muted" href="../../index.html" target="_blank">Kenneth Ekandem</a></p>

            <p class="h5 mb-0 ml-auto">
                &copy; <?= date("Y"); ?> <a class="link-muted" href="<?= config::base(); ?>" target="_blank"><?= config::name(); ?></a>. All Rights Reserved.
            </p>
        </footer>
        <!-- End Footer -->
    </div>
</main>

<!-- Global Vendor -->
<script src="assets/admin/vendor/jquery/dist/jquery.min.js"></script>
<script src="assets/admin/vendor/jquery-migrate/jquery-migrate.min.js"></script>
<script src="assets/admin/vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="assets/admin/vendor/bootstrap/bootstrap.min.js"></script>

<!--Datatable-->
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

<!-- include summernote js -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


<!-- Plugins -->
<script src="assets/admin/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/admin/vendor/chart.js/dist/Chart.min.js"></script>

<!-- Initialization  -->
<script src="assets/admin/js/sidebar-nav.js"></script>
<script src="assets/admin/js/main.js"></script>
<script src="assets/admin/js/dashboard-page-scripts.js"></script>

<script>
    $(document).ready(function() {
        // Datatable
        $('#datatable').DataTable();

        // Summernote
        $('#summernote').summernote();
    } );
</script>
</body>
</html>