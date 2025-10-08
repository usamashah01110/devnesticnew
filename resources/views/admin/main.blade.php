<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Admin Dashboard')</title>

    <link href="{{ asset('adminsb/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminsb/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">
<div id="wrapper">

    @include('admin.includes.sidebar')

    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">

            @include('admin.includes.navbar')

            <div class="container-fluid">
                @yield('content')
            </div>
        </div>

        @include('admin.includes.footer')
<script src="{{ asset('adminsb/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('adminsb/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('adminsb/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<script src="{{ asset('adminsb/js/sb-admin-2.min.js') }}"></script>

<script src="{{ asset('adminsb/vendor/chart.js/Chart.min.js') }}"></script>

<script src="{{ asset('adminsb/js/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('adminsb/js/demo/chart-pie-demo.js') }}"></script>

</body>

</html>
