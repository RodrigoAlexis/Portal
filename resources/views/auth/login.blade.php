<x-app-layout>
    <x-guest-layout>
        <!-- Container -->
        <div class="container">
            <div class="flex justify-center px-6 my-5">
                <!-- Row -->
                <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                    <!-- Col -->
                    <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-1/2 bg-cover rounded-l-lg" style="background-image: url('https://source.unsplash.com/K4mSJ7kc0As/600x800')"></div>
                    <!-- Col -->
                    <div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
                        <h3 class="pt-4 text-xl text-center text-gray-300 ">¡Bienvenido!</h3>

                        <x-jet-validation-errors class="mb-4" />

                        @if (session('status'))
                            <div class="mb-4 font-medium text-center text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif
                        
                        <div class="mb-4">
                        {{-- Login with Google --}}
                        <a type="button" class="bg-gray-700 focus:ring-gray-300 focus:ring-opacity-50 shadow-sm w-full mt-3 text-gray-100 border border-gray-200 focus:border-indigo-300 font-bold rounded-lg text-md px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mb-2" href="{{ url('auth/google') }}">
                            <svg class="mr-8 sm:mr-8 md:mr-8 lg:mr-16 xl:mr-16 sm:ml-24 md:ml-40 lg:-ml-1 xl:-ml-1 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 326667 333333" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"><path d="M326667 170370c0-13704-1112-23704-3518-34074H166667v61851h91851c-1851 15371-11851 38519-34074 54074l-311 2071 49476 38329 3428 342c31481-29074 49630-71852 49630-122593m0 0z" fill="#4285f4"/><path d="M166667 333333c44999 0 82776-14815 110370-40370l-52593-40742c-14074 9815-32963 16667-57777 16667-44074 0-81481-29073-94816-69258l-1954 166-51447 39815-673 1870c27407 54444 83704 91852 148890 91852z" fill="#34a853"/><path d="M71851 199630c-3518-10370-5555-21482-5555-32963 0-11482 2036-22593 5370-32963l-93-2209-52091-40455-1704 811C6482 114444 1 139814 1 166666s6482 52221 17777 74814l54074-41851m0 0z" fill="#fbbc04"/><path d="M166667 64444c31296 0 52406 13519 64444 24816l47037-45926C249260 16482 211666 1 166667 1 101481 1 45185 37408 17777 91852l53889 41853c13520-40185 50927-69260 95001-69260m0 0z" fill="#ea4335"/></svg>
                            Inicia Sesión con Google
                        </a>
                        {{-- Login with Facebook --}}
                            <a type="button" class=" focus:ring-opacity-50 shadow-sm w-full mt-3 text-gray-600  border border-gray-200 focus:border-indigo-300 font-bold rounded-lg text-md px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mb-2" href="{{ url('auth/facebook') }}">
                                <svg class="mr-8 sm:mr-8 md:mr-8 lg:mr-16 xl:mr-16 sm:ml-24 md:ml-40 lg:-ml-1 xl:-ml-1 w-4 h-4 text-blue-700" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M279.1 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.4 0 225.4 0c-73.22 0-121.1 44.38-121.1 124.7v70.62H22.89V288h81.39v224h100.2V288z"></path></svg>
                                Inicia Sesión con Facebook
                            </a>

                            
                        </div>

                        <hr class="mb-4 border-t"/>
                        

                        {!! Form::open(['route'=> 'login', 'autocomplete' => 'off', 'files' => true]) !!}
                        <form method="POST" action="{{ route('login') }}" class="px-1 sm:px-8 md:px-8 lg:px-8 xl:px-8 bg-white rounded">
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
                                    {{ __('Iniciar Sesión') }}
                                </button>
                            </div>

                            <hr class="mb-6 border-t"/>

                            <div class="text-center">
                                <a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="{{ route('register')}}">
                                    {{ __('¿No tienes cuenta? Registrate') }}
                                </a>
                            </div>

                            <div class="text-center">
                                @if (Route::has('password.request'))
                                    <a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="{{ route('password.request')}}">
                                    {{ __('¿Olvidaste tu contraseña?') }}
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