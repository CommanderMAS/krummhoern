<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-800 leading-tight">
            {{ __('Datenänderung') }}
        </h2>
    </x-slot>

    <form method="POST" action="{{ url('/admin/aktuelles/new') }}" enctype='multipart/form-data'>
        @csrf
        @method('PUT')


        <section id="aktuelles">
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

                    <div class="col-md-12 row form-group">
                        <div class=""><label for="title" class=" form-control-label">Titel</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="title" name="title" placeholder="Text"
                                                            class="form-control">
                        </div>

                        <div class="col-md-12 row form-group">
                            <div class=""><label for="textarea-input" class=" form-control-label">Intro</label>
                            </div>
                            <br/>
                            <div class="col-md-12"><textarea name="intro" id="textarea-input" rows="9"
                                                             placeholder="Intro..."
                                                             class="ckeditor form-control" required></textarea></div>
                        </div>

                        <div class="col-md-12 row form-group">
                            <div class=""><label for="textarea-input"
                                                         class=" form-control-label">Nachricht</label></div>
                            <br/>
                            <div class="col-md-12"><textarea name="content" id="textarea-input" rows="9"
                                                             placeholder="Nachricht..."
                                                             class="ckeditor form-control" required></textarea></div>
                        </div>

                        <div class="col-md-12 row form-group hidden">
                            <div class=""><label for="type" class=" form-control-label">Kategorie</label></div>
                            <br/>
                            <div class="col-md-12">
                                <select name="category" id="type" class="form-control">
                                    <option value="Nachricht" selected>Nachricht</option>
                                    <option value="Information">Information</option>
                                    <option value="Warnung">Warnung</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12 row form-group">
                            <div class=""><label for="email-input" class=" form-control-label">Datum von</label>
                            </div>
                            <br/>
                            <div class="col-md-9"><input type="date" id="date_from" name="date_from"
                                                         class="form-control"></div>
                        </div>
                        <div class="col-md-12 row form-group">
                            <div class=""><label for="email-input" class=" form-control-label">Datum bis</label>
                            </div>
                            <div class="col-md-9"><input type="date" id="date_to" name="date_to" class="form-control">
                            </div>
                        </div>
                        <br/>
                        <br/>
                        <br/>
                        <br/>

                        <div class="col-md-12 row form-group hidden">
                            <div class="col "><label class=" form-control-label">Optionen</label></div>
                            <div class="col col-md-9">
                                <div class="form-check-inline form-check">
                                    <label for="inline-checkbox1" class="form-check-label ">
                                        <input type="checkbox" id="inline-checkbox1" name="topnews" value="option1"
                                               class="form-check-input">Topnews
                                    </label>
                                </div>
                            </div>
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


    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>

</x-app-layout>
