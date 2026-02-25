<!doctype html>
<html lang="en">
<!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Admin Panel</title>

    <!--begin::Accessibility Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta name="color-scheme" content="light dark" />
    <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)" />
    <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)" />
    <!--end::Accessibility Meta Tags-->

    <!--begin::Primary Meta Tags-->
    <meta name="title" content="Admin Panel by MDIGTIZ SOFT SOLUTIONS" />
    <meta name="author" content="MDIGTIZ SOFT SOLUTIONS" />
    <meta name="description" content="." />
    <meta name="keywords" content="" />
    <!--end::Primary Meta Tags-->

    <!--begin::Accessibility Features-->
    <!-- Skip links will be dynamically added by accessibility.js -->
    <meta name="supported-color-schemes" content="light dark" />
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.css') }}" />
    <!--end::Accessibility Features-->

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
        integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous" media="print"
        onload="this.media='all'" />
    <!--end::Fonts-->

    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css"
        crossorigin="anonymous" />
    <!--end::Third Party Plugin(OverlayScrollbars)-->

    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
        crossorigin="anonymous" />
    <!--end::Third Party Plugin(Bootstrap Icons)-->

    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="./css/adminlte.css" />
    <!--end::Required Plugin(AdminLTE)-->

    <!-- apexcharts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
        integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0=" crossorigin="anonymous" />

    <!-- jsvectormap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css"
        integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4=" crossorigin="anonymous" />

    <style>
        /* ENVED Theme Colors with Gradients */
        :root {
            --enved-primary: #164A25;
            --enved-secondary: #00AA55;
            --enved-light: #e8f5e8;
            --enved-dark: #0d3518;
        }

        /* Sidebar Background with Gradient */
        .app-sidebar {
            background: linear-gradient(135deg, var(--enved-primary) 0%, var(--enved-dark) 100%) !important;
        }

        /* Brand Section with Gradient */
        .sidebar-brand {
            background: linear-gradient(135deg, rgba(22, 74, 37, 0.9) 0%, rgba(13, 53, 24, 0.9) 100%) !important;
            border-bottom: 2px solid var(--enved-secondary);
        }

        .brand-link {
            color: white !important;
            background: transparent !important;
        }

        .brand-link:hover {
            background: linear-gradient(135deg, rgba(0, 170, 85, 0.1) 0%, rgba(22, 74, 37, 0.1) 100%) !important;
        }

        /* Navigation Headers */
        .nav-header {
            color: var(--enved-secondary) !important;
            font-weight: 600;
            background: linear-gradient(90deg, transparent 0%, rgba(0, 170, 85, 0.1) 50%, transparent 100%);
        }

        /* Main Navigation Links */
        .nav-sidebar>.nav-item>.nav-link {
            color: #e8f5e8 !important;
            background: transparent !important;
            border-left: 3px solid transparent;
            transition: all 0.3s ease;
        }

        .nav-sidebar>.nav-item>.nav-link:hover {
            background: linear-gradient(90deg, rgba(0, 170, 85, 0.15) 0%, rgba(22, 74, 37, 0.1) 100%) !important;
            color: white !important;
            border-left: 3px solid var(--enved-secondary);
        }

        .nav-sidebar>.nav-item>.nav-link.active {
            background: linear-gradient(135deg, var(--enved-secondary) 0%, var(--enved-primary) 100%) !important;
            color: white !important;
            border-left: 3px solid white;
            box-shadow: 0 2px 8px rgba(0, 170, 85, 0.3);
        }

        /* Navigation Icons */
        .nav-sidebar .nav-icon {
            color: var(--enved-secondary) !important;
        }

        .nav-sidebar>.nav-item>.nav-link.active .nav-icon {
            color: white !important;
        }

        /* Treeview Submenus */
        .nav-treeview {
            background: linear-gradient(135deg, rgba(13, 53, 24, 0.9) 0%, rgba(22, 74, 37, 0.8) 100%) !important;
            border-left: 2px solid var(--enved-secondary);
        }

        .nav-treeview .nav-link {
            color: #c8e6c9 !important;
            background: transparent !important;
            border-left: 2px solid transparent;
            transition: all 0.2s ease;
        }

        .nav-treeview .nav-link:hover {
            background: linear-gradient(90deg, rgba(0, 170, 85, 0.2) 0%, transparent 100%) !important;
            color: white !important;
            border-left: 2px solid var(--enved-secondary);
        }

        .nav-treeview .nav-link.active {
            background: linear-gradient(90deg, rgba(0, 170, 85, 0.3) 0%, rgba(22, 74, 37, 0.2) 100%) !important;
            color: white !important;
            border-left: 2px solid white;
        }

        /* Chevron Arrows */
        .nav-arrow {
            color: var(--enved-secondary) !important;
        }

        .nav-link[aria-expanded="true"] .nav-arrow {
            color: white !important;
        }

        /* Scrollbar Styling */
        .sidebar-wrapper::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, var(--enved-secondary) 0%, var(--enved-primary) 100%);
            border-radius: 3px;
        }

        /* Active menu parent indicator */
        .nav-item.menu-open>.nav-link {
            background: linear-gradient(90deg, rgba(0, 170, 85, 0.1) 0%, transparent 100%) !important;
            color: white !important;
        }

        /* ENVED Theme for Main Content */
        :root {
            --enved-primary: #164A25;
            --enved-secondary: #00AA55;
            --enved-light: #e8f5e8;
            --enved-dark: #0d3518;
        }

        /* Main Content Area */
        .app-main {
            background: linear-gradient(135deg, #f8fdf8 0%, #f0f9f0 100%);
        }

        /* Content Header */
        .app-content-header {
            background: linear-gradient(135deg, var(--enved-primary) 0%, var(--enved-dark) 100%);
            color: white;
            padding: 20px 0;
            margin-bottom: 0;
            border-bottom: 3px solid var(--enved-secondary);
        }

        .app-content-header h3 {
            color: white;
            font-weight: 600;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }

        /* Breadcrumb */
        .breadcrumb {
            background: transparent;
            margin-bottom: 0;
        }

        .breadcrumb-item a {
            color: var(--enved-light) !important;
            text-decoration: none;
        }

        .breadcrumb-item.active {
            color: var(--enved-secondary) !important;
            font-weight: 500;
        }

        .breadcrumb-item+.breadcrumb-item::before {
            color: var(--enved-light);
        }

        /* Main Content Container */
        .app-content {
            background: linear-gradient(135deg, #ffffff 0%, #f8fdf8 100%);
            min-height: calc(100vh - 200px);
        }

        .container-fluid {
            padding: 20px;
        }

        /* Page Headers */
        h1 {
            color: var(--enved-primary);
            font-weight: 600;
            margin-bottom: 20px;
            border-bottom: 2px solid var(--enved-secondary);
            padding-bottom: 10px;
        }

        /* Buttons */
        .btn-primary {
            background: linear-gradient(135deg, var(--enved-primary) 0%, var(--enved-secondary) 100%);
            border: none;
            color: white;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, var(--enved-dark) 0%, var(--enved-primary) 100%);
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(22, 74, 37, 0.3);
        }

        .btn-warning {
            background: linear-gradient(135deg, #ffc107 0%, #ffb300 100%);
            border: none;
            color: #212529;
            font-weight: 500;
        }

        .btn-warning:hover {
            background: linear-gradient(135deg, #ffb300 0%, #ff8f00 100%);
            transform: translateY(-1px);
        }

        .btn-danger {
            background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
            border: none;
            font-weight: 500;
        }

        .btn-danger:hover {
            background: linear-gradient(135deg, #c82333 0%, #a71e2a 100%);
            transform: translateY(-1px);
        }

        /* Tables */
        .table {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(22, 74, 37, 0.1);
            border: 1px solid #e8f5e8;
        }

        .table thead {
            background: linear-gradient(135deg, var(--enved-primary) 0%, var(--enved-dark) 100%);
            color: white;
        }

        .table thead th {
            border: none;
            font-weight: 600;
            padding: 15px;
            text-transform: uppercase;
            font-size: 0.9em;
            letter-spacing: 0.5px;
        }

        .table tbody tr {
            transition: all 0.3s ease;
        }

        .table tbody tr:hover {
            background: linear-gradient(90deg, rgba(0, 170, 85, 0.05) 0%, transparent 100%);
            transform: translateX(2px);
        }

        .table tbody td {
            padding: 12px 15px;
            border-color: #e8f5e8;
            vertical-align: middle;
        }

        /* Table Images */
        .table img {
            border-radius: 4px;
            border: 2px solid #e8f5e8;
            transition: all 0.3s ease;
        }

        .table img:hover {
            border-color: var(--enved-secondary);
            transform: scale(1.05);
        }

        /* Status Badges */
        .table td:contains("No") {
            color: #dc3545;
            font-weight: 500;
        }

        .table td:contains("Yes") {
            color: var(--enved-secondary);
            font-weight: 500;
        }

        /* Action Buttons in Table */
        .table .btn {
            margin: 2px;
            font-size: 0.85em;
            padding: 6px 12px;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        /* Forms in Table */
        .table form {
            display: inline-block;
            margin: 0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .app-content-header {
                padding: 15px 0;
            }

            .app-content-header h3 {
                font-size: 1.5rem;
            }

            .table {
                font-size: 0.9em;
            }

            .table .btn {
                font-size: 0.8em;
                padding: 4px 8px;
            }
        }

        /* Card-like containers */
        .container {
            background: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 4px 15px rgba(22, 74, 37, 0.1);
            border: 1px solid #e8f5e8;
            margin-bottom: 20px;
        }

        /* Focus states for accessibility */
        .btn:focus,
        .form-control:focus {
            box-shadow: 0 0 0 0.2rem rgba(0, 170, 85, 0.25);
            border-color: var(--enved-secondary);
        }

        /* Loading states */
        .btn:disabled {
            background: linear-gradient(135deg, #6c757d 0%, #5a6268 100%);
            transform: none;
        }

        /* ENVED Navbar Gradient Theme */
        :root {
            --enved-primary: #164A25;
            --enved-secondary: #00AA55;
            --enved-light: #e8f5e8;
            --enved-dark: #0d3518;
        }

        /* Navbar Background */
        .app-header.navbar {
            background: linear-gradient(135deg, var(--enved-primary) 0%, var(--enved-dark) 100%);
            border-bottom: 3px solid var(--enved-secondary);
            box-shadow: 0 2px 10px rgba(22, 74, 37, 0.3);
        }

        /* Navbar Links */
        .navbar-nav .nav-link {
            color: var(--enved-light) !important;
            font-weight: 500;
            padding: 10px 15px;
            border-radius: 6px;
            transition: all 0.3s ease;
            margin: 0 2px;
        }

        .navbar-nav .nav-link:hover {
            background: linear-gradient(135deg, rgba(0, 170, 85, 0.2) 0%, rgba(22, 74, 37, 0.1) 100%);
            color: white !important;
            transform: translateY(-1px);
        }

        /* Navbar Icons */
        .navbar-nav .nav-link i {
            color: var(--enved-secondary);
            transition: all 0.3s ease;
        }

        .navbar-nav .nav-link:hover i {
            color: white;
        }

        /* Home Link Specific */
        .navbar-nav .nav-link[href="http://localhost:8000"] {
            background: linear-gradient(135deg, rgba(0, 170, 85, 0.15) 0%, transparent 100%);
            border: 1px solid rgba(0, 170, 85, 0.3);
        }

        .navbar-nav .nav-link[href="http://localhost:8000"]:hover {
            background: linear-gradient(135deg, var(--enved-secondary) 0%, var(--enved-primary) 100%);
            border-color: white;
        }

        /* Notification Badge */
        .navbar-badge {
            background: linear-gradient(135deg, #ffc107 0%, #ffb300 100%) !important;
            color: #212529 !important;
            font-weight: 600;
            border: 2px solid white;
        }

        /* Dropdown Menu */
        .dropdown-menu {
            background: linear-gradient(135deg, white 0%, #f8fdf8 100%);
            border: 2px solid var(--enved-secondary);
            box-shadow: 0 4px 15px rgba(22, 74, 37, 0.2);
            border-radius: 8px;
        }

        .dropdown-item {
            color: var(--enved-primary);
            font-weight: 500;
            padding: 10px 15px;
            transition: all 0.3s ease;
        }

        .dropdown-item:hover {
            background: linear-gradient(135deg, rgba(0, 170, 85, 0.1) 0%, transparent 100%);
            color: var(--enved-dark);
        }

        /* User Header Section */
        .user-header {
            background: linear-gradient(135deg, var(--enved-primary) 0%, var(--enved-secondary) 100%) !important;
            padding: 20px;
            text-align: center;
        }

        .user-header p {
            color: white;
            margin: 0;
        }

        .user-header small {
            color: var(--enved-light);
        }

        /* User Footer Buttons */
        .user-footer .btn-default {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border: 1px solid #dee2e6;
            color: var(--enved-primary);
            transition: all 0.3s ease;
        }

        .user-footer .btn-default:hover {
            background: linear-gradient(135deg, var(--enved-secondary) 0%, var(--enved-primary) 100%);
            color: white;
            border-color: var(--enved-secondary);
        }

        /* Fullscreen Toggle */
        .nav-link[data-lte-toggle="fullscreen"] {
            background: linear-gradient(135deg, rgba(0, 170, 85, 0.1) 0%, transparent 100%);
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 5px;
        }

        .nav-link[data-lte-toggle="fullscreen"]:hover {
            background: linear-gradient(135deg, var(--enved-secondary) 0%, var(--enved-primary) 100%);
        }

        /* Notification Dropdown */
        .dropdown-header {
            background: linear-gradient(135deg, var(--enved-primary) 0%, var(--enved-dark) 100%);
            color: white;
            font-weight: 600;
        }

        .dropdown-divider {
            border-color: var(--enved-secondary);
        }

        /* User Menu Dropdown */
        .user-menu .nav-link.dropdown-toggle {
            background: linear-gradient(135deg, rgba(0, 170, 85, 0.15) 0%, rgba(22, 74, 37, 0.1) 100%);
            border: 1px solid rgba(0, 170, 85, 0.3);
            border-radius: 20px;
            padding: 8px 15px;
        }

        .user-menu .nav-link.dropdown-toggle:hover {
            background: linear-gradient(135deg, var(--enved-secondary) 0%, var(--enved-primary) 100%);
            border-color: white;
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .navbar-nav .nav-link {
                padding: 8px 12px;
                margin: 2px 0;
            }

            .user-menu .nav-link.dropdown-toggle {
                padding: 6px 12px;
                font-size: 0.9em;
            }
        }

        /* Focus States for Accessibility */
        .nav-link:focus {
            outline: 2px solid var(--enved-secondary);
            outline-offset: 2px;
        }

        .dropdown-item:focus {
            background: linear-gradient(135deg, rgba(0, 170, 85, 0.2) 0%, transparent 100%);
        }

        /* ENVED Full Width Gradient Header */
        :root {
            --enved-primary: #164A25;
            --enved-secondary: #00AA55;
            --enved-orange: #FF6B35;
            --enved-orange-light: #FF8C42;
        }

        /* Content Header - Full Width Gradient */
        .app-content-header {
            background: linear-gradient(90deg, var(--enved-primary) 0%, var(--enved-secondary) 50%, var(--enved-orange) 100%);
            color: white;
            padding: 30px 0;
            margin-bottom: 0;
            position: relative;
            overflow: hidden;
        }

        .app-content-header h3 {
            color: white;
            font-weight: 700;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
            margin: 0;
        }

        /* Breadcrumb on Gradient */
        .breadcrumb {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            margin-bottom: 0;
            padding: 10px 20px;
            border-radius: 25px;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .breadcrumb-item a {
            color: white !important;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .breadcrumb-item a:hover {
            color: var(--enved-light) !important;
            transform: translateY(-1px);
        }

        .breadcrumb-item.active {
            color: white !important;
            font-weight: 600;
            opacity: 0.9;
        }

        .breadcrumb-item+.breadcrumb-item::before {
            color: rgba(255, 255, 255, 0.7);
            font-weight: bold;
        }

        /* Add subtle pattern overlay */
        .app-content-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background:
                radial-gradient(circle at 20% 80%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
            pointer-events: none;
        }

        /* Container positioning */
        .app-content-header .container-fluid {
            position: relative;
            z-index: 2;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .app-content-header {
                padding: 20px 0;
                background: linear-gradient(90deg, var(--enved-primary) 0%, var(--enved-orange) 100%);
            }

            .app-content-header h3 {
                font-size: 1.5rem;
                text-align: center;
                margin-bottom: 10px;
            }

            .breadcrumb {
                justify-content: center;
            }
        }

        /* Ultra Compact Pagination */
        nav[role="navigation"][aria-label="Pagination Navigation"] {
            font-size: 0.7rem;
        }

        nav[role="navigation"] .relative.inline-flex.items-center {
            padding: 0.125rem 0.375rem;
            min-height: 1.5rem;
            min-width: 1.5rem;
            font-size: 0.7rem;
        }

        nav[role="navigation"] .w-5.h-5 {
            width: 0.75rem;
            height: 0.75rem;
        }

        nav[role="navigation"] .text-sm {
            font-size: 0.7rem;
        }
    </style>

</head>
<!--end::Head-->
<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
        <!--begin::Header-->
        <nav class="app-header navbar navbar-expand bg-body">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Start Navbar Links-->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                            <i class="bi bi-list"></i>
                        </a>
                    </li>
                    <li class="nav-item d-none d-md-block">
                        <a href="{{ route('home.index') }}" class="nav-link">Home</a>
                    </li>

                </ul>
                <!--end::Start Navbar Links-->

                <!--begin::End Navbar Links-->
                <ul class="navbar-nav ms-auto">
                    <!--begin::Navbar Search-->

                    <!--end::Navbar Search-->

                    <!--begin::Messages Dropdown Menu-->


                    <!--begin::Notifications Dropdown Menu-->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-bs-toggle="dropdown" href="#">
                            <i class="bi bi-bell-fill"></i>
                            <span class="navbar-badge badge text-bg-warning">15</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                            <span class="dropdown-item dropdown-header">0 Notifications</span>
                            <div class="dropdown-divider"></div>
                        </div>
                    </li>
                    <!--end::Notifications Dropdown Menu-->

                    <!--begin::Fullscreen Toggle-->
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                            <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                            <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
                        </a>
                    </li>
                    <!--end::Fullscreen Toggle-->

                    <!--begin::User Menu Dropdown-->
                    <li class="nav-item dropdown user-menu">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            {{-- avatar if you have one --}}
                            {{-- <img src="{{ asset(auth()->user()->avatar ?? 'default.png') }}" class="user-image img-circle" alt="User Image"> --}}
                            <span class="d-none d-md-inline">
                                {{ auth()->user()->name ?? 'Guest' }}
                            </span>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                            <!--begin::User Image-->
                            <li class="user-header text-bg-primary">
                                {{-- show avatar again if desired --}}
                                <p>
                                    {{ auth()->user()->name ?? '' }}
                                    {{-- if you store a role or job title --}}
                                    <small>{{ auth()->user()->role?->name ?? '' }}</small>
                                    <small>
                                        Member since {{ optional(auth()->user()->created_at)->format('M. Y') }}
                                    </small>
                                </p>
                            </li>
                            <!--end::User Image-->

                            <!--begin::Menu Body-->
                            <li class="user-body">
                                {{-- any links or stats you want --}}
                            </li>
                            <!--end::Menu Body-->

                            <!--begin::Menu Footer-->
                            <li class="user-footer">
                                <a href="{{ route('admin.users.show', auth()->id()) }}"
                                    class="btn btn-default btn-flat">
                                    Profile
                                </a>
                                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-default btn-flat float-end">Sign
                                        out</button>
                                </form>
                            </li>
                            <!--end::Menu Footer-->
                        </ul>
                    </li>

                    <!--end::User Menu Dropdown-->
                </ul>
                <!--end::End Navbar Links-->
            </div>
            <!--end::Container-->
        </nav>
        <!--end::Header-->
        <!--begin::Sidebar-->
        <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
            <!--begin::Sidebar Brand-->
            <div class="sidebar-brand">
                <!--begin::Brand Link-->
                <a href="/" class="brand-link">
                    <!--begin::Brand Image-->
                    <img src="/img/logo.png" alt="" width="75px" class="brand-image opacity-75 shadow" />
                    <!--end::Brand Image-->
                    <!--begin::Brand Text-->

                    <!--end::Brand Text-->
                </a>
                <!--end::Brand Link-->
            </div>
            <!--end::Sidebar Brand-->
            <!--begin::Sidebar Wrapper-->
            <div class="sidebar-wrapper">
                <nav class="mt-2">
                    <!--begin::Sidebar Menu-->
                    <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="navigation"
                        aria-label="Main navigation" data-accordion="false" id="navigation">




                        <li class="nav-header">Pages</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    banner
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.index', ['slug' => 'banner']) }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.create', ['slug' => 'banner']) }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    whychoose
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.index', ['slug' => 'whychoose']) }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.create', ['slug' => 'whychoose']) }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    services
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.services.index', ['slug' => 'services']) }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.services.create', ['slug' => 'services']) }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Slider
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.index', ['slug' => 'slider']) }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.create', ['slug' => 'slider']) }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Logo
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.create', ['slug' => 'logo']) }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.index', ['slug' => 'logo']) }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Second logo
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.create', ['slug' => 'second-logo']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.index', ['slug' => 'second-logo']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Features
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.create', ['slug' => 'features']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.index', ['slug' => 'features']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    About us Home
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.create', ['slug' => 'about-us-home']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.index', ['slug' => 'about-us-home']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    About Us
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.create', ['slug' => 'about-s']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.index', ['slug' => 'about-s']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Blogs
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.create', ['slug' => 'blogs']) }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.index', ['slug' => 'blogs']) }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Counters
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.create', ['slug' => 'counter']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.index', ['slug' => 'counter']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Why choose Us
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.create', ['slug' => 'whychooseus']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.index', ['slug' => 'whychooseus']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Facilities
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.create', ['slug' => 'facilities']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.index', ['slug' => 'facilities']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>



                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Featured
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.create', ['slug' => 'featured']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.index', ['slug' => 'featured']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Gallery
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.create', ['slug' => 'gallery']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.index', ['slug' => 'gallery']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Testimonials
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.create', ['slug' => 'testimonials']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.index', ['slug' => 'testimonials']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>



                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Faq
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.create', ['slug' => 'faq']) }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.index', ['slug' => 'faq']) }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>




                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Highlights
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.create', ['slug' => 'highlights']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.index', ['slug' => 'highlights']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>




                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Companies
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.create', ['slug' => 'companies']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.index', ['slug' => 'companies']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Common banner
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.create', ['slug' => 'common-banner']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.index', ['slug' => 'common-banner']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Common Donation
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.create', ['slug' => 'commondonation']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.index', ['slug' => 'commondonation']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>




                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Cancellation & Refunds
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.create', ['slug' => 'cancellation-and-refunds']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.index', ['slug' => 'cancellation-and-refunds']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Terms and Conditions
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.create', ['slug' => 'termsandconditions']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.index', ['slug' => 'termsandconditions']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>



                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Shipping
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.create', ['slug' => 'shipping']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.index', ['slug' => 'shipping']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Privacy
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.create', ['slug' => 'privacy']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.index', ['slug' => 'privacy']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-header">Contact</li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Phone
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.create', ['slug' => 'phone']) }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.index', ['slug' => 'phone']) }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Email
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.create', ['slug' => 'email']) }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.index', ['slug' => 'email']) }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Address
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.create', ['slug' => 'address']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.index', ['slug' => 'address']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Social media Icons
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.create', ['slug' => 'social-icons']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.page.index', ['slug' => 'social-icons']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-header">Submissions</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Contact form
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.contacts.index', ['slug' => 'social-icons']) }}"
                                        class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>

                            </ul>
                        </li>


                        <li class="nav-header">Forms</li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Join Our Mission
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.volunteers.index') }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>

                            </ul>
                        </li>



                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Ewaste Donations
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.ewaste-donations.index') }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>

                            </ul>
                        </li>


                        <li class="nav-header">Donations</li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Orders
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.orders.index') }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.orders.create') }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Orderitems
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.orderitems.index') }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.orderitems.create') }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Transactions
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.transactions.index') }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.transactions.create') }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-heart-fill"></i>
                                <p>
                                    Donations
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.donations.index') }}" class="nav-link">
                                        <i class="nav-icon bi bi-list-ul"></i>
                                        <p>All Donations</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.donations.export') }}" class="nav-link">
                                        <i class="nav-icon bi bi-download"></i>
                                        <p>Export Report</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-header">Settings</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Categories
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.post-categories.index') }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.post-categories.create') }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                            </ul>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Programs
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.programs.index') }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.programs.create') }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Gallery Categories
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.gallery-categories.index') }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.gallery-categories.create') }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Projects
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.projects.index') }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.projects.create') }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Events
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.events.index') }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.events.create') }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                            </ul>
                        </li>



                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Posts
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.posts.create') }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.posts.index') }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Users
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.users.index') }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.users.create') }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                <p>
                                    Roles
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.roles.index') }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.roles.create') }}" class="nav-link">
                                        <i class="nav-icon bi bi-circle"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                    </ul>
                    <!--end::Sidebar Menu-->
                </nav>
            </div>
            <!--end::Sidebar Wrapper-->
        </aside>
        <!--end::Sidebar-->
        <!--begin::App Main-->
        <main class="app-main">
            <!--begin::App Content Header-->
            <div class="app-content-header">
                <!--begin::Container-->
                <div class="container-fluid">
                    <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Dashboard</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::App Content Header-->
            <!--begin::App Content-->
            <div class="app-content">
                <!--begin::Container-->
                <div class="container-fluid">
                    @stack('styles')
                    @yield('content')
                    @stack('scripts')

                </div>
                <!--end::Container-->
            </div>
            <!--end::App Content-->
        </main>
        <!--end::App Main-->
        <!--begin::Footer-->
        <footer class="app-footer">
            <!--begin::To the end-->
            <div class="float-end d-none d-sm-inline">Anything you want</div>
            <!--end::To the end-->
            <!--begin::Copyright-->
            <strong>
                Copyright &copy; 2014-2025&nbsp;
                <a href="https://mdigitz.com" class="text-decoration-none">MDIGITZ SOFT SOLUTIONS</a>.
            </strong>
            All rights reserved.
            <!--end::Copyright-->
        </footer>
        <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"
        crossorigin="anonymous"></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous">
    </script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="{{ asset('adminlte/dist/js/adminlte.js') }}"></script>
    <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>
        const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
        const Default = {
            scrollbarTheme: 'os-theme-light',
            scrollbarAutoHide: 'leave',
            scrollbarClickScroll: true,
        };
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);

            // Disable OverlayScrollbars on mobile devices to prevent touch interference
            const isMobile = window.innerWidth <= 992;

            if (
                sidebarWrapper &&
                OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined &&
                !isMobile
            ) {
                OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                    scrollbars: {
                        theme: Default.scrollbarTheme,
                        autoHide: Default.scrollbarAutoHide,
                        clickScroll: Default.scrollbarClickScroll,
                    },
                });
            }
        });
    </script>
    <!--end::OverlayScrollbars Configure-->

    <!-- OPTIONAL SCRIPTS -->

    <!-- sortablejs -->
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js" crossorigin="anonymous"></script>

    <!-- sortablejs -->
    <script>
        new Sortable(document.querySelector('.connectedSortable'), {
            group: 'shared',
            handle: '.card-header',
        });

        const cardHeaders = document.querySelectorAll('.connectedSortable .card-header');
        cardHeaders.forEach((cardHeader) => {
            cardHeader.style.cursor = 'move';
        });
    </script>

    <!-- apexcharts -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js"
        integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8=" crossorigin="anonymous"></script>

    <!-- ChartJS -->
    <script>
        // NOTICE!! DO NOT USE ANY OF THIS JAVASCRIPT
        // IT'S ALL JUST JUNK FOR DEMO
        // ++++++++++++++++++++++++++++++++++++++++++

        const sales_chart_options = {
            series: [{
                    name: 'Digital Goods',
                    data: [28, 48, 40, 19, 86, 27, 90],
                },
                {
                    name: 'Electronics',
                    data: [65, 59, 80, 81, 56, 55, 40],
                },
            ],
            chart: {
                height: 300,
                type: 'area',
                toolbar: {
                    show: false,
                },
            },
            legend: {
                show: false,
            },
            colors: ['#0d6efd', '#20c997'],
            dataLabels: {
                enabled: false,
            },
            stroke: {
                curve: 'smooth',
            },
            xaxis: {
                type: 'datetime',
                categories: [
                    '2023-01-01',
                    '2023-02-01',
                    '2023-03-01',
                    '2023-04-01',
                    '2023-05-01',
                    '2023-06-01',
                    '2023-07-01',
                ],
            },
            tooltip: {
                x: {
                    format: 'MMMM yyyy',
                },
            },
        };

        const sales_chart = new ApexCharts(
            document.querySelector('#revenue-chart'),
            sales_chart_options,
        );
        sales_chart.render();
    </script>

    <!-- jsvectormap -->
    <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js"
        integrity="sha256-/t1nN2956BT869E6H4V1dnt0X5pAQHPytli+1nTZm2Y=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js"
        integrity="sha256-XPpPaZlU8S/HWf7FZLAncLg2SAkP8ScUTII89x9D3lY=" crossorigin="anonymous"></script>

    <!-- jsvectormap -->
    <script>
        // World map by jsVectorMap
        new jsVectorMap({
            selector: '#world-map',
            map: 'world',
        });

        // Sparkline charts
        const option_sparkline1 = {
            series: [{
                data: [1000, 1200, 920, 927, 931, 1027, 819, 930, 1021],
            }, ],
            chart: {
                type: 'area',
                height: 50,
                sparkline: {
                    enabled: true,
                },
            },
            stroke: {
                curve: 'straight',
            },
            fill: {
                opacity: 0.3,
            },
            yaxis: {
                min: 0,
            },
            colors: ['#DCE6EC'],
        };

        const sparkline1 = new ApexCharts(document.querySelector('#sparkline-1'), option_sparkline1);
        sparkline1.render();

        const option_sparkline2 = {
            series: [{
                data: [515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921],
            }, ],
            chart: {
                type: 'area',
                height: 50,
                sparkline: {
                    enabled: true,
                },
            },
            stroke: {
                curve: 'straight',
            },
            fill: {
                opacity: 0.3,
            },
            yaxis: {
                min: 0,
            },
            colors: ['#DCE6EC'],
        };

        const sparkline2 = new ApexCharts(document.querySelector('#sparkline-2'), option_sparkline2);
        sparkline2.render();

        const option_sparkline3 = {
            series: [{
                data: [15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21],
            }, ],
            chart: {
                type: 'area',
                height: 50,
                sparkline: {
                    enabled: true,
                },
            },
            stroke: {
                curve: 'straight',
            },
            fill: {
                opacity: 0.3,
            },
            yaxis: {
                min: 0,
            },
            colors: ['#DCE6EC'],
        };

        const sparkline3 = new ApexCharts(document.querySelector('#sparkline-3'), option_sparkline3);
        sparkline3.render();
    </script>
    <!--end::Script-->
</body>
<!--end::Body-->

</html>
