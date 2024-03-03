<!DOCTYPE html>
<html
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    @class([
        'dark' => match (\App\Helpers\NativeCookie::get('color-theme')) {
            'dark' => true,
            default => false,
        },
    ])
>
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
    <body
        @class([
            'font-sans antialiased',
        ])
    >
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <style>
            [data-id="loading-spinner"] {
                position: fixed;
                display: flex;
                background: #353942;
                width: 100%;
                height: 100vh;
                inset: 0;
                z-index: 9000;
                align-items: center;
                justify-content: center;
            }
            .hide-spinner {
                display: none !important;
            }
        </style>
        <div
            data-id="loading-spinner"
            -style="opacity: 1"
            class=""
        >
            <span class="loading loading-spinner text-info loading-lg"></span>
        </div>

        <script defer src="{{ asset('js/loading-spinner.js') }}"></script>
    </body>
</html>
