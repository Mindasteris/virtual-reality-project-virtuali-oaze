<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Font Awesome Icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="icon" href="{{ asset('assets/tap_icon.png') }}">

    <title> @yield('title') </title>

    <!-- Scripts Style -->
    @vite(['resources/js/app.js'])
</head>
<body>
    <div>
        @include('includes.navbar')

        <main class="container mx-auto py-10">
            @yield('content')
        </main>

        @include('includes.footer')
    </div>
</body>
</html>
