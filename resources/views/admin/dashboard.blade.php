{{--<x-app-layout>--}}
{{-- <x-slot name="header">--}}
{{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{-- {{ __('Dashboard') }}--}}
{{-- </h2>--}}
{{-- </x-slot>--}}

{{-- <div class="py-12">--}}
{{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{-- <div class="p-6 text-gray-900">--}}
{{-- {{ __("You're logged in!") }}--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- </div>--}}
{{--</x-app-layout>--}}


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
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

<body>
    @include('partials.dashboardPartials._navbar')
    @include('partials.dashboardPartials._sidebar')
    <main>
        @yield('content')
    </main>

    @include('partials.dashboardPartials._footer')


    <script src="{{asset('admin/dashboardAssets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('admin/dashboardAssets/vendors/chart.js/chart.umd.js')}}"></script>
    <script src="{{asset('admin/dashboardAssets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('admin/dashboardAssets/js/off-canvas.js')}}"></script>
    <script src="{{asset('admin/dashboardAssets/js/misc.js')}}"></script>
    <script src="{{asset('admin/dashboardAssets/js/settings.js')}}"></script>
    <script src="{{asset('admin/dashboardAssets/js/todolist.js')}}"></script>
    <script src="{{asset('admin/dashboardAssets/js/jquery.cookie.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('admin/dashboardAssets/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
</body>

</html>