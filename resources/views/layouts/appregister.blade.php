<?php

use Illuminate\Support\Facades\Route;

?>

    <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link type="text/css" href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css"
          href="../../../../dashboard_dmu/chameleon-admin-template/app-assets/vendors/css/vendors.min.css"
    />
    <link rel="stylesheet" type="text/css"
          href="../../../../dashboard_dmu/chameleon-admin-template/app-assets/vendors/css/forms/toggle/switchery.min.css">
    <link rel="stylesheet" type="text/css"
          href="../../../../dashboard_dmu/chameleon-admin-template/app-assets/css/plugins/forms/switch.min.css">
    <link rel="stylesheet" type="text/css"
          href="../../../../dashboard_dmu/chameleon-admin-template/app-assets/css/core/colors/palette-switch.min.css">
    <link rel="stylesheet" type="text/css"
          href="../../../../dashboard_dmu/chameleon-admin-template/app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css"
          href="../../../../dashboard_dmu/chameleon-admin-template/app-assets/vendors/css/forms/selects/select2.min.css">
    <link rel="stylesheet" type="text/css"
          href="../../../../dashboard_dmu/chameleon-admin-template/app-assets/vendors/css/charts/chartist.css">
    <link rel="stylesheet" type="text/css"
          href="../../../../dashboard_dmu/chameleon-admin-template/app-assets/vendors/css/charts/chartist-plugin-tooltip.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css"
          href="../../../../dashboard_dmu/chameleon-admin-template/app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
          href="../../../../dashboard_dmu/chameleon-admin-template/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css"
          href="../../../../dashboard_dmu/chameleon-admin-template/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css"
          href="../../../../dashboard_dmu/chameleon-admin-template/app-assets/css/components.min.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
          href="../../../../dashboard_dmu/chameleon-admin-template/app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css"
          href="../../../../dashboard_dmu/chameleon-admin-template/app-assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css"
          href="../../../../dashboard_dmu/chameleon-admin-template/app-assets/css/pages/dashboard-analytics.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link type="text/css" href="../../../../dashboard_dmu/chameleon-admin-template/assets/css/style.css"
          rel="stylesheet"/>
    <link type="text/css" href="../../../../dashboard_dmu/chameleon-admin-template/assets/feather/style.min.css"
          rel="stylesheet"/>
    <!-- END: Custom CSS-->
    <script type="text/javascript"
            src="../../../../dashboard_dmu/chameleon-admin-template/app-assets/js/scripts/forms/validation/jquery-3.3.1.js"></script>
</head>
<body class="vertical-layout vertical-menu 2-columns fixed-navbar" data-open="click" data-menu="vertical-menu"
      data-color="bg-blue" data-col="2-columns">
<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="collapse navbar-collapse show" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a
                            class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                                                              href="#"><i class="ft-menu"></i></a></li>
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i
                                class="ficon ft-maximize"></i></a></li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link"
                                                                       id="dropdown-flag" href="#"
                                                                       data-toggle="dropdown" aria-haspopup="true"
                                                                       aria-expanded="false"><i class="ft-power"></i>Welcome:
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->
<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true"
     data-img="Content/demo/chameleon-admin-template/app-assets/images/backgrounds/02.jpg">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="main.aspx">
                    <h3 class="brand-text">Sample Forms</h3>
                </a></li>
            <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
    </div>
    <div class="navigation-background"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item"><a href="sample_recv.aspx"><span
                        style="font-family: Verdana">Sample Receiving</span></a>
            </li>
            <li class="nav-item"><a href="sample_results.aspx"><span class="menu-title" data-i18n=""><span
                            style="font-family: Verdana">Lab Results</span></span></a></li>
            <li class="nav-item"><a href="rpt_sample.aspx"><span class="menu-title" data-i18n=""><span
                            style="font-family: Verdana">Report Viewer</span></span></a></li>
            <li class="nav-item"><a href="rpt_sample.aspx"><span class="menu-title" data-i18n=""><span
                            style="font-family: Verdana">Logout</span></span></a></li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-12 mb-2">
                <span style="font-family: Verdana; font-size: 1.6rem; color: white;">PSBI Lab Management System</span>
            </div>
        </div>
        <div class="content-body">
            @yield('content')
        </div>
    </div>
</div>
<!-- END: Content-->
</body>
</html>
