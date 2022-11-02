<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="Clube Extremense de Tiro" name="description"/>
    <meta content="Luan Souza" name="author"/>

    <title>Clube Extremense de Tiro - @yield('title')</title>

    <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
    <link href="{{ url ('assets/vendor/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ url ('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>

    <!-- PAGE LEVEL PLUGIN STYLES -->
    <link href="{{ url ('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ url ('assets/vendor/swiper/css/swiper.min.css') }}" rel="stylesheet" type="text/css"/>

    <!-- THEME STYLES -->
    <link href="{{ url ('assets/css/layout.css') }}" rel="stylesheet" type="text/css"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url ('assets/img/favicon.png') }}"/>


</head>
<body>

        @include('web.layouts._partials.header')

        @yield('content')

        @include('web.layouts._partials.footer')
        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Topo</a>

    <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- CORE PLUGINS -->
    <script src="{{ url ('assets/vendor/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ url ('assets/vendor/jquery-migrate.min.js') }}" type="text/javascript"></script>
    <script src="{{ url ('assets/vendor/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>

    <!-- PAGE LEVEL PLUGINS -->
    <script src="{{ url ('assets/vendor/jquery.easing.js') }}" type="text/javascript"></script>
    <script src="{{ url ('assets/vendor/jquery.back-to-top.js') }}" type="text/javascript"></script>
    <script src="{{ url ('assets/vendor/jquery.smooth-scroll.js') }}" type="text/javascript"></script>
    <script src="{{ url ('assets/vendor/jquery.wow.min.js') }}" type="text/javascript"></script>
    <script src="{{ url ('assets/vendor/jquery.parallax.min.js') }}" type="text/javascript"></script>
    <script src="{{ url ('assets/vendor/swiper/js/swiper.jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ url ('assets/vendor/masonry/jquery.masonry.pkgd.min.js') }}" type="text/javascript"></script>
    <script src="{{ url ('assets/vendor/masonry/imagesloaded.pkgd.min.js') }}" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS - Calendar -->
    <link href="{{ url ('assets/lib-calendar/main.css') }}" rel='stylesheet' />
    <script src="{{ url ('assets/lib-calendar/main.js') }}"></script>
    <script src="{{ url ('assets/lib-calendar/locales-all.js') }}"></script>

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="{{ url ('assets/js/layout.js') }}" type="text/javascript"></script>
    <script src="{{ url ('assets/js/components/wow.min.js') }}" type="text/javascript"></script>
    <script src="{{ url ('assets/js/components/swiper.min.js') }}" type="text/javascript"></script>
    <script src="{{ url ('assets/js/components/masonry.min.js') }}" type="text/javascript"></script>
</body>
</html>
