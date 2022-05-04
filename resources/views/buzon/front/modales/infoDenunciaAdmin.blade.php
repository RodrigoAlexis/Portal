<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
    id="{{ $bu->id }}">
    <div class="relative w-auto my-6 mx-auto max-w-3xl">
        <!--content-->
        <div
            class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
            <!--header-->
            <div class="flex items-start justify-between p-5 border-b border-solid border-slate-200 rounded-t">
                <h3 class="text-2xl text-indigo-500 font-semibold modal-title">
                    Folio: {{ $bu->folio }}
                </h3>
                <button
                    class="p-1 ml-auto bg-transparent border-0 text-black  float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                    onclick="toggleModalInfo('{{ $bu->id }}')">
                    <span class="bg-transparent text-black  h-6 w-6 text-2xl block outline-none focus:outline-none">
                        ×
                    </span>
                </button>
            </div>
            <!--body-->
            <div class="overflow-y-auto h-80">
                <div class="relative p-6 flex-auto">
                    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">

                        {{-- Modo de canal --}}
                        <div>
                            <x-jet-label value="{{ __('Modo de Canal') }}" />
                            <x-jet-input class="block mt-1 w-full text-sm" type="text" value="{{ $bu->canal }}"
                                readonly />
                        </div>

                        {{-- Categoria --}}
                        <div class="col-span-1 sm:col-span-1 md:col-span-1 lg:col-span-2">
                            <x-jet-label value="{{ __('Categoría') }}" />
                            <x-jet-input class="block mt-1 w-full text-sm" type="text" value="{{ $bu->categoria }}"
                                readonly />
                        </div>

                        {{-- Tipo --}}
                        <div>
                            <x-jet-label value="{{ __('Tipo') }}" />
                            <x-jet-input class="block mt-1 w-full text-sm" type="text" value="{{ $bu->tipo }}"
                                readonly />
                        </div>

                        {{-- Borde --}}
                        <hr class="border-t col-span-1 sm:col-span-1 md:col-span-3 lg:col-span-4" />

                        @if ($bu->user)
                            {{-- Informacion del Usuario --}}
                            <div
                                class=" col-span-1 sm:col-span-1 md:col-span-3 lg:col-span-4 text-lg font-bold text-gray-600">
                                <x-jet-label value="{{ __('Información de Usuario') }}" />
                            </div>

                            {{-- Nombre Completo --}}
                            <div class="col-span-1 sm:col-span-1 md:col-span-2 lg:col-span-2">
                                <x-jet-label value="{{ __('Nombre') }}" />
                                <x-jet-input class="block mt-1 w-full text-sm" type="text"
                                    value="{{ $bu->user->name }} {{ $bu->user->paterno }} {{ $bu->user->materno }}"
                                    readonly />
                            </div>

                            {{-- Telefono --}}
                            <div class="col-span-1 sm:col-span-1 md:col-span-1 lg:col-span-2">
                                <x-jet-label value="{{ __('Número de Contacto') }}" />
                                <x-jet-input class="block mt-1 w-full text-sm" type="text"
                                    value="{{ $bu->telefono }}" readonly />
                            </div>

                            {{-- Correo Electronico --}}
                            <div class="col-span-1 sm:col-span-1 md:col-span-3 lg:col-span-2">
                                <x-jet-label value="{{ __('Correo Electrónico') }}" />
                                <x-jet-input class="block mt-1 w-full text-sm" type="text"
                                    value="{{ $bu->user->email }}" readonly />
                            </div>
                            {{-- @else --}}
                        @endif

                        {{-- Informacion del cliente --}}
                        <div class="col-span-1 sm:col-span-1 md:col-span-1 lg:col-span-2">
                            <x-jet-label value="{{ __('Información de Cliente') }}" />
                            <x-jet-input class="block mt-1 w-full text-sm" type="text" value="{{ $bu->isClient }}"
                                readonly />
                        </div>

                        @if ($bu->isClient == 'Soy cliente o proveedor' && $bu->canal == 'Anónimo')
                            {{-- Razon Social --}}
                            <div class="col-span-1 sm:col-span-1 md:col-span-1 lg:col-span-2">
                                <x-jet-label value="{{ __('Razón Social') }}" />
                                <x-jet-input class="block mt-1 w-full text-sm" type="text"
                                    value="{{ $bu->razon_social }}" readonly />
                            </div>
                        @elseif($bu->isClient == 'Soy cliente o proveedor')
                            {{-- Razon social --}}
                            <div class="col-span-1 sm:col-span-1 md:col-span-3 lg:col-span-4">
                                <x-jet-label value="{{ __('Razón Social') }}" />
                                <x-jet-input class="block mt-1 w-full text-sm" type="text"
                                    value="{{ $bu->razon_social }}" readonly />
                            </div>
                        @endif

                        {{-- Borde --}}
                        <hr class="border-t col-span-1 sm:col-span-1 md:col-span-3 lg:col-span-4" />

                        {{-- Texto de los hechos --}}
                        <div class="col-span-1 sm:col-span-1 md:col-span-3 lg:col-span-4">
                            <x-jet-label for="hechos" value="{{ __('Texto de los Hechos') }}" />
                            <textarea class="block mt-1 w-full text-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                type="text" rows="5" readonly>{{ $bu->hechos }}</textarea>
                        </div>

                    </div>
                </div>
            </div>
            <!--footer-->
            <div class=" items-center justify-end p-3 border-t border-solid border-slate-200 rounded-b">
            
                {{-- <div
                    class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 rounded-b items-center justify-end mb-4 mr-4 border-t border-solid border-slate-200">
                    <div>
                        
                    </div>
                    <a href="javascript:void(0)"
                        class=" justify-center flex  mt-4 py-2 px-6 text-white font-bold text-md bg-indigo-500 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 10v6m0 0l-3-3m3 3l3-3M3 17V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                        </svg>

                        <span class="mx-3">Evidencias</span>
                    </a>
                </div>
             --}}

            </div>
        </div>
    </div>
</div>
<div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="{{ $bu->id }}-backdrop">


</div>

<script type="text/javascript">
    function changeAtiveTab(event, tabID) {
        let element = event.target;
        while (element.nodeName !== "A") {
            element = element.parentNode;
        }
        ulElement = element.parentNode.parentNode;
        aElements = ulElement.querySelectorAll("li > a");
        tabContents = document.getElementById("tabs-id").querySelectorAll(".tab-content > div");
        for (let i = 0; i < aElements.length; i++) {
            aElements[i].classList.remove("text-white");
            aElements[i].classList.remove("bg-pink-600");
            aElements[i].classList.add("text-pink-600");
            aElements[i].classList.add("bg-white");
            tabContents[i].classList.add("hidden");
            tabContents[i].classList.remove("block");
        }
        element.classList.remove("text-pink-600");
        element.classList.remove("bg-white");
        element.classList.add("text-white");
        element.classList.add("bg-pink-600");
        document.getElementById(tabID).classList.remove("hidden");
        document.getElementById(tabID).classList.add("block");
    }
</script>
