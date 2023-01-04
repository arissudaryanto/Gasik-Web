<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    </head>
    <body class="loading">
        <div id="preloader">
            <div class="preloader-wrap">
                <div class="loading-bar"></div>
            </div>
        </div>
        <div class="main-wrapper">
            @include('partials.header')
            @yield('content')
            @include('partials.footer')
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('js/vendors/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('js/vendors/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/vendors/parallax.min.js') }}"></script>
        <script src="{{ asset('js/vendors/aos.js') }}"></script>
        <script src="{{ asset('js/vendors/massonry.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>

        @yield('js')

    </body>
</html>
