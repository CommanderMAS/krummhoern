<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Deichacht Krummhörn - Herzlich willkommen</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../resources/img/favicon.png" rel="icon">
    <link href="../resources/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{URL::asset('../resources/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('../resources/css/aos.css')}}" rel="stylesheet">
    <link href="{{URL::asset('../resources/css/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{URL::asset('../resources/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('../resources/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('../resources/css/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('../resources/css/krummhoern.css')}}" rel="stylesheet">
    <link href="{{URL::asset('../resources/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('../resources/css/style.css')}}" rel="stylesheet">

</head>

<body>

<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center">
    <div class="container justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope align-items-center"><a
                    href="mailto:verwaltung@deichacht-krummhoern.de">verwaltung@deichacht-krummhoern.de</a></i>
            <i class="bi bi-phone align-items-center ms-4"><a href="tel:+49492391110"><span>0 49 23 - 91 11 0</span></a>
            </i>
        </div>
    </div>
</section>

<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

        <div class="logo">
            <h1 class="text-light "><a href="{{route('home')}}">
                    <img class="d-none d-sm-block" src="{{asset('assets/img/logo.jpg')}}"
                         alt="logo">
                    <img class="d-sm-none d-block " src="{{asset('assets/img/logo_mobil.jpg')}}"
                         alt="logo">
                </a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                @if (count_aktuelles()>0)
                    <li><a class="active" href="{{route('aktuelles')}}">Aktuelles</a></li>
                @endif
                <li class="dropdown"><a><span>Deichacht Krummhörn</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{route('organisation')}}">Organisation</a></li>
                        <li><a href="{{route('aufgaben')}}">Aufgaben</a></li>
                        <li><a href="{{route('verbandsgebiet')}}">Verbandsgebiet</a></li>
                        <li><a href="{{route('satzung')}}">Satzung</a></li>
                        <li><a href="{{route('hundeamdeich')}}">Hunde am Deich</a></li>
                    </ul>
                </li>
                @if (count_projekte()>0)
                    <li><a href="{{route('projekte')}}">Deichbau</a></li>
                @endif
                <li><a href="{{route('beitraege')}}">Beiträge</a></li>
                <li><a href="{{route('anfahrt')}}">Kontakt</a></li>
                <li class="dropdown"><a><span>Interessantes</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{route('infoflyer')}}">Infoflyer</a></li>
                        <li><a href="{{route('buchreihe')}}">Buchreihe</a></li>
                        <li><a href="{{route('link')}}">Links</a></li>
                    </ul>
                </li>
                @auth
                    <a href="{{ url('/dashboard') }}"
                       class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Zur
                        Online-Datenpflege</a>
                @else
                    <a href="{{ route('login') }}"
                       class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Zur
                        Online-Datenpflege</a>

                @endauth
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <div class="logo">
            <h1 class="text-light"><img class="d-none d-sm-block" src="{{asset('assets/img/welle.jpg')}}"
                                        alt="logo"></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

    </div>
</header><!-- End Header -->


<main id="main">

    <!-- ======= Cta Section ======= -->

    @yield('content')


</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="container d-md-flex py-4">
        <div class="">
            <div class="me-md-auto copyright text-md-start">
                © <strong><span>Deichacht Krummhörn</span></strong>. Alle Rechte vorbehalten | Programmierung <a
                    href="https://carlsmedia.de" target="_blank">carlsmedia web- und grafikdesign</a>
                <span>&nbsp;&nbsp;&nbsp;</span>
                <a href="{{route('impressum')}}" target="_self">Impressum</a>
                <span>&nbsp;&nbsp;&nbsp;</span>
                <a href="{{route('datenschutz')}}" target="_self">Datenschutz</a>
            </div>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>
