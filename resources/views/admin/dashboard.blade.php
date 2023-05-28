<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-800">
            {{ __('Datenänderung') }}
        </h2>
    </x-slot>


    @if(isset($message))
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-100 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-800" style="color:{{$messageColor}}">
                        {{$message}}
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if(isset($dataMessage))
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-100 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-900">
                        Sie haben bereits {{count($dataMessage)}} Mal Änderungen gespeichert. Zuletzt
                        am {{date('d.m.Y',date_timestamp_get($dataMessage[0]['created_at']))}}<br/>
                        Letzte Daten: IBAN <span
                            style="color:yellow"> {{Crypt::decrypt($dataMessage[0]['iban'])}}</span> Sonstiges <span
                            style="color:yellow">{{Crypt::decrypt($dataMessage[0]['email'])}}</span>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto  sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
                <div class="p-6 flex">
                    @auth()
                        @if (today() < '2023-08-01 00:00:00')
                            <form method="POST" action="{{ url('/dashboard') }}" enctype='multipart/form-data'>
                                @csrf
                                @method('POST')


                                <div>
                                    <div>
                                        <label for="iban">IBAN</label>
                                    </div>
                                    <div>
                                        <input type="text" id="iban" name="iban"
                                               placeholder="IBAN hier eintippen" required>
                                    </div>
                                </div>
                                <br/>


                                <div>
                                    <div>
                                        <label for="email">eMail</label>
                                    </div>
                                    <div>
                                        <input type="email" id="email" name="email" placeholder="eMail-Adresse">
                                    </div>
                                </div>
                                <br/>


                                @if (false)
                                    <div class="container">
                                        <div class="float-left">
                                            <div>
                                                <label for="vorname">Vorname</label>
                                            </div>
                                            <div>
                                                <input type="text" id="vorname" name="vorname" placeholder="Vorname">
                                            </div>
                                        </div>
                                        <div>
                                            <div>
                                                <label for="nachname">Nachname</label>
                                            </div>
                                            <div>
                                                <input type="text" id="nachname" name="nachname" placeholder="Nachname">
                                            </div>
                                        </div>
                                        <div class="float-right">
                                            <div>
                                                <label for="strasse">Straße</label>
                                            </div>
                                            <div class="float-right">
                                                <input type="text" id="strasse" name="strasse" placeholder="Straße">
                                            </div>
                                        </div>
                                    </div>

                                    <div>

                                    </div>
                                    <br/>

                                    <div>
                                        <div>
                                            <label for="plz">Postleitzahl</label>
                                        </div>
                                        <div>
                                            <input type="text" id="plz" name="plz" placeholder="Postleitzahl">
                                        </div>
                                    </div>
                                    <br/>

                                    <div>
                                        <div>
                                            <label for="ort">Ort</label>
                                        </div>
                                        <div>
                                            <input type="text" id="ort" name="ort" placeholder="Ort">
                                        </div>
                                    </div>
                                    <br/>

                                    <div>
                                        <div>
                                            <label for="einzug">Einzugsermächtigung</label>
                                        </div>
                                        <div>
                                            <input type="text" id="einzug" name="einzug" placeholder="Ja/Nein?">
                                        </div>
                                    </div>
                                    <br/>

                                    <div>
                                        <div>
                                            <label for="kontoinhaber">Kontoinhaber</label>
                                        </div>
                                        <div>
                                            <input type="text" id="kontoinhaber" name="kontoinhaber"
                                                   placeholder="Kontoinhaber">
                                        </div>
                                    </div>
                                    <br/>

                                    <div>
                                        <div>
                                            <label for="sonstiges">Sonstiges</label>
                                        </div>
                                        <div>
                                            <input type="text" id="sonstiges" name="sonstiges"
                                                   placeholder="Möchten sie uns noch etwas mitteilen?">
                                        </div>
                                    </div>
                                @endif
                                <br/>
                                <div class="max-w-7xl">
                                    <div class="col-md-12 form-group">
                                        <button type="submit" class="btn btn-info">
                                            <i class="fa fa-dot-circle-o"></i> Änderungen speichern
                                        </button>
                                    </div>
                                </div>
                            </form>

                        @else
                            Eine Bearbeitung ist leider nicht mehr möglich
                        @endif
                    @else
                        Sie müssen eingeloggt sein
                    @endauth
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
