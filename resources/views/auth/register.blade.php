<x-app-layout> 
    <x-guest-layout>
        <!-- Container -->
		<div class="container">
			<div class="flex justify-center px-6 my-4">
				<!-- Row -->
				<div class="w-full xl:w-3/4 lg:w-11/12 flex ">
					<!-- Col -->
					<div class=" h-full w-full bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg" style="background-image: url('https://source.unsplash.com/Mv9hjnEUHR4/600x800')"></div>
					<!-- Col -->
					<div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
						<h3 class="pt-4 text-2xl text-center">Crea una Cuenta</h3>
            
                        <x-jet-validation-errors class="mb-4" />
                        <div class="px-8 pt-6 pb-4 mb-4 bg-white rounded">
                            <form method="POST" action="{{ route('register') }}" >
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
                                        {{-- IsClient? --}}
                                        <div>
                                            <x-jet-label for="isClient" value="{{ __('¿Es cliente de Aram-Luz? *') }}" />
                                            <div >
                                                <select name="isClient" class="form-select w-full
                                                border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" placeholder="Seleccione una opción">
                                                    <option value="Soy cliente">Si, soy cliente</option>
                                                    <option value="No soy cliente">No soy cliente</option>
                                                </select>
                                              </div>
                                        </div>
                                        {{-- correo electronico --}}
                                        <div class="col-span-1 sm:col-span-2 md:col-span-2">
                                            <x-jet-label for="email" value="{{ __('Correo Electrónico *') }}" />
                                            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
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
                                    <button class="w-full px-4 py-2 font-bold text-white bg-gray-800 rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:shadow-outline focus:border-gray-900 focus:ring-gray-300">                                        {{ __('Registrarme') }}
                                    </button>
                                </div>
                            </form>

                            <hr class="mb-6 border-t"/>

                            <div class="text-center">
                                <a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="{{ route('login')}}">
                                    {{ __('¿Ya tienes una cuenta? Inicia Sesión') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-guest-layout>
</x-app-layout>
