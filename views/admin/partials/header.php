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
        </div>
    </div>

    <div class="u-header-right">

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