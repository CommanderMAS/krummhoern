<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-800 leading-tight">
            {{ __('Neues Bild einfügen') }}
        </h2>
    </x-slot>

    <form method="POST" action="{{ url('/admin/slider/new') }}" enctype='multipart/form-data'>
        @csrf
        @method('PUT')


        <section id="slider" class="te">
            <div class="container">

                <div class="col-md-12 row form-group">
                    <div class="">

                        <div class="">
                            <div class="col "><label for="image" class=" form-control-label">News-Bild</label>
                            </div>
                            <div class="col-12 col-md-9"><input type="file" id="image" name="image"
                                                                class="form-control-file">
                            </div>
                        </div>

                            <div class="col-md-12 form-group float-right">
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


    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>

</x-app-layout>
