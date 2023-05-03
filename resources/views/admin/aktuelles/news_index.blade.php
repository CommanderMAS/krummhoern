<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Alle Aktuelles-Einträge') }}
        </h2>
    </x-slot>


    <div class="py-12" style="color:white">
        <div class="max-w-7xl mx-auto">
            <div class="dark:bg-gray-800 shadow-sm sm:rounded-lg">
                <div class="row text-white align-content-center">
                    <a href="{{ url('admin/aktuelles/new') }}" class="btn btn-primary mx-auto w-75">Neuen Aktuelles-Eintrag
                        erstellen</a>

                </div>

                <div class="row">
                    <div class="text-center">
                        <table id="bootstrap-data-table"
                               class="table table-active" role="grid"
                               aria-describedby="bootstrap-data-table_info">
                            <thead class="text-white-50">
                            <tr role="row">
                                <th tabindex="0" rowspan="1" colspan="1"
                                    style="width: 337px;">Überschrift
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table"
                                    rowspan="1" colspan="1"
                                    aria-label="Position: activate to sort column ascending"
                                    aria-sort="descending" style="width: 545px;">Intro
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table"
                                    rowspan="1" colspan="1"
                                    aria-label="Office: activate to sort column ascending"
                                    style="width: 253px;">Datum von
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table"
                                    rowspan="1" colspan="1"
                                    aria-label="Office: activate to sort column ascending"
                                    style="width: 253px;">Datum bis
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table"
                                    rowspan="1" colspan="1"
                                    aria-label="Salary: activate to sort column ascending"
                                    style="width: 203px;">Bild
                                </th>
                                <th style="width: 203px;">Optionen
                                </th>
                            </tr>
                            </thead>
                            <tbody class="text-white">
                            @php($row=1)
                            @foreach ($news as $info)
                                <tr role="row" class="{{$row++ % 2 == 0?"even":"odd"}}">
                                    <td class="text-center">{{substr(strip_tags(html_entity_decode($info->title)),0,60)}}</td>
                                    <td class="text-center">{{substr(strip_tags(html_entity_decode($info->intro)),0,60)}}</td>
                                    <td class="text-center">{{$info->date_from==null?"-":date_german($info->date_from)}}</td>
                                    <td class="text-center">{{$info->date_to==null?"-":date_german($info->date_to)}}</td>
                                    <td class="text-center"><img src="{{URL::asset('images/aktuelles/'.$info->image)}}"
                                                                 width="80px" height="60px"></td>
                                    <td class="text-center">
                                        <form action="{{route('aktuelles_delete', $info->id)}}" method="post">
                                            <a class="btn btn-info"
                                               href="{{url('admin/aktuelles/'.$info->id.'/edit')}}">
                                                <span class="ti-marker-alt">Bearbeiten</span></a>
                                            <input type="hidden" name="_method" value="DELETE">
                                            @csrf
                                            <button class="btn btn-danger"
                                                    onclick="return confirm('Sind sie sicher, dass sie die Nachricht\n{{ $info->title }}\nlöschen wollen??')">
                                                <span class="ti-trash">Löschen</span>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>

</x-app-layout>

