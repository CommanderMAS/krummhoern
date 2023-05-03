@extends('layouts.frontend')

@section('content')

    <section id="blog2" class="blog">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">

                    <article class="entry entry-single">

                        <div class="mod_article first last block" id="beitraege">



                            <div class="ce_text first block">

                                <h1>Beiträge</h1>


                                <p>Gemäß § 33 der Satzung der Deichacht Krummhörn haben die Mitglieder der Deichacht die Beiträge zu leisten, die zur Erfüllung ihrer Aufgaben und Verbindlichkeiten und zu einer ordnungsgemäßen Haushaltsführung erforderlich sind.<br><br>Gemäß § 34 der Satzung verteilt sich die Beitragslast auf die beitragspflichtigen Mitglieder im Verhältnis der Vorteile, die sie von der Durchführung der Aufgaben der Deichacht haben und der Lasten, die die Deichacht auf sich nimmt, um die Deichunterhaltung entsprechend dem Nieders. Deichgesetz (NDG) durchzuführen (Vorteilsprinzip). Auf der Grundlage dieses Vorteilsprinzips verteilt sich die Beitragslast auf die Mitglieder im Verhältnis der geschützten Werte entsprechend dem Einheits- bzw. Ersatzwert.<br><br>Zusätzlich zahlt jedes Mitglied für jede ihm zuzurechnende wirtschaftliche Einheit einen Grundbetrag von 2,55 Euro zur Abgeltung des Verwaltungsaufwandes, der für die Führung des Mitgliedsverzeichnisses, Beitragsbuches und für die Hebung erforderlich ist.<br>Der Beitragssatz beträgt aktuell 0,4‰ jährlich vom Einheits- bzw. Ersatzwert zzgl. des Grundbetrages von 2,55 Euro. Der Beitragssatz wird jährlich vom Ausschuss der Deichacht Krummhörn festgesetzt und ist seit dem Jahr 1986 unverändert.<br><br>Beispiel: Einfamilienhaus hat einen Einheitswert (Finanzamt) von 30.000 Euro.<br>Damit beträgt der jährlich zu zahlende Beitrag 14,55 Euro.<br>(30.000 Euro x 0,4‰ = 12,00 Euro zzgl. 2,55 Euro Grundbetrag)</p>

                                <p>Hier die <a href="{{asset('/downloads/Abbuchungsvollmacht.pdf')}}" target="_blank">Abbuchungsvollmacht</a> herunterladen</p>

                            </div>



                            <div class="ce_text last block">

                                <h1>Informationen zur Datenerhebung</h1>


                                <p><strong>gem. Art. 13 u. 14 DSGVO</strong></p>
                                <p>&nbsp;</p>
                                <p>Im Folgenden informieren wir Sie über den Umgang mit Ihren persönlichen Daten und über die Rechte, die Ihnen im Hinblick auf die Verwendung der Daten uns gegenüber zustehen.</p>
                                <p>&nbsp;</p>
                                <p><strong>Verantwortlicher für die Datenverarbeitung</strong></p>
                                <p>Deichacht Krummhörn</p>
                                <p>Jannes-Ohling-Straße 23</p>
                                <p>26736 Krummhörn</p>
                                <p>Tel.: 0 49 23 – 91 11 0</p>
                                <p>E-Mail: <a href="mailto:verwaltung@deichacht-krummhoern.de">verwaltung(a)deichacht-krummhoern.de</a></p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                                <p><strong>Datenschutzbeauftragter</strong></p>
                                <p>TOP Datenschutz GmbH &amp; Co. KG</p>
                                <p>Wiekesch 1</p>
                                <p>26689 Apen</p>
                                <p>Tel.: 04488-529142</p>
                                <p>E-Mail: <a href="mailto:info@top-datenschutz.de">info(a)top-datenschutz.de</a></p>
                                <p>&nbsp;</p>
                                <p><strong>Zweck und rechtliche Grundlage der Datenverarbeitung</strong></p>
                                <p>Wir verarbeiten folgende Daten zum Zweck der öffentlich-rechtlichen Aufgabenerfüllung unseres Verbandes auf Grundlage Art. 6 DSGVO. Die Daten beziehen sich auf die Mitgliedschaft (einschließlich Beitragshebeverfahren) und vertragliche Bindungen in Zusammenhang mit der Aufgabenerfüllung unseres Verbandes (Satzung).</p>
                                <p>In der Regel handelt es sich hierbei um folgende Daten:</p>
                                <ul>
                                    <li>Vorname, Name, Firma oder sonstige Geschäftsbezeichnung</li>
                                    <li>Titel</li>
                                    <li>Firma, Funktion</li>
                                    <li>Adresse</li>
                                    <li>Geburtsdaten</li>
                                    <li>Telefon, Fax</li>
                                    <li>E-Mail</li>
                                    <li>Daten der Oberfinanzdirektion/Einheitswerte</li>
                                    <li>Liegenschaftsdaten</li>
                                    <li>Bankverbindung</li>
                                </ul>
                                <p>&nbsp;</p>
                                <p><strong>Weitergabe Ihrer Daten an Dritte</strong></p>
                                <p>Soweit für die Aufgabenerfüllung erforderlich, werden personenbezogene Daten an Dritte weitergegeben, die für die Abwicklung der Aufgaben zu beteiligen sind.</p>
                                <p>Ansonsten erfolgt keine Weitergabe personenbezogener Daten.</p>
                                <p>&nbsp;</p>
                                <p><strong>Datenquellen</strong></p>
                                <p>Die Daten für die Mitgliedschaft erhalten wir im Wesentlichen von der Oberfinanzdirektion und der Katasterverwaltung und durch Auskünfte der Städte und Gemeinden. Eine Nutzungserlaubnis dieser Daten ergibt sich aus § 4b Abs. 1 Satz 2 Nds. AGWVG (Niedersächsisches Ausführungsgesetz zum Wasserverbandsgesetz). Sofern eine Verifizierung von Angaben notwendig ist, werden von uns Daten durch Abfrage nach § 34 Bundesmeldegesetz bei den Einwohnermeldeämtern oder direkt bei unseren Mitgliedern erhoben.</p>
                                <p>&nbsp;</p>
                                <p><strong>Dauer der Speicherung personenbezogener Daten</strong></p>
                                <p>Die Daten werden solange gespeichert, wie es für die Aufgabenerfüllung erforderlich ist. Soweit die Daten nicht mehr benötigt werden (z.B. bei Beendigung der Verbandsmitgliedschaft), werden die Daten gelöscht, soweit gesetzliche Aufbewahrungspflichten oder sonstige gesetzliche Vorgaben nicht entgegenstehen.</p>
                                <p>&nbsp;</p>
                                <p><strong>Rechtsgrundlage der Verarbeitung</strong></p>
                                <ul>
                                    <li>§ 1, 2, 5, 26, 28 ff., 46 ff. WVG (Gesetz über Wasser- und Bodenverbände); unsere Verbandssatzung i.V.m. 3 3 Abs. 1 Satz 1 NDSG sowie Art. 6 Abs. 1 c) und e) DSGVO; Einwilligung: Art. 6 Abs. 1 ) DSGVO.</li>
                                </ul>
                                <p>&nbsp;</p>
                                <p><strong>Rechte der Betroffenen</strong></p>
                                <ul>
                                    <li>Art. 15 DSVGO Auskunftsrecht der betroffenen Person</li>
                                    <li>Art. 16 DSGVO Recht auf Berichtigung</li>
                                    <li>Art. 17 DSGVO Recht auf Löschung („Recht auf Vergessenwerden“)</li>
                                    <li>Art. 18 DSGVO Recht auf Einschränkung der Verarbeitung</li>
                                    <li>Art. 20 DSGVO Recht auf Datenübertragbarkeit</li>
                                    <li>Art. 21 DSGVO Widerspruchsrecht</li>
                                    <li>Art. 77 DSGVO Beschwerderecht</li>
                                </ul>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>



                            </div>


                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>


@endsection
