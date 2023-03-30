<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="/admin-template/assets/images/logo/Logo.png" />
    <title>TaskMaster - {{ $title }}</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="/admin-template/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/admin-template/assets/css/lineicons.css" />
    <link rel="stylesheet" href="/admin-template/assets/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="/admin-template/assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="/admin-template/assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="/admin-template/assets/css/main.css" />
</head>

<body>
    <!-- ======== sidebar-nav start =========== -->
    @include('layouts.sidebar-nav')

    <div class="overlay"></div>
    <!-- ======== sidebar-nav end =========== -->

    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
        <!-- ========== header start ========== -->
        @include('layouts.header-nav')
        <!-- ========== header end ========== -->

        <!-- ========== section start ========== -->
        <section class="section">
            <div class="container-fluid position-relative">
                @yield('content')
            </div>
            <!-- end container -->
        </section>
        <!-- ========== section end ========== -->

        <!-- ========== footer start =========== -->
        @include('layouts.footer')
        <!-- ========== footer end =========== -->
    </main>
    <!-- ======== main-wrapper end =========== -->

    <!-- ========= All Javascript files linkup ======== -->
    <script src="/admin-template/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/admin-template/assets/js/Chart.min.js"></script>
    <script src="/admin-template/assets/js/dynamic-pie-chart.js"></script>
    <script src="/admin-template/assets/js/moment.min.js"></script>
    <script src="/admin-template/assets/js/fullcalendar.js"></script>
    <script src="/admin-template/assets/js/jvectormap.min.js"></script>
    <script src="/admin-template/assets/js/world-merc.js"></script>
    <script src="/admin-template/assets/js/polyfill.js"></script>
    <script src="/admin-template/assets/js/main.js"></script>
    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>

    @include('layouts.script')
</body>

</html>
