<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets-admin/images/favicon.ico">

    <!-- plugins -->
    <link href="../assets-admin/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />

    <!-- third party css -->
    <link href="../assets-admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets-admin/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets-admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets-admin/libs/datatables.net-select-bs4/css/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <!-- App css -->
    <link href="../assets-admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="../assets-admin/css/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

    <link href="../assets-admin/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
    <link href="../assets-admin/css/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" disabled />

    <!-- icons -->
    <link href="../assets-admin/css/icons.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "light"}, "showRightSidebarOnPageLoad": true}'>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <div class="navbar-custom">
            <div class="container-fluid">
                <ul class="list-unstyled topnav-menu float-end mb-0">

                    <li class="dropdown d-none d-lg-inline-block">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="fullscreen" href="#">
                            <i data-feather="maximize"></i>
                        </a>
                    </li>

                    <li class="dropdown notification-list topbar-dropdown">
                        <a class="nav-link dropdown-toggle nav-user me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="../assets-admin/images/users/tm1.jpg" alt="user-image" class="rounded-circle">
                            <span class="pro-user-name ms-1">
                                Admin <i class="uil uil-angle-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <div class="dropdown-divider"></div>

                            <a href="{{ url('/logout') }}" class="dropdown-item notify-item">
                                <i data-feather="log-out" class="icon-dual icon-xs me-1"></i><span>Logout</span>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a href="javascript:void(0);" class="nav-link right-bar-toggle">
                            <i data-feather="settings"></i>
                        </a>
                    </li>

                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="../assets-admin/images/logo-sm.png" alt="" height="24">
                            <!-- <span class="logo-lg-text-light">Shreyu</span> -->
                        </span>
                        <span class="logo-lg">
                            <img src="../assets-admin/images/logo-dark.png" alt="" height="24">
                            <!-- <span class="logo-lg-text-light">S</span> -->
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="../assets-admin/images/logo-sm.png" alt="" height="24">
                        </span>
                        <span class="logo-lg">
                            <img src="../assets-admin/images/logo-light.png" alt="" height="24">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile">
                            <i data-feather="menu"></i>
                        </button>
                    </li>

                    <li>
                        <!-- Mobile menu toggle (Horizontal Layout)-->
                        <a class="navbar-toggle nav-link" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>

                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="h-100" data-simplebar>

                <!-- User box -->
                <div class="user-box text-center">
                    <img src="../assets-admin/images/users/tm1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
                    <div class="dropdown">
                        <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown">Admin</a>
                        <div class="dropdown-menu user-pro-dropdown">
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i data-feather="settings" class="icon-dual icon-xs me-1"></i><span>Settings</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="{{ url('/logout') }}" class="dropdown-item notify-item">
                                <i data-feather="log-out" class="icon-dual icon-xs me-1"></i><span>Logout</span>
                            </a>

                        </div>
                    </div>
                    <p class="text-muted">Admin Head</p>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul id="side-menu">

                        <!-- <li class="menu-title">Navigation</li> -->

                        <li>
                            <a href="{{ url('/admin/dashboard') }}">
                                <i data-feather="home"></i>
                                <span> Dashboards </span>
                                <!-- <span class="menu-arrow"></span> -->
                            </a>
                        </li>

                        <li class="menu-title mt-2">Apps</li>

                        <li>
                            <a href="{{ url('/admin/guests') }}">
                                <i data-feather="users"></i>
                                <span> Guests </span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/admin/rooms') }}">
                                <i data-feather="home"></i>
                                <span> Rooms </span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/admin/reservations') }}">
                                <i data-feather="file-text"></i>
                                <span> Reservations </span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/admin/bookings') }}">
                                <i data-feather="file-text"></i>
                                <span> Bookings </span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/admin/payments') }}">
                                <i data-feather="credit-card"></i>
                                <span> Payment </span>
                            </a>
                        </li>

                        <li>
                            <a href="#sidebarEmail" data-bs-toggle="collapse">
                                <i data-feather="activity"></i>
                                <span> Reports </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEmail">
                                <ul class="nav-second-level">
                                    <li><a href="{{ url('/admin/occupancy-rate-report') }}">Occupancy Rates</a></li>
                                    <li><a href="{{ url('/admin/revenue-report') }}">Revenue</a></li>
                                    <li><a href="{{ url('/admin/guest-report') }}">Guest Demographics</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->
        @yield('content')
    </div>
    <!-- END wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">

            <h6 class="fw-medium px-3 m-0 py-2 text-uppercase bg-light">
                <span class="d-block py-1">Pagee Settings</span>
            </h6>

            <div class="p-3">
                <div class="alert alert-warning" role="alert">
                    <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                </div>

                <h6 class="fw-medium mt-4 mb-2 pb-1">Color Scheme</h6>
                <div class="form-switch mb-1">
                    <input type="checkbox" class="form-check-input" name="color-scheme-mode" value="light" id="light-mode-check" checked />
                    <label class="form-check-label" for="light-mode-check">Light Mode</label>
                </div>

                <div class="form-switch mb-1">
                    <input type="checkbox" class="form-check-input" name="color-scheme-mode" value="dark" id="dark-mode-check" />
                    <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                </div>

                <!-- Width -->
                <h6 class="fw-medium mt-4 mb-2 pb-1">Width</h6>
                <div class="form-switch mb-1">
                    <input type="checkbox" class="form-check-input" name="width" value="fluid" id="fluid-check" checked />
                    <label class="form-check-label" for="fluid-check">Fluid</label>
                </div>
                <div class="form-switch mb-1">
                    <input type="checkbox" class="form-check-input" name="width" value="boxed" id="boxed-check" />
                    <label class="form-check-label" for="boxed-check">Boxed</label>
                </div>

                <!-- Menu positions -->
                <h6 class="fw-medium mt-4 mb-2 pb-1">Menus (Leftsidebar and Topbar) Positon</h6>

                <div class="form-switch mb-1">
                    <input type="checkbox" class="form-check-input" name="menus-position" value="fixed" id="fixed-check" checked />
                    <label class="form-check-label" for="fixed-check">Fixed</label>
                </div>

                <div class="form-switch mb-1">
                    <input type="checkbox" class="form-check-input" name="menus-position" value="scrollable" id="scrollable-check" />
                    <label class="form-check-label" for="scrollable-check">Scrollable</label>
                </div>

                <!-- Left Sidebar-->
                <h6 class="fw-medium mt-4 mb-2 pb-1">Left Sidebar Color</h6>

                <div class="form-switch mb-1">
                    <input type="checkbox" class="form-check-input" name="leftsidebar-color" value="light" id="light-check" checked />
                    <label class="form-check-label" for="light-check">Light</label>
                </div>

                <div class="form-switch mb-1">
                    <input type="checkbox" class="form-check-input" name="leftsidebar-color" value="dark" id="dark-check" />
                    <label class="form-check-label" for="dark-check">Dark</label>
                </div>

                <!-- size -->
                <h6 class="fw-medium mt-4 mb-2 pb-1">Left Sidebar Size</h6>

                <div class="form-switch mb-1">
                    <input type="checkbox" class="form-check-input" name="leftsidebar-size" value="default" id="default-size-check" checked />
                    <label class="form-check-label" for="default-size-check">Default</label>
                </div>

                <div class="form-switch mb-1">
                    <input type="checkbox" class="form-check-input" name="leftsidebar-size" value="condensed" id="condensed-check" />
                    <label class="form-check-label" for="condensed-check">Condensed <small>(Extra Small
                            size)</small></label>
                </div>

                <div class="form-switch mb-1">
                    <input type="checkbox" class="form-check-input" name="leftsidebar-size" value="compact" id="compact-check" />
                    <label class="form-check-label" for="compact-check">Compact <small>(Small size)</small></label>
                </div>

                <!-- Topbar -->
                <h6 class="fw-medium mt-4 mb-2 pb-1">Topbar</h6>

                <div class="form-switch mb-1">
                    <input type="checkbox" class="form-check-input" name="topbar-color" value="dark" id="darktopbar-check" checked />
                    <label class="form-check-label" for="darktopbar-check">Dark</label>
                </div>

                <div class="form-switch mb-1">
                    <input type="checkbox" class="form-check-input" name="topbar-color" value="light" id="lighttopbar-check" />
                    <label class="form-check-label" for="lighttopbar-check">Light</label>
                </div>


                <button class="btn btn-primary w-100 mt-4" id="resetBtn">Reset to Default</button>

            </div>

        </div>
        <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="../assets-admin/js/vendor.min.js"></script>

    <!-- optional plugins -->
    <script src="../assets-admin/libs/moment/min/moment.min.js"></script>
    <script src="../assets-admin/libs/apexcharts/apexcharts.min.js"></script>
    <script src="../assets-admin/libs/flatpickr/flatpickr.min.js"></script>

    <!-- page js -->
    <script src="../assets-admin/js/pages/dashboard.init.js"></script>

    <!-- App js -->
    <script src="../assets-admin/js/app.min.js"></script>

    <!-- third party js -->
    <script src="../assets-admin/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../assets-admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets-admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../assets-admin/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    <script src="../assets-admin/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../assets-admin/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="../assets-admin/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../assets-admin/libs/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../assets-admin/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../assets-admin/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../assets-admin/libs/datatables.net-select/js/dataTables.select.min.js"></script>
    <!-- third party js ends -->

    <!-- Datatables init -->
    <script src="../assets-admin/js/pages/datatables.init.js"></script>

</body>

</html>