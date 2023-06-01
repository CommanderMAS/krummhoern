<?php

use App\Models\Config;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('config', function (Blueprint $table) {
            $table->id();
            $table->string('option');
            $table->text('value');
            $table->timestamps();
        });

        $data = new Config([]);
        $data->option = 'beitrag';
        $data->value = '
<div class="mod_article first last block" id="beitraege">



<div class="ce_text first block">

      <h1>Beiträge</h1>


      <p>Gemäß § 33 der Satzung der Deichacht Krummhörn haben die Mitglieder der Deichacht die Beiträge zu leisten, die zur Erfüllung ihrer Aufgaben und Verbindlichkeiten und zu einer ordnungsgemäßen Haushaltsführung erforderlich sind.<br><br>Gemäß § 34 der Satzung verteilt sich die Beitragslast auf die beitragspflichtigen Mitglieder im Verhältnis der Vorteile, die sie von der Durchführung der Aufgaben der Deichacht haben und der Lasten, die die Deichacht auf sich nimmt, um die Deichunterhaltung entsprechend dem Nieders. Deichgesetz (NDG) durchzuführen (Vorteilsprinzip). Auf der Grundlage dieses Vorteilsprinzips verteilt sich die Beitragslast auf die Mitglieder im Verhältnis der geschützten Werte entsprechend dem Einheits- bzw. Ersatzwert.<br><br>Zusätzlich zahlt jedes Mitglied für jede ihm zuzurechnende wirtschaftliche Einheit einen Grundbetrag von 2,55 Euro zur Abgeltung des Verwaltungsaufwandes, der für die Führung des Mitgliedsverzeichnisses, Beitragsbuches und für die Hebung erforderlich ist.<br>Der Beitragssatz beträgt aktuell 0,4‰ jährlich vom Einheits- bzw. Ersatzwert zzgl. des Grundbetrages von 2,55 Euro. Der Beitragssatz wird jährlich vom Ausschuss der Deichacht Krummhörn festgesetzt und ist seit dem Jahr 1986 unverändert.<br><br>Beispiel: Einfamilienhaus hat einen Einheitswert (Finanzamt) von 30.000 Euro.<br>Damit beträgt der jährlich zu zahlende Beitrag 14,55 Euro.<br>(30.000 Euro x 0,4‰ = 12,00 Euro zzgl. 2,55 Euro Grundbetrag)</p>

</div>



<div class="ce_text last block">

      <h1>Informationen zur Datenerhebung</h1>

      <p><strong>gem. Art. 13 u. 14 DSGVO</strong></p>
<p>Im Folgenden informieren wir Sie über den Umgang mit Ihren persönlichen Daten und über die Rechte, die Ihnen im Hinblick auf die Verwendung der Daten uns gegenüber zustehen.</p>
<p><strong>Verantwortlicher für die Datenverarbeitung</strong></p>
<p>Deichacht Krummhörn</p>
<p>Jannes-Ohling-Straße 23</p>
<p>26736 Krummhörn</p>
<p>Tel.: 0 49 23 – 91 11 0</p>
<p>E-Mail: <a href="mailto:verwaltung@deichacht-krummhoern.de">verwaltung(a)deichacht-krummhoern.de</a></p>
<p><strong>Datenschutzbeauftragter</strong></p>
<p>TOP Datenschutz GmbH &amp; Co. KG</p>
<p>Wiekesch 1</p>
<p>26689 Apen</p>
<p>Tel.: 04488-529142</p>
<p>E-Mail: <a href="mailto:info@top-datenschutz.de">info(a)top-datenschutz.de</a></p>
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
</div>
        ';
        $data->save();


        $data = new Config([]);
        $data->option = 'ausschuss';
        $data->value = 'Der Ausschuss der Deichacht Krummhörn wird von den beitragspflichtigen
                                                Verbandsmitgliedern (Beitragszahlern) gewählt. Er besteht aus 15
                                                ehrenamtlich tätigen Mitgliedern und 15 Vertretern.<br><br>Die
                                                Ausschussmitglieder und deren Vertreter werden bezirksweise gewählt und
                                                zwar in der Weise, dass alle 2 Jahre in einem der insgesamt 3
                                                Wahlbezirke jeweils Neuwahlen für 5 Ausschussmitglieder und deren
                                                Vertreter stattfinden. Die Amtszeit der Ausschussmitglieder beträgt
                                                somit 6 Jahre.<br><br>Zu den Wahlen (Mitgliederversammlungen) wird
                                                rechtzeitig durch öffentliche Bekanntmachung in den regionalen
                                                Tageszeitungen eingeladen.<br><br>Die aktuellen Wahlperioden enden am
                                                31.12.2024, am 31.12.2026 und am 31.12.2028.<br>Die Aufgaben des
                                                Ausschusses bestimmen sich nach § 11 der Satzung der
                                                Deichacht.<br><br>';
        $data->save();

        $data = new Config([]);
        $data->option = 'hundeamdeich';
        $data->value = '<h1>Hunde am Deich</h1><br/><br/>

Wir möchten Sie darauf hinweisen, dass an den gesamten Deichen das Mitführen von Hunden gemäß Nieders. Deichgesetz verboten ist. In der Vergangenheit ist es leider immer wieder vorgekommen, dass Schafe durch freilaufende Hunde gehetzt wurden und dadurch starben. Weiterhin können durch hinterlassenen Kot der Hunde Krankheitserreger übertragen werden.<br/><br/>

Einige Bereiche (Campener Leuchtturm bis Campingplatz Upleward, alter Deich in Greetsiel) sind in Absprache mit den Schäfereien für das Mitführen von Hunden (ANGELEINT) freigegeben. Den Weisungen der Schäfer und der Deichachtsbediensteten ist unbedingt Folge zu leisten. <br/><br/>

Vielen Dank für Ihr Verständnis.
';
        $data->save();

        $data = new Config([]);
        $data->option = 'anfahrt';
        $data->value = '
Die Verwaltung der Deichacht Krummhörn hat ihren Sitz in der Ortschaft Pewsum (Gemeinde Krummhörn) in der Jannes-Ohling-Straße 23.<br/><br/>

<h4>Folgende Mitarbeiter der Deichacht Krummhörn stehen Ihnen gerne für sämtliche Anfragen, Anregungen und Wünsche während der Bürozeiten zur Verfügung:</h4><br/><br/>

<h4>Geschäftsführer/Rendant: Frank Rosenberg</h4><br/>
Tel.: 0 49 23/91 11-11<br/>
Mobil: 01 73 / 86 11 99 6<br/>
nach Dienstschluss: Tel.: 0 49 23/80 57 55<br/>
E-Mail: rosenberg(a)deichacht-krummhoern.de<br/><br/>

<h4>Beitragswesen/Buchhaltung: Herta Hoogestraat</h4><br/>
Tel.: 0 49 23/91 11-12<br/>
E-Mail: hoogestraat(a)deichacht-krummhoern.de<br/><br/>

<h4>Beitragswesen/Buchhaltung: Ilona Popp</h4><br/>
Tel.: 0 49 23/91 11-13<br/>
E-Mail: popp(a)deichacht-krummhoern.de<br/><br/>

<h4>Deichaufseher: Dieter Carsjens</h4><br/>
Tel.: 0 49 23/91 11-22<br/>
Mobil: 01 77/33 97 77 4<br/>
E-Mail: carsjens(a)deichacht-krummhoern.de<br/><br/>

<h4>Das Verbandsbüro ist wie folgt geöffnet:</h4><br/>
Montag bis Donnerstag von 07.30 Uhr bis 13.00 Uhr und von 14.00 Uhr bis 16.00 Uhr<br/>
Freitag von 07.30 Uhr bis 13.00 Uhr<br/><br/>

Der Bauhof der Deichacht Krummhörn befindet sich ebenfalls in der Ortschaft Pewsum (Gemeinde Krummhörn) in der Jannes-Ohling-Straße 23. Aktuell sind bei der Deichacht Krummhörn 8 Deichunterhaltungsarbeiter beschäftigt.<br/>

Die Deichunterhaltungsmitarbeiter erledigen alle anfallenden Arbeiten zum überwiegenden Teil in Eigenregie. Nur in den seltensten Fällen (z.B. bei der Futterwerbung und der Teekentsorgung) kommen Fremdfirmen unterstützend zum Einsatz.

';
        $data->save();


        $data = new Config([]);
        $data->option = 'bezirk_1';
        $data->value = '<tr>
                                                    <td>Ausschussmitglied: Melle Klinkenborg, Eilsum</td>
                                                    <td>31.12.2028</td>
                                                </tr>
                                                <tr>
                                                    <td>Vertreter: Focko Smit, Visquard</td>
                                                    <td>31.12.2028</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>&nbsp;</strong></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>Ausschussmitglied: Bürgermeisterin Hilke Looden, Greetsiel</td>
                                                    <td>31.12.2028</td>
                                                </tr>
                                                <tr>
                                                    <td>Vertreter: Ina Droll-Dannemann, Pewsum</td>
                                                    <td>31.12.2028</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>&nbsp;</strong></td>
                                                    <td><strong>&nbsp;</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Ausschussmitglied: Bonno Focken, Siegelsum</td>
                                                    <td>31.12.2028</td>
                                                </tr>
                                                <tr>
                                                    <td>Vertreter: Jan Remmers, Südbrookmerland</td>
                                                    <td>31.12.2028</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>&nbsp;</strong></td>
                                                    <td><strong>&nbsp;</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Ausschussmitglied: OSR Reinhard Behrends, Hinte</td>
                                                    <td>31.12.2028</td>
                                                </tr>
                                                <tr>
                                                    <td>Vertreter: Johann Jungvogel, Marienhafe</td>
                                                    <td>31.12.2028</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>&nbsp;</strong></td>
                                                    <td><strong>&nbsp;</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Ausschussmitglied: Bonno Sanders, Loquard</td>
                                                    <td>31.12.2028</td>
                                                </tr>
                                                <tr>
                                                    <td>Vertreter: Anne C. Schöningh, Hamswehrum</td>
                                                    <td>31.12.2028</td>
                                                </tr>';
        $data->save();


        $data = new Config([]);
        $data->option = 'bezirk_2';
        $data->value = '<tr>
                                                    <td>Ausschussmitglied: Volkswagen AG, vertr. d. Klaus Fröhling,
                                                        Ihlow
                                                    </td>
                                                    <td>&nbsp;31.12.2024</td>
                                                </tr>
                                                <tr>
                                                    <td>Vertreter: Volkswagen AG, vertr. d. Thorsten Lüpkes, Bad
                                                        Zwischenahn
                                                    </td>
                                                    <td>&nbsp;31.12.2024</td>
                                                </tr>
                                                <tr>
                                                    <td height="18">&nbsp;</td>
                                                    <td height="18">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>Ausschussmitglied: Dieter Smid, Emden</td>
                                                    <td>&nbsp;31.12.2024</td>
                                                </tr>
                                                <tr>
                                                    <td>Vertreter: Onno Wolters, Krummhörn</td>
                                                    <td>&nbsp;31.12.2024</td>
                                                </tr>
                                                <tr>
                                                    <td height="18">&nbsp;</td>
                                                    <td height="18">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>Ausschussmitglied: Friedrich Busch, Emden</td>
                                                    <td>&nbsp;31.12.2024</td>
                                                </tr>
                                                <tr>
                                                    <td>Vertreter: Bernhard Gosling, Emden</td>
                                                    <td>&nbsp;31.12.2024</td>
                                                </tr>
                                                <tr>
                                                    <td height="18">&nbsp;</td>
                                                    <td height="18">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>Ausschussmitglied: Niedersachsen Ports, vertr. d. Aiko
                                                        Hollander, Emden
                                                    </td>
                                                    <td>&nbsp;31.12.2024</td>
                                                </tr>
                                                <tr>
                                                    <td>Vertreter: Niedersachsen Ports, vertr. d. Aike Wollersheim,
                                                        Ihlow
                                                    </td>
                                                    <td>&nbsp;31.12.2024</td>
                                                </tr>
                                                <tr>
                                                    <td height="18">&nbsp;</td>
                                                    <td height="18">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>Ausschussmitglied: Karl-Heinz Harms, Emden</td>
                                                    <td>&nbsp;31.12.2024</td>
                                                </tr>
                                                <tr>
                                                    <td>Vertreter: Horst Rasenack, Emden</td>
                                                    <td>&nbsp;31.12.2024</td>
                                                </tr>';
        $data->save();

        $data = new Config([]);
        $data->option = 'bezirk_3';
        $data->value = '<tr>
                                                    <td>Ausschussmitglied: Rainer Kinzel, Emden</td>
                                                    <td>31.12.2026</td>
                                                </tr>
                                                <tr>
                                                    <td>Vertreter: zzt. nicht besetzt&nbsp;</td>
                                                    <td>31.12.2026</td>
                                                </tr>
                                                <tr>
                                                    <td height="18">&nbsp;</td>
                                                    <td height="18">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>Ausschussmitglied: Johann Kruse, Südbrookmerland</td>
                                                    <td>31.12.2026</td>
                                                </tr>
                                                <tr>
                                                    <td>Vertreter: Nils Andersson, Emden&nbsp;</td>
                                                    <td>31.12.2026</td>
                                                </tr>
                                                <tr>
                                                    <td height="18">&nbsp;</td>
                                                    <td height="18">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>Ausschussmitglied: Herbert Buisker, Emden</td>
                                                    <td>31.12.2026</td>
                                                </tr>
                                                <tr>
                                                    <td>Vertreter: Stadtentwicklung Emden vertr. d. Albert Ohling jun.
                                                    </td>
                                                    <td>31.12.2026</td>
                                                </tr>
                                                <tr>
                                                    <td height="18">&nbsp;</td>
                                                    <td height="18">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>Ausschussmitglied: Regina Meinen, Emden</td>
                                                    <td>31.12.2026</td>
                                                </tr>
                                                <tr>
                                                    <td>Vertreter: Heinz Gosciniak, Emden</td>
                                                    <td>31.12.2026</td>
                                                </tr>
                                                <tr>
                                                    <td height="18">&nbsp;</td>
                                                    <td height="18">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>Ausschussmitglied: Wasserstraßen- u. Schifffahrtsamt Ems-Nordsee
                                                        vertr. d. Hermann Poppen, Moormerland
                                                    </td>
                                                    <td>31.12.2026</td>
                                                </tr>
                                                <tr>
                                                    <td>Vertreter: Wasserstraßen- u. Schifffahrtsamt Ems-Nordsee&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        vertr. d. Holger Giest, Meppen
                                                    </td>
                                                    <td>31.12.2026</td>
                                                </tr>';
        $data->save();

        $data = new Config([]);
        $data->option = 'ausschuss';
        $data->value = 'Der Ausschuss der Deichacht Krummhörn wird von den beitragspflichtigen
                                                Verbandsmitgliedern (Beitragszahlern) gewählt. Er besteht aus 15
                                                ehrenamtlich tätigen Mitgliedern und 15 Vertretern.<br><br>Die
                                                Ausschussmitglieder und deren Vertreter werden bezirksweise gewählt und
                                                zwar in der Weise, dass alle 2 Jahre in einem der insgesamt 3
                                                Wahlbezirke jeweils Neuwahlen für 5 Ausschussmitglieder und deren
                                                Vertreter stattfinden. Die Amtszeit der Ausschussmitglieder beträgt
                                                somit 6 Jahre.<br><br>Zu den Wahlen (Mitgliederversammlungen) wird
                                                rechtzeitig durch öffentliche Bekanntmachung in den regionalen
                                                Tageszeitungen eingeladen.<br><br>Die aktuellen Wahlperioden enden am
                                                31.12.2024, am 31.12.2026 und am 31.12.2028.<br>Die Aufgaben des
                                                Ausschusses bestimmen sich nach § 11 der Satzung der
                                                Deichacht.<br><br>';
        $data->save();

        $data = new Config([]);
        $data->option = 'vorstand';
        $data->value = 'Der Vorstand der Deichacht Krummhörn wird vom Ausschuss der Deichacht Krummhörn gewählt. Er besteht aus dem Oberdeichrichter, dem stellv. Oberdeichrichter und weiteren drei Deichrichtern. Die Vorstandsmitglieder werden für die Dauer von 5 Jahren gewählt und zwar in der Weise, dass jedes Jahr ein Vorstandsmitglied neu gewählt wird.

Die Aufgaben des Vorstandes bestimmen sich nach § 19 der Satzung der Deichacht.';
        $data->save();


        $data = new Config([]);
        $data->option = 'vorstand_personen';
        $data->value = '<tr>
                                                    <td>Oberdeichrichter: Gerd-Udo Heikens, Campen<br>Tel.: 04923 /
                                                        9111-10 / privat: 04927 / 203<br>&nbsp;
                                                    </td>
                                                    <td>31.12.2027<br><br>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>stellv. Oberdeichrichter: Andreas Docter, Emden<br><br></td>
                                                    <td>31.12.2023<br>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>Deichrichter: Hans-Wilhelm Wildeboer, Emden<br><br></td>
                                                    <td>31.12.2024<br>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>Deichrichter: Detert Wiltfang, Campen<br>&nbsp;</td>
                                                    <td>31.12.2025<br>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>Deichrichter: Johann Saathoff, Pewsum<br><br></td>
                                                    <td>31.12.2026<br>&nbsp;</td>
                                                </tr>';
        $data->save();


        $data = new Config([]);
        $data->option = 'verwaltung';
        $data->value = '<div class="ce_text first block">


                                            Die Verwaltung der Deichacht Krummhörn hat ihren Sitz in der
                                            Ortschaft Pewsum (Gemeinde Krummhörn) in der Jannes-Ohling-Straße 23.
                                            <br><br><strong>Folgende
                                                Mitarbeiter der Deichacht Krummhörn stehen Ihnen jederzeit gerne für
                                                sämtliche Anfragen, Anregungen und Wünsche während der Bürozeiten zur
                                                Verfügung:<br><br></strong>


                                        </div>

                                        <div class="ce_text block">


                                            <p><strong><br>Geschäftsführer/Rendant: Frank Rosenberg</strong><br>Tel.: 0
                                                49 23/91 11-11<br>Mobil: 01 73 / 86 11 99 6<br>nach Dienstschluss: Tel.:
                                                0 49 23/80 57 55<br>E-Mail: rosenberg(a)deichacht-krummhoern.de</p>


                                        </div>

                                        <div class="ce_text block">


                                            <p><br><strong>Beitragswesen/Buchhaltung: Herta Hoogestraat</strong> <br>Tel.:
                                                0 49 23/91 11-12 <br>E-Mail: hoogestraat(a)deichacht-krummhoern.de</p>


                                        </div>

                                        <div class="ce_text block">


                                            <p><strong><br>Beitragswesen/Buchhaltung: Ilona Popp </strong><br>Tel.: 0 49
                                                23/91 11-13 <br>E-Mail: popp(a)deichacht-krummhoern.de<br><br></p>


                                        </div>

                                        <div class="ce_text block">


                                            <p><strong>Deichaufseher: Dieter Carsjens </strong><br>Tel.: 0 49 23/91
                                                11-22 <br>Mobil: 01 77/33 97 77 4 <br>E-Mail:
                                                carsjens(a)deichacht-krummhoern.de <br><br></p>


                                        </div>

                                        <div class="ce_text block">


                                            <p><strong><br>Das Verbandsbüro ist wie folgt geöffnet:<br></strong> Montag
                                                bis Donnerstag von 07.30 Uhr bis 13.00 Uhr und von 14.00 Uhr bis 16.00
                                                Uhr<br> Freitag von 07.30 Uhr bis 13.00 Uhr<br> <br> Der Bauhof der
                                                Deichacht Krummhörn befindet sich ebenfalls in der Ortschaft Pewsum
                                                (Gemeinde Krummhörn) in der Jannes-Ohling-Straße 23. Aktuell sind bei
                                                der Deichacht Krummhörn 8 Deichunterhaltungsarbeiter
                                                beschäftigt.<br><br> Die Deichunterhaltungsmitarbeiter erledigen alle
                                                anfallenden Arbeiten zum überwiegenden Teil in Eigenregie. Nur in den
                                                seltensten Fällen (z.B. bei der Futterwerbung und der Teekentsorgung)
                                                kommen Fremdfirmen unterstützend zum Einsatz.</p>


                                        </div>';
        $data->save();


        $data = new Config([]);
        $data->option = 'aufgaben_oben';
        $data->value = '<h1>Aufgaben</h1>

                            <div class="warpper  last">

                                Die Deichacht Krummhörn wurde gemäß § 7 des Niedersächsischen Deichgesetzes (NDG) am 01.03.1963 gegründet. Die Deichacht ist ein Wasser- und Bodenverband im Sinne des Wasserverbandsgesetzes und dient dem öffentlichen Interesse (Körperschaft des öffentlichen Rechts) und dem Nutzen ihrer Mitglieder. Die Deichacht verwaltet sich im Rahmen der Gesetze selbst (Selbstverwaltung). Die Deichacht steht unter der Rechtsaufsicht des Landkreises Aurich und der kreisfreien Stadt Emden.<br/><br/>

Gemäß § 2 der Satzung hat die Deichacht folgende Aufgabe:<br/><br/>

Die Deichacht hat zur Aufgabe, ihr Verbandsgebiet (§ 1, Abs. 4) vor Sturmfluten zu schützen. Dafür hat sie die erforderlichen Deiche einschließlich der dazugehörigen Anlagen zu bauen, sowie ihre Deiche in ihrem Bestand und in ihren vorgeschriebenen Abmessungen zu erhalten. Dazu gehört auch die Erhaltung des Deichvorlandes (NDG). Weiter hat sie die zur Erhaltung eines ordnungsgemäßen Zustandes erforderlichen Arbeiten an den übrigen Verbandsanlagen vorzunehmen und die Deichsicherheit von Schleusen, Sielen und anderen Bauwerken im Deich, die in der Unterhaltungslast anderer stehen, zu überwachen und die Vorsorge für die Deichverteidigung zu treffen.<br/><br/>
Insgesamt hat die Deichacht Krummhörn aktuell (Stand: 2018) 42.000 Mitglieder.<br/>
Im geschützten Gebiet (Verbandsgebiet) leben aktuell (Stand: 2018) ca. 135.000 Menschen.

                                <br><strong><br>Weitere
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
                                 src="http://109.239.193.233/krummhoern/public/images/statisch/fuhrpark.jpg" alt="Fuhrpark">
                            <br><strong>Hierzu zählen insbesondere:</strong><br>
                            1 Unimog<br>5 Schlepper (85 bis 170 PS) <br>1 Mähtrack<br>6 Schlepperanhänger<br>diverse
                            Geräte zur
                            Heuwerbung (Mäher, Schwader, Wender, Schlegelmulcher)<br>2 Einachsbalkenmäher und 3
                            Motortrimmer u. v.
                            m.<br>';
        $data->save();

        $data = new Config([]);
        $data->option = 'deichschaefereien';
        $data->value = '<div class="warpper">
                                                Die Beweidung der Deichflächen durch Schafe hat für die Erfüllung der o.
                                                g. Aufgaben eine
                                                herausragende Bedeutung. <br/> Hierdurch wird dauerhaft eine kurze,
                                                geschlossene und feste
                                                Grasnarbe gewährleistet.<br>Hierzu unterhält die Deichacht Krummhörn
                                                entlang ihrer
                                                Deichlinie insgesamt 3 Deichschäfereien. <br>Diese landwirtschaftlichen<br/><br/>
                                                Gebäude stehen<br/>
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


                                                <img src="http://109.239.193.233/krummhoern/public/images/statisch/deichschaeferei_knock.jpg"
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


                                                <img src="http://109.239.193.233/krummhoern/public/images/statisch/deichschaeferei_dyksterhuis.jpg"
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

                                                <img src="http://109.239.193.233/krummhoern/public/images/statisch/schafe.jpg" width="400"
                                                     alt="Schafe am Deich">

                                            </div>';
        $data->save();

        $data = new Config([]);
        $data->option = 'deichunterhaltung';
        $data->value = 'Große Sorgen macht der Deichacht Krummhörn weiterhin die alljährliche
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
                                            guten Unterhaltungszustand der Deiche gewährleisten zu können.<br>';
        $data->save();

        $data = new Config([]);
        $data->option = 'katastrophenschutz';
        $data->value = 'Eine
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
                                            und der Stadt Emden.';
        $data->save();

        $data = new Config([]);
        $data->option = 'buchreihe';
        $data->value = '<div class="warpper ce_text block">

            <h1>Buchreihe "Ostfriesland im Schutze des Deiches"</h1>


            <strong>Zu ihrem 40jährigen Bestehen im Jahr 2003 schließt die Deichacht Krummhörn die Reihe "Ostfriesland im Schutze des Deiches" ab mit dem neuen Band XII, der im Kommissionsverlag Schuster erschienen ist.<br></strong><br><br>



        </div>

        <div class="warpper ce_text block">




            <div class="image_container float_left" style="margin:0px 10px 10px 0px;">

                <a href="http://109.239.193.233/krummhoern/public/images/statisch/deiche_und_deichachten.png" rel="lightbox">



                    <img src="http://109.239.193.233/krummhoern/public/images/statisch/deiche_und_deichachten.png" width="250" alt="Deiche und Deichachten in Krümhörn">



                </a>


            </div>

            Band XII<br>M. Wilken / U. Hangen / W. Deeters<br><strong>Deiche und Deichachten in der Krummhörn</strong>
            <br><br>
            <div class="warpper ce_text block">
            Martin Wilken beschreibt die Geschichte der einzelnen Deichachten, die in den vergangenen Jahrhunderten in der Krummhörn die Deiche bauten und instandhielten. 1963 waren die Niederemsische und die Greetmer Deichacht übrig geblieben, die sich nun zur Deichacht Krummhörn vereinigten.<br><br>Ude Hangen behandelt die Küstenschutzarbeiten, welche seit 1963 im Bereich der Deichacht Krummhörn vorgenommen worden sind, deren Höhepunkt und (vorläufiger) Abschluss die Errichtung des neuen Siels in Leyhörn gewesen ist.<br><br>Abschließend würdigt Walter Deeters die Verdienste des unvergessenen Oberdeich- und -sielrichters Jannes Ohling, die dieser sich mit der Schaffung und Herausgabe der Reihe "Ostfriesland im Schutz des Deiches" um die ostfriesische Landes- und Kulturgeschichte erworben hat. <br><br>392 Seiten m. zahlr. ein- u. mehrfarb. Abbildungen sowie Karten im Anhang, € 69,80<br><br>Verlag Schuster Leer<br><br><br><br>
            </div>
        </div>

        <div class="warpper ce_text block">




            <div class="image_container float_left" style="margin:0px 10px 0px 0px;">

                <a href="http://109.239.193.233/krummhoern/public/images/statisch/ostfriesische_kunst.png" rel="lightbox">



                    <img src="http://109.239.193.233/krummhoern/public/images/statisch/ostfriesische_kunst.png" width="250" alt="Ostfriesische Kunst">



                </a>


            </div>

            Band IV<br>Gottfried Kiesow<br><strong>Ostfriesische Kunst</strong><br><br>Von der Romanik bis zur Neugotik<br>180 Seiten m. ca. 100 z. T. ganzseitigen Abbildungen, € 39,90<br><br><br><br><br><br><br>

        </div>

        <div class="warpper ce_text block">




            <div class="image_container float_left" style="margin:0px 10px 0px 0px;">

                <a href="http://109.239.193.233/krummhoern/public/images/statisch/alte_wege_und_strassen.png" rel="lightbox">



                    <img src="http://109.239.193.233/krummhoern/public/images/statisch/alte_wege_und_strassen.png" width="250" alt="Alte Straßen und Wege in Ostfriesland">



                </a>


            </div>

            Band VIII<br>H. Wiemann / J. Engelmann<br><strong>Alte Straßen und Wege in Ostfriesland</strong><br><br>216 Seiten, 101 Abbildungen, 3 mehrfarbige Karten, € 68,00<br><br><br><br><br><br><br><br>

        </div>

        <div class="warpper ce_text block">




            <div class="image_container float_left" style="margin:0px 10px 0px 0px;">

                <a href="http://109.239.193.233/krummhoern/public/images/statisch/geschichte_der_stadt.png" rel="lightbox">



                    <img src="http://109.239.193.233/krummhoern/public/images/statisch/geschichte_der_stadt.png" width="250" alt="Deiche und  Deichachten in der Krummhörn">



                </a>


            </div>

            Band VII<br>Ernst Siebert / Walter Deeters / Bernard Schröer<br><strong>Geschichte der Stadt Emden 1750 bist zur Gegenwart</strong><br><br>504 Seiten m. 214 Abbildungen, € 50,00<br><br><br><br><br><br><br><br>

        </div>

        <div class="warpper ce_text block">




            <div class="image_container" style="margin:0px 10px 0px 0px;">

                <a href="http://109.239.193.233/krummhoern/public/images/statisch/geschichten_von_emden.png" rel="lightbox">



                    <img src="http://109.239.193.233/krummhoern/public/images/statisch/geschichten_von_emden.png" width="250" alt="Geschichte der Stadt Emden von den Anfängen bis 1749">



                </a>


            </div>

            Band X/XI<br>Brandt / v. Lengen / Schmidt / Deeters / Kappelhoff<br><strong>Geschichte der Stadt Emden von den Anfängen bis 1749</strong><br><br>356 Seiten m. 144 Abbildungen / 572 Seiten m 145 Abbildungen, jetzt zum Sonderpreis von 25,00 €

        </div>

        <div class="ce_text block">



            <strong><br><br>Die Bände I - III, VI und IX sind nur noch im Antiquariat erhältlich.<br><br></strong>



        </div>

        <div class="warpper ce_text last block">



            <p>Bei Interesse an den Büchern nehmen Sie gerne Kontakt mit uns auf.</p>
            <p>Wir sind telefonisch, per Email oder über das Kontaktformular für Sie da. Auf Wunsch versenden wir die Bücher auch. Die entstehenden Versandkosten müssen wir Ihnen in Rechnung stellen.<strong>&nbsp; </strong></p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>



        </div>';
        $data->save();

        $data = new Config([]);
        $data->option = 'links';
        $data->value = 'Für weitere Informationen haben wir Ihnen eine Linkliste zusammengestellt:<br><br><a
                                    onclick="window.open(this.href); return false;"
                                    href="http://www.mu.niedersachsen.de">http://www.mu.niedersachsen.de</a> <br>Nieders.
                                Ministerium für Umwelt und Klimaschutz, Hannover<br><a
                                    onclick="window.open(this.href); return false;" href="http://www.nlwkn.de"><br>http://www.nlwkn.de</a><br>Nieders.
                                Landesbetrieb für Wasserwirtschaft, Küstenschutz und Naturschutz, Norden<br><br><a
                                    onclick="window.open(this.href); return false;"
                                    href="http://www.landkreis-aurich.de">http://www.landkreis-aurich.de</a><br>Landkreis
                                Aurich, Aurich<br><br><a onclick="window.open(this.href); return false;"
                                                         href="http://www.emden.de">http://www.emden.de</a><br>Stadt
                                Emden, Emden<br><br><a onclick="window.open(this.href); return false;"
                                                       href="http://www.wasserverbandstag.de">http://www.wasserverbandstag.de</a><br>Wasserverbandstag,
                                Niedersachsen, Bremen, Sachsen-Anhalt e.V., Hannover<br><br><a
                                    onclick="window.open(this.href); return false;"
                                    href="http://www.pilsumer-leuchtturm.de">http://www.pilsumer-leuchtturm.de</a><br>„Unser
                                Wahrzeichen“ der Pilsumer Leuchtturm<br><br><a
                                    onclick="window.open(this.href); return false;"
                                    href="http://www.deichacht-norden.de">http://www.deichacht-norden.de</a><br>Deichacht
                                Norden, Norden<br><br><a onclick="window.open(this.href); return false;"
                                                         href="http://moormerlaender-deichacht.de">http://www.moormerlaender-deichacht.de</a><br>Deichacht
                                Moormerland, Oldersum<br><br><a onclick="window.open(this.href); return false;"
                                                                href="http://www.entwaesserungsverband-emden.de">http://www.entwaesserungsverband-emden.de</a><br>I.
                                Entwässerungsverband Emden, Krummhörn-Pewsum<br><br><a title="Gemeinde Krummhörn"
                                                                                       href="http://www.krummhoern.de">http://www.krummhoern.de</a><br>Gemeinde
                                Krummhörn<br><br><a href="http://www.greetsiel.de">http://www.greetsiel.de<br></a>Touristik
                                GmbH Krummhörn-Greetsiel';
        $data->save();


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('config');
    }
};
