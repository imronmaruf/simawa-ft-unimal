<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logo_ormawa/maskot.png') }}">
    <!-- Libs CSS -->
    <link href="{{ asset('backend/assets/vendor/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/vendor/dropzone/dist/dropzone.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/vendor/@mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/vendor/prismjs/themes/prism-okaidia.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/theme.css') }}">
</head>

<body class="bg-light">
    <div id="db-wrapper">
        <!-- Container fluid -->
        @yield('content')

    </div>
    </div>

    <!-- Scripts -->
    <!-- Libs JS -->
    <script src="{{ asset('backend/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/feather-icons/dist/feather.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/prismjs/prism.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/dropzone/dist/min/dropzone.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/prismjs/plugins/toolbar/prism-toolbar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js') }}">
    </script>
    <script src="{{ asset('backend/assets/js/main.js') }}"></script>
    <script src="{{ asset('backend/assets/js/alpinejs.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/feather.js') }}"></script>
    <script src="{{ asset('backend/assets/js/sidebarMenu.js') }}"></script>
</body>
