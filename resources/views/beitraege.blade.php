@extends('layouts.frontend')

@section('content')

    <section id="blog2" class="blog">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">

                    <article class="entry entry-single">

                        <div class="mod_article first last block" id="beitraege">

                            {!! $beitrag !!}

                            </div>


                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>


@endsection
