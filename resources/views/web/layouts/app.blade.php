<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="Clube Extremense de Tiro" name="description"/>
    <meta content="Luan Souza" name="author"/>

    <title>Clube Extremense de Tiro</title>

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

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
    </div>
</body>
</html>
