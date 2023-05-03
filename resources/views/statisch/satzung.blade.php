@extends('layouts.frontend')

@section('content')

    <section id="blog2" class="blog">
        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <article class="entry entry-single">


                        <div class="warpper ce_text first last block">

                            <h1>Satzung</h1>


                            Hier finden Sie die vollständige Version unserer Satzung.<br><br>
                            <div style="text-align: left;">Satzung der Deichacht Krummhörn<br> in 26736
                                Krummhörn-Pewsum, Jannes-Ohling-Str. 23 im Landkreis Aurich<br>zuletzt geändert aufgrund
                                der 4. Satzungsänderung vom 18.12.2007/genehmigt am 19.12.2007.<br></div>
                            <br>Vorschau der Inhaltsstruktur:<br><br>I. Abschnitt: Name, Sitz, Verbandsgebiet,
                            Unternehmen, Eigentumsbeeinträchtigungen, Deichschau<br>II. Abschnitt: Verfassung,
                            Dienstkräfte, Aufwandsentschädigungen<br>III. Abschnitt: Haushaltsführung, Prüfung, Beiträge<br>IV.
                            Abschnitt: Rechtsbehelfsbelehrung, Anordnungsbefugnis<br>V. Abschnitt: Bekanntmachungen,
                            Aufsicht, Zustimmung zu Geschäften<br><br><strong>Laden Sie sich hier unsere <a
                                    onclick="window.open(this.href); return false;"
                                    href="{{asset('/downloads/Satzung.pdf')}}">Satzung als PDF-Dokument</a>
                                herunter.</strong>


                        </div>


                    </article>
                </div>
            </div>
        </div>
    </section>

    @include('assets.services')

@endsection
