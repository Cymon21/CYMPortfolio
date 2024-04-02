<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Portfolio</title>


        {{-- Website Logo --}}
        <link rel="shortcut icon" href="{{ asset('images/CY2.png') }}" type="image/x-icon">
        
        {{-- fonts --}}
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        {{-- Vite Modules --}}
        @vite('resources/js/app.js')
        @vite('resources/sass/app.scss')
        
        @yield('css')
    </head>
<body>
    @yield('navbar')
    @yield('content')
</body>
</html>