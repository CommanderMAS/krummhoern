<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Import') }}
        </h2>
    </x-slot>

    @if(isset($message))
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100" style="color:{{$messageColor}}">
                        {{$message}}
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if(auth()->user()->get_right()->name==='Admin' && auth()->user()->get_right()->power > 0)
                        <form method="POST" action="{{ url('/import') }}" enctype='multipart/form-data'>
                            @csrf
                            @method('POST')
                            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                <input type="file" id="importFile" name="importFile">
                            </div>
                            <br/>
                            <div class="col-md-12 row form-group float-right">
                                <button type="submit" class="button-blue">
                                    <i class="fa fa-dot-circle-o"></i> Speichern
                                </button>
                            </div>
                        </form>
                    @else
                        Bereich nur für Administratoren zugänglich
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
