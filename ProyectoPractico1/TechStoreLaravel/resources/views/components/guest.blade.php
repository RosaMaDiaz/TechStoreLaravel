<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'TechStoreLaravel') }}</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
        rel="stylesheet" />
    <!-- Recursos -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased bg-gray-100">
    <div class="min-h-screen flex flex-col justify-center items-center">
        <!-- Logo del sistema -->
        <div class="mb-6">
            <a href="{{ route('inicio') }}">
                <x-application-logo class="h-16 w-auto" />
            </a>
        </div>
        <!-- Contenedor principal -->
        <div class="w-full sm:max-w-md px-6 py-6 bg-white shadow-lg rounded-lg">
            {{ $slot }}
        </div>
    </div>
</body>

</html>