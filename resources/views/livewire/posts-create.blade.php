<div class="flex flex-col">
    <div class="mb-4">

        <div class="float-left text-gray-400 text-3xl font-semibold">
                Crear Nuevo Post
        </div>
        
    </div>

    <div class="bg-white w-full shadow rounded-lg p-4 sm:p-12 overflow-auto relative">
        {{-- <form action="" method="post">
            <div class="md:flex items-center mt-2">
                <div class="w-full md:w-1/2 flex flex-col">
                    <label class="font-semibold leading-none">Name</label>
                    <input type="text" class="leading-none text-gray-900 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200" />
                </div>
                <div class="w-full md:w-1/2 flex flex-col md:ml-6 md:mt-0 mt-4">
                    <label class="font-semibold leading-none">Phone</label>
                    <input type="email" class="leading-none text-gray-900 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200"/>
                </div>
            </div>
            <div class="md:flex items-center mt-8">
                <div class="w-full flex flex-col">
                    <label class="font-semibold leading-none">Subject</label>
                    <input type="text" class="leading-none text-gray-900 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200"/>
                </div>
                    
            </div>
            <div>
                <div class="w-full flex flex-col mt-8">
                    <label class="font-semibold leading-none">Message</label>
                    <textarea type="text" class="h-40 text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200"></textarea>
                </div>
            </div>
            <div class="flex items-center justify-center w-full">
                <button class="mt-9 font-semibold leading-none text-white py-4 px-10 bg-blue-700 rounded hover:bg-blue-600 focus:ring-2 focus:ring-offset-2 focus:ring-blue-700 focus:outline-none">
                    Send message
                </button>
            </div>
        </form> --}}
        <form method="POST" action="{{ route('posts.create') }}" >
            @csrf

            <div class="container">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-4">
                    {{-- Nombre --}}
                    <div class="col-span-1 sm:col-span-2 md:col-span-2">
                        <x-jet-label for="name" value="{{ __('Nombre del Post') }}" />
                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>
                    {{-- Slug --}}
                    <div>
                        <x-jet-label for="slug" value="{{ __('Slug') }}" />
                        <x-jet-input id="slug" class="block mt-1 w-full" type="text" name="slug" :value="old('slug')" required autofocus autocomplete="slug" />
                    </div>
                    {{-- Imagen --}}
                    <div>
                        <x-jet-label for="url" value="{{ __('Imagen') }}" />
                        <x-jet-input id="url" class="block mt-1 w-full" type="file" name="url" required />
                    </div>
                    {{-- Estracto --}}
                
                    <x-jet-label for="stract" value="{{ __('Extracto') }}" />
                    <textarea id="stract" name="stract"  required autofocus autocomplete="stract" class="lg:col-span-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 shadow-smw-full px-3 py-2 text-gray-700 border rounded-md focus:outline-none" rows="4"></textarea>
                  
                    
                </div>

                
            </div>
            <div class="mb-6 text-center mt-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-4">
                <button class="w-full px-4 py-2 font-bold text-white bg-green-800 rounded-md hover:bg-green-700 active:bg-green-900 focus:outline-none focus:shadow-outline focus:border-green-900 focus:ring-gray-300">
                    {{ __('Crear Post') }}
                </button>

                <a href="{{route('posts.index')}}" class="w-full px-4 py-2 font-bold  bg-gray-200 rounded-md hover:bg-red-500 hover:text-white active:bg-red-600 focus:outline-none focus:shadow-outline focus:border-red-900 focus:ring-gray-300">                                        
                    {{ __('Cancelar') }}
                </a>
            </div>
            
        </form>
    </div>
</div>
