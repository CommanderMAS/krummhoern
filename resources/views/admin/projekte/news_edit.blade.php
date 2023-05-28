<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-800 leading-tight">
            {{ __('Datenänderung') }}
        </h2>
    </x-slot>

    <form method="POST" action="{{ url('/admin/projekte/'.$news->id.'/update') }}" enctype='multipart/form-data'>
        @csrf
        @method('PUT')


        <div class="container">
            <div class="row">

                <div class="col-md-12 row form-group">

                    News bearbeiten
                </div>

                <div class="col-md-12 row form-group">
                    <div class="col col-md-3"><label for="image_alt" class=" form-control-label">Bisheriges News-Bild</label></div>
                    <img src="{{URL::asset('images/projekte/'.$news->image)}}" width="320px" height="240px">
                    </div>
                </div>

                <div class="col-md-12 row form-group">
                    <div class="col col-md-3"><label for="image" class=" form-control-label">News-Bild ändern</label></div>
                    <div class="col-12 col-md-9"><input type="file" id="image" name="image" class="form-control-file">
                    </div>
                </div>

                <div class="col-md-12 row form-group">
                    <div class="col col-md-3"><label for="title" class=" form-control-label">Titel</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="title" name="title"
                                                        class="form-control" value="{{$news->title}}">
                </div>

                <div class="col-md-12 row form-group">
                    <div class="col-md-3"><label for="textarea-input" class=" form-control-label">Intro</label></div>
                    <br/>
                    <div class="col-md-12"><textarea name="intro" id="textarea-input" rows="9" placeholder="Intro..."
                                                     class="ckeditor form-control" required> {{$news->intro}}</textarea></div>
                </div>

                <div class="col-md-12 row form-group">
                    <div class="col-md-3"><label for="textarea-input" class=" form-control-label">Nachricht</label>
                    </div>
                    <br/>
                    <div class="col-md-12"><textarea name="ckeditor content" id="textarea-input" rows="9"
                                                     placeholder="Nachricht..."
                                                     class="form-control" required> {{$news->content}}</textarea></div>
                </div>

                <div class="col-md-12 row form-group">
                    <div class="col-md-3"><label for="type" class=" form-control-label">Kategorie</label></div>
                    <br/>
                    <div class="col-md-12">
                        <select name="category" id="type" class="form-control">
                            <option value="Nachricht" {{$news->category=="Nachricht"?"selected":""}}>Nachricht</option>
                            <option value="Information" {{$news->category=="Information"?"selected":""}}>Information</option>
                            <option value="Warnung"{{$news->category=="Warnung"?"selected":""}}>Warnung</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-12 row form-group">
                    <div class="col-md-3"><label for="email-input" class=" form-control-label">Datum von</label></div>
                    <br/>
                    <div class="col-md-9"><input type="date" id="date_from" name="date_from" value="{{$news->date_from==null?"":$news->date_from}}" class="form-control"></div>
                </div>
                <br/>
                <div class="col-md-12 row form-group">
                    <div class="col-md-3"><label for="email-input" class=" form-control-label">Datum bis</label></div>
                    <br/>
                    <div class="col-md-9"><input type="date" id="date_to" name="date_to" value="{{$news->date_to==null?"":$news->date_to}}" class="form-control"></div>
                </div>

                <div class="col-md-12 row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Optionen</label></div>
                    <div class="col col-md-9">
                        <div class="form-check-inline form-check">
                            <label for="inline-checkbox1" class="form-check-label ">
                                <input type="checkbox" id="inline-checkbox1" name="topnews" value="option1"
                                       class="form-check-input" {{$news->topnews==1?"checked":""}}>Topnews
                            </label>
                        </div>
                    </div>
                </div>


                <div class="col-md-12 row form-group float-right">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Speichern
                    </button>
                </div>

            </div>
        </div>

    </form>



    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>

</x-app-layout>
