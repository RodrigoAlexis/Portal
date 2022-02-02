<x-app-layout>
    <x-guest-layout>
        <!-- Container -->
        <div class="container">
            <div class="flex justify-center px-6 my-10">
                <!-- Row -->
                <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                    <!-- Col -->
                    <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-1/2 bg-cover rounded-l-lg" style="background-image: url('https://source.unsplash.com/K4mSJ7kc0As/600x800')"></div>
                    <!-- Col -->
                    <div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
                        <h3 class="pt-4 text-xl text-center text-gray-300">¡Bienvenido!</h3>

                        <x-jet-validation-errors class="mb-4" />

                        @if (session('status'))
                            <div class="mb-4 font-medium text-center text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}" class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
                            @csrf

                            <div class="mb-4">
                                <x-jet-label for="email" value="{{ __('Correo Electrónico') }}" />
                                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                            </div>

                            <div class="mb-4">
                                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                            </div>

                            <div class="block mb-4">
                                <label for="remember_me" class="flex items-center">
                                    <x-jet-checkbox id="remember_me" name="remember" />
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Mantener sesión activa') }}</span>
                                </label>
                            </div>
                            <div class="mb-6 text-center">
                                <button class="w-full px-4 py-2 font-bold text-white bg-gray-800 rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:shadow-outline focus:border-gray-900 focus:ring-gray-300">
                                    {{-- <div class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"></div> --}}
                                    {{ __('Iniciar sesión') }}
                                </button>
                            </div>

                            <hr class="mb-6 border-t"/>
                            <div class="text-center">
                                <a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="{{ route('register')}}">
                                    {{ __('Crear una cuenta') }}
                                </a>
                            </div>

                            <div class="text-center">
                                @if (Route::has('password.request'))
                                    <a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="{{ route('password.request')}}">
                                    {{ __('Olvidé mi contraseña') }}
                                    </a>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-guest-layout>
</x-app-layout>