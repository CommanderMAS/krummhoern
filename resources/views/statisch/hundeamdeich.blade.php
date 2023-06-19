@extends('layouts.frontend')

@section('content')

    <section id="blog2" class="blog">
        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <article class="entry entry-single">

                        {!! $content !!}


                        <div class="ce_text first last block">
                            <br/><br/>
                            <p>Alle Informationen zu Hunden am Deich finden sie hier in unseren Infoflyer.<br><br><a
                                    title="Deichacht Infoflyer" href="{{asset('/downloads/Hundeflyer.pdf')}}"
                                    target="_blank">Download
                                    des Flyers</a></p>


                        </div>


                    </article>


                </div>

            </div>
        </div>

    </section>

    @include('assets.services')

@endsection
