<!DOCTYPE html>
<html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Weather Forecast</title>

            <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet"> <!-- Google font -->
            <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" media="all">
            <link rel="stylesheet" href="{{ asset('css/style.css') }}" media="all">
        </head>
        <body>
        <div class="bg-image bg-parallax overlay" style="background-image:url(/img/weather.jpg)"></div>
        @yield('mainContent')
        @yield('resultContent')
        <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
       </body>
</html>