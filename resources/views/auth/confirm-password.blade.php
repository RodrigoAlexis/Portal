<x-app-layout>
    <x-guest-layout>
        <!-- Container -->
        <div class="container mx-auto">
            <div class="flex justify-center px-6 my-12">
                <!-- Row -->
                <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                    <!-- Col -->
                    <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-1/2 bg-cover rounded-l-lg" style="background-size:cover;
                                background-image: url('/img/verifyemail.jpg');
                                background-position: center center;
                                background-repeat: no-repea"></div>
                    <!-- Col -->
                    <div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none shadow-lg">

                        <div class="px-8 mb-4 text-center">
                            <div class="mb-4 text-sm text-gray-600">
                                {{ __('Esta es un área segura de la aplicación. Por favor, confirme su contraseña antes de continuar.') }}
                            </div>
                        </div>

                        <x-jet-validation-errors class="mb-4" />

                        <form method="POST" action="{{ route('password.confirm') }}"
                            class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
                            @csrf

                            <div>
                                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password"
                                    required autocomplete="current-password" autofocus />
                            </div>

                            <div class="mb-6 text-center mt-4">
                                <button
                                    class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-md hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:shadow-outline focus:border-gray-900 focus:ring-gray-300">
                                    {{ __('Confirmar') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-guest-layout>
</x-app-layout>
