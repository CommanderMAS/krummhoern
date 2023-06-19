@extends('layouts.frontend')

@section('content')

    <section id="blog2" class="blog">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">

                    <article class="entry entry-single">

                        <div class="">

                            <h1>Beiträge</h1>

                        </div>


                        <br/>

                        <div class="warpper">
                            <input class="radio" id="one" name="group" type="radio" checked>
                            <input class="radio" id="two" name="group" type="radio">
                            <input class="radio" id="three" name="group" type="radio">
                            <div class="tabs">
                                <label class="tab" id="one-tab" for="one">Allgemeines</label>
                                <label class="tab" id="two-tab" for="two" @if(empty($beitrag['bescheid']))hidden @endif>Infos zum Bescheid</label>
                                <label class="tab" id="three-tab" for="three">Datenerhebung</label>
                            </div>
                            <div class="panels">
                                <div class="panel" id="one-panel">
                                    <div class="mod_article first last block" id="ausschuss">

                                        <div class="ce_text first block">

                                            {!! $beitrag['allgemeines'] !!}

                                        </div>

                                        <p>Hier die <a href="{{asset('/downloads/Abbuchungsvollmacht.pdf')}}"
                                                       target="_blank">Abbuchungsvollmacht</a> herunterladen</p>

                                    </div>
                                </div>
                                <div class="panel" id="two-panel">
                                    <div class="mod_article first last block" id="vorstand">

                                        <div class="ce_text first block">

                                            {!! $beitrag['bescheid'] !!}

                                        </div>

                                    </div>
                                </div>
                                <div class="panel" id="three-panel">
                                    <div class="mod_article first last block" id="verwaltung">

                                        <div class="ce_text last block">

                                            {!! $beitrag['datenerhebung'] !!}

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


@endsection

