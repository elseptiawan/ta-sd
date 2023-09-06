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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css"
        rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
    {{-- JQUERY --}}
    {{-- <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> --}}
    {{-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script> --}}
    {{-- DatePicker --}}
    {{-- <script language="JavaScript" type="text/javascript" src="/js/jquery-1.2.6.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="/js/jquery-ui-personalized-1.5.2.packed.js"></script>
    <script language="JavaScript" type="text/javascript" src="/js/sprinkle.js"></script> --}}

</body>
