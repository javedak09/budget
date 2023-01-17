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
<body class="horizontal-layout horizontal-menu 1-column blank-page blank-page" data-open="hover"
      data-menu="horizontal-menu" data-color="bg-gradient-x-purple-blue" data-col="1-column">
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row"></div>
        <div class="content-body">
            <section class="flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-lg-4 col-md-6 col-10 box-shadow-2 p-0">
                        @yield('content')
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- END: Content-->
</body>
</html>
