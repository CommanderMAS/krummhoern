<section>
    <header>
        <p class="mt-1 text-sm text-black">
            {{ __("Zum Abgleich hier noch einmal die letzten Stellen ihrer Mitgliedsnummer") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full bg-light text-black" :value="old('name', $user->name)" disabled autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

    </form>
</section>
