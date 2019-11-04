<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('theme')}}/assets/images/favicon.png">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Custom CSS -->
    <link href="{{asset('theme')}}/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="{{asset('theme')}}/assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="{{asset('theme')}}/assets/libs/morris.js/morris.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('theme')}}/dist/css/style.min.css" rel="stylesheet">
</head>

<body>
    
    <div id="app">
             <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
            @include('partials.header')
    
            @include('partials.menu')
    
            <div class="page-wrapper">

                <breadcrumb-component></breadcrumb-component>
    
                <div class="container-fluid">
                  {{-- @yield('content') --}}
                  <router-view></router-view>
                </div>
                
                @include('partials.footer')
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
    
        {{-- @include('partials.customizer') --}}
    
        <div class="chat-windows"></div>
    </div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('theme')}}/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('theme')}}/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="{{asset('theme')}}/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="{{asset('theme')}}/dist/js/app.min.js"></script>
    <script src="{{asset('theme')}}/dist/js/app.init.dark.js"></script>
    <script src="{{asset('theme')}}/dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('theme')}}/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="{{asset('theme')}}/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="{{asset('theme')}}/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="{{asset('theme')}}/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('theme')}}/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="{{asset('theme')}}/assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="{{asset('theme')}}/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 charts -->
    <script src="{{asset('theme')}}/assets/extra-libs/c3/d3.min.js"></script>
    <script src="{{asset('theme')}}/assets/extra-libs/c3/c3.min.js"></script>
    <!--chartjs -->
    <script src="{{asset('theme')}}/assets/libs/raphael/raphael.min.js"></script>
    {{-- <script src="{{asset('theme')}}/dist/js/pages/dashboards/dashboard1.js"></script> --}}
</body>

</html>