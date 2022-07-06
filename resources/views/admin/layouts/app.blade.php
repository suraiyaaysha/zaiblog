<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>srtdash - ICO Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{asset('frontend/assets/favicon.ico')}}">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    {{-- <link rel="stylesheet" href="assets/css/owl.carousel.min.css"> --}}
    {{-- <link rel="stylesheet" href="assets/css/slicknav.min.css"> --}}
    <!-- amchart css -->
    {{-- <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" /> --}}
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">

        <!-- sidebar menu area start -->
        @include('admin.layouts.sidebar')
        <!-- sidebar menu area end -->

        <!-- main content area start -->
        <div class="main-content">

            @yield('content')

        </div>
        <!-- main content area end -->

        <!-- footer area start-->
        @include('admin.layouts.footer')
        <!-- footer area end-->

    </div>
    <!-- page container area end -->

    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    {{-- <script src="assets/js/owl.carousel.min.js"></script> --}}
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    {{-- <script src="assets/js/jquery.slicknav.min.js"></script> --}}

    <!-- start chart js -->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script> --}}
    <!-- start highcharts js -->
    {{-- <script src="https://code.highcharts.com/highcharts.js"></script> --}}
    <!-- start zingchart js -->
    {{-- <script src="https://cdn.zingchart.com/zingchart.min.js"></script> --}}

    <!-- all line chart activation -->
    {{-- <script src="assets/js/line-chart.js"></script> --}}
    <!-- all pie chart -->
    {{-- <script src="assets/js/pie-chart.js"></script> --}}
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>
