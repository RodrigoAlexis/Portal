<x-guest-layout>
    <!-- Container -->
    <div class="container mx-auto">
        <div class="flex justify-center px-6 my-20">
            <!-- Row -->
            <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                <!-- Col -->
                {{-- 462px 550px --}}
                <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-1/2 bg-cover rounded-l-lg" style="background-size:cover;
                                background-image: url('https://source.unsplash.com/oWTW-jNGl9I/600x800');
                                background-position: center center;
                                background-repeat: no-repeat"></div>
                <!-- Col -->
                <div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none shadow-lg">
                    <div class="px-8 mb-4 text-center">
                        <h3 class="pt-4 mb-2 text-2xl">Cambio de contraseña</h3>
                        <p class="mb-4 text-sm text-gray-700">
                            Ingresa una nueva contraseña
                        </p>
                    </div>

                    <x-jet-validation-errors class="mb-4" />

                    <form method="POST" action="{{ route('password.update') }}"
                        class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
                        @csrf

                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <div class="block">
                            <x-jet-label for="email" value="{{ __('Correo Electrónico') }}" />
                            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email', $request->email)" required autofocus />
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password"
                                required autocomplete="new-password" />
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="password_confirmation" value="{{ __('Confirmar Contraseña') }}" />
                            <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                name="password_confirmation" required autocomplete="new-password" />
                        </div>

                        <div class="mb-6 text-center mt-8">
                            <button
                                class="w-full px-4 py-2 font-bold text-white bg-gray-800 rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:shadow-outline focus:border-gray-900 focus:ring-gray-300">
                                {{ __('Restablecer contraseña') }}
                            </button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</x-guest-layout>
