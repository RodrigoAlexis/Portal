<div class="flex flex-col">
    <div class="mb-4">

        <div class="float-left text-gray-500 text-3xl font-semibold">
                Agregar Imagenes
        </div>
        
    </div>

    <div class="bg-white w-full shadow rounded-lg p-4 sm:p-12 overflow-auto static ">

        <form method="POST" action="" enctype="multipart/form-data">
            @csrf


            <div class="mb-6 text-center mt-2 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-4">
                <input type="file">
            </div>

            {{-- Boton --}}


            <div class="mb-1 text-center mt-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-4">

                <button type="submit" class="w-full px-4 py-2 font-bold text-white bg-indigo-500 rounded-md hover:bg-indigo-600 active:bg-indigo-900 focus:outline-none focus:shadow-outline focus:border-indigo-500 focus:ring-gray-300">
                    {{ __('Subir Imagen')}}
                </button>

                <a href="{{route('posts.index')}}" class="w-full px-4 py-2 font-bold  bg-gray-200 rounded-md hover:bg-red-500 hover:text-white active:bg-red-600 focus:outline-none focus:shadow-outline focus:border-red-900 focus:ring-gray-300">                                        
                    {{ __('Cancelar') }}
                </a>
            </div>

        </form>
    </div>
</div>