<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Talk</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/all.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/main.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/aos.css') }}"/>
        <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@383&display=swap') }}"/>
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
        @include('flash-message')


        @yield('content')
        <div class="content">
            @yield('body')

        </div>

        <!-- Script -->
        <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('js/aos.js') }}"></script>
        <script src="{{ asset('js/recaptcha.js') }}" async defer></script>
        <script>
          AOS.init();
        </script>
    </body>
</html>
