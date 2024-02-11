<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('judul')</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('/template/src/images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('/template/src/assets/css/styles.min.css') }}" />

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <script defer src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
</head>

<body>
    <!--  Body Wrapper -->
    <div data-layout="vertical" data-sidebar-position="fixed" data-header-position="fixed">
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('/template/src/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('template/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/src/assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('template/src/assets/js/app.min.js') }}"></script>
    <script src="{{ asset('template/src/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('template/src/assets/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('template/src/assets/js/dashboard.js') }}"></script>
    <script defer src="{{ asset('template/src/assets/js/dataTable.js') }}"></script>
</body>

</html>
