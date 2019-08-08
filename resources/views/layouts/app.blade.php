<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Alzca - @yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="#">
            <img src="/img/alzca-logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Alzca
        </a>
    </nav>
    <div class="container">
            @yield('content')
    </div>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCAE7571t4sMsesecHbmBlz1EcvIu27X2c"
        async defer></script>
    <script src="js/app.js"></script>
</body>
</html>