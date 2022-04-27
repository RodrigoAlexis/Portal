<x-app-layout>
    <div class="map-responsive">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.433163097965!2d-98.2755633855558!3d19.132507355166723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc5afccb9f2a5%3A0x3602252f59ea7089!2sVeladoras%20Aramo!5e0!3m2!1ses!2smx!4v1650986431509!5m2!1ses!2smx"
            width="800" height="400" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    @if (session('success'))
        <div id="alert" class="text-white mb-4 border-0 static  bg-green-500 float-righ text-sm px-6 py-2.5 text-center">
            <span class="inline-block align-middle mr-8 text-center ">
                <p> {{ session('success') }}</p>
            </span>
        </div>
    @endif

    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4">
            <div>
                <div class="font-bold text-2xl text-gray-600 mb-4 ml-1">
                    Información de Contacto
                </div>

                <div>
                    <div class="flex mb-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>

                        <span class="ml-2 text-md text-gray-700 font-semibold uppercase"> Centro de Distribución Aram-Luz
                            S. A. de
                            C. V.</span>
                    </div>
                    <div class="ml-7 mb-4 text-sm text-gray-600 font-semibold">
                        <p>
                            Calle industria #236 B
                        </p>
                        <p>
                            Loc. San Francisco Ocotlán
                        </p>
                        <p>
                            Coronango, Puebla. C.P. 72680
                        </p>
                    </div>

                    <div class="flex mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-5 text-blue-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>

                        <span
                            class="ml-2 text-md text-gray-700 font-semibold hover:underline hover:decoration-gray-600 hover:decoration-solid"><a
                                href="mailto:ventas@veladoras-aramo.com">ventas@veladoras-aramo.com</a></span>
                    </div>

                    <div class="flex mb-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-5 text-blue-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>

                        <span
                            class="ml-2 text-md text-gray-700 font-semibold hover:underline hover:decoration-gray-600 hover:decoration-solid"><a
                                href="tel:+522222168201">(222) 216 8201</a></span>
                    </div>
                </div>
            </div>


            <div>
                <form action="{{ route('contacto.store') }}" method="post">
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-4">
                        {{-- nombre --}}
                        <div>
                            <x-jet-label for="name" value="{{ __('Nombre') }}" />
                            <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                                autofocus />
                            @error('name')
                                <small class="text-red-600">{{ $message }}</small>
                            @enderror
                        </div>

                        {{-- telefono --}}
                        <div>
                            <x-jet-label for="telefono" value="{{ __('Número de Contacto') }}" />
                            <x-jet-input id="telefono" class="block mt-1 w-full" type="number" name="telefono"
                                :value="old('telefono')" min="1" />
                            @error('telefono')
                                <small class="text-red-600">{{ $message }}</small>
                            @enderror
                        </div>

                        {{-- correo electronico --}}
                        <div>
                            <x-jet-label for="email" value="{{ __('Correo Electrónico') }}" />
                            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" />
                            @error('email')
                                <small class="text-red-600">{{ $message }}</small>
                            @enderror
                        </div>

                        {{-- Asunto --}}
                        <div>
                            <x-jet-label for="asunto" value="{{ __('Asunto') }}" />
                            <div>
                                <select name="asunto"
                                    class="form-select w-full
                            border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                    placeholder="Seleccione una opción">
                                    <option value="">Seleccione una opción</option>
                                    <option value="Trabaja con nosotros">Trabaja con nosotros</option>
                                    <option value="Comprar">Comprar</option>
                                    <option value="Proveedor">Proveedor</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>
                            @error('asunto')
                                <small class="text-red-600">{{ $message }}</small>
                            @enderror
                        </div>

                        {{-- texto --}}
                        <div class="col-span-1 sm:col-span-1 md:col-span-1 lg:col-span-2">
                            <x-jet-label for="texto" value="{{ __('Mensaje') }}" />
                            <textarea id="texto" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                type="text" name="texto" autofocus autocomplete="texto" rows="4"></textarea>
                            @error('texto')
                                <small class="text-red-600">{{ $message }}</small>
                            @enderror
                        </div>
                        {{-- Recaptcha --}}
                        <div>
                            {!! htmlFormSnippet() !!}
                        </div>
                        <div>

                        </div>
                        <div>

                        </div>

                        <div class="justify-end">
                            <button type="submit"
                                class="w-full py-2 px-8 text-white font-bold text-md  hover:bg-gradient-to-bl hover:from-blue-400 hover:to-blue-700 bg-gradient-to-bl from-blue-400 to-blue-900 rounded-lg">
                                Envíar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $('#alert').fadeIn();
        setTimeout(function() {
            $("#alert").fadeOut();
        }, 4000);
    </script>
</x-app-layout>
