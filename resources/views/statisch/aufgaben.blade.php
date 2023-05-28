@extends('layouts.frontend')

@section('content')

    <section id="blog2" class="blog">
        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <article class="entry entry-single">

                        <div class="warpper  first">


                            {!! $data['aufgaben_oben'] !!}


                        </div>

                        <br/>

                        <div class="warpper">
                            <input class="radio" id="one" name="group" type="radio" checked>
                            <input class="radio" id="two" name="group" type="radio">
                            <input class="radio" id="three" name="group" type="radio">
                            <div class="tabs">
                                <label class="tab" id="one-tab" for="one">Deichschäfereien</label>
                                <label class="tab" id="two-tab" for="two">Deichunterhaltung</label>
                                <label class="tab" id="three-tab" for="three">Katastrophenschutz</label>
                            </div>
                            <div class="warpper panels">
                                <div class="panel" id="one-panel">
                                    <div class="" id="deichschaefereien">


                                        <div class="warpper  first">

                                            <h1>Deichschäfereien</h1>

                                            {!! $data['deichschaefereien'] !!}



                                        </div>


                                    </div>
                                </div>
                                <div class="warpper panel" id="two-panel">
                                    <div class="" id="deichunterhaltung">


                                        <div class="warpper">

                                            <h1>Deichunterhaltung</h1>

                                            {!! $data['deichunterhaltung'] !!}

                                        </div>


                                    </div>
                                </div>
                                <div class="panel" id="three-panel">
                                    <div class="" id="katastrophenschutz">


                                        <div class="warpper">

                                            <h1>Katastrophenschutz</h1>

                                            {!! $data['katastrophenschutz'] !!}

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    @include('assets.services')

@endsection
