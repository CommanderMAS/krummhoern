<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-800 leading-tight">
            {{ __('Config') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-100 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    @if(auth()->user()->get_right()->name==='Admin')
                        <form method="POST" action="{{ url('/config') }}" enctype='multipart/form-data'>
                            @csrf
                            @method('POST')


                            <section id="projekte" class="text-black">
                                <div class="container">

                                    <div class="col-md-12 row form-group">
                                        <div class="">

                                            <div class="col-md-12 row form-group">
                                                <div class=""><label for="title" class="te form-control-label">Abschnitt</label></div>
                                                <div class="col-12 col-md-9">
                                                    <select id="abschnitt" name="abschnitt" onchange="change_value(this)">
                                                        <option value="beitrag">Bitte wählen...</option>
                                                        @foreach ($data as $key => $dataItem)
                                                            <option value="{{$key}}">{{$key}}</option>
                                                        @endforeach
                                                    </select>

                                                    <br/>
                                                    <br/>
                                                </div>

                                                <div class="col-md-12 row form-group">
                                                    <div class=""><label for="textarea-input" class="te  form-control-label">Text</label>
                                                    </div>
                                                    <br/>
                                                    <div class="col-md-12"><textarea name="intro" id="textarea-input" rows="9"
                                                                                     placeholder="Intro..."
                                                                                     class="ckeditor form-control" required></textarea></div>

                                                </div>

                                                <div>

                                                    <br/>
                                                </div>

                                                <div class="col-md-12 row form-group float-right">
                                                    <button type="submit" class="btn btn-info btn-sm">
                                                        <i class="fa fa-dot-circle-o"></i> Speichern
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </form>
                    @else
                        Eine Bearbeitung ist leider nicht möglich
                    @endif
                </div>
            </div>
        </div>
    </div>


    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();

        });

        function change_value(sel)
        {
            var jArray = <?php echo json_encode($data); ?>;
            CKEDITOR.instances['textarea-input'].setData(jArray[sel.value]);
            console.log(sel.value);
        }
    </script>
</x-app-layout>
