<x-app-layout>
    {{-- Imagen --}}
    <div class="bg-gradient-to-r from-sky-900  to-sky-500 px-6 mx-auto lg:h-120 py-32 object-fill" 
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


    @if (session('success'))
        <div id="alert" class="text-white mb-4 border-0 relative  bg-green-500 rounded-lg float-righ text-sm px-6 py-2.5 text-center">
            <span class="inline-block align-middle mr-8 text-center ">
                <p> {{session('success')}}</p>        
            </span>
        </div>
    @endif

    {{-- Contenido --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        {{-- Descripcion del canal --}}
        <div class="mb-16 text-gray-600  border-gray-200 border-1 border-b">
            <p>
                El objetivo de este canal es que cualquier persona u organización pueda denunciar y/o  comunicar cualquier posible conducta irregular, poco ética o inapropiada de cualquier persona que esté empleada, represente o participe de alguna forma con nuestra organización, por lo que animamos a empleados/as, clientes, usuarios, proveedores o cualquier persona que tenga contacto con nuestros servicios a comunicarse con nosotros y hacernos llegar sus sugerencias, denuncias, quejas o cualquier indicio que pueda sernos de utilidad.
            </p>
            <p class="mt-4">
                Le agradecemos que nos indique cualquier tipo de detalle de que disponga (fechas, nombre, lugares, etc) que pueda ayudarnos en un posible proceso de investigación interno a fin de tener las máximas evidencias posibles.
            </p>
        </div>
        
        
        <div class="flex flex-col sm:flex-col md:flex-col lg:flex-row">
            {{-- Formulario --}}
            <div class="w-full sm:w-full md:w-full lg:w-3/4 bg-slate-100 flex-auto">
            
                <form action="{{route('buzon.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                   
                    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4" x-data="{personal: false, cliente:false}">
                        <div class="md:col-span-4 lg:col-span-4 text-lg block text-gray-600 font-bold">
                            <label for="info">Información de la Denuncia</label>
                        </div>

                        {{-- Canal --}}
                        <div >
                            <x-jet-label for="canal" value="{{ __('Modo de Canal *') }}" />
                            <div >
                                <select @change="personal = $event.target.value" name="canal"  class="form-select w-full opciones
                                border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" placeholder="Seleccione una opción">
                                    <option value="">Seleccione una opción</option>
                                    <option value="Seguimiento">Con Seguimiento</option>
                                    <option value="Anonimo">Anónimo</option>
                                </select>
                            </div>
                            @error('canal')
                                <small class="text-red-600">{{$message}}</small>
                            @enderror
                        </div>

                        {{-- Categoria --}}
                        <div class="col-span-1 md:col-span-1 lg:col-span-2">
                            <x-jet-label for="categoria" value="{{ __('Categoría *') }}" />
                            <div >
                                <select name="categoria"  class="form-select w-full
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
                            @error('categoria')
                                <small class="text-red-600">{{$message}}</small>
                            @enderror
                        </div>

                        {{-- Tipo --}}
                        <div >
                            <x-jet-label for="tipo" value="{{ __('Tipo *') }}" />
                            <div >
                                <select name="tipo"  class="form-select w-full
                                border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" placeholder="Seleccione una opción">
                                    <option value="">Seleccione una opción</option>
                                    <option value="Denuncia">Denuncia</option>
                                    <option value="Queja">Queja</option>
                                    <option value="Sugerencia">Sugerencia</option>
                                </select>
                            </div>
                            @error('tipo')
                                <small class="text-red-600">{{$message}}</small>
                            @enderror
                        </div>

                        {{-- Informacion Personal --}}
                        <div x-cloak x-show="personal == 'Seguimiento'" class="sm:col-span-1 md:col-span-3 lg:col-span-4" >
                            <div class="md:col-span-4 lg:col-span-4 mt-4 mb-3 text-lg block text-gray-600 font-bold">
                                <label for="info">Información Personal</label>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-4">
                                {{-- nombre --}}
                                <div >
                                    <x-jet-label for="name" value="{{ __('Nombre(s) *') }}" />
                                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"  autofocus />
                                    @error('name')
                                        <small class="text-red-600">{{$message}}</small>
                                    @enderror
                                </div>
                                {{-- apellido paterno --}}
                                <div>
                                    <x-jet-label for="paterno" value="{{ __('Apellido Paterno *') }}" />
                                    <x-jet-input id="paterno" class="block mt-1 w-full" type="text" name="paterno" :value="old('paterno')"  autofocus autocomplete="paterno" />
                                    @error('paterno')
                                        <small class="text-red-600">{{$message}}</small>
                                    @enderror
                                </div>
                                {{-- apellido materno --}}
                                <div >
                                    <x-jet-label for="materno" value="{{ __('Apellido Materno *') }}" />
                                    <x-jet-input id="materno" class="block mt-1 w-full" type="text" name="materno" :value="old('materno')"  autofocus autocomplete="materno" />
                                    @error('materno')
                                        <small class="text-red-600">{{$message}}</small>
                                    @enderror
                                </div>
                                {{-- telefono --}}
                                <div >
                                    <x-jet-label for="telefono" value="{{ __('Número de Contacto *') }}" />
                                    <x-jet-input id="telefono" class="block mt-1 w-full" type="number" name="telefono" :value="old('telefono')"  min="1"/>
                                    @error('telefono')
                                        <small class="text-red-600">{{$message}}</small>
                                    @enderror
                                </div>
                                {{-- correo electronico --}}
                                <div class="col-span-1 sm:col-span-2 md:col-span-2">
                                    <x-jet-label for="email" value="{{ __('Correo Electrónico *') }}" />
                                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"  />
                                    @error('email')
                                        <small class="text-red-600">{{$message}}</small>
                                    @enderror
                                </div>
                            </div> 
                        </div>

                            
                        <div class="md:col-span-4 lg:col-span-4 mt-4 text-lg block text-gray-600 font-bold">
                            <label for="info">Información de Cliente</label>
                        </div>
                        
                        {{-- IsClient? --}}
                        <div class="col-span-1 md:col-span-2 lg:col-span-2">
                            <x-jet-label for="isClient" value="{{ __('¿Es Cliente? *') }}" />
                            <div >
                                <select @change="cliente = $event.target.value" name="isClient" class="form-select w-full
                                border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" placeholder="Seleccione una opción">
                                    <option value>Seleccione una opción</option>
                                    <option value="Soy cliente">Si, soy cliente</option>
                                    <option value="No soy cliente">No soy cliente</option>
                                </select>
                              </div>
                                @error('isClient')
                                    <small class="text-red-600">{{$message}}</small>
                                @enderror
                        </div>

                        {{-- Informacion de cliente --}}
                        <div x-cloak x-show="cliente == 'Soy cliente'"  class="sm:col-span-1 md:col-span-3 lg:col-span-4">
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                {{-- Clave cliente --}}
                                <div>
                                    <x-jet-label for="clave_cliente" value="{{ __('Clave de Cliente') }}" />
                                    <x-jet-input id="clave_cliente" class="block mt-1 w-full" type="text" name="clave_cliente" :value="old('clave_cliente')"  autofocus autocomplete="clave_cliente" />
                                </div>
                                {{-- rfc--}}
                                <div>
                                    <x-jet-label for="rfc" value="{{ __('RFC') }}" />
                                    <x-jet-input id="rfc" class="block mt-1 w-full" type="text" name="rfc" :value="old('rfc')"  autofocus autocomplete="rfc" />
                                </div>
                                {{-- razon_social --}}
                                <div class="col-span-1 md:col-span-2 lg:col-span-1">
                                    <x-jet-label for="razon_social" value="{{ __('Razón Social') }}" />
                                    <x-jet-input id="razon_social" class="block mt-1 w-full" type="text" name="razon_social" :value="old('razon_social')"  autofocus autocomplete="razon_social" />
                                </div>
                            </div>

                        </div>

                        {{-- texto de los hechos --}}
                        <div class="col-span-1 sm:col-span-2 md:col-span-4">
                            <x-jet-label for="hechos" value="{{ __('Texto de los Hechos *') }}" />
                            <textarea id="hechos" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" type="text" name="hechos"  autofocus autocomplete="hechos" rows="3"></textarea>
                            @error('hechos')
                                <small class="text-red-600">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- File --}}
                        <div class="col-span-1 sm:col-span-2 md:col-span-4  ">
                            <x-jet-label for="adjunto" value="{{ __('Adjunto') }}" />
                            <x-jet-input multiple accept=".jpg, .jpeg, .png, .doc, .docx, .pdf" id="adjunto" class="block mt-1 w-full" type="file" name="adjunto[]" :value="old('adjunto')"  autofocus autocomplete="adjunto" />
                            <p class="text-sm text-gray-500 mt-1"><span class="font-bold">Nota:</span> solo se permite un máximo de 3 archivos / imagenes</p>
                            @error('adjunto')   
                                <small class="text-red-600">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="col-span-1 sm:col-span-2 md:col-span-2 mt-4">
                               
                        </div>
                        {{-- Button --}}
                        <div class="col-span-1 sm:col-span-2 md:col-span-2 mt-4">
                            <button class="float-center w-full text-md text-white hover:bg-gradient-to-bl hover:from-blue-400 hover:to-blue-700 bg-gradient-to-bl from-blue-400 to-blue-900  font-medium rounded-md px-6   py-2.5 text-center">
                                Envíar
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="w-auto sm:w-auto md:w-full lg:w-1/4 flex-auto lg:ml-8">
                <div class="flex flex-col">
                    {{-- Politica de uso de buzon --}}
                    <a download="Política de Uso de Buzón.pdf" href="{{ asset('docs/politicaBuzon.pdf') }}" class="text-gray-100 hover:text-blue-700 shadow-md hover:bg-gradient-to-bl hover:from-gray-200 hover:to-gray-400 hover:shadow-gray-200  shadow-blue-200 p-4 w-auto md:w-full h-auto rounded bg-gradient-to-bl from-blue-400 to-blue-900 flex flex-col justify-center items-center mt-4 lg:max-w-[24rem]">
                        {{-- <img class="w-20 h-20 object-cover rounded-full mb-2" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80" alt="logo"> --}}
                        <p class=" font-bold mb-2">Política de Uso de Buzón</p>

                        <div class="  rounded-full mb-2 ">
                            <svg class="h-12 w-12"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M19 18a3.5 3.5 0 0 0 0 -7h-1a5 4.5 0 0 0 -11 -2a4.6 4.4 0 0 0 -2.1 8.4" />  <line x1="12" y1="13" x2="12" y2="22" />  <polyline points="9 19 12 22 15 19" /></svg>
                        </div>
                    </a>
                    
                    {{-- Caracteristicas de seguridad --}}
                    <a href="javascript:void(0)" class="text-gray-100 hover:text-blue-700 shadow-md hover:bg-gradient-to-bl hover:from-gray-200 hover:to-gray-400 hover:shadow-gray-200  shadow-blue-200 p-4 w-auto md:w-full h-auto rounded bg-gradient-to-bl from-blue-400 to-blue-900 flex flex-col justify-center items-center text-center  mt-4 lg:max-w-[24rem]">
                        {{-- <img class="w-20 h-20 object-cover rounded-full mb-2" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80" alt="logo"> --}}
                        <p class=" font-bold mb-2">Características de Seguridad</p>

                        <div class="  rounded-full mb-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                    </a>

                    {{-- Politica de privaciadad --}}
                    <a href="{{route('policy.show')}}" class="text-gray-100 hover:text-blue-700 shadow-md hover:bg-gradient-to-bl hover:from-gray-200 hover:to-gray-400 hover:shadow-gray-200  shadow-blue-200 p-4 w-auto md:w-full h-auto rounded bg-gradient-to-bl from-blue-400 to-blue-900 flex flex-col justify-center items-center mt-4 lg:max-w-[24rem]">
                        {{-- <img class="w-20 h-20 object-cover rounded-full mb-2" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80" alt="logo"> --}}
                        <p class=" font-bold mb-2">Política de Privacidad</p>

                        <div class="  rounded-full mb-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                    </a>

                    {{-- Confidencialidad --}}
                    <button type="button" onclick="toggleModalConfi('modal-confi')" class="text-gray-100 hover:text-blue-700 shadow-md hover:bg-gradient-to-bl hover:from-gray-200 hover:to-gray-400 hover:shadow-gray-200 md:w-full  shadow-blue-200 p-4 w-auto h-auto rounded bg-gradient-to-bl from-blue-400 to-blue-900 flex flex-col justify-center items-center mt-4 lg:max-w-[24rem]">
                        {{-- <img class="w-20 h-20 object-cover rounded-full mb-2" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80" alt="logo"> --}}
                        <p class=" font-bold mb-2">Confidencialidad</p>

                        <div class="  rounded-full mb-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                              </svg>
                        </div>
                    </button>

                    {{-- Acerca del canal --}}
                    <button type="button" onclick="toggleModalAcerca('modal-acerca')" class="text-gray-100 hover:text-blue-700 shadow-md hover:bg-gradient-to-bl hover:from-gray-200 hover:to-gray-400 hover:shadow-gray-200 md:w-full  shadow-blue-200 p-4 w-auto h-auto rounded bg-gradient-to-bl from-blue-400 to-blue-900 flex flex-col justify-center items-center mt-4 lg:max-w-[24rem]">
                        {{-- <img class="w-20 h-20 object-cover rounded-full mb-2" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80" alt="logo"> --}}
                        <p class=" font-bold mb-2">Acerca del Canal</p>

                        <div class="  rounded-full mb-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>

                    {{-- FAQ --}}
                    <button type="button" onclick="toggleModalFaq('modal-faq')" class="text-gray-100 hover:text-blue-700 shadow-md hover:bg-gradient-to-bl hover:from-gray-200 hover:to-gray-400 hover:shadow-gray-200 md:w-full  shadow-blue-200 p-4 w-auto h-auto rounded bg-gradient-to-bl from-blue-400 to-blue-900 flex flex-col justify-center items-center mt-4 lg:max-w-[24rem]">
                        {{-- <img class="w-20 h-20 object-cover rounded-full mb-2" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80" alt="logo"> --}}
                        <p class=" font-bold mb-2">FAQ</p>

                        <div class="  rounded-full mb-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </div>
            </div>

        </div>
    </div>

    {{-- <script>
        $('#alert').fadeIn();     
            setTimeout(function() {
                $("#alert").fadeOut();           
            },4000);
    </script> --}}

    @include('buzon.front.modales.modalconfidencialidad')
    @include('buzon.front.modales.acercaCanal')
    @include('buzon.front.modales.faq')

    <script type="text/javascript">

        function toggleModalConfi(modalIDCon){

            document.getElementById(modalIDCon).classList.toggle("hidden");
            document.getElementById(modalIDCon + "-backdrop").classList.toggle("hidden");
            document.getElementById(modalIDCon).classList.toggle("flex");
            document.getElementById(modalIDCon + "-backdrop").classList.toggle("flex"); 
        }

        function toggleModalAcerca(modalIDAce){

            document.getElementById(modalIDAce).classList.toggle("hidden");
            document.getElementById(modalIDAce + "-backdrop").classList.toggle("hidden");
            document.getElementById(modalIDAce).classList.toggle("flex");
            document.getElementById(modalIDAce + "-backdrop").classList.toggle("flex"); 
        }

        function toggleModalFaq(modalIDFaq){

            document.getElementById(modalIDFaq).classList.toggle("hidden");
            document.getElementById(modalIDFaq + "-backdrop").classList.toggle("hidden");
            document.getElementById(modalIDFaq).classList.toggle("flex");
            document.getElementById(modalIDFaq + "-backdrop").classList.toggle("flex"); 
        }
      </script>   


     
    

</x-app-layout>