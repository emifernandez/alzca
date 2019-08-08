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
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="/">Alzca</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/ubicacion">Ubicacion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/map">Mapa</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
            @yield('content')
    </div>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCAE7571t4sMsesecHbmBlz1EcvIu27X2c"
        async defer></script>
    <script src="js/app.js"></script>
</body>
</html>