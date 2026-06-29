<!doctype html>
<html lang="en" data-layout="topnav" data-topbar-color="dark" data-menu-color="light">
    
<!-- Mirrored from coderthemes.com/paces/bootstrap/layouts-horizontal.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Jun 2026 09:59:06 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Horizontal Menu | Paces - Multipurpose Tailwind CSS & Bootstrap Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="Paces is a modern, responsive admin dashboard available on ThemeForest. Ideal for building CRM, CMS, project management tools, and custom web applications with a clean UI, flexible layouts, and rich features." />
        <meta name="keywords" content="Paces, admin dashboard, ThemeForest, Bootstrap 5 admin, responsive admin, CRM dashboard, CMS admin, web app UI, admin theme, premium admin template" />
        <meta name="author" content="Coderthemes" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.ico') }}" />
 <!-- Theme Config Js -->
<script src="{{ asset('admin/assets/js/config.js') }}"></script>
        <script src="{{ asset('admin/demo.js') }}"></script>

<!-- Vendor css -->
<link href="{{ asset('admin/assets/css/vendors.min.css') }}" rel="stylesheet" type="text/css" />

<!-- App css -->
<link id="app-style" href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <!-- Begin page -->
        <div class="wrapper">
            <header class="app-topbar">
                <div class="container-fluid topbar-menu">
                    <div class="d-flex align-items-center gap-2">
                        <!-- Topbar Brand Logo -->
                        <div class="logo-topbar">
                            <!-- Logo light -->
                            <a href="{{ url('admin') }}" class="logo-light">
                                <span class="logo-lg">
                                    <img src="{{ asset('admin/assets/images/logo.png') }}" alt="logo" />
                                </span>
                                <span class="logo-sm">
                                    <img src="{{ asset('admin/assets/images/logo-sm.png') }}" alt="small logo" />
                                </span>
                            </a>

                            <!-- Logo Dark -->
                            <a href="{{ url('admin') }}" class="logo-dark">
                                <span class="logo-lg">
                                    <img src="{{ asset('admin/assets/images/logo-black.png') }}" alt="dark logo" />
                                </span>
                                <span class="logo-sm">
                                    <img src="{{ asset('admin/assets/images/logo-sm.png') }}" alt="small logo" />
                                </span>
                            </a>
                        </div>

                        <!-- Sidebar Menu Toggle Button -->
                        <button class="sidenav-toggle-button btn btn-primary btn-icon">
                            <i class="ti ti-menu-4"></i>
                        </button>

                        <!-- Horizontal Menu Toggle Button -->
                        <button class="topnav-toggle-button px-2" data-bs-toggle="collapse" data-bs-target="#topnav-menu">
                            <i class="ti ti-menu-4"></i>
                        </button>

                        <div id="search-box-rounded" class="app-search d-none d-xl-flex">
                            <input type="search" class="form-control rounded-pill topbar-search" name="search" placeholder="Quick Search..." />
                            <i class="ti ti-search app-search-icon text-muted"></i>
                        </div>

                        <div id="megamenu-columns" class="topbar-item d-none d-md-flex">
                            <div class="dropdown">
                                <button class="topbar-link btn fw-medium btn-link dropdown-toggle drop-arrow-none px-2" data-bs-toggle="dropdown" type="button" aria-haspopup="false" aria-expanded="false">
                                    Mega Menu
                                    <i class="ti ti-chevron-down ms-1"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-xxl p-0">
                                    <div class="h-100" style="max-height: 380px" data-simplebar="">
                                        <div class="row g-0">
                                            <!-- Dashboard & Analytics -->
                                            <div class="col-md-4">
                                                <div class="p-2">
                                                    <h5 class="mb-1 fw-semibold fs-sm dropdown-header">Dashboard &amp; Analytics</h5>
                                                    <ul class="list-unstyled megamenu-list">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                <i class="ti ti-chevron-right align-middle me-1 text-muted"></i>
                                                                Sales Dashboard
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                <i class="ti ti-chevron-right align-middle me-1 text-muted"></i>
                                                                Marketing Dashboard
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                <i class="ti ti-chevron-right align-middle me-1 text-muted"></i>
                                                                Finance Overview
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                <i class="ti ti-chevron-right align-middle me-1 text-muted"></i>
                                                                User Analytics
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                <i class="ti ti-chevron-right align-middle me-1 text-muted"></i>
                                                                Traffic Insights
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Project Management -->
                                            <div class="col-md-4">
                                                <div class="p-2">
                                                    <h5 class="mb-1 fw-semibold fs-sm dropdown-header">Project Management</h5>
                                                    <ul class="list-unstyled megamenu-list">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                <i class="ti ti-minus align-middle me-1 text-muted"></i>
                                                                Kanban Workflow
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                <i class="ti ti-minus align-middle me-1 text-muted"></i>
                                                                Project Timeline
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                <i class="ti ti-minus align-middle me-1 text-muted"></i>
                                                                Task Management
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                <i class="ti ti-minus align-middle me-1 text-muted"></i>
                                                                Team Members
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                <i class="ti ti-minus align-middle me-1 text-muted"></i>
                                                                Assignments
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- User Management -->
                                            <div class="col-md-4">
                                                <div class="p-2 bg-light bg-opacity-50">
                                                    <h5 class="mb-1 fw-semibold fs-sm dropdown-header">User Management</h5>
                                                    <ul class="list-unstyled megamenu-list">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                <i class="ti ti-chevron-right align-middle me-1 text-muted"></i>
                                                                User Profiles
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                <i class="ti ti-chevron-right align-middle me-1 text-muted"></i>
                                                                Access Control
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                <i class="ti ti-chevron-right align-middle me-1 text-muted"></i>
                                                                Security Settings
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                <i class="ti ti-chevron-right align-middle me-1 text-muted"></i>
                                                                User Groups
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                <i class="ti ti-chevron-right align-middle me-1 text-muted"></i>
                                                                Authentication
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end .h-100-->
                                </div>
                                <!-- .dropdown-menu-->
                            </div>
                            <!-- .dropdown-->
                        </div>

                        <div id="megamenu-apps" class="topbar-item d-none d-md-flex">
                            <div class="dropdown">
                                <button class="topbar-link btn fw-medium btn-link dropdown-toggle drop-arrow-none px-2" data-bs-toggle="dropdown" type="button" aria-haspopup="false" aria-expanded="false">
                                    Apps
                                    <i class="ti ti-chevron-down ms-1"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-xxl p-0">
                                    <div class="h-100" style="max-height: 380px" data-simplebar="">
                                        <div class="row g-0">
                                            <div class="col-sm-8">
                                                <div class="row g-0">
                                                    <div class="col-sm-6">
                                                        <div class="p-2">
                                                            <a href="#!" class="dropdown-item">
                                                                <span class="d-flex align-items-center">
                                                                    <span class="avatar-md me-2">
                                                                        <span class="avatar-title text-primary border border-light bg-light bg-opacity-50 rounded">
                                                                            <i class="ti ti-basket fs-22"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span>
                                                                        <h5 class="fs-base mb-0 lh-base">eCommerce</h5>
                                                                        <span class="text-muted fs-12">Products, orders &amp; etc.</span>
                                                                    </span>
                                                                </span>
                                                            </a>

                                                            <a href="#!" class="dropdown-item my-2">
                                                                <span class="d-flex align-items-center">
                                                                    <span class="avatar-md me-2">
                                                                        <span class="avatar-title text-success border border-light bg-light bg-opacity-50 rounded">
                                                                            <i class="ti ti-message fs-22"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span>
                                                                        <h5 class="fs-base mb-0 lh-base">Chat</h5>
                                                                        <span class="text-muted fs-12">Team conversations</span>
                                                                    </span>
                                                                </span>
                                                            </a>

                                                            <a href="#!" class="dropdown-item my-2">
                                                                <span class="d-flex align-items-center">
                                                                    <span class="avatar-md me-2">
                                                                        <span class="avatar-title text-danger border border-light bg-light bg-opacity-50 rounded">
                                                                            <i class="ti ti-list-check fs-22"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span>
                                                                        <h5 class="fs-base mb-0 lh-base">Task</h5>
                                                                        <span class="text-muted fs-12">Plan and track work</span>
                                                                    </span>
                                                                </span>
                                                            </a>

                                                            <a href="#!" class="dropdown-item mt-2">
                                                                <span class="d-flex align-items-center">
                                                                    <span class="avatar-md me-2">
                                                                        <span class="avatar-title text-info border border-light bg-light bg-opacity-50 rounded">
                                                                            <i class="ti ti-mailbox fs-22"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span>
                                                                        <h5 class="fs-base mb-0 lh-base">Email</h5>
                                                                        <span class="text-muted fs-12">Messages and inbox</span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="p-2">
                                                            <a href="#!" class="dropdown-item">
                                                                <span class="d-flex align-items-center">
                                                                    <span class="avatar-md me-2">
                                                                        <span class="avatar-title text-secondary border border-light bg-light bg-opacity-50 rounded">
                                                                            <i class="ti ti-building fs-22"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span>
                                                                        <h5 class="fs-base mb-0 lh-base">Companies</h5>
                                                                        <span class="text-muted fs-12">Business profiles</span>
                                                                    </span>
                                                                </span>
                                                            </a>

                                                            <a href="#!" class="dropdown-item my-2">
                                                                <span class="d-flex align-items-center">
                                                                    <span class="avatar-md me-2">
                                                                        <span class="avatar-title text-dark border border-light bg-light bg-opacity-50 rounded">
                                                                            <i class="ti ti-id fs-22"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span>
                                                                        <h5 class="fs-base mb-0 lh-base">Contacts Diary</h5>
                                                                        <span class="text-muted fs-12">People and connections</span>
                                                                    </span>
                                                                </span>
                                                            </a>

                                                            <a href="#!" class="dropdown-item my-2">
                                                                <span class="d-flex align-items-center">
                                                                    <span class="avatar-md me-2">
                                                                        <span class="avatar-title text-warning border border-light bg-light bg-opacity-50 rounded">
                                                                            <i class="ti ti-calendar fs-22"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span>
                                                                        <h5 class="fs-base mb-0 lh-base">Calendar</h5>
                                                                        <span class="text-muted fs-12">Events and reminders</span>
                                                                    </span>
                                                                </span>
                                                            </a>

                                                            <a href="#!" class="dropdown-item mt-2">
                                                                <span class="d-flex align-items-center">
                                                                    <span class="avatar-md me-2">
                                                                        <span class="avatar-title text-success border border-light bg-light bg-opacity-50 rounded">
                                                                            <i class="ti ti-lifebuoy fs-22"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span>
                                                                        <h5 class="fs-base mb-0 lh-base">Support</h5>
                                                                        <span class="text-muted fs-12">Help and assistance</span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end row-->

                                                <div class="row g-0 border-top border-light border-dashed text-center">
                                                    <div class="col">
                                                        <div class="p-3">
                                                            <p class="fw-medium text-muted mb-2 fs-11 text-uppercase lh-1">-: &nbsp; Support &nbsp;:-</p>
                                                            <h5 class="fs-15 mb-0">help@mydomain.com</h5>
                                                        </div>
                                                    </div>
                                                    <!-- end col-->
                                                    <div class="col">
                                                        <div class="p-3">
                                                            <p class="fw-medium text-muted mb-2 fs-11 text-uppercase lh-1">-: &nbsp; Help: &nbsp;:-</p>
                                                            <h5 class="fs-15 mb-0">+(12) 3456 7890</h5>
                                                        </div>
                                                    </div>
                                                    <!-- end col-->
                                                </div>
                                                <!-- end row-->
                                            </div>
                                            <!-- end col-->

                                            <div class="col-sm-4">
                                                <div class="h-100 position-relative rounded-end rounded-0 overflow-hidden" style="background: url({{ asset('admin/assets/images/stock/small-8.jpg') }}); background-size: cover">
                                                    <div class="p-3 card-img-overlay bg-gradient bg-secondary bg-opacity-90 d-flex align-items-center justify-content-center">
                                                        <div class="text-center text-white">
                                                            <i class="ti ti-atom fs-36"></i>

                                                            <p class="text-white text-opacity-75 mb-3 text-uppercase">Limited Offer</p>

                                                            <h3 class="fw-semibold text-white mb-2 fs-20">Unlock Exclusive Savings</h3>

                                                            <h4 class="fw-medium fs-16 mb-1">
                                                                <del class="text-white text-opacity-75">$49.00</del>
                                                                /
                                                                <span class="fw-bold text-white">$25 USD</span>
                                                            </h4>

                                                            <button type="button" class="btn btn-danger btn-sm mt-3">
                                                                <i class="ti ti-shopping-cart me-1"></i>
                                                                Grab Deal
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end .bg-light-->
                                            </div>
                                            <!-- end col-->
                                        </div>
                                        <!-- end row-->
                                    </div>
                                    <!-- end .h-100-->
                                </div>
                                <!-- .dropdown-menu-->
                            </div>
                            <!-- .dropdown-->
                        </div>
                    </div>

                    <div class="d-flex align-items-center gap-2">
                        <div id="theme-dropdown" class="topbar-item d-none d-sm-flex">
                            <div class="dropdown">
                                <button class="topbar-link" data-bs-toggle="dropdown" type="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="ti ti-sun topbar-link-icon d-none" id="theme-icon-light"></i>
                                    <i class="ti ti-moon topbar-link-icon d-none" id="theme-icon-dark"></i>
                                    <i class="ti ti-sun-moon topbar-link-icon d-none" id="theme-icon-system"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" data-thememode="dropdown">
                                    <label class="dropdown-item cursor-pointer">
                                        <input class="form-check-input" type="radio" name="data-bs-theme" value="light" style="display: none" />
                                        <i class="ti ti-sun align-middle me-1 fs-16"></i>
                                        <span class="align-middle">Light</span>
                                    </label>
                                    <label class="dropdown-item cursor-pointer">
                                        <input class="form-check-input" type="radio" name="data-bs-theme" value="dark" style="display: none" />
                                        <i class="ti ti-moon align-middle me-1 fs-16"></i>
                                        <span class="align-middle">Dark</span>
                                    </label>
                                    <label class="dropdown-item cursor-pointer">
                                        <input class="form-check-input" type="radio" name="data-bs-theme" value="system" style="display: none" />
                                        <i class="ti ti-sun-moon align-middle me-1 fs-16"></i>
                                        <span class="align-middle">System</span>
                                    </label>
                                </div>
                                <!-- end dropdown-menu-->
                            </div>
                            <!-- end dropdown-->
                        </div>

                        <div id="apps-dropdown-grid" class="topbar-item d-none d-xl-flex">
                            <div class="dropdown">
                                <button class="topbar-link dropdown-toggle drop-arrow-none" data-bs-toggle="dropdown" type="button" data-bs-auto-close="outside" aria-haspopup="false" aria-expanded="false">
                                    <i class="ti ti-apps topbar-link-icon"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-lg p-2 dropdown-menu-end">
                                    <div class="row align-items-center g-1">
                                        <div class="col-4">
                                            <a href="javascript:void(0);" class="dropdown-item border border-dashed rounded text-center py-2">
                                                <span class="avatar-sm d-block mx-auto mb-1">
                                                    <span class="avatar-title text-bg-light rounded-circle">
                                                        <img src="{{ asset('admin/assets/images/logos/google.svg') }}" alt="Google Logo" height="18" />
                                                    </span>
                                                </span>
                                                <span class="align-middle fw-medium">Google</span>
                                            </a>
                                        </div>

                                        <div class="col-4">
                                            <a href="javascript:void(0);" class="dropdown-item border border-dashed rounded text-center py-2">
                                                <span class="avatar-sm d-block mx-auto mb-1">
                                                    <span class="avatar-title text-bg-light rounded-circle">
                                                        <img src="{{ asset('admin/assets/images/logos/figma.svg') }}" alt="Figma Logo" height="18" />
                                                    </span>
                                                </span>
                                                <span class="align-middle fw-medium">Figma</span>
                                            </a>
                                        </div>

                                        <div class="col-4">
                                            <a href="javascript:void(0);" class="dropdown-item border border-dashed rounded text-center py-2">
                                                <span class="avatar-sm d-block mx-auto mb-1">
                                                    <span class="avatar-title text-bg-light rounded-circle">
                                                        <img src="{{ asset('admin/assets/images/logos/slack.svg') }}" alt="Slack Logo" height="18" />
                                                    </span>
                                                </span>
                                                <span class="align-middle fw-medium">Slack</span>
                                            </a>
                                        </div>

                                        <div class="col-4">
                                            <a href="javascript:void(0);" class="dropdown-item border border-dashed rounded text-center py-2">
                                                <span class="avatar-sm d-block mx-auto mb-1">
                                                    <span class="avatar-title text-bg-light rounded-circle">
                                                        <img src="{{ asset('admin/assets/images/logos/dropbox.svg') }}" alt="Dropbox Logo" height="18" />
                                                    </span>
                                                </span>
                                                <span class="align-middle fw-medium">Dropbox</span>
                                            </a>
                                        </div>

                                        <div class="col-4 text-center">
                                            <a href="javascript:void(0);" class="btn btn-sm rounded-circle btn-icon btn-danger">
                                                <i class="ti ti-circle-dashed-plus fs-18"></i>
                                            </a>
                                        </div>

                                        <div class="col-4">
                                            <a href="javascript:void(0);" class="dropdown-item border border-dashed rounded text-center py-2">
                                                <span class="avatar-sm d-block mx-auto mb-1">
                                                    <span class="avatar-title bg-primary-subtle text-primary rounded-circle">
                                                        <i class="ti ti-calendar fs-18"></i>
                                                    </span>
                                                </span>
                                                <span class="align-middle fw-medium">Calendar</span>
                                            </a>
                                        </div>

                                        <div class="col-4">
                                            <a href="javascript:void(0);" class="dropdown-item border border-dashed rounded text-center py-2">
                                                <span class="avatar-sm d-block mx-auto mb-1">
                                                    <span class="avatar-title bg-primary-subtle text-primary rounded-circle">
                                                        <i class="ti ti-message-circle fs-18"></i>
                                                    </span>
                                                </span>
                                                <span class="align-middle fw-medium">Chat</span>
                                            </a>
                                        </div>

                                        <div class="col-4">
                                            <a href="javascript:void(0);" class="dropdown-item border border-dashed rounded text-center py-2">
                                                <span class="avatar-sm d-block mx-auto mb-1">
                                                    <span class="avatar-title bg-primary-subtle text-primary rounded-circle">
                                                        <i class="ti ti-folder fs-18"></i>
                                                    </span>
                                                </span>
                                                <span class="align-middle fw-medium">Files</span>
                                            </a>
                                        </div>

                                        <div class="col-4">
                                            <a href="javascript:void(0);" class="dropdown-item border border-dashed rounded text-center py-2">
                                                <span class="avatar-sm d-block mx-auto mb-1">
                                                    <span class="avatar-title bg-primary-subtle text-primary rounded-circle">
                                                        <i class="ti ti-users fs-18"></i>
                                                    </span>
                                                </span>
                                                <span class="align-middle fw-medium">Team</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End dropdown-menu -->
                            </div>
                            <!-- end dropdown-->
                        </div>

                        <div id="notification-dropdown-people" class="topbar-item">
                            <div class="dropdown">
                                <button class="topbar-link dropdown-toggle drop-arrow-none" data-bs-toggle="dropdown" type="button" data-bs-auto-close="outside" aria-haspopup="false" aria-expanded="false">
                                    <i class="ti ti-bell topbar-link-icon animate-ring"></i>
                                    <span class="badge text-bg-danger badge-circle topbar-badge">5</span>
                                </button>

                                <div class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-lg">
                                    <div class="px-3 py-2 border-bottom">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-0 fs-md fw-semibold">Notifications</h6>
                                            </div>
                                            <div class="col text-end">
                                                <a href="#!" class="badge badge-soft-success badge-label py-1">07 Notifications</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div style="max-height: 300px" data-simplebar="">
                                        <!-- Notification 1 -->
                                        <div class="dropdown-item notification-item py-2 text-wrap" id="message-1">
                                            <span class="d-flex align-items-center gap-3">
                                                <span class="flex-shrink-0 position-relative">
                                                    <img src="{{ asset('admin/assets/images/users/user-4.jpg') }}" class="avatar-md rounded-circle" alt="User Avatar" />
                                                    <span class="position-absolute rounded-pill bg-success notification-badge">
                                                        <i class="ti ti-bell align-middle"></i>
                                                        <span class="visually-hidden">unread notification</span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1 text-muted">
                                                    <span class="fw-medium text-body">Emily Johnson</span>
                                                    commented on a task in
                                                    <span class="fw-medium text-body">Design Sprint</span>
                                                    <br />
                                                    <span class="fs-xs">12 minutes ago</span>
                                                </span>
                                                <button type="button" class="flex-shrink-0 text-muted btn btn-link p-0 position-absolute end-0 me-2 d-none noti-close-btn" data-dismissible="#message-1">
                                                    <i class="ti ti-square-rounded-x fs-xxl"></i>
                                                </button>
                                            </span>
                                        </div>

                                        <!-- Notification 2 -->
                                        <div class="dropdown-item notification-item py-2 text-wrap" id="message-2">
                                            <span class="d-flex align-items-center gap-3">
                                                <span class="flex-shrink-0 position-relative">
                                                    <img src="{{ asset('admin/assets/images/users/user-5.jpg') }}" class="avatar-md rounded-circle" alt="User Avatar" />
                                                    <span class="position-absolute rounded-pill bg-info notification-badge">
                                                        <i class="ti ti-cloud-upload align-middle"></i>
                                                        <span class="visually-hidden">upload notification</span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1 text-muted">
                                                    <span class="fw-medium text-body">Michael Lee</span>
                                                    uploaded files to
                                                    <span class="fw-medium text-body">Marketing Assets</span>
                                                    <br />
                                                    <span class="fs-xs">25 minutes ago</span>
                                                </span>
                                                <button type="button" class="flex-shrink-0 text-muted btn btn-link p-0 position-absolute end-0 me-2 d-none noti-close-btn" data-dismissible="#message-2">
                                                    <i class="ti ti-square-rounded-x fs-xxl"></i>
                                                </button>
                                            </span>
                                        </div>

                                        <!-- Notification 3 - Server CPU Alert -->
                                        <div class="dropdown-item notification-item py-2 text-wrap" id="message-6">
                                            <span class="d-flex align-items-center gap-3">
                                                <span class="flex-shrink-0 position-relative">
                                                    <span class="avatar-md rounded-circle bg-light d-flex align-items-center justify-content-center">
                                                        <i class="ti ti-database fs-4"></i>
                                                    </span>
                                                    <span class="position-absolute rounded-pill bg-danger notification-badge">
                                                        <i class="ti ti-alert-circle align-middle"></i>
                                                        <span class="visually-hidden">server alert</span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1 text-muted">
                                                    <span class="fw-medium text-body">Server #3</span>
                                                    CPU usage exceeded 90%
                                                    <br />
                                                    <span class="fs-xs">Just now</span>
                                                </span>
                                                <button type="button" class="flex-shrink-0 text-muted btn btn-link p-0 position-absolute end-0 me-2 d-none noti-close-btn" data-dismissible="#message-6">
                                                    <i class="ti ti-square-rounded-x fs-xxl"></i>
                                                </button>
                                            </span>
                                        </div>

                                        <!-- Notification 4 -->
                                        <div class="dropdown-item notification-item py-2 text-wrap" id="message-3">
                                            <span class="d-flex align-items-center gap-3">
                                                <span class="flex-shrink-0 position-relative">
                                                    <img src="{{ asset('admin/assets/images/users/user-6.jpg') }}" class="avatar-md rounded-circle" alt="User Avatar" />
                                                    <span class="position-absolute rounded-pill bg-warning notification-badge">
                                                        <i class="ti ti-alert-triangle align-middle"></i>
                                                        <span class="visually-hidden">alert</span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1 text-muted">
                                                    <span class="fw-medium text-body">Sophia Ray</span>
                                                    flagged an issue in
                                                    <span class="fw-medium text-body">Bug Tracker</span>
                                                    <br />
                                                    <span class="fs-xs">40 minutes ago</span>
                                                </span>
                                                <button type="button" class="flex-shrink-0 text-muted btn btn-link p-0 position-absolute end-0 me-2 d-none noti-close-btn" data-dismissible="#message-3">
                                                    <i class="ti ti-square-rounded-x fs-xxl"></i>
                                                </button>
                                            </span>
                                        </div>

                                        <!-- Notification 5 -->
                                        <div class="dropdown-item notification-item py-2 text-wrap" id="message-4">
                                            <span class="d-flex align-items-center gap-3">
                                                <span class="flex-shrink-0 position-relative">
                                                    <img src="{{ asset('admin/assets/images/users/user-7.jpg') }}" class="avatar-md rounded-circle" alt="User Avatar" />
                                                    <span class="position-absolute rounded-pill bg-primary notification-badge">
                                                        <i class="ti ti-calendar-event align-middle"></i>
                                                        <span class="visually-hidden">event notification</span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1 text-muted">
                                                    <span class="fw-medium text-body">David Kim</span>
                                                    scheduled a meeting for
                                                    <span class="fw-medium text-body">UX Review</span>
                                                    <br />
                                                    <span class="fs-xs">1 hour ago</span>
                                                </span>
                                                <button type="button" class="flex-shrink-0 text-muted btn btn-link p-0 position-absolute end-0 me-2 d-none noti-close-btn" data-dismissible="#message-4">
                                                    <i class="ti ti-square-rounded-x fs-xxl"></i>
                                                </button>
                                            </span>
                                        </div>

                                        <!-- Notification 6 -->
                                        <div class="dropdown-item notification-item py-2 text-wrap" id="message-5">
                                            <span class="d-flex align-items-center gap-3">
                                                <span class="flex-shrink-0 position-relative">
                                                    <img src="{{ asset('admin/assets/images/users/user-8.jpg') }}" class="avatar-md rounded-circle" alt="User Avatar" />
                                                    <span class="position-absolute rounded-pill bg-secondary notification-badge">
                                                        <i class="ti ti-edit align-middle"></i>
                                                        <span class="visually-hidden">edit</span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1 text-muted">
                                                    <span class="fw-medium text-body">Isabella White</span>
                                                    updated the document in
                                                    <span class="fw-medium text-body">Product Specs</span>
                                                    <br />
                                                    <span class="fs-xs">2 hours ago</span>
                                                </span>
                                                <button type="button" class="flex-shrink-0 text-muted btn btn-link p-0 position-absolute end-0 me-2 d-none noti-close-btn" data-dismissible="#message-5">
                                                    <i class="ti ti-square-rounded-x fs-xxl"></i>
                                                </button>
                                            </span>
                                        </div>

                                        <!-- Notification 7 - Deployment Success -->
                                        <div class="dropdown-item notification-item py-2 text-wrap" id="message-7">
                                            <span class="d-flex align-items-center gap-3">
                                                <span class="flex-shrink-0 position-relative">
                                                    <span class="avatar-md rounded-circle bg-light d-flex align-items-center justify-content-center">
                                                        <i class="ti ti-rocket fs-4"></i>
                                                    </span>
                                                    <span class="position-absolute rounded-pill bg-success notification-badge">
                                                        <i class="ti ti-check align-middle"></i>
                                                        <span class="visually-hidden">deployment</span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1 text-muted">
                                                    <span class="fw-medium text-body">Production Server</span>
                                                    deployment completed successfully
                                                    <br />
                                                    <span class="fs-xs">30 minutes ago</span>
                                                </span>
                                                <button type="button" class="flex-shrink-0 text-muted btn btn-link p-0 position-absolute end-0 me-2 d-none noti-close-btn" data-dismissible="#message-7">
                                                    <i class="ti ti-square-rounded-x fs-xxl"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-reset text-decoration-underline link-offset-2 fw-bold notify-item border-top border-light py-2">Read All Messages</a>
                                </div>
                                <!-- End dropdown-menu -->
                            </div>
                            <!-- end dropdown-->
                        </div>

                        <div id="fullscreen-toggler" class="topbar-item d-none d-md-flex">
                            <button class="topbar-link" type="button" data-toggle="fullscreen">
                                <i class="ti ti-maximize topbar-link-icon"></i>
                                <i class="ti ti-minimize topbar-link-icon d-none"></i>
                            </button>
                        </div>

                        <div id="monochrome-toggler" class="topbar-item d-none d-xl-flex">
                            <button id="monochrome-mode" class="topbar-link" type="button" data-toggle="monochrome">
                                <i class="ti ti-palette topbar-link-icon"></i>
                            </button>
                        </div>

                        <div class="topbar-item d-none d-sm-flex">
                            <button class="topbar-link btn-theme-setting" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" type="button">
                                <i class="ti ti-settings topbar-link-icon"></i>
                            </button>
                        </div>

                        <div id="language-selector-rounded" class="topbar-item">
                            <div class="dropdown">
                                <button class="topbar-link fw-bold" data-bs-toggle="dropdown" type="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="{{ asset('admin/assets/images/flags/us.svg') }}" alt="user-image" class="rounded-circle me-2" height="18" id="selected-language-image" />
                                    <span id="selected-language-code">EN</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item" data-translator-lang="en" title="English">
                                        <img src="{{ asset('admin/assets/images/flags/us.svg') }}" alt="English" class="me-1 rounded-circle" height="18" data-translator-image="" />
                                        <span class="align-middle">English</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item" data-translator-lang="de" title="German">
                                        <img src="{{ asset('admin/assets/images/flags/de.svg') }}" alt="German" class="me-1 rounded-circle" height="18" data-translator-image="" />
                                        <span class="align-middle">Deutsch</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item" data-translator-lang="it" title="Italian">
                                        <img src="{{ asset('admin/assets/images/flags/it.svg') }}" alt="Italian" class="me-1 rounded-circle" height="18" data-translator-image="" />
                                        <span class="align-middle">Italiano</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item" data-translator-lang="es" title="Spanish">
                                        <img src="{{ asset('admin/assets/images/flags/es.svg') }}" alt="Spanish" class="me-1 rounded-circle" height="18" data-translator-image="" />
                                        <span class="align-middle">Español</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item" data-translator-lang="ru" title="Russian">
                                        <img src="{{ asset('admin/assets/images/flags/ru.svg') }}" alt="Russian" class="me-1 rounded-circle" height="18" data-translator-image="" />
                                        <span class="align-middle">Русский</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item" data-translator-lang="hi" title="Hindi">
                                        <img src="{{ asset('admin/assets/images/flags/in.svg') }}" alt="Hindi" class="me-1 rounded-circle" height="18" data-translator-image="" />
                                        <span class="align-middle">हिन्दी</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item" data-translator-lang="ar" title="Arabic">
                                        <img src="{{ asset('admin/assets/images/flags/sa.svg') }}" alt="Arabic" class="me-1 rounded-circle" height="18" data-translator-image="" />
                                        <span class="align-middle">عربي</span>
                                    </a>
                                </div>
                                <!-- end dropdown-menu-->
                            </div>
                            <!-- end dropdown-->
                        </div>

                        <div id="user-dropdown-detailed" class="topbar-item nav-user">
                            <div class="dropdown">
                                <a class="topbar-link dropdown-toggle drop-arrow-none px-2" data-bs-toggle="dropdown" href="#!" aria-haspopup="false" aria-expanded="false">
                                    <img src="{{ asset('admin/assets/images/users/user-1.jpg') }}" width="32" class="rounded-circle me-lg-2 d-flex" alt="user-image" />
                                    <div class="d-lg-flex align-items-center gap-1 d-none">
                                        <span>
                                            <h5 class="my-0 lh-1 pro-username">David Dev</h5>
                                            <span class="fs-xs lh-1">Admin Head</span>
                                        </span>
                                        <i class="ti ti-chevron-down align-middle"></i>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- Header -->
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome back 👋!</h6>
                                    </div>

                                    <!-- My Profile -->
                                    <a href="#!" class="dropdown-item">
                                        <i class="ti ti-user-circle me-1 fs-lg align-middle"></i>
                                        <span class="align-middle">Profile</span>
                                    </a>

                                    <!-- Notifications -->
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="ti ti-bell-ringing me-1 fs-lg align-middle"></i>
                                        <span class="align-middle">Notifications</span>
                                    </a>

                                    <!-- Settings -->
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="ti ti-settings-2 me-1 fs-lg align-middle"></i>
                                        <span class="align-middle">Account Settings</span>
                                    </a>

                                    <!-- Support -->
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="ti ti-headset me-1 fs-lg align-middle"></i>
                                        <span class="align-middle">Support Center</span>
                                    </a>

                                    <!-- Divider -->
                                    <div class="dropdown-divider"></div>

                                    <!-- Lock -->
                                    <a href="{{ url('admin/auth-lock-screen') }}" class="dropdown-item">
                                        <i class="ti ti-lock me-1 fs-lg align-middle"></i>
                                        <span class="align-middle">Lock Screen</span>
                                    </a>

                                    <!-- Logout -->
                                    <a href="javascript:void(0);" class="dropdown-item fw-semibold">
                                        <i class="ti ti-logout me-1 fs-lg align-middle"></i>
                                        <span class="align-middle">Log Out</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Topbar End -->
 <header class="topnav">
    <nav class="navbar navbar-expand-lg">
        <nav class="container-fluid">
            <div class="collapse navbar-collapse" id="topnav-menu">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle drop-arrow-none" href="#" id="topnav-main" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="menu-icon"><i class="ti ti-dashboard fs-xl"></i></span>
                            <span class="menu-text" data-lang="main">Main</span>
                            <div class="menu-arrow"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-main">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-dashboards" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span data-lang="dashboards">Dashboards</span>
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-submenu-dashboards">
                                    <a href="{{ url('admin/dashboard-ecommerce') }}" class="dropdown-item"><span data-lang="dashboard-ecommerce">Ecommerce</span></a>
                                    <a href="{{ url('admin/dashboard-analytics') }}" class="dropdown-item"><span data-lang="dashboard-analytics">Analytics</span></a>
                                    <a href="{{ url('admin/dashboard-crm') }}" class="dropdown-item"><span data-lang="dashboard-crm">CRM</span></a>
                                    <a href="{{ url('admin/dashboard-finance') }}" class="dropdown-item"><span data-lang="dashboard-finance">Finance</span></a>
                                    <a href="{{ url('admin/dashboard-projects') }}" class="dropdown-item"><span data-lang="dashboard-projects">Projects</span></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle drop-arrow-none" href="#" id="topnav-apps" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="menu-icon"><i class="ti ti-apps fs-xl"></i></span>
                            <span class="menu-text" data-lang="apps">Apps</span>
                            <div class="menu-arrow"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-apps">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-ecommerce" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span data-lang="ecommerce">Ecommerce</span>
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-columns" aria-labelledby="topnav-submenu-ecommerce">
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-products" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span data-lang="products">Products</span>
                                            <div class="menu-arrow"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-submenu-products">
                                            <a href="{{ url('admin/apps-ecommerce-products') }}" class="dropdown-item"><span data-lang="apps-ecommerce-products">Products</span></a>
                                            <a href="{{ url('admin/apps-ecommerce-products-grid') }}" class="dropdown-item"><span data-lang="apps-ecommerce-products-grid">Products Grid</span></a>
                                            <a href="{{ url('admin/apps-ecommerce-product-details') }}" class="dropdown-item"><span data-lang="apps-ecommerce-product-details">Product Details</span></a>
                                            <a href="{{ url('admin/apps-ecommerce-product-add') }}" class="dropdown-item"><span data-lang="apps-ecommerce-product-add">Add Product</span></a>
                                        </div>
                                    </div>
                                    <a href="{{ url('admin/apps-ecommerce-categories') }}" class="dropdown-item"><span data-lang="apps-ecommerce-categories">Categories</span></a>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-orders" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span data-lang="orders">Orders</span>
                                            <div class="menu-arrow"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-submenu-orders">
                                            <a href="{{ url('admin/apps-ecommerce-orders') }}" class="dropdown-item"><span data-lang="apps-ecommerce-orders">Orders</span></a>
                                            <a href="{{ url('admin/apps-ecommerce-order-details') }}" class="dropdown-item"><span data-lang="apps-ecommerce-order-details">Order Details</span></a>
                                            <a href="{{ url('admin/apps-ecommerce-order-add') }}" class="dropdown-item"><span data-lang="apps-ecommerce-order-add">Add/Edit Order</span></a>
                                        </div>
                                    </div>
                                    <a href="{{ url('admin/apps-ecommerce-customers') }}" class="dropdown-item"><span data-lang="apps-ecommerce-customers">Customers</span></a>
                                    <a href="{{ url('admin/apps-ecommerce-cart') }}" class="dropdown-item"><span data-lang="apps-ecommerce-cart">Cart</span></a>
                                    <a href="{{ url('admin/apps-ecommerce-checkout') }}" class="dropdown-item"><span data-lang="apps-ecommerce-checkout">Checkout</span></a>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-sellers" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span data-lang="sellers">Sellers</span>
                                            <div class="menu-arrow"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-submenu-sellers">
                                            <a href="{{ url('admin/apps-ecommerce-sellers') }}" class="dropdown-item"><span data-lang="apps-ecommerce-sellers">Sellers</span></a>
                                            <a href="{{ url('admin/apps-ecommerce-seller-details') }}" class="dropdown-item"><span data-lang="apps-ecommerce-seller-details">Sellers Details</span></a>
                                        </div>
                                    </div>
                                    <a href="{{ url('admin/apps-ecommerce-refunds') }}" class="dropdown-item"><span data-lang="apps-ecommerce-refunds">Refunds</span></a>
                                    <a href="{{ url('admin/apps-ecommerce-reviews') }}" class="dropdown-item"><span data-lang="apps-ecommerce-reviews">Reviews</span></a>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-inventory" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span data-lang="inventory">Inventory</span>
                                            <div class="menu-arrow"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-submenu-inventory">
                                            <a href="{{ url('admin/apps-ecommerce-warehouse') }}" class="dropdown-item"><span data-lang="apps-ecommerce-warehouse">Warehouse</span></a>
                                            <a href="{{ url('admin/apps-ecommerce-product-stocks') }}" class="dropdown-item"><span data-lang="apps-ecommerce-product-stocks">Product Stocks</span></a>
                                            <a href="{{ url('admin/apps-ecommerce-purchased-orders') }}" class="dropdown-item"><span data-lang="apps-ecommerce-purchased-orders">Purchased Orders</span></a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-reports" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span data-lang="reports">Reports</span>
                                            <div class="menu-arrow"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-submenu-reports">
                                            <a href="{{ url('admin/apps-ecommerce-product-views') }}" class="dropdown-item"><span data-lang="apps-ecommerce-product-views">Product Views</span></a>
                                            <a href="{{ url('admin/apps-ecommerce-sales') }}" class="dropdown-item"><span data-lang="apps-ecommerce-sales">Sales</span></a>
                                        </div>
                                    </div>
                                    <a href="{{ url('admin/apps-ecommerce-attributes') }}" class="dropdown-item"><span data-lang="apps-ecommerce-attributes">Attributes</span></a>
                                    <a href="{{ url('admin/apps-ecommerce-settings') }}" class="dropdown-item"><span data-lang="apps-ecommerce-settings">Settings</span></a>
                                </div>
                            </div>
                            <a href="{{ url('admin/apps-chat') }}" class="dropdown-item"><span data-lang="apps-chat">Chat</span></a>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-projects" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span data-lang="projects">Projects</span>
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-submenu-projects">
                                    <a href="{{ url('admin/apps-projects-grid') }}" class="dropdown-item"><span data-lang="apps-projects-grid">My Projects</span></a>
                                    <a href="{{ url('admin/apps-projects-list') }}" class="dropdown-item"><span data-lang="apps-projects-list">Projects List</span></a>
                                    <a href="{{ url('admin/apps-projects-details') }}" class="dropdown-item"><span data-lang="apps-projects-details">View Project</span></a>
                                    <a href="{{ url('admin/apps-projects-kanban') }}" class="dropdown-item"><span data-lang="apps-projects-kanban">Kanban Board</span></a>
                                    <a href="{{ url('admin/apps-projects-team-board') }}" class="dropdown-item"><span data-lang="apps-projects-team-board">Team Board</span></a>
                                    <a href="{{ url('admin/apps-projects-activity') }}" class="dropdown-item"><span data-lang="apps-projects-activity">Activity Steam</span></a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-tasks" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span data-lang="tasks">Tasks</span>
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-submenu-tasks">
                                    <a href="{{ url('admin/apps-task-list') }}" class="dropdown-item"><span data-lang="apps-task-list">Task List</span></a>
                                    <a href="{{ url('admin/apps-task-details') }}" class="dropdown-item"><span data-lang="apps-task-details">Task Details</span></a>
                                    <a href="{{ url('admin/apps-task-create') }}" class="dropdown-item"><span data-lang="apps-task-create">Create Task</span></a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-invoice" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span data-lang="invoice">Invoice</span>
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-submenu-invoice">
                                    <a href="{{ url('admin/apps-invoice-list') }}" class="dropdown-item"><span data-lang="apps-invoice-list">Invoices</span></a>
                                    <a href="{{ url('admin/apps-invoice-details') }}" class="dropdown-item"><span data-lang="apps-invoice-details">Single Invoice</span></a>
                                    <a href="{{ url('admin/apps-invoice-create') }}" class="dropdown-item"><span data-lang="apps-invoice-create">New Invoice</span></a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-crm" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span data-lang="crm">CRM</span>
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-submenu-crm">
                                    <a href="{{ url('admin/apps-crm-contacts') }}" class="dropdown-item"><span data-lang="apps-crm-contacts">Contacts</span></a>
                                    <a href="{{ url('admin/apps-crm-opportunities') }}" class="dropdown-item"><span data-lang="apps-crm-opportunities">Opportunities</span></a>
                                    <a href="{{ url('admin/apps-crm-deals') }}" class="dropdown-item"><span data-lang="apps-crm-deals">Deals</span></a>
                                    <a href="{{ url('admin/apps-crm-leads') }}" class="dropdown-item"><span data-lang="apps-crm-leads">Leads</span></a>
                                    <a href="{{ url('admin/apps-crm-pipeline') }}" class="dropdown-item"><span data-lang="apps-crm-pipeline">Pipeline</span></a>
                                    <a href="{{ url('admin/apps-crm-campaign') }}" class="dropdown-item"><span data-lang="apps-crm-campaign">Campaign</span></a>
                                    <a href="{{ url('admin/apps-crm-proposals') }}" class="dropdown-item"><span data-lang="apps-crm-proposals">Proposals</span></a>
                                    <a href="{{ url('admin/apps-crm-estimations') }}" class="dropdown-item"><span data-lang="apps-crm-estimations">Estimations</span></a>
                                    <a href="{{ url('admin/apps-crm-customers') }}" class="dropdown-item"><span data-lang="apps-crm-customers">Customers</span></a>
                                    <a href="{{ url('admin/apps-crm-activities') }}" class="dropdown-item"><span data-lang="apps-crm-activities">Activities</span></a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-users" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span data-lang="users">Users</span>
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-submenu-users">
                                    <a href="{{ url('admin/apps-users-contacts') }}" class="dropdown-item"><span data-lang="apps-users-contacts">Contacts</span></a>
                                    <a href="{{ url('admin/apps-users-profile') }}" class="dropdown-item"><span data-lang="apps-users-profile">Profile</span></a>
                                    <a href="{{ url('admin/apps-users-account-settings') }}" class="dropdown-item"><span data-lang="apps-users-account-settings">Account Settings</span></a>
                                    <a href="{{ url('admin/apps-users-roles') }}" class="dropdown-item"><span data-lang="apps-users-roles">Roles</span></a>
                                    <a href="{{ url('admin/apps-users-role-details') }}" class="dropdown-item"><span data-lang="apps-users-role-details">Role Details</span></a>
                                    <a href="{{ url('admin/apps-users-permissions') }}" class="dropdown-item"><span data-lang="apps-users-permissions">Permissions</span></a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-finance" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span data-lang="finance">Finance</span>
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-submenu-finance">
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-expenses" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span data-lang="expenses">Expenses</span>
                                            <div class="menu-arrow"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-submenu-expenses">
                                            <a href="{{ url('admin/apps-finance-expenses') }}" class="dropdown-item"><span data-lang="apps-finance-expenses">Expenses</span></a>
                                            <a href="{{ url('admin/apps-finance-expense-category') }}" class="dropdown-item"><span data-lang="apps-finance-expense-category">Expense Category</span></a>
                                        </div>
                                    </div>
                                    <a href="{{ url('admin/apps-finance-income') }}" class="dropdown-item"><span data-lang="apps-finance-income">Income</span></a>
                                    <a href="{{ url('admin/apps-finance-transactions') }}" class="dropdown-item"><span data-lang="apps-finance-transactions">Transactions</span></a>
                                    <a href="{{ url('admin/apps-finance-banks-cards') }}" class="dropdown-item"><span data-lang="apps-finance-banks-cards">Banks &amp; Cards</span></a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-hrm" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span data-lang="hrm">HRM</span>
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-submenu-hrm">
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-staffs" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span data-lang="staffs">Staffs</span>
                                            <div class="menu-arrow"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-submenu-staffs">
                                            <a href="{{ url('admin/apps-hrm-staffs') }}" class="dropdown-item"><span data-lang="apps-hrm-staffs">Staffs List</span></a>
                                            <a href="{{ url('admin/apps-hrm-staff-profile') }}" class="dropdown-item"><span data-lang="apps-hrm-staff-profile">Staff Profile</span></a>
                                            <a href="{{ url('admin/apps-hrm-staff-add') }}" class="dropdown-item"><span data-lang="apps-hrm-staff-add">Add Staffs</span></a>
                                        </div>
                                    </div>
                                    <a href="{{ url('admin/apps-hrm-departments') }}" class="dropdown-item"><span data-lang="apps-hrm-departments">Departments</span></a>
                                    <a href="{{ url('admin/apps-hrm-attendance') }}" class="dropdown-item"><span data-lang="apps-hrm-attendance">Attendance</span></a>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-leaves" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span data-lang="leaves">Leaves</span>
                                            <div class="menu-arrow"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-submenu-leaves">
                                            <a href="{{ url('admin/apps-hrm-leaves') }}" class="dropdown-item"><span data-lang="apps-hrm-leaves">Leaves</span></a>
                                            <a href="{{ url('admin/apps-hrm-leave-add') }}" class="dropdown-item"><span data-lang="apps-hrm-leave-add">Add Leave</span></a>
                                        </div>
                                    </div>
                                    <a href="{{ url('admin/apps-hrm-holidays') }}" class="dropdown-item"><span data-lang="apps-hrm-holidays">Holidays</span></a>
                                    <a href="{{ url('admin/apps-hrm-payroll') }}" class="dropdown-item"><span data-lang="apps-hrm-payroll">Payroll</span></a>
                                    <a href="{{ url('admin/apps-hrm-create-salary-slip') }}" class="dropdown-item"><span data-lang="apps-hrm-create-salary-slip">Create Salary Slip</span></a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-email" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span data-lang="email">Email</span><span class="badge bg-danger text-white">New</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-submenu-email">
                                    <a href="{{ url('admin/apps-email-inbox') }}" class="dropdown-item"><span data-lang="apps-email-inbox">Inbox</span></a>
                                    <a href="{{ url('admin/apps-email-details') }}" class="dropdown-item"><span data-lang="apps-email-details">Details</span></a>
                                    <a href="{{ url('admin/apps-email-compose') }}" class="dropdown-item"><span data-lang="apps-email-compose">Compose</span></a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-support-center" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span data-lang="support-center">Support Center</span>
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-submenu-support-center">
                                    <a href="{{ url('admin/apps-ticket-list') }}" class="dropdown-item"><span data-lang="apps-ticket-list">Ticket List</span></a>
                                    <a href="{{ url('admin/apps-ticket-details') }}" class="dropdown-item"><span data-lang="apps-ticket-details">Ticket Details</span></a>
                                    <a href="{{ url('admin/apps-ticket-create') }}" class="dropdown-item"><span data-lang="apps-ticket-create">New Ticket</span></a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-promo" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span data-lang="promo">Promo</span>
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-submenu-promo">
                                    <a href="{{ url('admin/apps-promo-coupons') }}" class="dropdown-item"><span data-lang="apps-promo-coupons">Coupons</span></a>
                                    <a href="{{ url('admin/apps-promo-gift-cards') }}" class="dropdown-item"><span data-lang="apps-promo-gift-cards">Gift Cards</span></a>
                                    <a href="{{ url('admin/apps-promo-discounts') }}" class="dropdown-item"><span data-lang="apps-promo-discounts">Discounts</span></a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-more-apps" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span data-lang="more-apps">More Apps</span>
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-columns" aria-labelledby="topnav-submenu-more-apps">
                                    <a href="{{ url('admin/apps-social-feed') }}" class="dropdown-item"><span data-lang="apps-social-feed">Social Feed</span></a>
                                    <a href="{{ url('admin/apps-pro-ai') }}" class="dropdown-item"><span data-lang="apps-pro-ai">Pro AI</span></a>
                                    <a href="{{ url('admin/apps-file-manager') }}" class="dropdown-item"><span data-lang="apps-file-manager">File Manager</span></a>
                                    <a href="{{ url('admin/apps-calendar') }}" class="dropdown-item"><span data-lang="apps-calendar">Calendar</span></a>
                                    <a href="{{ url('admin/apps-companies') }}" class="dropdown-item"><span data-lang="apps-companies">Companies</span></a>
                                    <a href="{{ url('admin/apps-todo') }}" class="dropdown-item"><span data-lang="apps-todo">Todo</span></a>
                                    <a href="{{ url('admin/apps-pin-board') }}" class="dropdown-item"><span data-lang="apps-pin-board">Pin Board</span></a>
                                    <a href="{{ url('admin/apps-clients') }}" class="dropdown-item"><span data-lang="apps-clients">Clients</span></a>
                                    <a href="{{ url('admin/apps-outlook') }}" class="dropdown-item"><span data-lang="apps-outlook">Outlook View</span></a>
                                    <a href="{{ url('admin/apps-vote-list') }}" class="dropdown-item"><span data-lang="apps-vote-list">Vote List</span></a>
                                    <a href="{{ url('admin/apps-issue-tracker') }}" class="dropdown-item"><span data-lang="apps-issue-tracker">Issue Tracker</span></a>
                                    <a href="{{ url('admin/apps-api-keys') }}" class="dropdown-item"><span data-lang="apps-api-keys">API Keys</span></a>
                                    <a href="{{ url('admin/apps-manage') }}" class="dropdown-item"><span data-lang="apps-manage">Manage Apps</span></a>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-blog" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span data-lang="blog">Blog</span>
                                            <div class="menu-arrow"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-submenu-blog">
                                            <a href="{{ url('admin/apps-blog-list') }}" class="dropdown-item"><span data-lang="apps-blog-list">Blog List</span></a>
                                            <a href="{{ url('admin/apps-blog-grid') }}" class="dropdown-item"><span data-lang="apps-blog-grid">Blog Grid</span></a>
                                            <a href="{{ url('admin/apps-blog-article') }}" class="dropdown-item"><span data-lang="apps-blog-article">Article</span></a>
                                            <a href="{{ url('admin/apps-blog-add') }}" class="dropdown-item"><span data-lang="apps-blog-add">Add Article</span></a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-forum" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span data-lang="forum">Forum</span>
                                            <div class="menu-arrow"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-submenu-forum">
                                            <a href="{{ url('admin/apps-forum-view') }}" class="dropdown-item"><span data-lang="apps-forum-view">Forum View</span></a>
                                            <a href="{{ url('admin/apps-forum-post') }}" class="dropdown-item"><span data-lang="apps-forum-post">Forum Post</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle drop-arrow-none" href="#" id="topnav-custom-pages" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="menu-icon"><i class="ti ti-files fs-xl"></i></span>
                            <span class="menu-text" data-lang="custom-pages">Custom Pages</span>
                            <div class="menu-arrow"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-custom-pages">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-pages" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span data-lang="pages">Pages</span>
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-columns" aria-labelledby="topnav-submenu-pages">
                                    <a href="{{ url('admin/pages-about-us') }}" class="dropdown-item"><span data-lang="pages-about-us">About Us</span></a>
                                    <a href="{{ url('admin/pages-contact-us') }}" class="dropdown-item"><span data-lang="pages-contact-us">Contact Us</span></a>
                                    <a href="{{ url('admin/pages-pricing') }}" class="dropdown-item"><span data-lang="pages-pricing">Pricing</span></a>
                                    <a href="{{ url('admin/pages-empty') }}" class="dropdown-item"><span data-lang="pages-empty">Empty Page</span></a>
                                    <a href="{{ url('admin/pages-timeline') }}" class="dropdown-item"><span data-lang="pages-timeline">Timeline</span></a>
                                    <a href="{{ url('admin/pages-gallery') }}" class="dropdown-item"><span data-lang="pages-gallery">Gallery</span></a>
                                    <a href="{{ url('admin/pages-faq') }}" class="dropdown-item"><span data-lang="pages-faq">FAQ</span></a>
                                    <a href="{{ url('admin/pages-sitemap') }}" class="dropdown-item"><span data-lang="pages-sitemap">Sitemap</span></a>
                                    <a href="{{ url('admin/pages-search-results') }}" class="dropdown-item"><span data-lang="pages-search-results">Search Results</span></a>
                                    <a href="{{ url('admin/pages-coming-soon') }}" class="dropdown-item"><span data-lang="pages-coming-soon">Coming Soon</span></a>
                                    <a href="{{ url('admin/pages-privacy-policy') }}" class="dropdown-item"><span data-lang="pages-privacy-policy">Privacy Policy</span></a>
                                    <a href="{{ url('admin/pages-terms-conditions') }}" class="dropdown-item"><span data-lang="pages-terms-conditions">Terms &amp; Conditions</span></a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-plugins" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span data-lang="plugins">Plugins</span>
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-columns" aria-labelledby="topnav-submenu-plugins">
                                    <a href="{{ url('admin/plugins-sortable') }}" class="dropdown-item"><span data-lang="plugins-sortable">Sortable List</span></a>
                                    <a href="{{ url('admin/plugins-pdf-viewer') }}" class="dropdown-item"><span data-lang="plugins-pdf-viewer">PDF Viewer</span></a>
                                    <a href="{{ url('admin/plugins-i18') }}" class="dropdown-item"><span data-lang="plugins-i18">i18 Support</span></a>
                                    <a href="{{ url('admin/plugins-sweet-alerts') }}" class="dropdown-item"><span data-lang="plugins-sweet-alerts">Sweet Alerts</span></a>
                                    <a href="{{ url('admin/plugins-idle-timer') }}" class="dropdown-item"><span data-lang="plugins-idle-timer">Idle Timer</span></a>
                                    <a href="{{ url('admin/plugins-pass-meter') }}" class="dropdown-item"><span data-lang="plugins-pass-meter">Password Meter</span></a>
                                    <a href="{{ url('admin/plugins-clipboard') }}" class="dropdown-item"><span data-lang="plugins-clipboard">Clipboard</span></a>
                                    <a href="{{ url('admin/plugins-tree-view') }}" class="dropdown-item"><span data-lang="plugins-tree-view">Tree View</span></a>
                                    <a href="{{ url('admin/plugins-masonry') }}" class="dropdown-item"><span data-lang="plugins-masonry">Masonry</span></a>
                                    <a href="{{ url('admin/plugins-tour') }}" class="dropdown-item"><span data-lang="plugins-tour">Tour</span></a>
                                    <a href="{{ url('admin/plugins-animation') }}" class="dropdown-item"><span data-lang="plugins-animation">Animation</span></a>
                                    <a href="{{ url('admin/plugins-video-player') }}" class="dropdown-item"><span data-lang="plugins-video-player">Video Player</span></a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-authentication" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span data-lang="authentication">Authentication</span>
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-submenu-authentication">
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-auth-basic" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span data-lang="auth-basic">Basic</span>
                                            <div class="menu-arrow"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-submenu-auth-basic">
                                            <a href="{{ url('admin/auth-sign-in') }}" class="dropdown-item"><span data-lang="auth-sign-in">Sign In</span></a>
                                            <a href="{{ url('admin/auth-sign-up') }}" class="dropdown-item"><span data-lang="auth-sign-up">Sign Up</span></a>
                                            <a href="{{ url('admin/auth-reset-pass') }}" class="dropdown-item"><span data-lang="auth-reset-pass">Reset Password</span></a>
                                            <a href="{{ url('admin/auth-new-pass') }}" class="dropdown-item"><span data-lang="auth-new-pass">New Password</span></a>
                                            <a href="{{ url('admin/auth-two-factor') }}" class="dropdown-item"><span data-lang="auth-two-factor">Two Factor</span></a>
                                            <a href="{{ url('admin/auth-lock-screen') }}" class="dropdown-item"><span data-lang="auth-lock-screen">Lock Screen</span></a>
                                            <a href="{{ url('admin/auth-success-mail') }}" class="dropdown-item"><span data-lang="auth-success-mail">Success Mail</span></a>
                                            <a href="{{ url('admin/auth-login-pin') }}" class="dropdown-item"><span data-lang="auth-login-pin">Login with PIN</span></a>
                                            <a href="{{ url('admin/auth-delete-account') }}" class="dropdown-item"><span data-lang="auth-delete-account">Delete Account</span></a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-auth-card" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span data-lang="auth-card">Card</span>
                                            <div class="menu-arrow"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-submenu-auth-card">
                                            <a href="{{ url('admin/auth-card-sign-in') }}" class="dropdown-item"><span data-lang="auth-card-sign-in">Sign In</span></a>
                                            <a href="{{ url('admin/auth-card-sign-up') }}" class="dropdown-item"><span data-lang="auth-card-sign-up">Sign Up</span></a>
                                            <a href="{{ url('admin/auth-card-reset-pass') }}" class="dropdown-item"><span data-lang="auth-card-reset-pass">Reset Password</span></a>
                                            <a href="{{ url('admin/auth-card-new-pass') }}" class="dropdown-item"><span data-lang="auth-card-new-pass">New Password</span></a>
                                            <a href="{{ url('admin/auth-card-two-factor') }}" class="dropdown-item"><span data-lang="auth-card-two-factor">Two Factor</span></a>
                                            <a href="{{ url('admin/auth-card-lock-screen') }}" class="dropdown-item"><span data-lang="auth-card-lock-screen">Lock Screen</span></a>
                                            <a href="{{ url('admin/auth-card-success-mail') }}" class="dropdown-item"><span data-lang="auth-card-success-mail">Success Mail</span></a>
                                            <a href="{{ url('admin/auth-card-login-pin') }}" class="dropdown-item"><span data-lang="auth-card-login-pin">Login with PIN</span></a>
                                            <a href="{{ url('admin/auth-card-delete-account') }}" class="dropdown-item"><span data-lang="auth-card-delete-account">Delete Account</span></a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-auth-split" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span data-lang="auth-split">Split</span>
                                            <div class="menu-arrow"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-submenu-auth-split">
                                            <a href="{{ url('admin/auth-split-sign-in') }}" class="dropdown-item"><span data-lang="auth-split-sign-in">Sign In</span></a>
                                            <a href="{{ url('admin/auth-split-sign-up') }}" class="dropdown-item"><span data-lang="auth-split-sign-up">Sign Up</span></a>
                                            <a href="{{ url('admin/auth-split-reset-pass') }}" class="dropdown-item"><span data-lang="auth-split-reset-pass">Reset Password</span></a>
                                            <a href="{{ url('admin/auth-split-new-pass') }}" class="dropdown-item"><span data-lang="auth-split-new-pass">New Password</span></a>
                                            <a href="{{ url('admin/auth-split-two-factor') }}" class="dropdown-item"><span data-lang="auth-split-two-factor">Two Factor</span></a>
                                            <a href="{{ url('admin/auth-split-lock-screen') }}" class="dropdown-item"><span data-lang="auth-split-lock-screen">Lock Screen</span></a>
                                            <a href="{{ url('admin/auth-split-success-mail') }}" class="dropdown-item"><span data-lang="auth-split-success-mail">Success Mail</span></a>
                                            <a href="{{ url('admin/auth-split-login-pin') }}" class="dropdown-item"><span data-lang="auth-split-login-pin">Login with PIN</span></a>
                                            <a href="{{ url('admin/auth-split-delete-account') }}" class="dropdown-item"><span data-lang="auth-split-delete-account">Delete Account</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-error-pages" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span data-lang="error-pages">Error Pages</span>
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-submenu-error-pages">
                                    <a href="{{ url('admin/error-400') }}" class="dropdown-item"><span data-lang="error-400">400 Bad Request</span></a>
                                    <a href="{{ url('admin/error-401') }}" class="dropdown-item"><span data-lang="error-401">401 Unauthorized</span></a>
                                    <a href="{{ url('admin/error-403') }}" class="dropdown-item"><span data-lang="error-403">403 Forbidden</span></a>
                                    <a href="{{ url('admin/error-404') }}" class="dropdown-item"><span data-lang="error-404">404 Not Found</span></a>
                                    <a href="{{ url('admin/error-408') }}" class="dropdown-item"><span data-lang="error-408">408 Request Timeout</span></a>
                                    <a href="{{ url('admin/error-500') }}" class="dropdown-item"><span data-lang="error-500">500 Internal Server</span></a>
                                    <a href="{{ url('admin/error-maintenance') }}" class="dropdown-item"><span data-lang="error-maintenance">Maintenance</span></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle drop-arrow-none" href="#" id="topnav-layouts" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="menu-icon"><i class="ti ti-table-column fs-xl"></i></span>
                            <span class="menu-text" data-lang="layouts">Layouts</span>
                            <div class="menu-arrow"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-layouts">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-layout-options" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span data-lang="layout-options">Layout Options</span>
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-submenu-layout-options">
                                    <a href="{{ url('admin/layouts-horizontal') }}" class="dropdown-item" target="_blank"><span data-lang="layouts-horizontal">Horizontal</span></a>
                                    <a href="{{ url('admin/layouts-boxed') }}" class="dropdown-item" target="_blank"><span data-lang="layouts-boxed">Boxed</span></a>
                                    <a href="{{ url('admin/layouts-scrollable') }}" class="dropdown-item" target="_blank"><span data-lang="layouts-scrollable">Scrollable</span></a>
                                    <a href="{{ url('admin/layouts-compact') }}" class="dropdown-item" target="_blank"><span data-lang="layouts-compact">Compact</span></a>
                                    <a href="{{ url('admin/layouts-preloader') }}" class="dropdown-item" target="_blank"><span data-lang="layouts-preloader">Preloader</span></a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-sidebars" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span data-lang="sidebars">Sidebars</span>
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-submenu-sidebars">
                                    <a href="{{ url('admin/layouts-sidebar-light') }}" class="dropdown-item" target="_blank"><span data-lang="layouts-sidebar-light">Light Menu</span></a>
                                    <a href="{{ url('admin/layouts-sidebar-gradient') }}" class="dropdown-item" target="_blank"><span data-lang="layouts-sidebar-gradient">Gradient Menu</span></a>
                                    <a href="{{ url('admin/layouts-sidebar-gray') }}" class="dropdown-item" target="_blank"><span data-lang="layouts-sidebar-gray">Gray Menu</span></a>
                                    <a href="{{ url('admin/layouts-sidebar-image') }}" class="dropdown-item" target="_blank"><span data-lang="layouts-sidebar-image">Image Menu</span></a>
                                    <a href="{{ url('admin/layouts-sidebar-compact') }}" class="dropdown-item" target="_blank"><span data-lang="layouts-sidebar-compact">Compact Menu</span></a>
                                    <a href="{{ url('admin/layouts-sidebar-on-hover') }}" class="dropdown-item" target="_blank"><span data-lang="layouts-sidebar-on-hover">On Hover Menu</span></a>
                                    <a href="{{ url('admin/layouts-sidebar-offcanvas') }}" class="dropdown-item" target="_blank"><span data-lang="layouts-sidebar-offcanvas">Offcanvas Menu</span></a>
                                    <a href="{{ url('admin/layouts-sidebar-no-icons') }}" class="dropdown-item" target="_blank"><span data-lang="layouts-sidebar-no-icons">No Icons with Lines</span></a>
                                    <a href="{{ url('admin/layouts-sidebar-with-lines') }}" class="dropdown-item" target="_blank"><span data-lang="layouts-sidebar-with-lines">Sidebar with Lines</span></a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-topbar" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span data-lang="topbar">Topbar</span>
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-submenu-topbar">
                                    <a href="{{ url('admin/layouts-topbar-dark') }}" class="dropdown-item" target="_blank"><span data-lang="layouts-topbar-dark">Dark Topbar</span></a>
                                    <a href="{{ url('admin/layouts-topbar-gray') }}" class="dropdown-item" target="_blank"><span data-lang="layouts-topbar-gray">Gray Topbar</span></a>
                                    <a href="{{ url('admin/layouts-topbar-gradient') }}" class="dropdown-item" target="_blank"><span data-lang="layouts-topbar-gradient">Gradient Topbar</span></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle drop-arrow-none" href="#" id="topnav-components" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="menu-icon"><i class="ti ti-components fs-xl"></i></span>
                            <span class="menu-text" data-lang="components">Components</span>
                            <div class="menu-arrow"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-components">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-base-ui" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span data-lang="base-ui">Base UI</span>
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-columns" aria-labelledby="topnav-submenu-base-ui">
                                    <a href="{{ url('admin/ui-accordions') }}" class="dropdown-item"><span data-lang="ui-accordions">Accordions</span></a>
                                    <a href="{{ url('admin/ui-alerts') }}" class="dropdown-item"><span data-lang="ui-alerts">Alerts</span></a>
                                    <a href="{{ url('admin/ui-buttons') }}" class="dropdown-item"><span data-lang="ui-buttons">Buttons</span></a>
                                    <a href="{{ url('admin/ui-badges') }}" class="dropdown-item"><span data-lang="ui-badges">Badges</span></a>
                                    <a href="{{ url('admin/ui-colors') }}" class="dropdown-item"><span data-lang="ui-colors">Colors</span></a>
                                    <a href="{{ url('admin/ui-breadcrumb') }}" class="dropdown-item"><span data-lang="ui-breadcrumb">Breadcrumb</span></a>
                                    <a href="{{ url('admin/ui-cards') }}" class="dropdown-item"><span data-lang="ui-cards">Cards</span></a>
                                    <a href="{{ url('admin/ui-carousel') }}" class="dropdown-item"><span data-lang="ui-carousel">Carousel</span></a>
                                    <a href="{{ url('admin/ui-collapse') }}" class="dropdown-item"><span data-lang="ui-collapse">Collapse</span></a>
                                    <a href="{{ url('admin/ui-images') }}" class="dropdown-item"><span data-lang="ui-images">Images</span></a>
                                    <a href="{{ url('admin/ui-dropdowns') }}" class="dropdown-item"><span data-lang="ui-dropdowns">Dropdowns</span></a>
                                    <a href="{{ url('admin/ui-videos') }}" class="dropdown-item"><span data-lang="ui-videos">Videos</span></a>
                                    <a href="{{ url('admin/ui-grid') }}" class="dropdown-item"><span data-lang="ui-grid">Grid Options</span></a>
                                    <a href="{{ url('admin/ui-links') }}" class="dropdown-item"><span data-lang="ui-links">Links</span></a>
                                    <a href="{{ url('admin/ui-list-group') }}" class="dropdown-item"><span data-lang="ui-list-group">List Group</span></a>
                                    <a href="{{ url('admin/ui-modals') }}" class="dropdown-item"><span data-lang="ui-modals">Modals</span></a>
                                    <a href="{{ url('admin/ui-notifications') }}" class="dropdown-item"><span data-lang="ui-notifications">Notifications</span></a>
                                    <a href="{{ url('admin/ui-offcanvas') }}" class="dropdown-item"><span data-lang="ui-offcanvas">Offcanvas</span></a>
                                    <a href="{{ url('admin/ui-placeholders') }}" class="dropdown-item"><span data-lang="ui-placeholders">Placeholders</span></a>
                                    <a href="{{ url('admin/ui-pagination') }}" class="dropdown-item"><span data-lang="ui-pagination">Pagination</span></a>
                                    <a href="{{ url('admin/ui-popovers') }}" class="dropdown-item"><span data-lang="ui-popovers">Popovers</span></a>
                                    <a href="{{ url('admin/ui-progress') }}" class="dropdown-item"><span data-lang="ui-progress">Progress</span></a>
                                    <a href="{{ url('admin/ui-scrollspy') }}" class="dropdown-item"><span data-lang="ui-scrollspy">Scrollspy</span></a>
                                    <a href="{{ url('admin/ui-spinners') }}" class="dropdown-item"><span data-lang="ui-spinners">Spinners</span></a>
                                    <a href="{{ url('admin/ui-tabs') }}" class="dropdown-item"><span data-lang="ui-tabs">Tabs</span></a>
                                    <a href="{{ url('admin/ui-tooltips') }}" class="dropdown-item"><span data-lang="ui-tooltips">Tooltips</span></a>
                                    <a href="{{ url('admin/ui-typography') }}" class="dropdown-item"><span data-lang="ui-typography">Typography</span></a>
                                    <a href="{{ url('admin/ui-utilities') }}" class="dropdown-item"><span data-lang="ui-utilities">Utilities</span></a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-widgets" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span data-lang="widgets">Widgets</span>
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-submenu-widgets">
                                    <a href="{{ url('admin/widgets-charts') }}" class="dropdown-item"><span data-lang="widgets-charts">Charts</span></a>
                                    <a href="{{ url('admin/widgets-mixed') }}" class="dropdown-item"><span data-lang="widgets-mixed">Mixed</span></a>
                                    <a href="{{ url('admin/widgets-social') }}" class="dropdown-item"><span data-lang="widgets-social">Social</span></a>
                                    <a href="{{ url('admin/widgets-statistics') }}" class="dropdown-item"><span data-lang="widgets-statistics">Statistics</span></a>
                                    <a href="{{ url('admin/widgets-weather') }}" class="dropdown-item"><span data-lang="widgets-weather">Weather</span></a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-charts" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span data-lang="charts">Charts</span>
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-submenu-charts">
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-apex-charts" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span data-lang="apex-charts">Apex Charts</span>
                                            <div class="menu-arrow"></div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-columns" aria-labelledby="topnav-submenu-apex-charts">
                                            <a href="{{ url('admin/charts-apex-area') }}" class="dropdown-item"><span data-lang="charts-apex-area">Area</span></a>
                                            <a href="{{ url('admin/charts-apex-bar') }}" class="dropdown-item"><span data-lang="charts-apex-bar">Bar</span></a>
                                            <a href="{{ url('admin/charts-apex-bubble') }}" class="dropdown-item"><span data-lang="charts-apex-bubble">Bubble</span></a>
                                            <a href="{{ url('admin/charts-apex-candlestick') }}" class="dropdown-item"><span data-lang="charts-apex-candlestick">Candlestick</span></a>
                                            <a href="{{ url('admin/charts-apex-column') }}" class="dropdown-item"><span data-lang="charts-apex-column">Column</span></a>
                                            <a href="{{ url('admin/charts-apex-heatmap') }}" class="dropdown-item"><span data-lang="charts-apex-heatmap">Heatmap</span></a>
                                            <a href="{{ url('admin/charts-apex-line') }}" class="dropdown-item"><span data-lang="charts-apex-line">Line</span></a>
                                            <a href="{{ url('admin/charts-apex-mixed') }}" class="dropdown-item"><span data-lang="charts-apex-mixed">Mixed</span></a>
                                            <a href="{{ url('admin/charts-apex-timeline') }}" class="dropdown-item"><span data-lang="charts-apex-timeline">Timeline</span></a>
                                            <a href="{{ url('admin/charts-apex-boxplot') }}" class="dropdown-item"><span data-lang="charts-apex-boxplot">Boxplot</span></a>
                                            <a href="{{ url('admin/charts-apex-treemap') }}" class="dropdown-item"><span data-lang="charts-apex-treemap">Treemap</span></a>
                                            <a href="{{ url('admin/charts-apex-pie') }}" class="dropdown-item"><span data-lang="charts-apex-pie">Pie</span></a>
                                            <a href="{{ url('admin/charts-apex-radar') }}" class="dropdown-item"><span data-lang="charts-apex-radar">Radar</span></a>
                                            <a href="{{ url('admin/charts-apex-radialbar') }}" class="dropdown-item"><span data-lang="charts-apex-radialbar">RadialBar</span></a>
                                            <a href="{{ url('admin/charts-apex-scatter') }}" class="dropdown-item"><span data-lang="charts-apex-scatter">Scatter</span></a>
                                            <a href="{{ url('admin/charts-apex-polar-area') }}" class="dropdown-item"><span data-lang="charts-apex-polar-area">Polar Area</span></a>
                                            <a href="{{ url('admin/charts-apex-sparklines') }}" class="dropdown-item"><span data-lang="charts-apex-sparklines">Sparklines</span></a>
                                            <a href="{{ url('admin/charts-apex-range') }}" class="dropdown-item"><span data-lang="charts-apex-range">Range</span></a>
                                            <a href="{{ url('admin/charts-apex-funnel') }}" class="dropdown-item"><span data-lang="charts-apex-funnel">Funnel</span></a>
                                            <a href="{{ url('admin/charts-apex-slope') }}" class="dropdown-item"><span data-lang="charts-apex-slope">Slope</span></a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-echarts" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span data-lang="echarts">Echarts</span>
                                            <div class="menu-arrow"></div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-columns" aria-labelledby="topnav-submenu-echarts">
                                            <a href="{{ url('admin/charts-echart-line') }}" class="dropdown-item"><span data-lang="charts-echart-line">Line</span></a>
                                            <a href="{{ url('admin/charts-echart-bar') }}" class="dropdown-item"><span data-lang="charts-echart-bar">Bar</span></a>
                                            <a href="{{ url('admin/charts-echart-pie') }}" class="dropdown-item"><span data-lang="charts-echart-pie">Pie</span></a>
                                            <a href="{{ url('admin/charts-echart-scatter') }}" class="dropdown-item"><span data-lang="charts-echart-scatter">Scatter</span></a>
                                            <a href="{{ url('admin/charts-echart-geo-map') }}" class="dropdown-item"><span data-lang="charts-echart-geo-map">GEO Map</span></a>
                                            <a href="{{ url('admin/charts-echart-gauge') }}" class="dropdown-item"><span data-lang="charts-echart-gauge">Gauge</span></a>
                                            <a href="{{ url('admin/charts-echart-candlestick') }}" class="dropdown-item"><span data-lang="charts-echart-candlestick">Candlestick</span></a>
                                            <a href="{{ url('admin/charts-echart-area') }}" class="dropdown-item"><span data-lang="charts-echart-area">Area</span></a>
                                            <a href="{{ url('admin/charts-echart-radar') }}" class="dropdown-item"><span data-lang="charts-echart-radar">Radar</span></a>
                                            <a href="{{ url('admin/charts-echart-heatmap') }}" class="dropdown-item"><span data-lang="charts-echart-heatmap">Heatmap</span></a>
                                            <a href="{{ url('admin/charts-echart-other') }}" class="dropdown-item"><span data-lang="charts-echart-other">Other</span></a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-chartjs" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span data-lang="chartjs">Chart Js</span>
                                            <div class="menu-arrow"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-submenu-chartjs">
                                            <a href="{{ url('admin/charts-chartjs-area') }}" class="dropdown-item"><span data-lang="charts-chartjs-area">Area</span></a>
                                            <a href="{{ url('admin/charts-chartjs-bar') }}" class="dropdown-item"><span data-lang="charts-chartjs-bar">Bar</span></a>
                                            <a href="{{ url('admin/charts-chartjs-line') }}" class="dropdown-item"><span data-lang="charts-chartjs-line">Line</span></a>
                                            <a href="{{ url('admin/charts-chartjs-other') }}" class="dropdown-item"><span data-lang="charts-chartjs-other">Other</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-forms" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span data-lang="forms">Forms</span>
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-columns" aria-labelledby="topnav-submenu-forms">
                                    <a href="{{ url('admin/form-elements') }}" class="dropdown-item"><span data-lang="form-elements">Basic Elements</span></a>
                                    <a href="{{ url('admin/form-validation') }}" class="dropdown-item"><span data-lang="form-validation">Validation</span></a>
                                    <a href="{{ url('admin/form-wizard') }}" class="dropdown-item"><span data-lang="form-wizard">Wizard</span></a>
                                    <a href="{{ url('admin/form-select') }}" class="dropdown-item"><span data-lang="form-select">Select</span></a>
                                    <a href="{{ url('admin/form-pickers') }}" class="dropdown-item"><span data-lang="form-pickers">Pickers</span></a>
                                    <a href="{{ url('admin/form-fileuploads') }}" class="dropdown-item"><span data-lang="form-fileuploads">File Uploads</span></a>
                                    <a href="{{ url('admin/form-text-editors') }}" class="dropdown-item"><span data-lang="form-text-editors">Text Editors</span></a>
                                    <a href="{{ url('admin/form-range-slider') }}" class="dropdown-item"><span data-lang="form-range-slider">Range Slider</span></a>
                                    <a href="{{ url('admin/form-cropper') }}" class="dropdown-item"><span data-lang="form-cropper">Image Cropper</span></a>
                                    <a href="{{ url('admin/form-layout') }}" class="dropdown-item"><span data-lang="form-layout">Layouts</span></a>
                                    <a href="{{ url('admin/form-other-plugin') }}" class="dropdown-item"><span data-lang="form-other-plugin">Other Plugins</span></a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-tables" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span data-lang="tables">Tables</span>
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-submenu-tables">
                                    <a href="{{ url('admin/tables-static') }}" class="dropdown-item"><span data-lang="tables-static">Static Tables</span></a>
                                    <a href="{{ url('admin/tables-custom') }}" class="dropdown-item"><span data-lang="tables-custom">Custom Tables</span></a>
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-datatables" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span data-lang="datatables">DataTables</span><span class="badge bg-success text-white">15</span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-columns" aria-labelledby="topnav-submenu-datatables">
                                            <a href="{{ url('admin/tables-datatables-basic') }}" class="dropdown-item"><span data-lang="tables-datatables-basic">Basic</span></a>
                                            <a href="{{ url('admin/tables-datatables-export-data') }}" class="dropdown-item"><span data-lang="tables-datatables-export-data">Export Data</span></a>
                                            <a href="{{ url('admin/tables-datatables-select') }}" class="dropdown-item"><span data-lang="tables-datatables-select">Select</span></a>
                                            <a href="{{ url('admin/tables-datatables-ajax') }}" class="dropdown-item"><span data-lang="tables-datatables-ajax">Ajax</span></a>
                                            <a href="{{ url('admin/tables-datatables-javascript') }}" class="dropdown-item"><span data-lang="tables-datatables-javascript">Javascript Source</span></a>
                                            <a href="{{ url('admin/tables-datatables-rendering') }}" class="dropdown-item"><span data-lang="tables-datatables-rendering">Data Rendering</span></a>
                                            <a href="{{ url('admin/tables-datatables-scroll') }}" class="dropdown-item"><span data-lang="tables-datatables-scroll">Scroll</span></a>
                                            <a href="{{ url('admin/tables-datatables-fixed-columns') }}" class="dropdown-item"><span data-lang="tables-datatables-fixed-columns">Fixed Columns</span></a>
                                            <a href="{{ url('admin/tables-datatables-fixed-header') }}" class="dropdown-item"><span data-lang="tables-datatables-fixed-header">Fixed Header</span></a>
                                            <a href="{{ url('admin/tables-datatables-columns') }}" class="dropdown-item"><span data-lang="tables-datatables-columns">Show &amp; Hide Column</span></a>
                                            <a href="{{ url('admin/tables-datatables-child-rows') }}" class="dropdown-item"><span data-lang="tables-datatables-child-rows">Child Rows</span></a>
                                            <a href="{{ url('admin/tables-datatables-column-searching') }}" class="dropdown-item"><span data-lang="tables-datatables-column-searching">Column Searching</span></a>
                                            <a href="{{ url('admin/tables-datatables-range-search') }}" class="dropdown-item"><span data-lang="tables-datatables-range-search">Range Search</span></a>
                                            <a href="{{ url('admin/tables-datatables-rows-add') }}" class="dropdown-item"><span data-lang="tables-datatables-rows-add">Add Rows</span></a>
                                            <a href="{{ url('admin/tables-datatables-checkbox-select') }}" class="dropdown-item"><span data-lang="tables-datatables-checkbox-select">Checkbox Select</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-icons" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span data-lang="icons">Icons</span>
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-submenu-icons">
                                    <a href="{{ url('admin/icons-tabler') }}" class="dropdown-item"><span data-lang="icons-tabler">Tabler</span></a>
                                    <a href="{{ url('admin/icons-lucide') }}" class="dropdown-item"><span data-lang="icons-lucide">Lucide</span></a>
                                    <a href="{{ url('admin/icons-remix') }}" class="dropdown-item"><span data-lang="icons-remix">Remix</span></a>
                                    <a href="{{ url('admin/icons-solar-duotone') }}" class="dropdown-item"><span data-lang="icons-solar-duotone">Solar Duotone</span></a>
                                    <a href="{{ url('admin/icons-flags') }}" class="dropdown-item"><span data-lang="icons-flags">Flags</span></a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle drop-arrow-none" href="#" id="topnav-submenu-maps" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span data-lang="maps">Maps</span>
                                    <div class="menu-arrow"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-submenu-maps">
                                    <a href="{{ url('admin/maps-google') }}" class="dropdown-item"><span data-lang="maps-google">Google Maps</span></a>
                                    <a href="{{ url('admin/maps-vector') }}" class="dropdown-item"><span data-lang="maps-vector">Vector Maps</span></a>
                                    <a href="{{ url('admin/maps-leaflet') }}" class="dropdown-item"><span data-lang="maps-leaflet">Leaflet Maps</span></a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </nav>
</header>
<!-- Horizontal Menu End -->


            <!-- ============================================================== -->
            <!-- Start Main Content -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="container-fluid">
                    <div class="page-title-head d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h4 class="page-main-title m-0">Horizontal</h4>
                        </div>

                        <div class="text-end">
                            <ol class="breadcrumb m-0 py-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Paces</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Layouts</a></li>
                                <li class="breadcrumb-item active">Horizontal</li>
                            </ol>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h4 class="m-0">Your custom content here</h4>
                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card-->
                        </div>
                        <!-- end col-->
                    </div>
                    <!-- end row-->
                </div>
                <!-- container -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start">
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>
                                © Paces - By <span class="fw-bold text-decoration-underline text-uppercase text-reset fs-12">Coderthemes</span>
                            </div>
                            <div class="col-md-6">
                                <div class="d-none d-md-flex justify-content-end gap-3">
                                    <a href="javascript: void(0);" class="link-reset">About</a>
                                    <a href="javascript: void(0);" class="link-reset">Support</a>
                                    <a href="javascript: void(0);" class="link-reset">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End of Main Content -->
            <!-- ============================================================== -->
        </div>
        <!-- END wrapper -->

        <div class="offcanvas offcanvas-end overflow-hidden" tabindex="-1" id="theme-settings-offcanvas">
            <div class="d-flex justify-content-between text-bg-primary gap-2 p-3" style="background-image: url({{ asset('admin/assets/images/settings-bg.png') }})">
                <div>
                    <h5 class="mb-1 fw-bold text-white text-uppercase">Admin Customizer</h5>
                    <p class="text-white text-opacity-75 fst-italic fw-medium mb-0">Easily configure layout, styles, and preferences for your admin interface.</p>
                </div>

                <div class="flex-grow-0">
                    <button type="button" class="d-block btn btn-sm bg-white bg-opacity-25 text-white rounded-circle btn-icon" data-bs-dismiss="offcanvas">
                        <i class="ti ti-x fs-lg"></i>
                    </button>
                </div>
            </div>

            <div class="offcanvas-body theme-customizer-bar p-0 h-100" data-simplebar="">
                <div id="skin" class="p-3 border-bottom border-dashed">
                    <h5 class="mb-3 fw-bold">Select Theme</h5>
                    <div class="row g-3">
                        <div class="col-6" id="skin-default">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-default" value="default" />
                                <label class="form-check-label p-0 w-100" for="demo-skin-default">
                                    <img src="{{ asset('admin/assets/images/layouts/skin-default.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">Default</h5>
                        </div>

                        <div class="col-6" id="skin-minimal">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-minimal" value="minimal" />
                                <label class="form-check-label p-0 w-100" for="demo-skin-minimal">
                                    <img src="{{ asset('admin/assets/images/layouts/skin-minimal.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">Minimal</h5>
                        </div>

                        <div class="col-6" id="skin-modern">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-modern" value="modern" />
                                <label class="form-check-label p-0 w-100" for="demo-skin-modern">
                                    <img src="{{ asset('admin/assets/images/layouts/skin-modern.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">Modern</h5>
                        </div>

                        <div class="col-6" id="skin-material">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-material" value="material" />
                                <label class="form-check-label p-0 w-100" for="demo-skin-material">
                                    <img src="{{ asset('admin/assets/images/layouts/skin-material.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">Material</h5>
                        </div>

                        <div class="col-6" id="skin-saas">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-saas" value="saas" />
                                <label class="form-check-label p-0 w-100" for="demo-skin-saas">
                                    <img src="{{ asset('admin/assets/images/layouts/skin-saas.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">SaaS</h5>
                        </div>

                        <div class="col-6" id="skin-flat">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-flat" value="flat" />
                                <label class="form-check-label p-0 w-100" for="demo-skin-flat">
                                    <img src="{{ asset('admin/assets/images/layouts/skin-flat.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">Flat</h5>
                        </div>

                        <div class="col-6" id="skin-galaxy">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-galaxy" value="galaxy" />
                                <label class="form-check-label p-0 w-100" for="demo-skin-galaxy">
                                    <img src="{{ asset('admin/assets/images/layouts/skin-galaxy.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">Galaxy</h5>
                        </div>

                        <div class="col-6" id="skin-luxe">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-luxe" value="luxe" />
                                <label class="form-check-label p-0 w-100" for="demo-skin-luxe">
                                    <img src="{{ asset('admin/assets/images/layouts/skin-luxe.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">Luxe</h5>
                        </div>

                        <div class="col-6" id="skin-retro">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-retro" value="retro" />
                                <label class="form-check-label p-0 w-100" for="demo-skin-retro">
                                    <img src="{{ asset('admin/assets/images/layouts/skin-retro.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">Retro</h5>
                        </div>

                        <div class="col-6" id="skin-neon">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-neon" value="neon" />
                                <label class="form-check-label p-0 w-100" for="demo-skin-neon">
                                    <img src="{{ asset('admin/assets/images/layouts/skin-neon.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">Neon</h5>
                        </div>

                        <div class="col-6" id="skin-pixel">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-pixel" value="pixel" />
                                <label class="form-check-label p-0 w-100" for="demo-skin-pixel">
                                    <img src="{{ asset('admin/assets/images/layouts/skin-pixel.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">Pixel</h5>
                        </div>

                        <div class="col-6" id="skin-soft">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-soft" value="soft" />
                                <label class="form-check-label p-0 w-100" for="demo-skin-soft">
                                    <img src="{{ asset('admin/assets/images/layouts/skin-soft.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">Soft</h5>
                        </div>

                        <div class="col-6" id="skin-mono">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-mono" value="mono" />
                                <label class="form-check-label p-0 w-100" for="demo-skin-mono">
                                    <img src="{{ asset('admin/assets/images/layouts/skin-mono.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">Mono</h5>
                        </div>

                        <div class="col-6" id="skin-prism">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-prism" value="prism" />
                                <label class="form-check-label p-0 w-100" for="demo-skin-prism">
                                    <img src="{{ asset('admin/assets/images/layouts/skin-prism.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">Prism</h5>
                        </div>

                        <div class="col-6" id="skin-nova">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-nova" value="nova" />
                                <label class="form-check-label p-0 w-100" for="demo-skin-nova">
                                    <img src="{{ asset('admin/assets/images/layouts/skin-nova.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">Nova</h5>
                        </div>

                        <div class="col-6" id="skin-zen">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-zen" value="zen" />
                                <label class="form-check-label p-0 w-100" for="demo-skin-zen">
                                    <img src="{{ asset('admin/assets/images/layouts/skin-zen.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">Zen</h5>
                        </div>

                        <div class="col-6" id="skin-elegant">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-elegant" value="elegant" />
                                <label class="form-check-label p-0 w-100" for="demo-skin-elegant">
                                    <img src="{{ asset('admin/assets/images/layouts/skin-elegant.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">Elegant</h5>
                        </div>

                        <div class="col-6" id="skin-vivid">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-vivid" value="vivid" />
                                <label class="form-check-label p-0 w-100" for="demo-skin-vivid">
                                    <img src="{{ asset('admin/assets/images/layouts/skin-vivid.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">Vivid</h5>
                        </div>

                        <div class="col-6" id="skin-aurora">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-aurora" value="aurora" />
                                <label class="form-check-label p-0 w-100" for="demo-skin-aurora">
                                    <img src="{{ asset('admin/assets/images/layouts/skin-aurora.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">Aurora</h5>
                        </div>

                        <div class="col-6" id="skin-crystal">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-crystal" value="crystal" />
                                <label class="form-check-label p-0 w-100" for="demo-skin-crystal">
                                    <img src="{{ asset('admin/assets/images/layouts/skin-crystal.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">Crystal</h5>
                        </div>

                        <div class="col-6" id="skin-matrix">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-matrix" value="matrix" />
                                <label class="form-check-label p-0 w-100" for="demo-skin-matrix">
                                    <img src="{{ asset('admin/assets/images/layouts/skin-matrix.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">Matrix</h5>
                        </div>

                        <div class="col-6" id="skin-orbit">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-orbit" value="orbit" />
                                <label class="form-check-label p-0 w-100" for="demo-skin-orbit">
                                    <img src="{{ asset('admin/assets/images/layouts/skin-orbit.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">Orbit</h5>
                        </div>

                        <div class="col-6" id="skin-neo">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-neo" value="neo" />
                                <label class="form-check-label p-0 w-100" for="demo-skin-neo">
                                    <img src="{{ asset('admin/assets/images/layouts/skin-neo.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">Neo</h5>
                        </div>

                        <div class="col-6" id="skin-silver">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-silver" value="silver" />
                                <label class="form-check-label p-0 w-100" for="demo-skin-silver">
                                    <img src="{{ asset('admin/assets/images/layouts/skin-silver.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">Silver</h5>
                        </div>

                        <div class="col-6" id="skin-xenon">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-xenon" value="xenon" />
                                <label class="form-check-label p-0 w-100" for="demo-skin-xenon">
                                    <img src="{{ asset('admin/assets/images/layouts/skin-xenon.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">Xenon</h5>
                        </div>
                    </div>
                </div>

                <div id="theme" class="p-3 border-bottom border-dashed">
                    <h5 class="mb-3 fw-bold">Color Scheme</h5>
                    <div class="row">
                        <div class="col-4" id="theme-light">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-color-light" value="light" />
                                <label class="form-check-label p-0 w-100" for="layout-color-light">
                                    <img src="{{ asset('admin/assets/images/layouts/theme-light.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">Light</h5>
                        </div>

                        <div class="col-4" id="theme-dark">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-color-dark" value="dark" />
                                <label class="form-check-label p-0 w-100" for="layout-color-dark">
                                    <img src="{{ asset('admin/assets/images/layouts/theme-dark.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">Dark</h5>
                        </div>

                        <div class="col-4" id="theme-system">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-color-system" value="system" />
                                <label class="form-check-label p-0 w-100" for="layout-color-system">
                                    <img src="{{ asset('admin/assets/images/layouts/theme-system.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">System</h5>
                        </div>
                    </div>
                </div>

                <div id="topbar-color" class="p-3 border-bottom border-dashed">
                    <h5 class="mb-3 fw-bold">Topbar Color</h5>

                    <div class="row g-3">
                        <div class="col-4" id="topbar-color-light">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-topbar-color" id="layout-topbar-color-light" value="light" />
                                <label class="form-check-label p-0 w-100" for="layout-topbar-color-light">
                                    <img src="{{ asset('admin/assets/images/layouts/topbar-color-light.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">Light</h5>
                        </div>

                        <div class="col-4" id="topbar-color-dark">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-topbar-color" id="layout-topbar-color-dark" value="dark" />
                                <label class="form-check-label p-0 w-100" for="layout-topbar-color-dark">
                                    <img src="{{ asset('admin/assets/images/layouts/topbar-color-dark.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="fs-sm text-center text-muted mt-2 mb-0">Dark</h5>
                        </div>

                        <div class="col-4" id="topbar-color-gray">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-topbar-color" id="layout-topbar-color-gray" value="gray" />
                                <label class="form-check-label p-0 w-100" for="layout-topbar-color-gray">
                                    <img src="{{ asset('admin/assets/images/layouts/topbar-color-gray.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="fs-sm text-center text-muted mt-2 mb-0">Gray</h5>
                        </div>

                        <div class="col-4" id="topbar-color-gradient">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-topbar-color" id="layout-topbar-color-gradient" value="gradient" />
                                <label class="form-check-label p-0 w-100" for="layout-topbar-color-gradient">
                                    <img src="{{ asset('admin/assets/images/layouts/topbar-color-gradient.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="fs-sm text-center text-muted mt-2 mb-0">Gradient</h5>
                        </div>
                    </div>
                </div>

                <div id="sidenav-color" class="p-3 border-bottom border-dashed">
                    <h5 class="mb-3 fw-bold">Sidenav Color</h5>

                    <div class="row g-3">
                        <div class="col-4" id="sidenav-color-light">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-menu-color" id="layout-sidenav-color-light" value="light" />
                                <label class="form-check-label p-0 w-100" for="layout-sidenav-color-light">
                                    <img src="{{ asset('admin/assets/images/layouts/sidenav-color-light.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="fs-sm text-center text-muted mt-2 mb-0">Light</h5>
                        </div>

                        <div class="col-4" id="sidenav-color-dark">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-menu-color" id="layout-sidenav-color-dark" value="dark" />
                                <label class="form-check-label p-0 w-100" for="layout-sidenav-color-dark">
                                    <img src="{{ asset('admin/assets/images/layouts/sidenav-color-dark.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="fs-sm text-center text-muted mt-2 mb-0">Dark</h5>
                        </div>

                        <div class="col-4" id="sidenav-color-gray">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-menu-color" id="layout-sidenav-color-gray" value="gray" />
                                <label class="form-check-label p-0 w-100" for="layout-sidenav-color-gray">
                                    <img src="{{ asset('admin/assets/images/layouts/sidenav-color-gray.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="fs-sm text-center text-muted mt-2 mb-0">Gray</h5>
                        </div>

                        <div class="col-4" id="sidenav-color-gradient">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-menu-color" id="layout-sidenav-color-gradient" value="gradient" />
                                <label class="form-check-label p-0 w-100" for="layout-sidenav-color-gradient">
                                    <img src="{{ asset('admin/assets/images/layouts/sidenav-color-gradient.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="fs-sm text-center text-muted mt-2 mb-0">Gradient</h5>
                        </div>
                        <div class="col-4" id="sidenav-color-image">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-menu-color" id="layout-sidenav-color-image" value="image" />
                                <label class="form-check-label p-0 w-100" for="layout-sidenav-color-image">
                                    <img src="{{ asset('admin/assets/images/layouts/sidenav-color-image.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="fs-sm text-center text-muted mt-2 mb-0">Image</h5>
                        </div>
                    </div>
                </div>

                <div id="sidenav-size" class="p-3 border-bottom border-dashed">
                    <h5 class="mb-3 fw-bold">Sidebar Size</h5>

                    <div class="row g-3">
                        <div class="col-4" id="sidenav-size-default">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidenav-size" id="layout-sidenav-size-default" value="default" />
                                <label class="form-check-label p-0 w-100" for="layout-sidenav-size-default">
                                    <img src="{{ asset('admin/assets/images/layouts/sidenav-size-default.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="mb-0 text-center text-muted mt-2">Default</h5>
                        </div>

                        <div class="col-4" id="sidenav-size-compact">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidenav-size" id="layout-sidenav-size-compact" value="compact" />
                                <label class="form-check-label p-0 w-100" for="layout-sidenav-size-compact">
                                    <img src="{{ asset('admin/assets/images/layouts/sidenav-size-compact.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="mb-0 text-center text-muted mt-2">Compact</h5>
                        </div>

                        <div class="col-4" id="sidenav-size-condensed">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidenav-size" id="layout-sidenav-size-condensed" value="condensed" />
                                <label class="form-check-label p-0 w-100" for="layout-sidenav-size-condensed">
                                    <img src="{{ asset('admin/assets/images/layouts/sidenav-size-condensed.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="mb-0 text-center text-muted mt-2">Condensed</h5>
                        </div>

                        <div class="col-4" id="sidenav-size-on-hover">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidenav-size" id="layout-sidenav-size-small-hover" value="on-hover" />
                                <label class="form-check-label p-0 w-100" for="layout-sidenav-size-small-hover">
                                    <img src="{{ asset('admin/assets/images/layouts/sidenav-size-on-hover.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="mb-0 text-center text-muted mt-2">On Hover</h5>
                        </div>

                        <div class="col-4" id="sidenav-size-on-hover-active">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidenav-size" id="layout-sidenav-size-small-hover-active" value="on-hover-active" />
                                <label class="form-check-label p-0 w-100" for="layout-sidenav-size-small-hover-active">
                                    <img src="{{ asset('admin/assets/images/layouts/sidenav-size-on-hover-active.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="mb-0 fs-base text-center text-muted mt-2">On Hover - Show</h5>
                        </div>

                        <div class="col-4" id="sidenav-size-offcanvas">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidenav-size" id="layout-sidenav-size-offcanvas" value="offcanvas" />
                                <label class="form-check-label p-0 w-100" for="layout-sidenav-size-offcanvas">
                                    <img src="{{ asset('admin/assets/images/layouts/sidenav-size-offcanvas.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="mb-0 text-center text-muted mt-2">Offcanvas</h5>
                        </div>
                    </div>
                </div>

                <div id="width" class="p-3 border-bottom border-dashed">
                    <h5 class="mb-3 fw-bold">Layout Width</h5>

                    <div class="row g-3">
                        <div class="col-4" id="width-fluid">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-fluid" value="fluid" />
                                <label class="form-check-label p-0 w-100" for="layout-width-fluid">
                                    <img src="{{ asset('admin/assets/images/layouts/width-fluid.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="mb-0 text-center text-muted mt-2">Fluid</h5>
                        </div>

                        <div class="col-4" id="width-boxed">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-boxed" value="boxed" />
                                <label class="form-check-label p-0 w-100" for="layout-width-boxed">
                                    <img src="{{ asset('admin/assets/images/layouts/width-boxed.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="mb-0 text-center text-muted mt-2">Boxed</h5>
                        </div>
                    </div>
                </div>

                <div id="dir" class="p-3 border-bottom border-dashed">
                    <h5 class="mb-3 fw-bold">Layout Direction</h5>

                    <div class="row g-3">
                        <div class="col-4" id="dir-ltr">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="dir" id="layout-dir-ltr" value="ltr" />
                                <label class="form-check-label p-0 w-100" for="layout-dir-ltr">
                                    <img src="{{ asset('admin/assets/images/layouts/dir-ltr.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="mb-0 text-center text-muted mt-2">LTR</h5>
                        </div>

                        <div class="col-4" id="dir-rtl">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="dir" id="layout-dir-rtl" value="rtl" />
                                <label class="form-check-label p-0 w-100" for="layout-dir-rtl">
                                    <img src="{{ asset('admin/assets/images/layouts/dir-rtl.png') }}" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="mb-0 text-center text-muted mt-2">RTL</h5>
                        </div>
                    </div>
                </div>

                <div id="position" class="p-3 border-bottom border-dashed">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="fw-bold mb-0">Layout Position</h5>

                        <div class="d-flex gap-1">
                            <div id="position-fixed">
                                <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed" value="fixed" />
                                <label class="btn btn-sm btn-soft-warning w-sm" for="layout-position-fixed">Fixed</label>
                            </div>
                            <div id="position-scrollable">
                                <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable" value="scrollable" />
                                <label class="btn btn-sm btn-soft-warning w-sm ms-0" for="layout-position-scrollable">Scrollable</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="sidenav-user" class="p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">
                            <label class="fw-bold m-0" for="sidebaruser-check">Sidebar User Info</label>
                        </h5>
                        <div class="form-check form-switch fs-lg">
                            <input type="checkbox" class="form-check-input" name="sidebar-user" id="sidebaruser-check" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="offcanvas-footer border-top p-3 text-center">
                <div class="row justify-content-end">
                    <div class="col-6">
                        <a href="#" class="btn btn-success fw-semibold py-2 w-100" target="_blank"><i class="ti ti-basket me-2 fs-md"></i> Buy Now</a>
                    </div>
                    <div class="col-6">
                        <button type="button" class="btn btn-danger fw-semibold py-2 w-100" id="reset-layout"><i class="ti ti-refresh me-2 fs-md"></i> Reset</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end offcanvas-->
 <!-- Vendor js -->
<script src="{{ asset('admin/assets/js/vendors.min.js') }}"></script>

<!-- App js -->
<script src="{{ asset('admin/assets/js/app.js') }}"></script>

    </body>

<!-- Mirrored from coderthemes.com/paces/bootstrap/layouts-horizontal.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Jun 2026 09:59:07 GMT -->
</html>


