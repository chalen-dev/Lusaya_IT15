<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Laravel'))</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
    </style>

    @stack('styles')
</head>
<body class="bg-page h-full antialiased">
<div>
    <x-partials.header/>
    <main class="flex-1 p-5">
        @yield('content')
    </main>
</div>

@stack('scripts')
</body>
</html>
