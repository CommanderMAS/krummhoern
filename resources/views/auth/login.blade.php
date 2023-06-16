<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="password" :value="__('Mitgliedsnummer')" />
            <x-text-input id="password" class="block mt-1 w-full" type="text" name="password" :value="old('password')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('OnlineID')" />

            <x-text-input id="email" class="block mt-1 w-full"
                            type="password"
                            name="email"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-white">{{ __('Login speichern') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-white hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Passwort vergessen?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Einloggen') }}
            </x-primary-button>
        </div>
<br/>

            <div class="text-right">
                <span class="text-white">Die Verarbeitung Ihrer Daten erfolgt gemäß unserer </span><a class="text-green-600" href="{{route('datenschutz')}}" target="_blank">Datenschutzerklärung</a>
            </div>

    </form>
</x-guest-layout>
