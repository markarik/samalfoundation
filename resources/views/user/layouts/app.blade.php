<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <link rel="stylesheet" href="{{asset('template/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('template/css/bootstrap-datepicker.css')}}">

    <link rel="stylesheet" href="{{asset('template/fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{asset('template/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('template/css/style.css')}}">
</head>
<body style="overflow-x: hidden">
    <div id="app">


        <main class="py-4">
            @yield('content')
        </main>
    </div>


    <script src="{{asset('template/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('template/js/jquery-ui.js')}}"></script>
    <script src="{{asset('template/js/popper.min.js')}}"></script>
    <script src="{{asset('template/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('template/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('template/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('template/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('template/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('template/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('template/js/aos.js')}}"></script>

    <script src="{{asset('template/js/main.js')}}"></script>
</body>
</html>
