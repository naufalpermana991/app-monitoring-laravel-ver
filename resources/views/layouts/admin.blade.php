<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Aplikasi Kalibrasi | {{ $title }}</title>
    <!-- Favicon-->
    @stack('prepend-style')
    @include('includes.styles')
    @stack('addon-style')
</head>

<body>
    <div class="d-flex" id="wrapper">
        @include('includes.sidebar')
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            @include('includes.navbar')
            <!-- Page content-->
            @yield('content')
        </div>
    </div>
    @include('includes.script')

</body>

</html>