@extends('layouts.frontend')

@section('content')

    @include('assets.slider')

    <section id="cta" class="cta blog">

        <div class="container">

            <div class="row entry entry-single">
                <div class="col-lg-12 text-center">
                    <h1>
                        Willkommen!
                    </h1>
                    <h3>
                        Liebe Besucher unserer Homepage,
                    </h3>
                    <p>
                        <br/>
                        auf den folgenden Seiten möchten wir uns Ihnen vorstellen und Ihnen unsere Aufgaben im Küstenschutz näherbringen.<br/><br/>
                        Wir wünschen Ihnen viel Spaß beim Durchstöbern unserer Internetpräsenz und stehen Ihnen für Anregungen, Fragen und Wünsche jederzeit gerne zur Verfügung.<br/><br/>
                        Gerd-Udo Heikens, Oberdeichrichter

                    </p>
                </div>
            </div>

        </div>

        @include('assets.startservices')
        <div class="container">

            <div class="row entry entry-single">
                <div class="col-lg-9 text-center text-lg-left">
                    <h3>Aktualisieren sie jetzt ihre Daten</h3>
                    <p>Loggen sie sich mit den ihnen zugeschickten Zugangsdaten ein und teilen sie uns wichtige Datenänderungen mit</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    @if (Route::has('login'))
                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Zur Online-Datenpflege</a>
                            @else
                                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Zur Online-Datenpflege</a>

                                @if (false)
                                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>

        </div>
    </section><!-- End Cta Section -->


@endsection
