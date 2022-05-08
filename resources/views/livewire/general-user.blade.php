<div>
    <div class="mt-4">
        <div class="flex flex-wrap -mx-6">
            {{-- card Buzon --}}
            <a href="{{ route('buzon.index') }}" class="w-full px-6 sm:w-1/2 xl:w-1/3">
                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white hover:bg-indigo-200">
                    <div class="p-3 rounded-full bg-indigo-600   bg-opacity-75">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                        </svg>
                    </div>

                    <div class="mx-5">
                        <h4 class="text-2xl font-semibold text-gray-700">Buzón</h4>
                        <div class="text-gray-500">Realizar una Denuncia, Queja o Sugerencia</div>
                    </div>
                </div>
            </a>

            {{-- card Mercado Libre --}}
            <a href="javascript:void(0)" class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white hover:bg-indigo-200">
                    <div class="p-3 rounded-full bg-indigo-600 bg-opacity-75">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>

                    <div class="mx-5">
                        <h4 class="text-2xl font-semibold text-gray-700">Mercado Libre</h4>
                        <div class="text-gray-500">Visita nuestra tienda en línea y conoce más </div>
                    </div>
                </div>
            </a>

            {{-- card Amazon --}}
            <a href="javascript:void(0)" class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/3 xl:mt-0 ">
                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white hover:bg-indigo-200 ">
                    <div class="p-3 rounded-full bg-indigo-600 bg-opacity-75">
                        <svg class="h-8 w-8 text-white" viewBox="0 0 28 28" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.99998 11.2H21L22.4 23.8H5.59998L6.99998 11.2Z" fill="currentColor"
                                stroke="currentColor" stroke-width="2" stroke-linejoin="round"></path>
                            <path
                                d="M9.79999 8.4C9.79999 6.08041 11.6804 4.2 14 4.2C16.3196 4.2 18.2 6.08041 18.2 8.4V12.6C18.2 14.9197 16.3196 16.8 14 16.8C11.6804 16.8 9.79999 14.9197 9.79999 12.6V8.4Z"
                                stroke="currentColor" stroke-width="2"></path>
                        </svg>
                    </div>

                    <div class="mx-5">
                        <h4 class="text-2xl font-semibold text-gray-700 ">Amazon</h4>
                        <div class="text-gray-500">Productos con la mejor calidad</div>
                    </div>
                </div>
            </a>

        </div>
    </div>

    {{-- Espaciado entre cards y tabla --}}
    <div class="flex flex-col mt-8">
        <div class="mb-4 text-gray-500 text-3xl font-semibold">
            Historico del Buzón
        </div>
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div
                class="align-middle inline-block min-w-full  overflow-hidden sm:rounded-lg border-b border-gray-200">


                {{-- Buscador --}}
                <div class="flex-1 flex flex-col overflow-hidden w-full rounded-t-lg">

                    {{-- Input de busqueda --}}
                    <div
                        class="flex justify-between items-center py-4 px-2 sm:px-2 md:px-4 lg:px-6 bg-white border-b-2 border-indigo-500">

                        <div class="flex items-center">

                            <div class="relative mx-4 lg:mx-0">
                                <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                                    <svg class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                        </path>
                                    </svg>
                                </span>

                                <input wire:model="search"
                                    class="form-input w-48  rounded-md pl-10 pr-4 focus:border-indigo-600" type="text"
                                    placeholder="Buscar" />
                            </div>
                        </div>
                    </div>
                </div>

                @if ($buzon->count())

                    {{-- Tabla --}}
                    <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8 text-gray-700">

                        <div class="align-middle inline-block min-w-full shadow overflow-hidden rounded-b-lg">
                            <table class="min-w-full ">
                                <thead>
                                    <tr>
                                        <th
                                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                            Folio</th>
                                        <th
                                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                            Modo de Canal</th>
                                        <th
                                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                            Categoría</th>

                                        <th
                                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                            Tipo</th>

                                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white">

                                    @foreach ($buzon as $bu)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                {{$bu->folio}}
                                            </td>

                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                {{$bu->canal}}
                                            </td>

                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                {{$bu->categoria}}
                                            </td>

                                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                                {{$bu->tipo}}
                                            </td>
                                            {{-- Botones --}}
                                            <td
                                                class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                                <a onclick="toggleModalInfoU('{{$bu->id}}')" href="#{{$bu->id}}" class="text-gray-500 hover:text-blue-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                        stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                        @include('buzon.front.modales.infoDenunciaUser')
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{-- paginacion --}}
                    <div class="mt-4">
                        {{ $buzon->links() }}
                    </div>
                @else
                    <div class=" content-center text-center justify-center mt-8">
                        <strong class="text-lg font-semibold text-gray-600">
                            No se encontró ningún registro en la base de datos
                        </strong>
                        <img class="mt-4 mx-auto" src="{{ asset('img/search.png') }}" />
                    </div>

                @endif
            </div>
        </div>
    </div>

    <script>
        function toggleModalInfoU(modalIDInfoU) {

        document.getElementById(modalIDInfoU).classList.toggle("hidden");
        document.getElementById(modalIDInfoU + "-backdrop").classList.toggle("hidden");
        document.getElementById(modalIDInfoU).classList.toggle("flex");
        document.getElementById(modalIDInfoU + "-backdrop").classList.toggle("flex");
        }
    </script>
</div>
