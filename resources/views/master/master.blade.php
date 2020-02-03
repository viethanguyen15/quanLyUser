<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> @yield('title') </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Thư viện vedor -->

    <link href="{{ asset('/css/vendor.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <!-- Theme khởi tạo -->
    <script>
        var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem(
            'themeSettings')) : {};
        var themeName = themeSettings.themeName || '';
        if (themeName) {
            document.write('<link rel="stylesheet" id="theme-style" href="css/app-' + themeName + '.css">');
        } else {
            document.write('<link rel="stylesheet" id="theme-style" href="{{ asset('/css/app.css') }}">');
        }
    </script>
</head>

<body>
    <div class="main-wrapper">
        <div class="app" id="app">
            <!--header-->
            @include('master.header')
            <!--end header-->
            <!--sidebar-->
            @include('master.sidebar')
            <!--end side bar-->
            <div class="sidebar-overlay" id="sidebar-overlay"></div>
            <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
            <div class="mobile-menu-handle"></div>
            <!-- content -->
            @yield('content')
            <!-- end content -->
            <!--footer-->
            @include('master.footer')
            <!--end footer-->
        </div>
    </div>
    <script src="js/vendor.js"></script>
    <script src="js/app.js"></script>
</body>
</html>