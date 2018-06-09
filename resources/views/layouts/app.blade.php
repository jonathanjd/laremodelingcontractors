<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="We are Los Angeles Contractors who have been remodeling kitchens, bathrooms, home additions for more than 20 years.">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.fancybox.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Raleway for Title -->
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!-- Pacifico for 404 page   -->
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>



</head>

<body>
    <div id="app">

        @yield('content')
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.fancybox.js') }}"></script>
    </div>
</body>

</html>