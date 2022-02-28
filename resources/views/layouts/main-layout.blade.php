<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test laravel blog</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<header>
    <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
            <a href="/" class="navbar-brand d-flex align-items-center d-inline-block">
                <strong>BLOG</strong>
            </a>
            <div class=" d-inline-block" id="navbarNav">
                <ul class="navbar-nav d-inline-block">
                    <li class="nav-item d-inline-block px-4">
                        <a class="nav-link @if(Request::segment(1) == '') active @endif" href="{{ url('/') }}">Главная</a>
                    </li>
                    <li class="nav-item d-inline-block">
                        <a class="nav-link d-inline-block @if(Request::segment(1) == 'articles') active @endif" href="{{ url('/articles') }}">Новости</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

@yield("content")

<footer class="text-muted"></footer>
</body>
</html>
