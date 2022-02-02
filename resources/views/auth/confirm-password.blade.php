<x-app-layout>
    <x-guest-layout>
        <!-- Container -->
            <div class="container mx-auto">
                <div class="flex justify-center px-6 my-12">
                    <!-- Row -->
                    <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                        <!-- Col -->
                        <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-1/2 bg-cover rounded-l-lg" style="background-image: url('https://source.unsplash.com/oWTW-jNGl9I/600x800')"></div>
                        <!-- Col -->
                        <div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
                        
                        <div class="px-8 mb-4 text-center">
                            <div class="mb-4 text-sm text-gray-600">
                                {{ __('Esta es un área segura de la aplicación. Por favor, confirme su contraseña antes de continuar.') }}
                            </div>
                        </div>
                        
                        <x-jet-validation-errors class="mb-4" />

                        <form method="POST" action="{{ route('password.confirm') }}" class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
                            @csrf

                            <div>
                                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" autofocus />
                            </div>

                            <div class="mb-6 text-center mt-4">
                                <button class="w-full px-4 py-2 font-bold text-white bg-gray-800 rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:shadow-outline focus:border-gray-900 focus:ring-gray-300">
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