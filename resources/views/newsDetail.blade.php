@extends('layouts.frontend')

@section('content')

    <!-- ======= Blog Single Section ======= -->
    <section id="blog2" class="blog">
        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <article class="entry entry-single">

                        <div class="entry-img">
                            <img src="{{URL::asset('images/aktuelles/'.$news['image'])}}" alt="image"
                                 class="img-fluid" />
                        </div>

                        <h2 class="entry-title">
                            {{$news['title']}}
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i>
                                    @php
                                        setlocale(LC_TIME, 'German');
                                        $dt=\Carbon\Carbon::parse($news['createdate']);
                                        echo $dt->formatLocalized("%A, %d. %B %Y, %H:%M")
                                    @endphp
                                </li>
                            </ul>
                        </div>

                        <div class="entry-content">

                            {!! $news["intro"] !!}
                        </div>
                        <br/>

                        <div class="entry-content">

                            {!! $news["content"] !!}
                        </div>
                        <br/>
                        <br/>
                        <div class="col-md-12">
                            <a href="{{ url('aktuelles') }}">Zurück zur Übersicht</a><br><br>
                        </div>

                    </article><!-- End blog entry -->

                </div><!-- End blog entries list -->

            </div>

        </div>

    </section>
    <script>

        $(document).ready(function () {
            $('html, body').animate({scrollTop: $("#heading").offset().top - 100}, 'slow');

        });

    </script>

@endsection
