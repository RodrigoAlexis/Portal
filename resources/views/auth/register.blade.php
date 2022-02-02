<x-app-layout> 
    <x-guest-layout>
        <!-- Container -->
		<div class="container">
			<div class="flex justify-center px-6 my-6">
				<!-- Row -->
				<div class="w-full xl:w-3/4 lg:w-11/12 flex ">
					<!-- Col -->
					<div class=" h-full w-full bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg" style="background-image: url('https://source.unsplash.com/Mv9hjnEUHR4/600x800')"></div>
					<!-- Col -->
					<div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
						<h3 class="pt-4 text-2xl text-center">Crea una Cuenta</h3>
            
                        <x-jet-validation-errors class="mb-4" />

                        <form method="POST" action="{{ route('register') }}" class="px-8 pt-6 pb-4 mb-4 bg-white rounded">
                            @csrf

                            <div class="container">
                                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-4">
                                    {{-- nombre --}}
                                    <div>
                                        <x-jet-label for="name" value="{{ __('Nombre(s) *') }}" />
                                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                    </div>
                                    {{-- apellido paterno --}}
                                    <div>
                                        <x-jet-label for="paterno" value="{{ __('Apellido Paterno *') }}" />
                                        <x-jet-input id="paterno" class="block mt-1 w-full" type="text" name="paterno" :value="old('paterno')" required autofocus autocomplete="paterno" />
                                    </div>
                                    {{-- apellido materno --}}
                                    <div >
                                        <x-jet-label for="materno" value="{{ __('Apellido Materno *') }}" />
                                        <x-jet-input id="materno" class="block mt-1 w-full" type="text" name="materno" :value="old('materno')" required autofocus autocomplete="materno" />
                                    </div>
                                    {{-- telefono --}}
                                    <div >
                                        <x-jet-label for="telefono" value="{{ __('Teléfono *') }}" />
                                        <x-jet-input id="telefono" class="block mt-1 w-full" type="number" name="telefono" :value="old('telefono')" required autofocus autocomplete="telefono" />
                                    </div>
                                    {{-- correo electronico --}}
                                    <div class="col-span-1 sm:col-span-2 md:col-span-2">
                                        <x-jet-label for="email" value="{{ __('Correo Electrónico *') }}" />
                                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                    </div>
                                    {{-- contrasena --}}
                                    <div>
                                        <x-jet-label for="password" value="{{ __('Contraseña *') }}" />
                                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                                    </div>
                                    {{-- confirmacion de contrasena --}}
                                    <div>
                                        <x-jet-label for="password_confirmation" value="{{ __('Confirmar Contraseña *') }}" />
                                        <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                                    </div>
                                    {{-- IsClient? --}}
                                    <div>
                                        <x-jet-label for="isClient" value="{{ __('¿Es cliente de Aram-Luz? *') }}" />
                                        <div role="radiogroup" class="mx-auto py-3 flex justify-center">
                                            <!-- Code block starts -->
                                            <div class="flex items-center">
                                                <div class="bg-white dark:bg-gray-100 rounded-full w-4 h-4 flex flex-shrink-0 justify-center items-center relative">
                                                    <input aria-labelledby="label1" checked type="radio" name="isClient" value="1" class="checkbox appearance-none focus:opacity-100 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:outline-none border rounded-full border-gray-400 absolute cursor-pointer w-full h-full checked:border-none" />
                                                    <div class="check-icon hidden border-4 border-indigo-700 rounded-full w-full h-full z-1"></div>
                                                </div>
                                                <label id="label1" class="ml-2 text-sm leading-4 font-normal text-gray-800 dark:text-gray-700">Soy cliente</label>
                                            </div>
                                            <!-- Code block ends -->
                                            <!-- Code block starts -->
                                            <div class="flex items-center ml-6">
                                                <div class="bg-white dark:bg-gray-100 rounded-full w-4 h-4 flex flex-shrink-0 justify-center items-center relative">
                                                    <input aria-labelledby="label2" type="radio" name="isClient" value="0" class="checkbox appearance-none focus:opacity-100 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:outline-none border rounded-full border-gray-400 absolute cursor-pointer w-full h-full checked:border-none" />
                                                    <div class="check-icon hidden border-4 border-indigo-700 rounded-full w-full h-full z-1"></div>
                                                </div>
                                                <label id="label2" class="ml-2 text-sm leading-4 font-normal text-gray-800 dark:text-gray-700">No soy cliente</label>
                                            </div>
                                            <!-- Code block ends -->                
                                        </div>
                                    </div>
                                    {{-- clave del cliente --}}
                                    <div>
                                        <x-jet-label for="clave_cliente" value="{{ __('Clave de cliente (opcional)') }}" />
                                        <x-jet-input id="clave_cliente" class="block mt-1 w-full" type="text" name="clave_cliente" :value="old('clave_cliente')"  autofocus autocomplete="clave_cliente" />
                                    </div>
                                    {{-- RFC --}}
                                    <div>
                                        <x-jet-label for="rfc" value="{{ __('RFC (opcional)') }}" />
                                        <x-jet-input id="rfc" class="block mt-1 w-full" type="text" name="rfc" :value="old('rfc')" autofocus autocomplete="rfc" />
                                    </div>
                                    {{-- Razon Social --}}
                                    <div>
                                        <x-jet-label for="razon_social" value="{{ __('Razón Social (opcional)') }}" />
                                        <x-jet-input id="razon_social" class="block mt-1 w-full" type="text" name="razon_social" :value="old('razon_social')" autofocus autocomplete="razon_social" />
                                    </div>
                                </div>
                            </div>

                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="mt-4">
                                    <x-jet-label for="terms">
                                        <div class="flex items-center">
                                            <x-jet-checkbox name="terms" id="terms"/>

                                            <div class="ml-2">
                                                {!! __('Acepto los :terms_of_service y la :privacy_policy', [
                                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Términos de servicio').'</a>',
                                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Política de privacidad').'</a>',
                                                ]) !!}
                                            </div>
                                        </div>
                                    </x-jet-label>
                                </div>
                            @endif

                            <div class="mb-6 text-center mt-4">
                                <button class="w-full px-4 py-2 font-bold text-white bg-gray-800 rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:shadow-outline focus:border-gray-900 focus:ring-gray-300">
                                    {{-- <div class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"></div> --}}
                                    {{ __('Registrarme') }}
                                </button>
                            </div>

                            <hr class="mb-6 border-t"/>

                            <div class="text-center">
                                @if (Route::has('password.request'))
                                    <a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="{{ route('password.request')}}">
                                    {{ __('¿Olvidaste tu contraseña?') }}
                                    </a>
                                @endif
                            </div>

                            <div class="text-center">
                                <a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="{{ route('login')}}">
                                    {{ __('¿Ya tienes una cuenta? Inicia Sesión') }}
                                </a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </x-guest-layout>
</x-app-layout>
