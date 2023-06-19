@extends('layouts.frontend')

@section('content')

    <section id="blog2" class="blog">
        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <article class="entry">

                        <div class="overflow-x-scroll">

                            <h1>Organisation</h1>

                            Auf dieser Seite stellen wir Ihnen die Aufgaben und Zusammensetzung der Gremien der
                            Deichacht vor. Außerdem finden Sie hier Ihre Ansprechpartner der Verwaltung der Deichacht
                            Krummhörn.<br>

                        </div>


                        <br/>

                        <div class="warpper">
                            <input class="radio" id="one" name="group" type="radio" checked>
                            <input class="radio" id="two" name="group" type="radio">
                            <input class="radio" id="three" name="group" type="radio" hidden>
                            <div class="tabs">
                                <label class="tab" id="one-tab" for="one">Ausschuss</label>
                                <label class="tab" id="two-tab" for="two">Vorstand</label>
                                <label class="tab" id="three-tab" for="three" hidden>Verwaltung</label>
                            </div>
                            <div class="panels">
                                <div class="panel" id="one-panel">
                                    <div class="mod_article first last block" id="ausschuss">


                                        <div class="ce_text block">


                                            <p>{!! $data['ausschuss'] !!}</p>


                                        </div>

                                        <div class="">

                                            <table width="95%" style="min-width: 95%;">
                                                <tbody>
                                                <tr>
                                                    <td><strong>a) Bezirk 1:</strong></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Name:</strong></td>
                                                    <td><strong>gewählt bis:</strong></td>
                                                </tr>

                                                {!! $data['bezirk_1'] !!}
                                                <tr>
                                                    <td colspan="2">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">&nbsp;</td>
                                                </tr>

                                                <tr>
                                                    <td><strong>b) Bezirk 2:</strong></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Name:</strong></td>
                                                    <td><strong>gewählt bis:</strong></td>
                                                </tr>

                                                {!! $data['bezirk_2'] !!}
                                                <tr>
                                                    <td colspan="2">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">&nbsp;</td>
                                                </tr>

                                                <tr>
                                                    <td><strong>c) Bezirk 3:</strong></td>
                                                    <td><strong>&nbsp;</strong></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Name:</strong></td>
                                                    <td><strong>gewählt bis:</strong></td>
                                                </tr>

                                                {!! $data['bezirk_3'] !!}
                                                </tbody>
                                            </table>
                                            <p>&nbsp;</p>


                                        </div>

                                    </div>
                                </div>
                                <div class="panel" id="two-panel">
                                    <div class="mod_article first last block" id="vorstand">


                                        <div class="ce_text first block">

                                            {!! $data['vorstand'] !!}

                                        </div>

                                        <div class="ce_text block">


                                            <p>&nbsp;</p>
                                            <table width="80%">
                                                <tbody>
                                                <tr>
                                                    <td><strong>Name:</strong></td>
                                                    <td><strong>gewählt bis:</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                </tr>

                                                {!! $data['vorstand_personen'] !!}
                                                </tbody>
                                            </table>
                                            <p>&nbsp;</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="panel" id="three-panel">
                                    <div class="mod_article first last block" id="verwaltung">

                                        {!! $data['verwaltung'] !!}
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
