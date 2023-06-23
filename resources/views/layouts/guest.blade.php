<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 antialiased">
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-100">

    <div>
        <a href="{{route('home')}}">
            <img src="{{asset('assets/img/logo.jpg')}}" width="100%"
                 class="sm:max-w-md text-gray-800 dark:text-gray-200"/>
        </a>
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-gray-500 shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>


    <div class="w-3/4 text-center">
        <br/><br/>
        <div>
            Auf unserer Webseite haben Sie ab sofort die Möglichkeit die Daten für Ihr SEPA-Mandat zu hinterlegen.
            Ebenso können Sie auch künftig Ihr Betragsbescheid per Mail erhalten, wenn Sie Ihre E-Mail-Adresse
            hinterlegen. <br/> Bitte melden Sie sich mit den Zugangsdaten auf Ihrem Beitragsbescheid an.
        </div>
        <br/>
        <h1>Hier eine Anleitung wo sie ihre Daten finden:</h1>
        <br/>
        <div class="justify-content-center">
            <img class="" src="{{asset('assets/img/anleitung.jpg')}}"
                 alt="logo">
        </div>
    </div>
</div>
</body>
</html>
