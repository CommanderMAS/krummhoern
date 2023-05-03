@extends('layouts.frontend')

@section('content')

    <section id="blog2" class="blog">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">

                    <article class="entry entry-single">

                        <div class="mod_article first last block" id="beitraege">


                            <div class="ce_text first last block">

                                <h1>Infoflyer</h1>


                                <p>Dieser Prospekt wurde von allen niedersächsischen Deichverbänden herausgegeben und
                                    liefert Ihnen interessante und wichtige Informationen über den Küstenschutz in
                                    Niedersachsen.<br><br>Laden Sie sich sich hier unseren Infoflyer herunter.<br><br><a
                                        title="Deichacht Infoflyer" href="{{asset('/downloads/InfoFlyer.pdf')}}" target="_blank">Download
                                        des Flyers</a></p>


                            </div>


                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    @include('assets.services')

@endsection
