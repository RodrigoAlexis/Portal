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
							<h3 class="pt-4 mb-2 text-2xl">¿Olvidaste tu contraseña?</h3>
							<p class="mb-4 text-sm text-gray-700">
								Lo entendemos, suele pasar. ¡Simplemente ingrese su dirección de correo electrónico a continuación y le enviaremos un enlace para restablecer su contraseña!
							</p>
						</div>
        
                        @if (session('status'))
                            <div class="mb-4 font-medium text-center text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif

                        <x-jet-validation-errors class="mb-4" />

                        <form method="POST" action="{{ route('password.email') }}" class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
                            @csrf

                            <div class="block">
                                <x-jet-label for="email" value="{{ __('Correo Electrónico') }}" />
                                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                            </div>

                            <div class="mb-6 text-center mt-4">
                                <button class="w-full px-4 py-2 font-bold text-white bg-gray-800 rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:shadow-outline focus:border-gray-900 focus:ring-gray-300">
                                    {{ __('Envíar Enlace') }}
                                </button>
                            </div>

                            <hr class="mb-6 border-t"/>

                            <div class="text-center">
                                <a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="{{ route('register')}}">
                                    {{ __('Crear una cuenta') }}
                                </a>
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
