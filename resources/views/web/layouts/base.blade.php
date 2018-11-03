<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,400i,700,700i&amp;subset=vietnamese" rel="stylesheet">
        <!-- Title  -->
        <title>@yield('title')</title>
        <!-- <title>South - Real Estate Agency Template | Home</title> -->

        <!-- Favicon  -->
        <link rel="icon" href="{{ asset('south/img/core-img/favicon.ico') }}">

        <!-- Style CSS -->
        <link rel="stylesheet" href="{{ asset('south/style.css') }}">
        <link rel="stylesheet" href="{{ url('theme/css/custom.css') }}">
        @stack('css')
    </head>

    <body>
        @yield('main')

        <!-- jQuery (Necessary for All JavaScript Plugins) -->
        <script src="{{ asset('south/js/jquery/jquery-2.2.4.min.js') }}"></script>
        <!-- Popper js -->
        <script src="{{ asset('south/js/popper.min.js') }}"></script>
        <!-- Bootstrap js -->
        <script src="{{ asset('south/js/bootstrap.min.js') }}"></script>
        <!-- Plugins js -->
        <script src="{{ asset('south/js/plugins.js') }}"></script>
        <script src="{{ asset('south/js/classy-nav.min.js') }}"></script>
        <script src="{{ asset('south/js/jquery-ui.min.js') }}"></script>
        <!-- Active js -->
        <script src="{{ asset('south/js/active.js') }}"></script>

        <script src="https://maps.googleapis.com/maps/api/js"></script>
        
        @stack('js')
    </body>
</html>