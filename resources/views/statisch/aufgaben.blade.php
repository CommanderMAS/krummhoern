@extends('layouts.frontend')

@section('content')

    <section id="blog2" class="blog">
        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <article class="entry entry-single">

                        <div class="warpper  first">

                            <h1>Aufgaben</h1>

                            <div class="warpper  last">
                                Die Deichacht Krummhörn wurde gemäß § 7 des Niedersächsischen Deichgesetzes (NDG) am
                                01.03.1963
                                gegründet. Die Deichacht ist ein Wasser- und Bodenverband im Sinne des
                                Wasserverbandsgesetzes und dient
                                dem öffentlichen Interesse (Körperschaft des öffentlichen Rechts) und dem Nutzen ihrer
                                Mitglieder. Die
                                Deichacht verwaltet sich im Rahmen der Gesetze selbst (Selbstverwaltung). Die Deichacht
                                steht unter der
                                Rechtsaufsicht des Landkreises Aurich und der kreisfreien Stadt Emden.<br>Gemäß § 2 der
                                Satzung hat
                                die Deichacht folgende Aufgabe:<br>Die Deichacht hat zur Aufgabe, ihr Verbandsgebiet (§
                                1, Abs. 4)
                                vor Sturmfluten zu schützen. Dafür hat sie die erforderlichen Deiche einschließlich der
                                dazugehörigen
                                Anlagen zu bauen, sowie ihre Deiche in ihrem Bestand und in ihren vorgeschriebenen
                                Abmessungen zu
                                erhalten. Dazu gehört auch die Erhaltung des Deichvorlandes (NDG). Weiter hat sie die
                                zur Erhaltung
                                eines ordnungsgemäßen Zustandes erforderlichen Arbeiten an den übrigen Verbandsanlagen
                                vorzunehmen und
                                die Deichsicherheit von Schleusen, Sielen und anderen Bauwerken im Deich, die in der
                                Unterhaltungslast
                                anderer stehen, zu überwachen und die Vorsorge für die Deichverteidigung zu treffen.<br><strong><br>Weitere
                                    Informationen zu unseren Aufgaben:</strong>
                                <br>Zur Erfüllung der o.g. Aufgaben unterhält die Deichacht in Krummhörn-Pewsum einen
                                Bauhof. Hierzu
                                sind aktuell 8 Deichunterhaltungsarbeiter beschäftigt. Sämtliche zur Deichunterhaltung
                                benötigte
                                Maschinen und Geräte sind vorhanden und werden laufend gewartet.
                            </div>
                            <br>
                            <img style="float: right; border: 1px solid black; margin-left: 0px; margin-right: 0px;"
                                 longdesc="Fuhrpark"
                                 src="{{asset('/images/statisch/fuhrpark.jpg')}}" alt="Fuhrpark">
                            <br><strong>Hierzu zählen insbesondere:</strong><br>
                            1 Unimog<br>5 Schlepper (85 bis 170 PS) <br>1 Mähtrack<br>6 Schlepperanhänger<br>diverse
                            Geräte zur
                            Heuwerbung (Mäher, Schwader, Wender, Schlegelmulcher)<br>2 Einachsbalkenmäher und 3
                            Motortrimmer u. v.
                            m.<br><strong><br></strong>


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


                                            <div class="warpper">
                                                Die Beweidung der Deichflächen durch Schafe hat für die Erfüllung der o.
                                                g. Aufgaben eine
                                                herausragende Bedeutung. <br/> Hierdurch wird dauerhaft eine kurze,
                                                geschlossene und feste
                                                Grasnarbe gewährleistet.<br>Hierzu unterhält die Deichacht Krummhörn
                                                entlang ihrer
                                                Deichlinie insgesamt 3 Deichschäfereien. <br>Diese landwirtschaftlichen
                                                Gebäude stehen
                                                im Eigentum der Deichacht und <br/> sind an die Deichschäfer der
                                                Deichacht Krummhörn inkl. der
                                                dazugehörigen Deichstrecken verpachtet, und zwar:
                                                <br/>
                                                <br/>
                                                <strong>Deichschäferei „Knock“</strong> <br/>
                                                Am Neuen Seedeich 61, Emden-Wybelsum <br>Schäfer Ulrich Pape<br>Hauptdeichlinie
                                                vom Borssumer Außensiel bis Nesserlander Schleuse (rd. 3,1 km) <br>und
                                                vom Emder Hafen
                                                (Emspier) bis zur Knockster Bucht (rd. 10 km)<strong><br></strong></div>
                                            <div class="image_container float_below">


                                                <img src="{{asset('/images/statisch/deichschaeferei_knock.jpg')}}"
                                                     width="400"
                                                     alt="Bild Knock">


                                            </div>


                                        </div>
                                        <br/><br/>
                                        <div class="warpper  ">


                                            <strong>Deichschäferei „Dyksterhus“</strong>
                                            <br/>Leeskamper Escherweg 1,
                                            Krummhörn-Loquard<br>Schäfer Ulrich Pape<br>Hauptdeichlinie von der
                                            Knockster Bucht bis Upleward
                                            (rd. 11 km)<strong></strong><strong><br></strong>
                                            <div class="image_container float_below">


                                                <img src="{{asset('/images/statisch/deichschaeferei_dyksterhuis.jpg')}}"
                                                     width="400"
                                                     alt="Bild Dyksterhus">


                                            </div>

                                        </div>

                                        <div class=" last">

                                            <div class="warpper"><strong><br>Deichschäferei „Leeshaus“</strong>Leeshauser
                                                Straße 23,
                                                Krummhörn-Hamswehrum<br>Schäfermeister Martin Wuttge<br>Hauptdeichlinie
                                                von Upleward bis
                                                Greetsiel und 2. Deichlinie Greetsiel (rd. 21,5 km)
                                            </div>
                                            <br/>
                                            <div class="warpper">

                                                An den Deichen der Deichacht Krummhörn weiden somit insgesamt ca. 2.200
                                                Mutterschafe<br/>
                                                nebst dazugehörigen Lämmern. Die Deichacht Krummhörn übernimmt für seine
                                                Schäfereien<br/>
                                                vertragsgemäß die Futterwerbung. Im Jahr werden durchschnittlich 1.200
                                                Rundballen<br/>
                                                (Heu und Silage) sowie ca. 550 Quaderballen (Heu) als Winterfutter
                                                gewonnen.
                                            </div>
                                            <br/>
                                            <div class="image_container float_below" style="margin-left:25%;">

                                                <img src="{{asset('/images/statisch/schafe.jpg')}}" width="400"
                                                     alt="Schafe am Deich">

                                            </div>


                                        </div>


                                    </div>
                                </div>
                                <div class="warpper panel" id="two-panel">
                                    <div class="" id="deichunterhaltung">


                                        <div class="">

                                            <h1>Deichunterhaltung</h1>


                                            Große Sorgen macht der Deichacht Krummhörn weiterhin die alljährliche
                                            Teekentsorgung.<br>
                                            Teek
                                            (Treibsel) ist der Aufwuchs aus dem Deichvorland, der bei erhöhten
                                            Wasserständen an die Deiche gespült wird. Diese abgestorbenen
                                            Pflanzenreste liegen dann entlang der Deichlinie und schädigen, wenn
                                            der Teek nicht zeitnah entsorgt werden kann, die Grasnarbe.<br>
                                            <br>
                                            In
                                            den letzten 2 Jahren (2006/2007 und 2007/2008) mussten jeweils rd.
                                            15.000 cbm Teek von den Deichen der Deichacht Krummhörn entsorgt
                                            werden. Diese Mengen (umgerechnet rd. 600 LKW-Ladungen) verursachen
                                            Kosten in Höhe von ca. 80.000 Euro/jährlich.<br>
                                            <br>In der Deichacht
                                            Krummhörn wird die Teekentsorgung seit mittlerweile 9 Jahren durch die
                                            Methode „Häckseln“ und „Verblasen“ bewältigt. <br>Hierbei wird der am Deich
                                            liegende Teek mit einer eigens hierfür entwickelten Maschine
                                            „kleingehäckselt“ und wieder in das
                                            Deichvorland zurück „verblasen“.<br>
                                            <br>Des Weiteren wird die Deichacht regelmäßig durch die im
                                            Frühjahr und im Herbst stattfindenden Deichschauen seitens der
                                            Aufsichtbehörde darauf hingewiesen, die Bekämpfung der pflanzlichen
                                            Unkräuter (Disteln) und des tierischen Schädlingsbefalls (Wühlmäuse)
                                            intensiv fortzuführen. Hierbei ist auch die Deichacht Krummhörn auf den
                                            Einsatz von chemischen Mitteln angewiesen, um einen dauerhaften sehr
                                            guten Unterhaltungszustand der Deiche gewährleisten zu können.<br>
                                            <strong><br></strong>


                                        </div>


                                    </div>
                                </div>
                                <div class="panel" id="three-panel">
                                    <div class="" id="katastrophenschutz">


                                        <div class="">

                                            <h1>Katastrophenschutz</h1>


                                            Eine
                                            weitere wichtige Aufgabe der Deichacht ist der Katastrophenschutz. Bei
                                            Wasserständen ab einer vorausgesagten Höhe von 1,70 m über dem
                                            mittleren Hochwasser tritt der Alarmplan der Deichacht in Kraft.
                                            Dieser Alarmplan ist ständig zu aktualisieren und bietet die Grundlage,
                                            um in Katastrophenfällen eine Kontrolle der gesamten Deichlinie
                                            gewährleisten zu können. Hierzu werden bei Warnung vor erhöhten
                                            Sturmflutwasserständen durch das Bundesamt für Seeschifffahrt und
                                            Hydrographie (BSH) und den Niedersächsischen Landesbetrieb für
                                            Wasserwirtschaft, Küstenschutz und Naturschutz (NLWKN), die
                                            Haupteinsatzstelle in Pewsum sowie die 5 Einsatzstellen entlang der
                                            Deichlinie besetzt und ständig kontrolliert. Diese Überwachung wird
                                            durch die Vorstands- und Ausschussmitglieder und den Mitarbeitern der
                                            Deichacht gewährleistet. Hierzu ist die Deichacht mit Fahrzeugen,
                                            Mobilfunkgeräten sowie sämtlichen zur Gefahrenabwehr benötigtem Geräte
                                            ausgestattet.<br>
                                            <br>
                                            Im Falle des Katatstrophenalarms besteht eine
                                            dauerhafte Verbindung zu allen beteiligten Behören, insbesondere zu den
                                            für den Katastrophenschutz zuständigen Behörden, dem Landkreis Aurich
                                            und der Stadt Emden.


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
