@extends('layouts.frontend')

@section('content')

    <section id="blog2" class="blog">
        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <article class="entry entry-single">


                        <div class="ce_text first last block">

                            <h1>Verbandsgebiet</h1>


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
