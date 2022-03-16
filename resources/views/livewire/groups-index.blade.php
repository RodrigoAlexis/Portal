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
            Listado de Grupos
        </div>

        <a href="{{route('groups.create')}}" class="hidden sm:hidden md:inline lg:inline 2xl:inline float-right text-white bg-indigo-500 hover:bg-indigo-600  font-medium rounded-lg text-sm px-6   py-2.5 text-center dark:bg-indigo-500 dark:hover:bg-indigo-600">
            Agregar Nuevo Grupo
        </a>


        <a href="{{route('groups.create')}}" class="inline sm:inline md:hidden lg:hidden 2xl:hidden float-right text-white bg-indigo-500 hover:bg-indigo-600  font-medium rounded-lg text-sm px-4   py-2.5 text-center dark:bg-indigo-500 dark:hover:bg-indigo-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
        </a>

        
    </div>

    {{-- Buscador --}}
    <div class="flex-1 flex flex-col overflow-hidden w-full rounded-t-lg">

        {{-- Input de busqueda --}}
        <div class="flex justify-between items-center py-4 px-2 sm:px-2 md:px-4 lg:px-6 bg-white border-b-2 border-gray-600">
            
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

    @if($groups->count())

        {{-- Tabla --}}
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8 text-gray-700">

            <div class="align-middle inline-block min-w-full shadow overflow-hidden rounded-b-lg  border-b border-gray-200">
                <table class="min-w-full ">
                    <thead>
                        <tr>
                            <th
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                ID</th>
                            <th
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Nombre</th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                            
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                        </tr>
                    </thead>

                    <tbody class="bg-white">

                         @foreach ($groups as $group) 
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    {{$group->id}}
                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    {{$group->name}}
                                </td>

                                {{-- Botones --}}
                                <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                    <a href="{{route('groups.edit', $group)}}" class="text-gray-500 hover:text-yellow-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </a>
                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <form action="{{route('groups.destroy', $group)}}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button class="text-gray-500 hover:text-red-500" type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    
                                    </form>
                                </td>
                            </tr>
                        @endforeach 
                    </tbody>
                </table>
            </div>
        </div>

        {{-- paginacion --}}
        <div class="mt-4">
            {{$groups->links()}}
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
        $('#alert').fadeIn();     
            setTimeout(function() {
                $("#alert").fadeOut();           
            },4000);
    </script>
</div>

