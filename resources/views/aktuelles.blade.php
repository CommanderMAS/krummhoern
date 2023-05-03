@extends('layouts.frontend')

@section('content')

    <?php

    $pageid = 1;
    $newsnum = 1;
    $newspersite = 6;
    ?>


    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-12 entries">


                    @foreach($news as $row)

                    <article class="entry {{$pageid}}">

                        <div class="entry-img">
                            <img src="{{URL::asset('images/aktuelles/'.utf8_decode($row['image']))}}" alt="image"
                                 class="img-fluid"/>
                        </div>

                        <h2 class="entry-title">
                            {{$row['title']}}
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> @php
                                        setlocale(LC_TIME, 'German');
                                        $dt=\Carbon\Carbon::parse($row['createdate']);
                                        echo $dt->formatLocalized("%A, %d. %B %Y, %H:%M")
                                    @endphp</li>
                            </ul>
                        </div>

                        <div class="entry-content">

                            <p class="p-font-15">{!!html_entity_decode($row['intro'])!!}</p>
                            <div class="read-more">
                                <a href="{{ url('aktuelles/'.$row->id.'/'.str_replace(' ', '-',$row['title'])) }}"
                                   class="link_arrow top20">weiterlesen...</a>
                            </div>
                        </div>

                    </article><!-- End blog entry -->

                        @php($newsnum++)
                        @php($pageid = ceil($newsnum / $newspersite))
                    @endforeach

                        <?php
                        $anzahl = ceil(count($news) / $newspersite);
                        if($anzahl > 1) {
                        ?>
                        <div class="panels row">
                            <div class="col-md-12">
                                <ul id="BtnContainer" class="pager padding_bottom">
                                    <?php
                                    for($i = 1; $i <= $anzahl; $i++) {
                                    if($i == 1) {
                                    ?>
                                    <li class="pageloadlink aktiviert" onClick="openPage('1', this)" id="defaultOpen">1</li>
                                    <?php
                                    } else {
                                    ?>
                                    <li class="pageloadlink"
                                        onClick="openPage('<?php echo $i; ?>', this)"><?php echo $i; ?></li>
                                    <?php
                                    }
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <?php
                        }
                        ?>

                </div><!-- End blog entries list -->


            </div>

        </div>
    </section><!-- End Blog Section -->

    <script>

        function openLoaded() {
            var i, pagecontent;
            pagecontent = document.getElementsByClassName("pagecontent2");

            for (i = 0; i < pagecontent.length; i++) {
                pagecontent[i].style.display = "none";
            }
            var arr = document.getElementsByClassName("1");
            for (i = 0; i < arr.length; i++) {
                arr[i].style.display = "inline-block";
            }
            var current = document.getElementsByClassName("aktiviert");
            this.className += " aktiviert";
        }

        function openPage(pageName, element) {
            var i, pagecontent, pageloadlinks;
            pagecontent = document.getElementsByClassName("pagecontent2");
            for (i = 0; i < pagecontent.length; i++) {
                pagecontent[i].style.display = "none";
            }
            pageloadlinks = document.getElementsByClassName("pageloadlink");
            for (i = 0; i < pageloadlinks.length; i++) {
                pageloadlinks[i].classList.remove("aktiviert");
                pageloadlinks[i].style.backgroundColor = "";
            }
            var arr = document.getElementsByClassName(pageName);
            for (i = 0; i < arr.length; i++) {
                arr[i].style.display = "inline-block";
            }
        }

        var btnContainer = document.getElementById("BtnContainer");
        var btns = document.getElementsByClassName("pageloadlink");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener('click', function () {
                var current = document.getElementsByClassName("aktiviert");
                this.className += " aktiviert";
            });
        }

        openLoaded();
    </script>

    <script>

        $(document).ready(function () {
            $('html, body').animate({scrollTop: $("#heading").offset().top - 100}, 'slow');

        });

    </script>

    @include('assets.services')

@endsection
