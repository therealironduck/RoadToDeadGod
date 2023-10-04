<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Journey to Dead God') }}</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-zinc-900 antialiased bg-cover" style="background-image: url('/bg.jpg');">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-zinc-950 bg-opacity-75">
            <div class="w-full sm:max-w-md px-6 pt-6 pb-4 bg-zinc-800 bg-opacity-60 shadow-md overflow-hidden sm:rounded-lg">
                <div class="grid place-items-center">
                    <a href="/" wire:navigate>
                        <x-application-logo class="w-16 mb-2 fill-current text-zinc-500"/>
                    </a>
                </div>

                <div class="mt-6">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>
