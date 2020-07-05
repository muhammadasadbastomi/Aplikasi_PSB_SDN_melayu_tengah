<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description"
        content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard analytics - Frest - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="{{ asset('app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('app-assets/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/apexcharts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/dragula.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/semi-dark-layout.css') }}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/css/core/menu/menu-types/horizontal-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/dashboard-analytics.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu navbar-sticky 2-columns   footer-static  " data-open="hover"
    data-menu="horizontal-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    @include('layouts/navbar')
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-light navbar-without-dd-arrow"
        role="navigation" data-menu="menu-wrapper">
        <div class="navbar-header d-xl-none d-block">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html">
                        <div class="brand-logo"><img class="logo" src="../../../app-assets/images/logo/logo.png" />
                        </div>
                        <h2 class="brand-text mb-0">Frest</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                            class="bx bx-x d-block d-xl-none font-medium-4 primary toggle-icon"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <!-- Horizontal menu content-->
        <div class="navbar-container main-menu-content" data-menu="menu-container">
            <!-- include ../../../includes/mixins-->
            <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="filled">
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="index.html"
                        data-toggle="dropdown"><i class="menu-livicon" data-icon="desktop"></i><span
                            data-i18n="Dashboard">Dashboard</span></a>
                    <ul class="dropdown-menu">
                        <li data-menu=""><a class="dropdown-item align-items-center" href="dashboard-ecommerce.html"
                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>eCommerce</a>
                        </li>
                        <li class="active" data-menu=""><a class="dropdown-item align-items-center"
                                href="dashboard-analytics.html" data-toggle="dropdown"><i
                                    class="bx bx-right-arrow-alt"></i>Analytics</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#"
                        data-toggle="dropdown"><i class="menu-livicon" data-icon="comments"></i><span>Apps</span></a>
                    <ul class="dropdown-menu">
                        <li data-menu=""><a class="dropdown-item align-items-center" href="app-email.html"
                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Email</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item align-items-center" href="app-chat.html"
                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Chat</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item align-items-center" href="app-todo.html"
                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Todo</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item align-items-center" href="app-calendar.html"
                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Calendar</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item align-items-center" href="app-kanban.html"
                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Kanban</a>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                class="dropdown-item align-items-center dropdown-toggle" href="#"
                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Invoice</a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="app-invoice-list.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Invoice List</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center" href="app-invoice.html"
                                        data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Invoice</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="app-invoice-edit.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Invoice Edit</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center" href="app-invoice-add.html"
                                        data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Invoice Add</a>
                                </li>
                            </ul>
                        </li>
                        <li data-menu=""><a class="dropdown-item align-items-center" href="app-file-manager.html"
                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>File Manager</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#"
                        data-toggle="dropdown"><i class="menu-livicon" data-icon="briefcase"></i><span>UI</span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                class="dropdown-item align-items-center dropdown-toggle" href="#"
                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Content</a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item align-items-center" href="content-grid.html"
                                        data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Grid</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="content-typography.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Typography</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="content-text-utilities.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Text Utilities</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="content-syntax-highlighter.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Syntax Highlighter</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="content-helper-classes.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Helper Classes</a>
                                </li>
                            </ul>
                        </li>
                        <li data-menu=""><a class="dropdown-item align-items-center" href="colors.html"
                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Colors</a>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                class="dropdown-item align-items-center dropdown-toggle" href="#"
                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Icons</a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item align-items-center" href="icons-boxicons.html"
                                        data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Boxicons</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center" href="icons-livicons.html"
                                        data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>LivIcons</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                class="dropdown-item align-items-center dropdown-toggle" href="#"
                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Card</a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item align-items-center" href="card-basic.html"
                                        data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Basic</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center" href="card-actions.html"
                                        data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Card Actions</a>
                                </li>
                            </ul>
                        </li>
                        <li data-menu=""><a class="dropdown-item align-items-center" href="widgets.html"
                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Widgets</a>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                class="dropdown-item align-items-center dropdown-toggle" href="#"
                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Components</a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="component-alerts.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Alerts</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="component-buttons-basic.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Buttons</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="component-breadcrumbs.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Breadcrumbs</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="component-carousel.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Carousel</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="component-collapse.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Collapse</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="component-dropdowns.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Dropdowns</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="component-list-group.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>List Group</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="component-modals.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Modals</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="component-pagination.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Pagination</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="component-navbar.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Navbar</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="component-tabs-component.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Tabs Component</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="component-pills-component.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Pills Component</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="component-tooltips.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Tooltips</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="component-popovers.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Popovers</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="component-badges.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Badges</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="component-pill-badges.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Pill Badges</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="component-progress.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Progress</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="component-media-objects.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Media Objects</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="component-spinner.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Spinner</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="component-bs-toast.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Toasts</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                class="dropdown-item align-items-center dropdown-toggle" href="#"
                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Extra Components</a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="ex-component-avatar.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Avatar</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="ex-component-chips.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Chips</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="ex-component-divider.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Divider</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                class="dropdown-item align-items-center dropdown-toggle" href="#"
                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Extensions</a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="ext-component-sweet-alerts.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Sweet Alert</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="ext-component-toastr.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Toastr</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="ext-component-noui-slider.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>NoUi Slider</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="ext-component-drag-drop.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Drag &amp; Drop</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="ext-component-tour.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Tour</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="ext-component-swiper.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Swiper</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="ext-component-treeview.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Treeview</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="ext-component-block-ui.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Block-UI</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="ext-component-media-player.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Media Player</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="ext-component-miscellaneous.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Miscellaneous</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="ext-component-i18n.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>i18n</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#"
                        data-toggle="dropdown"><i class="menu-livicon" data-icon="thumbnails-big"></i><span>Forms &amp;
                            Tables</span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                class="dropdown-item align-items-center dropdown-toggle" href="#"
                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Form Elements</a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item align-items-center" href="form-inputs.html"
                                        data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Input</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="form-input-groups.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Input Groups</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="form-number-input.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Number Input</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center" href="form-select.html"
                                        data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Select</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center" href="form-radio.html"
                                        data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Radio</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center" href="form-checkbox.html"
                                        data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Checkbox</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center" href="form-switch.html"
                                        data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Switch</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center" href="form-textarea.html"
                                        data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Textarea</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="form-quill-editor.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Quill Editor</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="form-file-uploader.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>File Uploader</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="form-date-time-picker.html" data-toggle="dropdown"><i
                                            class="bx bx-right-arrow-alt"></i>Date &amp; Time Picker</a>
                                </li>
                            </ul>
                        </li>
                        <li data-menu=""><a class="dropdown-item align-items-center" href="form-layout.html"
                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Form Layout</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item align-items-center" href="form-wizard.html"
                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Form Wizard</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item align-items-center" href="form-validation.html"
                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Form Validation</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item align-items-center" href="form-repeater.html"
                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Form Repeater</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item align-items-center" href="table.html"
                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Table</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item align-items-center" href="table-extended.html"
                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Table extended</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item align-items-center" href="table-datatable.html"
                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Datatable</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#"
                        data-toggle="dropdown"><i class="menu-livicon" data-icon="notebook"></i><span>Pages</span></a>
                    <ul class="dropdown-menu">
                        <li data-menu=""><a class="dropdown-item align-items-center" href="page-user-profile.html"
                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>User Profile</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item align-items-center" href="page-faq.html"
                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>FAQ</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item align-items-center" href="page-knowledge-base.html"
                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Knowledge Base</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item align-items-center" href="page-search.html"
                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Search</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item align-items-center" href="page-account-settings.html"
                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Account Settings</a>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                class="dropdown-item align-items-center dropdown-toggle" href="#"
                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>User</a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item align-items-center" href="page-users-list.html"
                                        data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>List</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center" href="page-users-view.html"
                                        data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>View</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center" href="page-users-edit.html"
                                        data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Edit</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                class="dropdown-item align-items-center dropdown-toggle" href="#"
                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Starter kit</a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="../../../starter-kit/ltr/horizontal-menu-template/sk-layout-1-column.html"
                                        data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>1 column</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="../../../starter-kit/ltr/horizontal-menu-template/sk-layout-2-columns.html"
                                        data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>2 columns</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="../../../starter-kit/ltr/horizontal-menu-template/sk-layout-fixed-navbar.html"
                                        data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Fixed navbar</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="../../../starter-kit/ltr/horizontal-menu-template/sk-layout-fixed.html"
                                        data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Fixed layout</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="../../../starter-kit/ltr/horizontal-menu-template/sk-layout-static.html"
                                        data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Static layout</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                class="dropdown-item align-items-center dropdown-toggle" href="#"
                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Authentication</a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item align-items-center" href="auth-login.html"
                                        data-toggle="dropdown" target="_blank"><i
                                            class="bx bx-right-arrow-alt"></i>Login</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center" href="auth-register.html"
                                        data-toggle="dropdown" target="_blank"><i
                                            class="bx bx-right-arrow-alt"></i>Register</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="auth-forgot-password.html" data-toggle="dropdown" target="_blank"><i
                                            class="bx bx-right-arrow-alt"></i>Forgot Password</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="auth-reset-password.html" data-toggle="dropdown" target="_blank"><i
                                            class="bx bx-right-arrow-alt"></i>Reset Password</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="auth-lock-screen.html" data-toggle="dropdown" target="_blank"><i
                                            class="bx bx-right-arrow-alt"></i>Lock Screen</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                class="dropdown-item align-items-center dropdown-toggle" href="#"
                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Miscellaneous</a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="page-coming-soon.html" data-toggle="dropdown" target="_blank"><i
                                            class="bx bx-right-arrow-alt"></i>Coming Soon</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center" href="error-404.html"
                                        data-toggle="dropdown" target="_blank"><i
                                            class="bx bx-right-arrow-alt"></i>404</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center" href="error-500.html"
                                        data-toggle="dropdown" target="_blank"><i
                                            class="bx bx-right-arrow-alt"></i>500</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="page-not-authorized.html" data-toggle="dropdown" target="_blank"><i
                                            class="bx bx-right-arrow-alt"></i>Not Authorized</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item align-items-center"
                                        href="page-maintenance.html" data-toggle="dropdown" target="_blank"><i
                                            class="bx bx-right-arrow-alt"></i>Maintenance</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#"
                        data-toggle="dropdown"><i class="menu-livicon" data-icon="pie-chart"></i><span>Charts &amp;
                            Maps</span></a>
                    <ul class="dropdown-menu">
                        <li data-menu=""><a class="dropdown-item align-items-center" href="chart-apex.html"
                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Apex</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item align-items-center" href="chart-chartjs.html"
                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Chartjs</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item align-items-center" href="chart-chartist.html"
                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Chartist</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item align-items-center" href="maps-google.html"
                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Google Maps</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#"
                        data-toggle="dropdown"><i class="menu-livicon"
                            data-icon="morph-folder"></i><span>Others</span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                class="dropdown-item align-items-center dropdown-toggle" href="#"
                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Menu Levels</a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item align-items-center" href="#"
                                        data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Second Level</a>
                                </li>
                                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                        class="dropdown-item align-items-center dropdown-toggle" href="#"
                                        data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Second Level</a>
                                    <ul class="dropdown-menu">
                                        <li data-menu=""><a class="dropdown-item align-items-center" href="#"
                                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Third
                                                Level</a>
                                        </li>
                                        <li data-menu=""><a class="dropdown-item align-items-center" href="#"
                                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Third
                                                Level</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="disabled" data-menu=""><a class="dropdown-item align-items-center" href="#"
                                data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Disabled Menu</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item align-items-center"
                                href="https://pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/documentation"
                                data-toggle="dropdown" target="_blank"><i
                                    class="bx bx-right-arrow-alt"></i>Documentation</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item align-items-center"
                                href="https://pixinvent.ticksy.com/" data-toggle="dropdown" target="_blank"><i
                                    class="bx bx-right-arrow-alt"></i>Raise Support</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /horizontal menu content-->
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    @yield('content')
    <!-- END: Content-->

    <!-- demo chat-->
    <div class="widget-chat-demo">
        <!-- widget chat demo footer button start -->
        <button class="btn btn-primary chat-demo-button glow px-1"><i class="livicon-evo"
                data-options="name: comments.svg; style: lines; size: 24px; strokeColor: #fff; autoPlay: true; repeat: loop;"></i></button>
        <!-- widget chat demo footer button ends -->
        <!-- widget chat demo start -->
        <div class="widget-chat widget-chat-demo d-none">
            <div class="card mb-0">
                <div class="card-header border-bottom p-0">
                    <div class="media m-75">
                        <a href="JavaScript:void(0);">
                            <div class="avatar mr-75">
                                <img src="../../../app-assets/images/portrait/small/avatar-s-2.jpg" alt="avtar images"
                                    width="32" height="32">
                                <span class="avatar-status-online"></span>
                            </div>
                        </a>
                        <div class="media-body">
                            <h6 class="media-heading mb-0 pt-25"><a href="javaScript:void(0);">Kiara Cruiser</a></h6>
                            <span class="text-muted font-small-3">Active</span>
                        </div>
                        <i class="bx bx-x widget-chat-close float-right my-auto cursor-pointer"></i>
                    </div>
                </div>
                <div class="card-body widget-chat-container widget-chat-demo-scroll">
                    <div class="chat-content">
                        <div class="badge badge-pill badge-light-secondary my-1">today</div>
                        <div class="chat">
                            <div class="chat-body">
                                <div class="chat-message">
                                    <p>How can we help? 😄</p>
                                    <span class="chat-time">7:45 AM</span>
                                </div>
                            </div>
                        </div>
                        <div class="chat chat-left">
                            <div class="chat-body">
                                <div class="chat-message">
                                    <p>Hey John, I am looking for the best admin template.</p>
                                    <p>Could you please help me to find it out? 🤔</p>
                                    <span class="chat-time">7:50 AM</span>
                                </div>
                            </div>
                        </div>
                        <div class="chat">
                            <div class="chat-body">
                                <div class="chat-message">
                                    <p>Stack admin is the responsive bootstrap 4 admin template.</p>
                                    <span class="chat-time">8:01 AM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer border-top p-1">
                    <form class="d-flex" onsubmit="widgetChatMessageDemo();" action="javascript:void(0);">
                        <input type="text" class="form-control chat-message-demo mr-75" placeholder="Type here...">
                        <button type="submit" class="btn btn-primary glow px-1"><i
                                class="bx bx-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <!-- widget chat demo ends -->

    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-left d-inline-block">2020 &copy; PIXINVENT</span><span
                class="float-right d-sm-inline-block d-none">Crafted with<i
                    class="bx bxs-heart pink mx-50 font-small-3"></i>by<a class="text-uppercase"
                    href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i
                    class="bx bx-up-arrow-alt"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->

    @include('sweetalert::alert')
    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js') }}"></script>
    <script src="{{ asset('app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js') }}"></script>
    <script src="{{ asset('app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/ui/jquery.sticky.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/extensions/dragula.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('app-assets/js/scripts/configs/horizontal-menu.js') }}"></script>
    <script src="{{ asset('app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('app-assets/js/core/app.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/components.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/footer.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets/js/scripts/pages/dashboard-analytics.js') }}"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
