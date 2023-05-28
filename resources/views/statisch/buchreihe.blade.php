@extends('layouts.frontend')

@section('content')

    <section id="blog2" class="blog">
        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <article class="entry entry-single">

                        {!! $content !!}

                    </article>
                </div>
            </div>
        </div>
    </section>

    @include('assets.services')

@endsection
