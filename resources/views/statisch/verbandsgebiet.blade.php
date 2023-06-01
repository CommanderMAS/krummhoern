@extends('layouts.frontend')

@section('content')

    <section id="blog2" class="blog">
        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <article class="entry entry-single">


                        <div class="ce_text first last block">

                            <h1>Verbandsgebiet</h1>

                            <p>Die Deichacht Krummhörn ist zuständig für den Bau und die Unterhaltung der Deiche und seiner Anlagen. Die zu schützende Deichlinie hat eine Länge von rd. 55 km und verläuft von Borssum (Stadt Emden) bis nach Leybuchtpolder (Stadt Norden). Das Verbandsgebiet der Deichacht Krummhörn hat eine Größe von rd. 48.000 ha und umfasst die Gemeinden Krummhörn und Hinte, sowie Großteile der Stadt Emden, der Gemeinden Brookmerland und Südbrookmerland. Außerdem gehören zum Verbandsgebiet Teile der Stadt Aurich, der Stadt Norden sowie der Gemeinde Ihlow.</p>

                            <div class="image_container float_above">

                                <a href="{{asset('/images/statisch/bildgrr.jpg')}}" target="_blank">


                                    <img src="{{asset('/images/statisch/bildgrr_kl.jpg')}}" width="400" height="347"
                                         alt="Verbandskarte hochauflösend">


                                </a>


                            </div>

                            <br><span style="font-size: 8pt;">Bitte klicken für die Großansicht.</span>

                        </div>

                    </article>
                </div>
            </div>
        </div>
    </section>

    @include('assets.services')

@endsection
