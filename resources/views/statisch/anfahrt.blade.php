@extends('layouts.frontend')

@section('content')

    <section id="blog2" class="blog">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">

                    <article class="entry entry-single">

                        <div class="mod_article first last block" id="beitraege">


                            <div class="ce_text first block">

                                <h1>Anfahrtsbeschreibung</h1>


                                <p>&nbsp; &nbsp;</p>


                            </div>

                            <br><br>
                            <table class="warpper" width="100%" border="0">
                                <tbody>
                                <tr>
                                    <td valign="top">
                                        <div style="overflow:hidden;width: 700px;height: 440px;">
                                            <iframe width="700" height="440"
                                                    src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=de&amp;q=+(Deichacht%20Krummh%C3%B6rn)&amp;ie=UTF8&amp;t=&amp;z=17&amp;iwloc=B&amp;output=embed"
                                                    frameborder="0" scrolling="no" marginheight="0"
                                                    marginwidth="0"></iframe>
                                            <div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <br><br>


                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    @include('assets.services')

@endsection
