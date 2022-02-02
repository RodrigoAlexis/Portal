<x-guest-layout>
     <!-- Container -->
	<div class="container mx-auto">
		<div class="flex justify-center px-6 my-24">
			<!-- Row -->
			<div class="w-full xl:w-3/4 lg:w-11/12 flex">
				<!-- Col -->
				<div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-1/2 bg-cover rounded-l-lg" style="background-image: url('https://source.unsplash.com/oWTW-jNGl9I/600x800')"></div>
				<!-- Col -->
				<div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
					<div class="px-8 mb-4 text-center">
						<h3 class="pt-4 mb-2 text-2xl">Verificación de Correo Electrónico</h3>
						<p class="mb-4 text-sm text-gray-700">
							Gracias por registrarte! Antes de comenzar, ¿podría verificar su dirección de correo electrónico haciendo clic en el enlace que le acabamos de enviar? Si no recibiste el correo electrónico, con gusto te enviaremos otro.
						</p>
					</div>

                        @if (session('status') == 'verification-link-sent')

                            <div class="mb-4 font-medium text-center text-sm text-green-600">
                                {{ __('Se ha enviado un nuevo enlace de verificación a la dirección de correo electrónico que proporcionó durante el registro.') }}
                            </div>
                        @endif

                    <div class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
                        <form method="POST" action="{{ route('verification.send') }}" >
                            @csrf

                            <div class="mb-6 text-center mt-4">
                                <button type="submit" class="w-full px-4 py-2 font-bold text-white bg-gray-800 rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:shadow-outline focus:border-gray-900 focus:ring-gray-300">
                                    {{ __('Reenviar Verificación') }}
                                </button>
                            </div>
                        </form>

                        <hr class="mb-6 border-t"/>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <div class="text-center">
                                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                                    {{ __('Cerrar Sesión') }}
                                </button>
                            </div>
                        </form>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
