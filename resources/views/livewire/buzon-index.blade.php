<div class="flex flex-col">
    {{-- Alerta --}}
    @if (session('success'))
        <div id="alert" class="text-white mb-4 border-0 relative  bg-green-500 rounded-lg float-righ text-sm px-6 py-2.5 text-center">
            <span class="inline-block align-middle mr-8 text-center ">
                <p> {{session('success')}}</p>        
            </span>
        </div>
    @endif

    
    <div class="mb-4">
        <div class="float-left text-gray-500 text-3xl font-semibold">
            Listado de Denuncias
        </div>

        {{-- <a href="javascript:void(0)" class="hidden sm:hidden md:inline lg:inline 2xl:inline float-right text-white bg-indigo-500 hover:bg-indigo-600  font-medium rounded-lg text-sm px-6   py-2.5 text-center dark:bg-indigo-500 dark:hover:bg-indigo-600">
            Generar Reporte
        </a> --}}


        {{-- <a href="javascript:void(0)" class="inline sm:inline md:hidden lg:hidden 2xl:hidden float-right text-white bg-indigo-500 hover:bg-indigo-600  font-medium rounded-lg text-sm px-4   py-2.5 text-center dark:bg-indigo-500 dark:hover:bg-indigo-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
        </a> --}}

        
    </div>

    {{-- Buscador --}}
    <div class="flex-1 flex flex-col overflow-hidden w-full rounded-t-lg">

        {{-- Input de busqueda --}}
        <div class="flex justify-between items-center py-4 px-2 sm:px-2 md:px-4 lg:px-6 bg-white border-b-2 border-indigo-500">
            
            <div class="flex items-center">

                <div class="relative mx-4 lg:mx-0">
                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                        <svg class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </svg>
                    </span>

                    <input wire:model="search" class="form-input w-48  rounded-md pl-10 pr-4 focus:border-indigo-600" type="text"
                        placeholder="Buscar"/>
                </div>
            </div>
        </div>
    </div>

    @if($buzon->count())

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
                                <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                    <a onclick="toggleModalInfo('{{$bu->id}}')" href="#{{$bu->id}}" class="text-gray-500 hover:text-blue-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            @include('buzon.front.modales.infoDenunciaAdmin')
                        @endforeach 
                    </tbody>
                </table>
            </div>
        </div>

        {{-- paginacion --}}
        <div class="mt-4">
            {{$buzon->links()}}
        </div>

    @else

    <div class=" content-center text-center justify-center mt-8">
        <strong class="text-lg font-semibold text-gray-600">
            No se encontró ningún registro en la base de datos
        </strong>
        <img class="mt-4 mx-auto" src="{{ asset('img/search.png') }}" />
    </div>
       
    @endif
  
    <script>
        function toggleModalInfo(modalIDInfo) {

        document.getElementById(modalIDInfo).classList.toggle("hidden");
        document.getElementById(modalIDInfo + "-backdrop").classList.toggle("hidden");
        document.getElementById(modalIDInfo).classList.toggle("flex");
        document.getElementById(modalIDInfo + "-backdrop").classList.toggle("flex");
        }

        $('#alert').fadeIn();     
            setTimeout(function() {
                $("#alert").fadeOut();           
            },4000);
    </script>
</div>
