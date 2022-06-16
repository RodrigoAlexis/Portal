<x-app-layout>
    <x-guest-layout>
        <!-- Container -->
            <div class="container mx-auto">
                <div class="flex justify-center px-6 my-16">
                    <!-- Row -->
                    <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                        <!-- Col -->
                        {{-- 465px 470px --}}
                        <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-1/2 bg-cover rounded-l-lg" 
                            style="background-size:cover; 
                                    background-image: url('/img/twofactor.jpg');
                                    background-position: center center;
                                    background-repeat: no-repeat"></div>
                        <!-- Col -->
                        <div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none shadow-lg">
                            <div class="px-8 mb-4 text-center">
                                <h3 class="pt-4 mb-2 text-2xl">Verificación en dos pasos</h3>
                            </div>
            

                        <div x-data="{ recovery: false }" class="text center">
                            <div class="px-8 mb-4 text-center">
                                <div class="mb-4 text-sm text-gray-700" x-show="! recovery">
                                    {{ __('Confirme el acceso a su cuenta ingresando el código de autenticación proporcionado por su aplicación de autenticación') }}
                                </div>
        
                                <div class="mb-4 text-sm text-gray-700" x-show="recovery">
                                    {{ __('Confirme el acceso a su cuenta ingresando uno de sus códigos de recuperación de emergencia.') }}
                                </div>
                            </div>
                            

                            <x-jet-validation-errors class="mb-4" />

                            <form method="POST" action="{{ route('two-factor.login') }}" class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
                                @csrf

                                <div class="mt-4" x-show="! recovery">
                                    <x-jet-label for="code" value="{{ __('Código') }}" />
                                    <x-jet-input id="code" class="block mt-1 w-full" type="text" inputmode="numeric" name="code" autofocus x-ref="code" autocomplete="one-time-code" />
                                </div>

                                <div class="mt-4" x-show="recovery">
                                    <x-jet-label for="recovery_code" value="{{ __('Código de recuperación') }}" />
                                    <x-jet-input id="recovery_code" class="block mt-1 w-full" type="text" name="recovery_code" x-ref="recovery_code" autocomplete="one-time-code" />
                                </div>

                                <div class="mb-6 text-center mt-4">
                                    <button class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-md hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:shadow-outline focus:border-gray-900 focus:ring-gray-300">
                                        {{ __('Iniciar Sesión') }}
                                    </button>
                                </div>

                                <hr class="mb-6 border-t"/>

                                <div class="text center">
                                    <button type="button" class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                                                    x-show="! recovery"
                                                    x-on:click="
                                                        recovery = true;
                                                        $nextTick(() => { $refs.recovery_code.focus() })
                                                    ">
                                        {{ __('Usa un código de recuperación') }}
                                    </button>
                                </div>

                                <div class="text center">
                                    <button type="button"class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                                                    x-show="recovery"
                                                    x-on:click="
                                                        recovery = false;
                                                        $nextTick(() => { $refs.code.focus() })
                                                    ">
                                        {{ __('Usar un código de autenticación') }}
                                    </button>


                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-guest-layout>
</x-app-layout>
