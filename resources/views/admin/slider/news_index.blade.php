<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-800 leading-tight">
            {{ __('Alle Slider-Bilder') }}
        </h2>
    </x-slot>


    <div class="py-12" style="color:white">
        <div class="max-w-7xl mx-auto">
            <div class="dark:bg-gray-100 shadow-sm sm:rounded-lg">
                <div class="row te align-content-center">
                    <a href="{{ url('admin/slider/new') }}" class="btn btn-info mx-auto w-75">Neuen Aktuelles-Eintrag
                        erstellen</a>

                </div>

                <div class="row">
                    <div class="text-center">
                        <table id="bootstrap-data-table"
                               class="table table-active" role="grid"
                               aria-describedby="bootstrap-data-table_info">
                            <thead class="te-50">
                            <tr role="row">
                                <th tabindex="0" rowspan="1" colspan="1"
                                    style="width: 337px;">Bildname
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
                            <tbody class="te">
                            @php($row=1)
                            @foreach (get_sliders() as $info)
                                <tr role="row" class="{{$row++ % 2 == 0?"even":"odd"}}">
                                    <td class="text-center">{{substr(strip_tags(html_entity_decode(str_replace('assets/img/slide/',"",$info))),0,60)}}</td>
                                    <td class="text-center"><img src="{{URL::asset($info)}}"
                                                                 width="250px" height="120px"></td>
                                    <td class="text-center">
                                        <form action="{{route('slider_delete', str_replace('assets/img/slide/',"",$info))}}" method="post">
                                            <input type="hidden" name="_method" value="DELETE">
                                            @csrf
                                            <button class="btn btn-danger"
                                                    onclick="return confirm('Sind sie sicher, dass sie das Bild löschen wollen??')">
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

