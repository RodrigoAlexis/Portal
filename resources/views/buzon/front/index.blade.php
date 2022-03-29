<x-app-layout>
    {{-- Imagen --}}
    <div class="bg-gradient-to-r from-sky-900  to-sky-500 px-6 mx-auto lg:h-120 py-32" 
            style="background-image: url('https://cdn.pixabay.com/photo/2021/05/29/17/35/car-6293917__340.jpg');">   
    </div>
    
    {{-- Primer header --}}
    <div class="bg-gradient-to-r from-blue-900  to-blue-500">
        
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
            <div class="font-bold text-3xl text-white">
                Denuncias, Quejas y Sugerencias
            </div>
            <div class="font-semibold text-xl text-white">
                Buzón de quejas
            </div>
        </div>      
    </div>

    {{-- Segundo header --}}
    <div class="bg-gradient-to-r from-gray-300  to-gray-200">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 py-4">
            <div class="text-xl text-white">
                <p class="text-blue-700 font-semibold">Usted ha entrado en el <span class="font-extrabold text-blue-800">Denuncias, Quejas y Sugerencias</span> ofrecido por <span class="font-extrabold text-blue-800">Centro de Distribución Aram-Luz S. A. de C. V.</span></p>
            </div>
        </div>      
    </div>

    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        <div class="mb-8">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa porro perspiciatis quaerat nisi reiciendis molestiae, inventore quos minus nobis odio, laboriosam nostrum vero modi placeat repudiandae, reprehenderit dolorum facilis obcaecati.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Error rem voluptates harum ad, cumque quis facilis unde debitis laboriosam adipisci obcaecati facere soluta sed laborum? Quibusdam quidem obcaecati repellendus veniam.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit perferendis, odio quo velit temporibus illum quae voluptates eius facilis? Architecto blanditiis perferendis velit magnam molestias quo maxime. Voluptatibus, consequuntur perferendis.
            </p>
        </div>
            
        <div class="flex">
            {{-- formulario --}}
            <div class="w-3/4 flex-auto mr-4">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="grid grid-cols-4 gap-4">
                        {{-- Canal --}}
                        <div>
                            <x-jet-label for="canal" value="{{ __('Modo de Canal *') }}" />
                            <div >
                                <select name="canal" class="form-select w-full
                                border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" placeholder="Seleccione una opción">
                                    <option value="">Seleccione una opción</option>
                                    <option value="Confidencial">Confidencial</option>
                                    <option value="Anónimo">Anónimo</option>
                                </select>
                              </div>
                        </div>
                        {{-- Categoria --}}
                        <div class="col-span-2">
                            <x-jet-label for="categoria" value="{{ __('Categoría *') }}" />
                            <div >
                                <select name="catgoria" class="form-select w-full
                                border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" placeholder="Seleccione una opción">
                                    <option value="">Seleccione una opción</option>
                                    <option value="Condiciones Laborales">Condiciones Laborales</option>
                                    <option value="Salud y Seguridad">Salud y Seguridad</option>
                                    <option value="Normas de Conducta">Normas de Conducta</option>
                                    <option value="Violencia Laboral">Violencia Laboral</option>
                                    <option value="Hostigamiento Laboral">Hostigamiento Laboral</option>
                                    <option value="Discriminación">Discriminación</option>
                                    <option value="Medio Ambiente">Medio Ambiente</option>
                                    <option value="Acoso Laboral">Acoso Laboral</option>
                                    <option value="Abuso de Derechos Humanos">Abuso de Derechos Humanos</option>
                                    <option value="Confidencialidad y Privacidad de Datos Personales">Confidencialidad y Privacidad de Datos Personales</option>
                                    <option value="Soborno/Corrupción">Soborno / Corrupción</option>
                                    <option value="Otro">Otro</option>
                                </select>
                              </div>
                        </div>
                        {{-- Tipo --}}
                        <div>
                            <x-jet-label for="tipo" value="{{ __('Tipo *') }}" />
                            <div >
                                <select name="tipo" class="form-select w-full
                                border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" placeholder="Seleccione una opción">
                                    <option value="">Seleccione una opción</option>
                                    <option value="Denuncia">Denuncia</option>
                                    <option value="Queja">Queja</option>
                                    <option value="Sugerencia">Sugerencia</option>
                                </select>
                              </div>
                        </div>
                        {{-- nombre --}}
                        {{-- <div class="col-span-2">
                            <x-jet-label for="name" value="{{ __('Nombre(s) *') }}" />
                            <x-jet-input id="name" class="block mt-1 w-full" type="email" name="email" :value="old('email')"  autofocus />
                        </div> --}}
                         {{-- apellido paterno --}}
                         {{-- <div>
                            <x-jet-label for="paterno" value="{{ __('Apellido Paterno *') }}" />
                            <x-jet-input id="paterno" class="block mt-1 w-full" type="text" name="paterno" :value="old('paterno')"  autofocus autocomplete="paterno" />
                        </div> --}}
                        {{-- apellido materno --}}
                        {{-- <div >
                            <x-jet-label for="materno" value="{{ __('Apellido Materno *') }}" />
                            <x-jet-input id="materno" class="block mt-1 w-full" type="text" name="materno" :value="old('materno')"  autofocus autocomplete="materno" />
                        </div> --}}
                        {{-- numero --}}
                        {{-- <div >
                            <x-jet-label for="numero" value="{{ __('Número de Contacto *') }}" />
                            <x-jet-input id="numero" class="block mt-1 w-full" type="number" name="numero" :value="old('numero')"  min="1"/>
                        </div> --}}
                        {{-- correo electronico --}}
                        {{-- <div class="col-span-1 sm:col-span-2 md:col-span-2">
                            <x-jet-label for="email" value="{{ __('Correo Electrónico *') }}" />
                            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"  />
                        </div> --}}
                        
                        {{-- IsClient? --}}
                        {{-- <div>
                            <x-jet-label for="isClient" value="{{ __('¿Es Cliente? *') }}" />
                            <div >
                                <select name="isClient" class="form-select w-full
                                border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" placeholder="Seleccione una opción">
                                    <option value="Soy cliente">Si, soy cliente</option>
                                    <option value="No soy cliente">No soy cliente</option>
                                </select>
                              </div>
                        </div> --}}
                        {{-- Clave cliente --}}
                        {{-- <div>
                            <x-jet-label for="clave_cliente" value="{{ __('Clave de Cliente') }}" />
                            <x-jet-input id="clave_cliente" class="block mt-1 w-full" type="text" name="clave_cliente" :value="old('clave_cliente')"  autofocus autocomplete="clave_cliente" />
                        </div> --}}
                        {{-- rfc--}}
                        {{-- <div>
                            <x-jet-label for="rfc" value="{{ __('RFC') }}" />
                            <x-jet-input id="rfc" class="block mt-1 w-full" type="text" name="rfc" :value="old('rfc')"  autofocus autocomplete="rfc" />
                        </div> --}}
                        {{-- razon_social --}}
                        {{-- <div class="col-span-1 sm:col-span-2 md:col-span-2">
                            <x-jet-label for="razon_social" value="{{ __('Razón Social') }}" />
                            <x-jet-input id="razon_social" class="block mt-1 w-full" type="text" name="razon_social" :value="old('razon_social')"  autofocus autocomplete="razon_social" />
                        </div> --}}
                        
                        {{-- texto de los hechos --}}
                        <div class="col-span-1 sm:col-span-2 md:col-span-4">
                            <x-jet-label for="hechos" value="{{ __('Texto de los Hechos') }}" />
                            <textarea id="hechos" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" type="text" name="hechos" :value="old('hechos')"  autofocus autocomplete="hechos" rows="3"></textarea>
                        </div>
                        {{-- File --}}
                        <div class="col-span-1 sm:col-span-2 md:col-span-4  ">
                            <x-jet-label for="adjunto" value="{{ __('Adjunto') }}" />
                            <x-jet-input id="adjunto" class="block mt-1 w-full" type="file" name="adjunto" :value="old('adjunto')"  autofocus autocomplete="adjunto" />
                            <p class="text-sm text-gray-500 mt-1"><span class="font-bold">Nota:</span> en caso de necesitar adjuntar mas de un archivo, por favor, adjunte un ZIP con todos ellos</p>
                        </div>

                        <div class="col-span-1 sm:col-span-2 md:col-span-2 mt-4">
                            reCaptcha
                        
                            
                        </div>
                        {{-- Button --}}
                        <div class="col-span-1 sm:col-span-2 md:col-span-2 mt-4">
                            <button class="float-center w-full text-white bg-indigo-500 hover:bg-indigo-600  font-medium rounded-lg text-sm px-6   py-2.5 text-center dark:bg-indigo-500 dark:hover:bg-indigo-600">
                                Envíar
                            </button>
                        </div>
                    </div>
                    
            </form>
            </div>


            <div class="w-1/4 bg-slate-900 flex-auto">
                02
            </div>
        </div>

        
    </div>
</x-app-layout>