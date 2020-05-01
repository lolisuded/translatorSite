<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Talk</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/all.css') }}"></link>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"></link>
        <link rel="stylesheet" href="{{ asset('css/main.css') }}"></link>
        <link rel="stylesheet" href="{{ asset('css/aos.css') }}"></link>

        <!-- Script -->
        <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="logoDiv">
                <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}">Talk</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">Over mij</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('offer') }}">Offerte</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>

            </div>
        </nav>   
        <div class="content">
            @yield('body')
            
        </div>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
          AOS.init();
        </script>
    </body>
</html>
