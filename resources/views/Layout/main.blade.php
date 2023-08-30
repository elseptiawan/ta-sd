<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skydash Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('dist/css/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    {{-- <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css"> --}}
    {{-- <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css"> --}}
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('dist/css/vertical-layout/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('dist/images/favicon.png') }}" />
</head>

<body>
    <div class="container-scroller">
        @include('Layout.topbar')
        <div class="container-fluid page-body-wrapper">
            @include('Layout.sidebar')
            <div class="main-panel">
                <div class="content-wrapper">

                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('dist/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('dist/js/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('dist/js/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('dist/js/datatables.net-bs64/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('dist/js/dataTables.select.min.js') }}"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('dist/js/off-canvas.js') }}"></script>
    <script src="{{ asset('dist/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('dist/js/template.js') }}"></script>
    <script src="{{ asset('dist/js/settings.js') }}"></script>
    <script src="{{ asset('dist/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <script src="js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->
</body>
