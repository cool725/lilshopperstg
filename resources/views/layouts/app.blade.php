<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') | Lil' Shopper's Shoppe</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class=antialiased>
    @include('layouts.mobile-pro-menu')
    @include('layouts.header')
    <main class="relative z-10" x-data="{ shown: false }" x-intersect:enter="shown = true">
        <div x-cloak x-show="shown">
            @yield('content')
        </div>
    </main>
    @include('layouts.footer')
    <script defer src={{ asset('js/app.js') }}></script>
</body>

</html>
