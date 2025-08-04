<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> @yield('title') </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('admin/dashboardAssets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/dashboardAssets/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/dashboardAssets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('admin/dashboardAssets/vendors/font-awesome/css/font-awesome.min.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('admin/dashboardAssets/vendors/font-awesome/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/dashboardAssets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('admin/dashboardAssets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('admin/dashboardAssets/images/favicon.png')}}" />
</head>

<body class="container-scroller">

    @include('partials.dashboardPartials._navbar')
    <main class="container-fluid page-body-wrapper">
        @include('partials.dashboardPartials._sidebar')
        <div class="main-panel">
            @yield('content')

            @include('partials.dashboardPartials._footer')
        </div>
    </main>


    <script src="{{asset('admin/dashboardAssets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('admin/dashboardAssets/vendors/chart.js/chart.umd.js')}}"></script>
    <script src="{{asset('admin/dashboardAssets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('admin/dashboardAssets/js/off-canvas.js')}}"></script>
    <script src="{{asset('admin/dashboardAssets/js/misc.js')}}"></script>
    <script src="{{asset('admin/dashboardAssets/js/settings.js')}}"></script>
    <script src="{{asset('admin/dashboardAssets/js/todolist.js')}}"></script>
    <script src="{{asset('admin/dashboardAssets/js/jquery.cookie.js')}}"></script>
    <script src="{{asset('admin/dashboardAssets/js/off-canvas.js')}}"></script>
    <script src="{{asset('admin/dashboardAssets/js/misc.js')}}"></script>
    <script src="{{asset('admin/dashboardAssets/js/settings.js')}}"></script>
    <script src="{{asset('admin/dashboardAssets/js/todolist.js')}}"></script>
    <script src="{{asset('admin/dashboardAssets/js/jquery.cookie.js')}}"></script>
    <script src="{{asset('admin/dashboardAssets/js/dashboard.js')}}"></script>
    <script src="{{ asset('admin/dashboardAssets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('admin/dashboardAssets/vendors/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('admin/dashboardAssets/vendors/js/vendor.bundle.base.js') }}"></script>
</body>

</html>