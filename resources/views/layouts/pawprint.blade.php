<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        @include('layouts.nav')
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 bg-gray-100 dark:bg-gray-900">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>
            
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md sm:rounded-lg">
                {{ $slot }}
            </div>

            @if (isset($content))
                <div class="w-full sm:max-w-7xl mt-6 mb-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md sm:rounded-lg">
                    {{ $content }}
                </div>
            @endif
        </div>
        <footer class="bg-white dark:bg-gray-800 border-t border-gray-100 dark:border-gray-700">
            <div class="space-x-5">
                <span class="text-white">Copyright Glenn</span>
                <span class="text-white">pepperonipowered@gmail.com</span>
                <span class="text-white">Github</span>
            </div>
        </footer>        
    </body>
</html>
