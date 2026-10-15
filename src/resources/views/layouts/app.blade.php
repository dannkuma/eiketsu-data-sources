<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '英傑大戦デッキシミュレーター') }}</title>

    <!-- Google Font: Zen Old Mincho -->
    <link href="https://fonts.googleapis.com/css2?family=Zen+Old+Mincho&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="relative min-w-[50rem] bg-brand-base-back">
    <div class="mx-auto min-h-screen w-[50rem] bg-gray-100">
        <x-header>
            @isset($header)
                <x-slot name="header">
                    {{ $header }}
                </x-slot>
            @endisset
        </x-header>

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    @stack('scripts')
</body>

</html>
