<x-app-layout> 
    <x-guest-layout>
        <x-jet-authentication-card> 
            <x-slot name="logo">
                {{-- <x-jet-authentication-card-logo /> --}}
                <label for="Registro" class="block font-medium text-4xl text-gray-700">Registro</label>
            </x-slot>

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}">
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
                            <x-jet-input id="telefono" class="block mt-1 w-full" type="text" name="telefono" :value="old('telefono')" required autofocus autocomplete="telefono" />
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
                        <div class="col-span-1 sm:col-span-2 md:col-span-2">
                            <x-jet-label for="isClient" value="{{ __('¿Usted es cliente de Aram-Luz? *') }}" />
                            <label">
                                <input id="isClient" type="radio"  name="isClient" value="1">
                                <span class="ml-1 text-sm text-gray-700">Si, soy cliente</span>
                            </label>
                            <label class="ml-20 sm:ml-32 ">
                                <input id="isClient" type="radio"  name="isClient" value="0">
                                <span class="ml-1 text-sm text-gray-700">No soy cliente</span>
                            </label>
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
                        {{-- Razon Socia --}}
                        <div class="col-span-1 sm:col-span-2 md:col-span-2">
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
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                @endif

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-jet-button class="ml-4">
                        {{ __('Register') }}
                    </x-jet-button>
                </div>
            </form>
        </x-jet-authentication-card>
    </x-guest-layout>
</x-app-layout>
