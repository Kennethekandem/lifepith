<!DOCTYPE html>
<html lang="en" class="no-js">
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

    <!-- Theme Styles -->
    <link rel="stylesheet" href="assets/admin/css/theme.css">

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
    <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center bg-white mnh-100vh">
            <a class="u-login-form py-3 mb-auto" href="<?= config::base(); ?>">
                <img class="img-fluid" src="<?= config::logo_admin(); ?>" width="160" alt="<?= config::name(); ?>">
            </a>

            <div class="u-login-form">
                <form class="mb-3" action="" method="post">

                    <?php

                        if(isset($_POST['login'])) {
                            admin::login($_POST['email'], $_POST['password']);
                        }

                    ?>

                    <div class="mb-3">
                        <h1 class="h2">Welcome Back!</h1>
                        <p class="small">Login to your dashboard with your registered email address and password.</p>
                    </div>

                    <div class="form-group mb-4">
                        <label for="email">Your email</label>
                        <input id="email" class="form-control" name="email" type="email" placeholder="john.doe@example.com">
                    </div>

                    <div class="form-group mb-4">
                        <label for="password">Password</label>
                        <input id="password" class="form-control" name="password" type="password" placeholder="Your password">
                    </div>

                    <div class="form-group d-flex justify-content-between align-items-center mb-4">
                    </div>

                    <button class="btn btn-primary btn-block" type="submit" name="login">Login</button>
                </form>

                <p class="small">
                </p>
            </div>

            <div class="u-login-form text-muted py-3 mt-auto"></div>
        </div>

        <div class="col-lg-6 d-none d-lg-flex flex-column align-items-center justify-content-center bg-light">
            <img class="img-fluid position-relative u-z-index-3 mx-5" src="assets/admin/svg/mockups/mockup.svg" alt="Image description">

            <figure class="u-shape u-shape--top-right u-shape--position-5">
                <img src="assets/admin/svg/shapes/shape-1.svg" alt="Image description">
            </figure>
            <figure class="u-shape u-shape--center-left u-shape--position-6">
                <img src="assets/admin/svg/shapes/shape-2.svg" alt="Image description">
            </figure>
            <figure class="u-shape u-shape--center-right u-shape--position-7">
                <img src="assets/admin/svg/shapes/shape-3.svg" alt="Image description">
            </figure>
            <figure class="u-shape u-shape--bottom-left u-shape--position-8">
                <img src="assets/admin/svg/shapes/shape-4.svg" alt="Image description">
            </figure>
        </div>
    </div>
</main>
</body>
</html>