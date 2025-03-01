<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="pixelstrap">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="https://md-shefat-masum.github.io/index/images/logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="https://md-shefat-masum.github.io/index/images/logo.png" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="./backend/assets/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="./backend/assets/icofont.css">
    <link rel="stylesheet" type="text/css" href="./backend/assets/themify.css">
    <link rel="stylesheet" type="text/css" href="./backend/assets/flag-icon.css">
    <link rel="stylesheet" type="text/css" href="./backend/assets/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./backend/assets/style.css">
    <link rel="stylesheet" type="text/css" href="./backend/assets/responsive.css">
    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    @vite(['resources/js/backend/app.js'])
</head>
<body main-theme-layout="main-theme-layout-4">
    <div id="app">
       <app-component></app-component>
    </div>


    <script src="./backend/assets/jquery-3.2.1.min.js"></script>
    <script src="./backend/assets/bootstrap.bundle.min.js"></script>
    <script src="./backend/assets/sidebar-menu.js"></script>
    <script src="./backend/assets/script.js"></script>
</body>
</html>
