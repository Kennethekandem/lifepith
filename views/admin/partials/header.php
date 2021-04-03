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
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

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
<!-- Header (Topbar) -->
<header class="u-header">
    <div class="u-header-left">
        <a class="u-header-logo" href="index.html">
            <img class="u-logo-desktop" src="<?= config::logo_admin(); ?>" width="100" alt="Stream Dashboard">
            <img class="img-fluid u-logo-mobile" src="<?= config::logo_admin() ?>" width="50" alt="Stream Dashboard">
        </a>
    </div>

    <div class="u-header-middle">
        <a class="js-sidebar-invoker u-sidebar-invoker" href="index.html#!"
           data-is-close-all-except-this="true"
           data-target="#sidebar">
            <i class="fa fa-bars u-sidebar-invoker__icon--open"></i>
            <i class="fa fa-times u-sidebar-invoker__icon--close"></i>
        </a>

        <div class="u-header-search"
             data-search-mobile-invoker="#headerSearchMobileInvoker"
             data-search-target="#headerSearch">
            <a id="headerSearchMobileInvoker" class="btn btn-link input-group-prepend u-header-search__mobile-invoker" href="index.html#!">
                <i class="fa fa-search"></i>
            </a>

            <div id="headerSearch" class="u-header-search-form">
                <form>
                    <div class="input-group">
                        <button class="btn-link input-group-prepend u-header-search__btn" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                        <input class="form-control u-header-search__field" type="search" placeholder="Type to search…">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="u-header-right">
        <!-- Activities -->
        <div class="dropdown mr-4">
            <a class="link-muted" href="index.html#!" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
				    <span class="h3">
			    		<i class="far fa-envelope"></i>
				    </span>
                <span class="u-indicator u-indicator-top-right u-indicator--xxs bg-secondary"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-4" aria-labelledby="dropdownMenuLink" style="width: 360px;">
                <div class="card">
                    <div class="card-header d-flex align-items-center py-3">
                        <h2 class="h4 card-header-title">Activities</h2>
                        <a class="ml-auto" href="index.html#">Clear all</a>
                    </div>

                    <div class="card-body p-0">
                        <div class="list-group list-group-flush">
                            <!-- Activity -->
                            <a class="list-group-item list-group-item-action" href="index.html#">
                                <div class="media align-items-center">
                                    <img class="u-avatar--sm rounded-circle mr-3" src="assets/admin/img/avatars/img1.jpg" alt="Image description">

                                    <div class="media-body">
                                        <div class="d-flex align-items-center">
                                            <h4 class="mb-1">Chad Cannon</h4>
                                            <small class="text-muted ml-auto">23 Jan 2018</small>
                                        </div>

                                        <p class="text-truncate mb-0" style="max-width: 250px;">
                                            We've just done the project.
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- End Activity -->

                            <!-- Activity -->
                            <a class="list-group-item list-group-item-action" href="index.html#">
                                <div class="media align-items-center">
                                    <img class="u-avatar--sm rounded-circle mr-3" src="assets/admin/img/avatars/img2.jpg" alt="Image description">

                                    <div class="media-body">
                                        <div class="d-flex align-items-center">
                                            <h4 class="mb-1">Jane Ortega</h4>
                                            <small class="text-muted ml-auto">18 Jan 2018</small>
                                        </div>

                                        <p class="text-truncate mb-0" style="max-width: 250px;">
                                            <span class="text-primary">@Bruce</span> advertising your project is not good idea.
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- End Activity -->

                            <!-- Activity -->
                            <a class="list-group-item list-group-item-action" href="index.html#">
                                <div class="media align-items-center">
                                    <img class="u-avatar--sm rounded-circle mr-3" src="assets/admin/img/avatars/user-unknown.jpg" alt="Image description">

                                    <div class="media-body">
                                        <div class="d-flex align-items-center">
                                            <h4 class="mb-1">Stella Hoffman</h4>
                                            <small class="text-muted ml-auto">15 Jan 2018</small>
                                        </div>

                                        <p class="text-truncate mb-0" style="max-width: 250px;">
                                            When the release date is expexted for the advacned settings?
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- End Activity -->

                            <!-- Activity -->
                            <a class="list-group-item list-group-item-action" href="index.html#">
                                <div class="media align-items-center">
                                    <img class="u-avatar--sm rounded-circle mr-3" src="assets/admin/img/avatars/img4.jpg" alt="Image description">

                                    <div class="media-body">
                                        <div class="d-flex align-items-center">
                                            <h4 class="mb-1">Htmlstream</h4>
                                            <small class="text-muted ml-auto">05 Jan 2018</small>
                                        </div>

                                        <p class="text-truncate mb-0" style="max-width: 250px;">
                                            Adwords Keyword research for beginners
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- End Activity -->
                        </div>
                    </div>

                    <div class="card-footer py-3">
                        <a class="btn btn-block btn-outline-primary" href="index.html#">View all activities</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Activities -->

        <!-- Notifications -->
        <div class="dropdown mr-4">
            <a class="link-muted" href="index.html#!" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
				    <span class="h3">
			    		<i class="far fa-bell"></i>
				    </span>
                <span class="u-indicator u-indicator-top-right u-indicator--xxs bg-info"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-4" aria-labelledby="dropdownMenuLink" style="width: 360px;">
                <div class="card">
                    <div class="card-header d-flex align-items-center py-3">
                        <h2 class="h4 card-header-title">Notifications</h2>
                        <a class="ml-auto" href="index.html#">Clear all</a>
                    </div>

                    <div class="card-body p-0">
                        <div class="list-group list-group-flush">
                            <!-- Notification -->
                            <a class="list-group-item list-group-item-action" href="index.html#">
                                <div class="media align-items-center">
                                    <div class="u-icon u-icon--sm rounded-circle bg-danger text-white mr-3">
                                        <i class="fab fa-dribbble"></i>
                                    </div>

                                    <div class="media-body">
                                        <div class="d-flex align-items-center">
                                            <h4 class="mb-1">Dribbble</h4>
                                            <small class="text-muted ml-auto">23 Jan 2018</small>
                                        </div>

                                        <p class="text-truncate mb-0" style="max-width: 250px;">
                                            <span class="text-primary">@htmlstream</span> just liked your post!
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- End Notification -->

                            <!-- Notification -->
                            <a class="list-group-item list-group-item-action" href="index.html#">
                                <div class="media align-items-center">
                                    <div class="u-icon u-icon--sm rounded-circle bg-info text-white mr-3">
                                        <i class="fab fa-twitter"></i>
                                    </div>

                                    <div class="media-body">
                                        <div class="d-flex align-items-center">
                                            <h4 class="mb-1">Twitter</h4>
                                            <small class="text-muted ml-auto">18 Jan 2018</small>
                                        </div>

                                        <p class="text-truncate mb-0" style="max-width: 250px;">
                                            Someone mentioned you on the tweet.
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- End Notification -->

                            <!-- Notification -->
                            <a class="list-group-item list-group-item-action" href="index.html#">
                                <div class="media align-items-center">
                                    <div class="u-icon u-icon--sm rounded-circle bg-success text-white mr-3">
                                        <i class="fab fa-spotify"></i>
                                    </div>

                                    <div class="media-body">
                                        <div class="d-flex align-items-center">
                                            <h4 class="mb-1">Spotify</h4>
                                            <small class="text-muted ml-auto">18 Jan 2018</small>
                                        </div>

                                        <p class="text-truncate mb-0" style="max-width: 250px;">
                                            You've just recived $25 free gift card.
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- End Notification -->

                            <!-- Notification -->
                            <a class="list-group-item list-group-item-action" href="index.html#">
                                <div class="media align-items-center">
                                    <div class="u-icon u-icon--sm rounded-circle bg-info text-white mr-3">
                                        <i class="fab fa-facebook-f"></i>
                                    </div>

                                    <div class="media-body">
                                        <div class="d-flex align-items-center">
                                            <h4 class="mb-1">Facebook</h4>
                                            <small class="text-muted ml-auto">18 Jan 2018</small>
                                        </div>

                                        <p class="text-truncate mb-0" style="max-width: 250px;">
                                            <span class="text-primary">@htmlstream</span> commented in your post.
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- End Notification -->
                        </div>
                    </div>

                    <div class="card-footer py-3">
                        <a class="btn btn-block btn-outline-primary" href="index.html#">View all notifications</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Notifications -->

        <!-- Apps -->
        <div class="dropdown mr-4">
            <a class="link-muted" href="index.html#!" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
				    <span class="h3">
			    		<i class="far fa-circle"></i>
				    </span>
                <span class="u-indicator u-indicator-top-right u-indicator--xxs bg-warning"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-4" aria-labelledby="dropdownMenuLink" style="width: 360px;">
                <div class="card">
                    <div class="card-header d-flex align-items-center py-3">
                        <h2 class="h4 card-header-title">Apps</h2>
                        <a class="ml-auto" href="index.html#">Learn more</a>
                    </div>

                    <div class="card-body py-3">
                        <div class="row">
                            <!-- App -->
                            <div class="col-4 px-2 mb-2">
                                <a class="u-apps d-flex flex-column rounded" href="index.html#!">
                                    <img class="img-fluid u-avatar--xs mx-auto mb-2" src="assets/admin/img/brands-sm/img1.png" alt="">
                                    <span class="text-center">Assana</span>
                                </a>
                            </div>
                            <!-- End App -->

                            <!-- App -->
                            <div class="col-4 px-2 mb-2">
                                <a class="u-apps d-flex flex-column rounded" href="index.html#!">
                                    <img class="img-fluid u-avatar--xs mx-auto mb-2" src="assets/admin/img/brands-sm/img2.png" alt="">
                                    <span class="text-center">Slack</span>
                                </a>
                            </div>
                            <!-- End App -->

                            <!-- App -->
                            <div class="col-4 px-2 mb-2">
                                <a class="u-apps d-flex flex-column rounded" href="index.html#!">
                                    <img class="img-fluid u-avatar--xs mx-auto mb-2" src="assets/admin/img/brands-sm/img3.png" alt="">
                                    <span class="text-center">Cloud</span>
                                </a>
                            </div>
                            <!-- End App -->

                            <!-- App -->
                            <div class="col-4 px-2">
                                <a class="u-apps d-flex flex-column rounded" href="index.html#!">
                                    <img class="img-fluid u-avatar--xs mx-auto mb-2" src="assets/admin/img/brands-sm/img5.png" alt="">
                                    <span class="text-center">Facebook</span>
                                </a>
                            </div>
                            <!-- End App -->

                            <!-- App -->
                            <div class="col-4 px-2">
                                <a class="u-apps d-flex flex-column rounded" href="index.html#!">
                                    <img class="img-fluid u-avatar--xs mx-auto mb-2" src="assets/admin/img/brands-sm/img4.png" alt="">
                                    <span class="text-center">Spotify</span>
                                </a>
                            </div>
                            <!-- End App -->

                            <!-- App -->
                            <div class="col-4 px-2">
                                <a class="u-apps d-flex flex-column rounded" href="index.html#!">
                                    <img class="img-fluid u-avatar--xs mx-auto mb-2" src="assets/admin/img/brands-sm/img6.png" alt="">
                                    <span class="text-center">Twitter</span>
                                </a>
                            </div>
                            <!-- End App -->
                        </div>
                    </div>

                    <div class="card-footer py-3">
                        <a class="btn btn-block btn-outline-primary" href="index.html#">View all apps</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Apps -->

        <!-- User Profile -->
        <div class="dropdown ml-2">
            <a class="link-muted d-flex align-items-center" href="index.html#!" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
                <img class="u-avatar--xs img-fluid rounded-circle mr-2" src="assets/admin/img/avatars/img1.jpg" alt="User Profile">
                <span class="text-dark d-none d-sm-inline-block">
							Bruce Goodman <small class="fa fa-angle-down text-muted ml-1"></small>
						</span>
            </a>

            <div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-3" aria-labelledby="dropdownMenuLink" style="width: 260px;">
                <div class="card">
                    <div class="card-header py-3">
                        <!-- Storage -->
                        <div class="d-flex align-items-center mb-3">
                            <span class="h6 text-muted text-uppercase mb-0">Storage</span>

                            <div class="ml-auto text-muted">
                                <strong class="text-dark">60gb</strong> / 100gb
                            </div>
                        </div>

                        <div class="progress" style="height: 4px;">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <!-- End Storage -->
                    </div>

                    <div class="card-body">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-4">
                                <a class="d-flex align-items-center link-dark" href="index.html#!">
                                    <span class="h3 mb-0"><i class="far fa-user-circle text-muted mr-3"></i></span> View Profile
                                </a>
                            </li>
                            <li class="mb-4">
                                <a class="d-flex align-items-center link-dark" href="index.html#!">
                                    <span class="h3 mb-0"><i class="far fa-list-alt text-muted mr-3"></i></span> Settings
                                </a>
                            </li>
                            <li class="mb-4">
                                <a class="d-flex align-items-center link-dark" href="index.html#!">
                                    <span class="h3 mb-0"><i class="far fa-laugh-wink text-muted mr-3"></i></span> Invite your friends
                                </a>
                            </li>
                            <li>
                                <a class="d-flex align-items-center link-dark" href="index.html#!">
                                    <span class="h3 mb-0"><i class="far fa-share-square text-muted mr-3"></i></span> Sign Out
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End User Profile -->
    </div>
</header>
<!-- End Header (Topbar) -->

<main class="u-main" role="main">
    <!-- Sidebar -->
    <aside id="sidebar" class="u-sidebar">
        <div class="u-sidebar-inner">
            <header class="u-sidebar-header">
                <a class="u-sidebar-logo" href="index.html">
                    <img class="img-fluid" src="assets/admin/img/logo.png" width="124" alt="Stream Dashboard">
                </a>
            </header>

            <nav class="u-sidebar-nav">
                <ul class="u-sidebar-nav-menu u-sidebar-nav-menu--top-level">
                    <!-- Dashboard -->
                    <li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link active" href="index.html">
                            <i class="fa fa-cubes u-sidebar-nav-menu__item-icon"></i>
                            <span class="u-sidebar-nav-menu__item-title">Dashboard</span>
                        </a>
                    </li>
                    <!-- End Dashboard -->

                    <!-- Base UI -->
                    <li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link" href="index.html#!"
                           data-target="#baseUI">
                            <i class="far fa-gem u-sidebar-nav-menu__item-icon"></i>
                            <span class="u-sidebar-nav-menu__item-title">Base UI</span>
                            <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                            <span class="u-sidebar-nav-menu__indicator"></span>
                        </a>

                        <ul id="baseUI" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="ui-typography.html">
                                    <span class="u-sidebar-nav-menu__item-icon">T</span>
                                    <span class="u-sidebar-nav-menu__item-title">Typography</span>
                                </a>
                            </li>
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="ui-colors.html">
                                    <span class="u-sidebar-nav-menu__item-icon">C</span>
                                    <span class="u-sidebar-nav-menu__item-title">Colors</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- End Base UI -->

                    <!-- UI Components -->
                    <li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link" href="index.html#!"
                           data-target="#subMenu1">
                            <i class="far fa-paper-plane u-sidebar-nav-menu__item-icon"></i>
                            <span class="u-sidebar-nav-menu__item-title">UI Components</span>
                            <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                            <span class="u-sidebar-nav-menu__indicator"></span>
                        </a>

                        <ul id="subMenu1" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                            <!-- Components -->
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="ui-alerts.html">
                                    <span class="u-sidebar-nav-menu__item-icon">A</span>
                                    <span class="u-sidebar-nav-menu__item-title">Alerts</span>
                                </a>
                            </li>
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="ui-buttons.html">
                                    <span class="u-sidebar-nav-menu__item-icon">B</span>
                                    <span class="u-sidebar-nav-menu__item-title">Buttons</span>
                                </a>
                            </li>
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="ui-cards.html">
                                    <span class="u-sidebar-nav-menu__item-icon">C</span>
                                    <span class="u-sidebar-nav-menu__item-title">Cards</span>
                                </a>
                            </li>
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="ui-modals.html">
                                    <span class="u-sidebar-nav-menu__item-icon">M</span>
                                    <span class="u-sidebar-nav-menu__item-title">Modals</span>
                                </a>
                            </li>
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="ui-tooltips-and-popovers.html">
                                    <span class="u-sidebar-nav-menu__item-icon">T</span>
                                    <span class="u-sidebar-nav-menu__item-title">Tooltips & Popovers</span>
                                </a>
                            </li>
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="ui-others.html">
                                    <span class="u-sidebar-nav-menu__item-icon">O</span>
                                    <span class="u-sidebar-nav-menu__item-title">Other Components</span>
                                </a>
                            </li>
                            <!-- End Components -->
                        </ul>
                    </li>
                    <!-- End UI Components -->

                    <!-- Forms -->
                    <li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link" href="forms.html">
                            <i class="far fa-edit u-sidebar-nav-menu__item-icon"></i>
                            <span class="u-sidebar-nav-menu__item-title">Forms</span>
                        </a>
                    </li>
                    <!-- End Forms -->

                    <!-- Tables -->
                    <li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link" href="tables.html">
                            <i class="far fa-list-alt u-sidebar-nav-menu__item-icon"></i>
                            <span class="u-sidebar-nav-menu__item-title">Tables</span>
                        </a>
                    </li>
                    <!-- End Tables -->

                    <!-- Account Pages -->
                    <li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link" href="index.html#!"
                           data-target="#subMenu2">
                            <i class="far fa-user-circle u-sidebar-nav-menu__item-icon"></i>
                            <span class="u-sidebar-nav-menu__item-title">Account Pages</span>
                            <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                            <span class="u-sidebar-nav-menu__indicator"></span>
                        </a>

                        <ul id="subMenu2" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="account-profile.html">
                                    <span class="u-sidebar-nav-menu__item-icon">P</span>
                                    <span class="u-sidebar-nav-menu__item-title">Profile</span>
                                </a>
                            </li>
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="account-sign-up.html">
                                    <span class="u-sidebar-nav-menu__item-icon">C</span>
                                    <span class="u-sidebar-nav-menu__item-title">Sign Up</span>
                                </a>
                            </li>
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="account-sign-in.html">
                                    <span class="u-sidebar-nav-menu__item-icon">S</span>
                                    <span class="u-sidebar-nav-menu__item-title">Sign In</span>
                                </a>
                            </li>
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="account-password-recover.html">
                                    <span class="u-sidebar-nav-menu__item-icon">R</span>
                                    <span class="u-sidebar-nav-menu__item-title">Recover Password</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- End Account Pages -->

                    <!-- Other Pages -->
                    <li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link" href="index.html#!"
                           data-target="#subMenu3">
                            <i class="far fa-folder-open u-sidebar-nav-menu__item-icon"></i>
                            <span class="u-sidebar-nav-menu__item-title">Other Pages</span>
                            <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                            <span class="u-sidebar-nav-menu__indicator"></span>
                        </a>

                        <ul id="subMenu3" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="blank.html">
                                    <span class="u-sidebar-nav-menu__item-icon">B</span>
                                    <span class="u-sidebar-nav-menu__item-title">Blank Page</span>
                                </a>
                            </li>
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="404.html">
                                    <span class="u-sidebar-nav-menu__item-icon">E</span>
                                    <span class="u-sidebar-nav-menu__item-title">Error 404</span>
                                </a>
                            </li>
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="500.html">
                                    <span class="u-sidebar-nav-menu__item-icon">E</span>
                                    <span class="u-sidebar-nav-menu__item-title">Error 500</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- End Other Pages -->

                    <hr>

                    <!-- Documentation -->
                    <li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link" href="docs.html">
                            <i class="far fa-newspaper u-sidebar-nav-menu__item-icon"></i>
                            <span class="u-sidebar-nav-menu__item-title">Documentation</span>
                        </a>
                    </li>
                    <!-- End Documentation -->

                    <!-- Free Download -->
                    <li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link" href="../../templates/stream-dashboard-ui-kit.html">
                            <i class="fab fa-html5 u-sidebar-nav-menu__item-icon"></i>
                            <span class="u-sidebar-nav-menu__item-title">Free Download</span>
                        </a>
                    </li>
                    <!-- End Free Download -->
                </ul>
            </nav>
        </div>
    </aside>
    <!-- End Sidebar -->

    <div class="u-content">
        <div class="u-body">