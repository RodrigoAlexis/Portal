<div class="flex flex-col">

    <div class="mb-4">
        <div class="float-left text-gray-400 text-3xl font-semibold">
            Listado de Posts
        </div>
        <a href="{{route('posts.create')}}" class="hidden sm:hidden md:inline lg:inline 2xl:inline float-right text-white bg-green-700 hover:bg-green-800  font-medium rounded-lg text-sm px-6   py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700">
            Agregar Nuevo Post
        </a>

        <a href="{{route('posts.create')}}" class="inline sm:inline md:hidden lg:hidden 2xl:hidden float-right text-white bg-green-700 hover:bg-green-800  font-medium rounded-lg text-sm px-4   py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
        </a>
    </div>

    {{-- search--}}
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

    @if($posts->count())

        {{-- Tabla --}}
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8 ">

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

                        @foreach ($posts as $post)
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    {{$post->id}}
                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    {{$post->name}}
                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                    <a href="{{route('posts.edit', $post)}}" class="text-gray-500 hover:text-yellow-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </a>
                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <form action="{{route('posts.destroy', $post)}}" method="POST">
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
            {{$posts->links()}}
        </div>

    @else

    <div class="content-center text-center justify-center mt-8">
        <strong class="text-lg font-semibold text-gray-600">
            No se encontró ningún registro con ese nombre 
        </strong>
        <img class="mt-4 mx-auto" src="{{ asset('img/search.png') }}" />
    </div>
       
    @endif
</div>