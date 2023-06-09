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


        <!-- Vendor CSS Files -->
        <link href="{{URL::asset('../resources/css/animate.min.css')}}" rel="stylesheet">
        <link href="{{URL::asset('../resources/css/aos.css')}}" rel="stylesheet">
        <link href="{{URL::asset('../resources/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{URL::asset('../resources/css/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{URL::asset('../resources/css/boxicons.min.css')}}" rel="stylesheet">
        <link href="{{URL::asset('../resources/css/glightbox.min.css')}}" rel="stylesheet">
        <link href="{{URL::asset('../resources/css/swiper-bundle.min.css')}}" rel="stylesheet">
        <link href="{{URL::asset('../resources/css/krummhoern.css')}}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{asset('../resources/css/style.css')}}" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen">
            @include('layouts.navigation')
            <!-- Page Heading -->
            @if (isset($header))
                <header class="dark:bg-gray-100 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}

                    </div>
                </header>
            @endif

                @yield('content')

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
