<?php

session_start();

// var_dump($_SESSION);
// die();

if (!isset($_SESSION['auth'])) {
    header('Location: /login.html');
    return;
}
// echo 'Добро пожаловать на личный кабинет';

?>

<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>OneUI - Admin Dashboard Template &amp; UI Framework</title>

        <meta name="description" content="OneUI - Admin Dashboard Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="/assets/img/favicons/favicon.png">

        <link rel="icon" type="/image/png" href="/assets/img/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="/image/png" href="/assets/img/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="/image/png" href="/assets/img/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="/image/png" href="/assets/img/favicons/favicon-160x160.png" sizes="160x160">
        <link rel="icon" type="/image/png" href="/assets/img/favicons/favicon-192x192.png" sizes="192x192">

        <link rel="apple-touch-icon" sizes="57x57" href="/assets/img/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/assets/img/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/assets/img/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/assets/img/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/assets/img/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/assets/img/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/assets/img/favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Web fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

        <!-- Bootstrap and OneUI CSS framework -->
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <link rel="stylesheet" id="css-main" href="/assets/css/oneui.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
        <!-- Page Container -->
        <!--
            Available Classes:

            'enable-cookies'             Remembers active color theme between pages (when set through color theme list)

            'sidebar-l'                  Left Sidebar and right Side Overlay
            'sidebar-r'                  Right Sidebar and left Side Overlay
            'sidebar-mini'               Mini hoverable Sidebar (> 991px)
            'sidebar-o'                  Visible Sidebar by default (> 991px)
            'sidebar-o-xs'               Visible Sidebar by default (< 992px)

            'side-overlay-hover'         Hoverable Side Overlay (> 991px)
            'side-overlay-o'             Visible Side Overlay by default (> 991px)

            'side-scroll'                Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (> 991px)

            'header-navbar-fixed'        Enables fixed header
        -->
        <div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">
            <!-- Side Overlay-->
            <aside id="side-overlay">
                <!-- Side Overlay Scroll Container -->
                <div id="side-overlay-scroll">
                    <!-- Side Header -->
                    <div class="side-header side-content">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default pull-right" type="button" data-toggle="layout" data-action="side_overlay_close">
                            <i class="fa fa-times"></i>
                        </button>
                        <span>
                            <img class="img-avatar img-avatar32" src="/assets/img/avatars/avatar10.jpg" alt="">
                            <span class="font-w600 push-10-l">Eugene Burke</span>
                        </span>
                    </div>
                    <!-- END Side Header -->

                    <!-- Side Content -->
                    <div class="side-content remove-padding-t">
                        <!-- Side Overlay Tabs -->
                        <div class="block pull-r-l border-t">
                            <ul class="nav nav-tabs nav-tabs-alt nav-justified" data-toggle="tabs">
                                <li class="active">
                                    <a href="#tabs-side-overlay-overview"><i class="fa fa-fw fa-coffee"></i> Overview</a>
                                </li>
                                <li>
                                    <a href="#tabs-side-overlay-sales"><i class="fa fa-fw fa-line-chart"></i> Sales</a>
                                </li>
                            </ul>
                            <div class="block-content tab-content">
                                <!-- Overview Tab -->
                                <div class="tab-pane fade fade-right in active" id="tabs-side-overlay-overview">
                                    <!-- Activity -->
                                    <div class="block pull-r-l">
                                        <div class="block-header bg-gray-lighter">
                                            <ul class="block-options">
                                                <li>
                                                    <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                                </li>
                                            </ul>
                                            <h3 class="block-title">Recent Activity</h3>
                                        </div>
                                        <div class="block-content">
                                            <!-- Activity List -->
                                            <ul class="list list-activity">
                                                <li>
                                                    <i class="si si-wallet text-success"></i>
                                                    <div class="font-w600">New sale ($15)</div>
                                                    <div><a href="javascript:void(0)">Admin Template</a></div>
                                                    <div><small class="text-muted">3 min ago</small></div>
                                                </li>
                                                <li>
                                                    <i class="si si-pencil text-info"></i>
                                                    <div class="font-w600">You edited the file</div>
                                                    <div><a href="javascript:void(0)"><i class="fa fa-file-text-o"></i> Documentation.doc</a></div>
                                                    <div><small class="text-muted">15 min ago</small></div>
                                                </li>
                                                <li>
                                                    <i class="si si-close text-danger"></i>
                                                    <div class="font-w600">Project deleted</div>
                                                    <div><a href="javascript:void(0)">Line Icon Set</a></div>
                                                    <div><small class="text-muted">4 hours ago</small></div>
                                                </li>
                                            </ul>
                                            <!-- END Activity List -->
                                        </div>
                                    </div>
                                    <!-- END Activity -->

                                    <!-- Online Friends -->
                                    <div class="block pull-r-l">
                                        <div class="block-header bg-gray-lighter">
                                            <ul class="block-options">
                                                <li>
                                                    <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                                </li>
                                                <li>
                                                    <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                                </li>
                                            </ul>
                                            <h3 class="block-title">Online Friends</h3>
                                        </div>
                                        <div class="block-content block-content-full">
                                            <!-- Users Navigation -->
                                            <ul class="nav-users remove-margin-b">
                                                <li>
                                                    <a href="base_pages_profile.html">
                                                        <img class="img-avatar" src="/assets/img/avatars/avatar2.jpg" alt="">
                                                        <i class="fa fa-circle text-success"></i> Emma Cooper
                                                        <div class="font-w400 text-muted"><small>Copywriter</small></div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="base_pages_profile.html">
                                                        <img class="img-avatar" src="/assets/img/avatars/avatar15.jpg" alt="">
                                                        <i class="fa fa-circle text-success"></i> Ronald George
                                                        <div class="font-w400 text-muted"><small>Web Developer</small></div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="base_pages_profile.html">
                                                        <img class="img-avatar" src="/assets/img/avatars/avatar7.jpg" alt="">
                                                        <i class="fa fa-circle text-success"></i> Evelyn Willis
                                                        <div class="font-w400 text-muted"><small>Web Designer</small></div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="base_pages_profile.html">
                                                        <img class="img-avatar" src="/assets/img/avatars/avatar3.jpg" alt="">
                                                        <i class="fa fa-circle text-warning"></i> Megan Dean
                                                        <div class="font-w400 text-muted"><small>Photographer</small></div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="base_pages_profile.html">
                                                        <img class="img-avatar" src="/assets/img/avatars/avatar10.jpg" alt="">
                                                        <i class="fa fa-circle text-warning"></i> Bruce Edwards
                                                        <div class="font-w400 text-muted"><small>Graphic Designer</small></div>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- END Users Navigation -->
                                        </div>
                                    </div>
                                    <!-- END Online Friends -->

                                    <!-- Quick Settings -->
                                    <div class="block pull-r-l">
                                        <div class="block-header bg-gray-lighter">
                                            <ul class="block-options">
                                                <li>
                                                    <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                                </li>
                                            </ul>
                                            <h3 class="block-title">Quick Settings</h3>
                                        </div>
                                        <div class="block-content">
                                            <!-- Quick Settings Form -->
                                            <form class="form-bordered" action="base_pages_dashboard.html" method="post" onsubmit="return false;">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-xs-8">
                                                            <div class="font-s13 font-w600">Online Status</div>
                                                            <div class="font-s13 font-w400 text-muted">Show your status to all</div>
                                                        </div>
                                                        <div class="col-xs-4 text-right">
                                                            <label class="css-input switch switch-sm switch-primary push-10-t">
                                                                <input type="checkbox"><span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-xs-8">
                                                            <div class="font-s13 font-w600">Auto Updates</div>
                                                            <div class="font-s13 font-w400 text-muted">Keep up to date</div>
                                                        </div>
                                                        <div class="col-xs-4 text-right">
                                                            <label class="css-input switch switch-sm switch-primary push-10-t">
                                                                <input type="checkbox"><span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-xs-8">
                                                            <div class="font-s13 font-w600">Notifications</div>
                                                            <div class="font-s13 font-w400 text-muted">Do you need them?</div>
                                                        </div>
                                                        <div class="col-xs-4 text-right">
                                                            <label class="css-input switch switch-sm switch-primary push-10-t">
                                                                <input type="checkbox" checked><span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-xs-8">
                                                            <div class="font-s13 font-w600">API Access</div>
                                                            <div class="font-s13 font-w400 text-muted">Enable/Disable access</div>
                                                        </div>
                                                        <div class="col-xs-4 text-right">
                                                            <label class="css-input switch switch-sm switch-primary push-10-t">
                                                                <input type="checkbox" checked><span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- END Quick Settings Form -->
                                        </div>
                                    </div>
                                    <!-- END Quick Settings -->
                                </div>
                                <!-- END Overview Tab -->

                                <!-- Sales Tab -->
                                <div class="tab-pane fade fade-left" id="tabs-side-overlay-sales">
                                    <div class="block pull-r-l">
                                        <!-- Stats -->
                                        <div class="block-content pull-t">
                                            <div class="row items-push">
                                                <div class="col-xs-6">
                                                    <div class="font-w700 text-gray-darker text-uppercase">Sales</div>
                                                    <a class="h3 font-w300 text-primary" href="javascript:void(0)">22030</a>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="font-w700 text-gray-darker text-uppercase">Balance</div>
                                                    <a class="h3 font-w300 text-primary" href="javascript:void(0)">$ 4.589,00</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END Stats -->

                                        <!-- Today -->
                                        <div class="block-content block-content-full block-content-mini bg-gray-lighter">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <span class="font-w600 font-s13 text-gray-darker text-uppercase">Today</span>
                                                </div>
                                                <div class="col-xs-6 text-right">
                                                    <span class="font-s13 text-muted">$996</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block-content">
                                            <ul class="list list-activity pull-r-l">
                                                <li>
                                                    <i class="fa fa-circle text-success"></i>
                                                    <div class="font-w600">New sale! + $249</div>
                                                    <div><small class="text-muted">3 min ago</small></div>
                                                </li>
                                                <li>
                                                    <i class="fa fa-circle text-success"></i>
                                                    <div class="font-w600">New sale! + $129</div>
                                                    <div><small class="text-muted">50 min ago</small></div>
                                                </li>
                                                <li>
                                                    <i class="fa fa-circle text-success"></i>
                                                    <div class="font-w600">New sale! + $119</div>
                                                    <div><small class="text-muted">2 hours ago</small></div>
                                                </li>
                                                <li>
                                                    <i class="fa fa-circle text-success"></i>
                                                    <div class="font-w600">New sale! + $499</div>
                                                    <div><small class="text-muted">3 hours ago</small></div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- END Today -->

                                        <!-- Yesterday -->
                                        <div class="block-content block-content-full block-content-mini bg-gray-lighter">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <span class="font-w600 font-s13 text-gray-darker text-uppercase">Yesterday</span>
                                                </div>
                                                <div class="col-xs-6 text-right">
                                                    <span class="font-s13 text-muted">$765</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block-content">
                                            <ul class="list list-activity pull-r-l">
                                                <li>
                                                    <i class="fa fa-circle text-success"></i>
                                                    <div class="font-w600">New sale! + $249</div>
                                                    <div><small class="text-muted">26 hours ago</small></div>
                                                </li>
                                                <li>
                                                    <i class="fa fa-circle text-danger"></i>
                                                    <div class="font-w600">Product Purchase - $50</div>
                                                    <div><small class="text-muted">28 hours ago</small></div>
                                                </li>
                                                <li>
                                                    <i class="fa fa-circle text-success"></i>
                                                    <div class="font-w600">New sale! + $119</div>
                                                    <div><small class="text-muted">29 hours ago</small></div>
                                                </li>
                                                <li>
                                                    <i class="fa fa-circle text-danger"></i>
                                                    <div class="font-w600">Paypal Withdrawal - $300</div>
                                                    <div><small class="text-muted">37 hours ago</small></div>
                                                </li>
                                                <li>
                                                    <i class="fa fa-circle text-success"></i>
                                                    <div class="font-w600">New sale! + $129</div>
                                                    <div><small class="text-muted">39 hours ago</small></div>
                                                </li>
                                                <li>
                                                    <i class="fa fa-circle text-success"></i>
                                                    <div class="font-w600">New sale! + $119</div>
                                                    <div><small class="text-muted">45 hours ago</small></div>
                                                </li>
                                                <li>
                                                    <i class="fa fa-circle text-success"></i>
                                                    <div class="font-w600">New sale! + $499</div>
                                                    <div><small class="text-muted">46 hours ago</small></div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- END Yesterday -->

                                        <!-- More -->
                                        <div class="text-center">
                                            <small><a href="javascript:void(0)">Load More..</a></small>
                                        </div>
                                        <!-- END More -->
                                    </div>
                                </div>
                                <!-- END Sales Tab -->
                            </div>
                        </div>
                        <!-- END Side Overlay Tabs -->
                    </div>
                    <!-- END Side Content -->
                </div>
                <!-- END Side Overlay Scroll Container -->
            </aside>
            <!-- END Side Overlay -->

            <!-- Sidebar -->
            <nav id="sidebar">
                <!-- Sidebar Scroll Container -->
                <div id="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
                    <div class="sidebar-content">
                        <!-- Side Header -->
                        <div class="side-header side-content bg-white-op">
                            <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                            <button class="btn btn-link text-gray pull-right hidden-md hidden-lg" type="button" data-toggle="layout" data-action="sidebar_close">
                                <i class="fa fa-times"></i>
                            </button>
                            <!-- Themes functionality initialized in App() -> uiHandleTheme() -->
                            <div class="btn-group pull-right">
                                <button class="btn btn-link text-gray dropdown-toggle" data-toggle="dropdown" type="button">
                                    <i class="si si-drop"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right font-s13 sidebar-mini-hide">
                                    <li>
                                        <a data-toggle="theme" data-theme="default" tabindex="-1" href="javascript:void(0)">
                                            <i class="fa fa-circle text-default pull-right"></i> <span class="font-w600">Default</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="theme" data-theme="/assets/css/themes/amethyst.min.css" tabindex="-1" href="javascript:void(0)">
                                            <i class="fa fa-circle text-amethyst pull-right"></i> <span class="font-w600">Amethyst</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="theme" data-theme="/assets/css/themes/city.min.css" tabindex="-1" href="javascript:void(0)">
                                            <i class="fa fa-circle text-city pull-right"></i> <span class="font-w600">City</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="theme" data-theme="/assets/css/themes/flat.min.css" tabindex="-1" href="javascript:void(0)">
                                            <i class="fa fa-circle text-flat pull-right"></i> <span class="font-w600">Flat</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="theme" data-theme="/assets/css/themes/modern.min.css" tabindex="-1" href="javascript:void(0)">
                                            <i class="fa fa-circle text-modern pull-right"></i> <span class="font-w600">Modern</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="theme" data-theme="/assets/css/themes/smooth.min.css" tabindex="-1" href="javascript:void(0)">
                                            <i class="fa fa-circle text-smooth pull-right"></i> <span class="font-w600">Smooth</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <a class="h5 text-white" href="index.html">
                                <i class="fa fa-circle-o-notch text-primary"></i> <span class="h4 font-w600 sidebar-mini-hide">ne</span>
                            </a>
                        </div>
                        <!-- END Side Header -->

                        <!-- Side Content -->
                        <div class="side-content side-content-full">
                            <ul class="nav-main">
                                <li>
                                    <a href="/hochu-kupit.php"><i class="si si-speedometer"></i><span class="sidebar-mini-hide">Спецтехника Б.У</span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="si si-rocket"></i><span class="sidebar-mini-hide">######</span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="si si-cup"></i><span class="sidebar-mini-hide">######</span></a>
                                </li>
                                
                            </ul>
                        </div>
                        <!-- END Side Content -->
                    </div>
                    <!-- Sidebar Content -->
                </div>
                <!-- END Sidebar Scroll Container -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="header-navbar" class="content-mini content-mini-full">
                <!-- Header Navigation Right -->
                <ul class="nav-header pull-right">
                    <li>
                        <div class="btn-group">
                            <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                                <img src="/assets/img/avatars/avatar10.jpg" alt="Avatar">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class="dropdown-header">Profile</li>
                                <li>
                                    <a tabindex="-1" href="base_pages_inbox.html">
                                        <i class="si si-envelope-open pull-right"></i>
                                        <span class="badge badge-primary pull-right">3</span>Inbox
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="base_pages_profile.html">
                                        <i class="si si-user pull-right"></i>
                                        <span class="badge badge-success pull-right">1</span>Profile
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="javascript:void(0)">
                                        <i class="si si-settings pull-right"></i>Settings
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Actions</li>
                                <li>
                                    <a tabindex="-1" href="base_pages_lock.html">
                                        <i class="si si-lock pull-right"></i>Lock Account
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="base_pages_login.html">
                                        <i class="si si-logout pull-right"></i>Log out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default" data-toggle="layout" data-action="side_overlay_toggle" type="button">
                            <i class="fa fa-tasks"></i>
                        </button>
                    </li>
                </ul>
                <!-- END Header Navigation Right -->

                <!-- Header Navigation Left -->
                <ul class="nav-header pull-left">
                    <li class="hidden-md hidden-lg">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default" data-toggle="layout" data-action="sidebar_toggle" type="button">
                            <i class="fa fa-navicon"></i>
                        </button>
                    </li>
                    <li class="hidden-xs hidden-sm">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default" data-toggle="layout" data-action="sidebar_mini_toggle" type="button">
                            <i class="fa fa-ellipsis-v"></i>
                        </button>
                    </li>
                    <li>
                        <!-- Opens the Apps modal found at the bottom of the page, before including JS code -->
                        <button class="btn btn-default pull-right" data-toggle="modal" data-target="#apps-modal" type="button">
                            <i class="si si-grid"></i>
                        </button>
                    </li>
                    <li class="visible-xs">
                        <!-- Toggle class helper (for .js-header-search below), functionality initialized in App() -> uiToggleClass() -->
                        <button class="btn btn-default" data-toggle="class-toggle" data-target=".js-header-search" data-class="header-search-xs-visible" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </li>
                    <li class="js-header-search header-search">
                        <form class="form-horizontal" action="base_pages_search.html" method="post">
                            <div class="form-material form-material-primary input-group remove-margin-t remove-margin-b">
                                <input class="form-control" type="text" id="base-material-text" name="base-material-text" placeholder="Search..">
                                <span class="input-group-addon"><i class="si si-magnifier"></i></span>
                            </div>
                        </form>
                    </li>
                </ul>
                <!-- END Header Navigation Left -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-sm-7">
                            <h1 class="page-heading">
                                Planner <small></small>
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Generic</li>
                                <li><a class="link-effect" href="">Blank</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content">
                <div class="col-md-12">
                            <!-- Default Elements -->
                            <div class="block">
                                <div class="block-header">
                                    <ul class="block-options">
                                        <li>
                                            <button type="button"><i class="si si-settings"></i></button>
                                        </li>
                                    </ul>
                                    <h3 class="block-title">Default Elements</h3>
                                </div>
                                <div class="block-content block-content-narrow">
                                    <form class="form-horizontal" action="action.php" method="post" enctype="multipart/form-data">
                                        
                                        <div class="form-group">
                                            <label class="col-xs-12" for="example-text-input">Модель спецтехники</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" id="example-text-input" name="name" placeholder="Text..">
                                                <div class="help-block">Further info about this input</div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-xs-12" for="example-textarea-input">Описание</label>
                                            <div class="col-xs-12">
                                                <textarea class="form-control" id="example-textarea-input" name="textarea" rows="6" placeholder="Content.."></textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-xs-12" for="example-file-input">File Input</label>
                                            <div class="col-xs-12">
                                                <input type="file" id="example-file-input" name="file">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-hashtag"> Цена</i></span>
                                                    <input class="form-control" type="text" id="example-input3-group1" name="price" placeholder="..">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END Default Elements -->
                        </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="content-mini content-mini-full font-s12 bg-gray-lighter clearfix">
                <div class="pull-right">
                    Crafted with <i class="fa fa-heart text-city"></i> by <a class="font-w600" href="http://goo.gl/vNS3I" target="_blank">pixelcave</a>
                </div>
                <div class="pull-left">
                    <a class="font-w600" href="http://goo.gl/6LF10W" target="_blank">OneUI 3.4</a> &copy; <span class="js-year-copy">2015</span>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->



        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
        <script src="/assets/js/core/jquery.min.js"></script>
        <script src="/assets/js/core/bootstrap.min.js"></script>
        <script src="/assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="/assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="/assets/js/core/jquery.appear.min.js"></script>
        <script src="/assets/js/core/jquery.countTo.min.js"></script>
        <script src="/assets/js/core/jquery.placeholder.min.js"></script>
        <script src="/assets/js/core/js.cookie.min.js"></script>
        <script src="/assets/js/app.js"></script>
    </body>
</html>
