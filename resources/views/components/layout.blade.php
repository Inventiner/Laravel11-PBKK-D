<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css','resources/js/app.js'])
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <title>PBKK D Laravel Project</title>

    </head>
    <body class="h-full">
        <div class="min-h-full">
            <x-navbar></x-navbar>
            <x-header>{{ $title }}</x-header>
            <main>
            <div class="mx-auto max-w-full px-4 py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
            </main>
        </div>  
    </body>
</html>
