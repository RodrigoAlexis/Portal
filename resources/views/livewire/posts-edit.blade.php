<div class="flex flex-col">
    <div class="mb-4">

        <div class="float-left text-gray-500 text-3xl font-semibold">
                Editar Post
        </div>
        
    </div>

    

    <div class="bg-white w-full shadow rounded-lg p-4 sm:p-12 overflow-auto static ">
        @foreach ($posts as $post)
        <form method="POST" action="{{ route('posts.store') }}" novalidate enctype="multipart/form-data">
            @csrf

            <div class="container">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-4">
                    {{-- Nombre --}}
                    <div class="col-span-1 sm:col-span-2 md:col-span-2">
                        <x-jet-label for="name" value="{{ __('Nombre del Post') }}" />
                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"  autofocus autocomplete="name" onload="crearURL(this.value)" onkeyup="crearURL(this.value)"/>
                    
                        @error('name')
                            <small class="text-red-600">{{$message}}</small>
                        @enderror
                    </div>
                    {{-- Slug --}}
                    <div>
                        <x-jet-label for="slug" value="{{ __('Slug') }}" />
                        <x-jet-input id="slug" class="block mt-1 w-full cursor-not-allowed disabled:opacity-75" readonly type="text" name="slug" :value="old('slug')"  autofocus autocomplete="slug" />
                        
                        @error('slug')
                            <small class="text-red-600">{{$message}}</small>
                        @enderror
                    </div>
                    {{-- Estado del post --}}
                    <div>
                        <x-jet-label for="status" value="{{ __('Estado del Post') }}" />
                        <div >
                            <select name="status" class="form-select w-full
                                border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" placeholder="Seleccione una opción">
                                <option value="1">Borrador</option>
                                <option value="2">Publicado</option>
                            </select>
                        </div>
            
                        @error('status')
                            <small class="text-red-600">{{$message}}</small>
                        @enderror
                    </div>
                        {{-- previsualizacion de la imagen --}}
                    <div>
                        <img id="picture" src=" https://cdn.pixabay.com/photo/2022/01/29/16/21/fisherman-6977946_960_720.jpg" alt="Imagen por defecto" >
                    </div>
                    {{-- Imagen --}}
                    <div>
                        <x-jet-label for="file" value="{{ __('Imagen') }}" />
                        <x-jet-input id="file" class="block mt-1 w-full" type="file" name="file" accept="image/*" />
                        
                        @error('file')
                            <small class="text-red-600">{{$message}}</small>
                        @enderror
            
                        <p class="mt-6">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis suscipit esse asperiores nemo soluta ad harum non. Sed corporis obcaecati quam reiciendis molestias excepturi necessitatibus dicta, esse nisi quasi soluta.</p>
                    </div>
                    {{-- Estracto --}}
                    <div class="lg:col-span-2">
                        <x-jet-label for="stract" value="{{ __('Extracto') }}" />
                        <textarea id="stract" name="stract"  required autofocus autocomplete="stract" class=" border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 shadow-smw-full px-3 py-2 text-gray-700 border rounded-md focus:outline-none" rows="8"></textarea>
                        
                        @error('stract')
                            <small class="text-red-600">{{$message}}</small>
                        @enderror
                    </div>
            
                    {{-- Body --}}
                    <div class="lg:col-span-2">
                        <x-jet-label for="body" value="{{ __('Cuerpo del Post') }}" />
                        <textarea  id="body" name="body"  required autofocus autocomplete="body" class="lg:col-span-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 shadow-smw-full px-3 py-2 text-gray-700 border rounded-md focus:outline-none" rows="4"></textarea>
                        
                        @error('body')
                            <small class="text-red-600">{{$message}}</small>
                        @enderror
                    </div> 
                </div> 
            </div>

            {{-- Botones --}}
            <div class="mb-6 text-center mt-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-4">

                <button class="w-full px-4 py-2 font-bold text-white bg-indigo-500 rounded-md hover:bg-indigo-600 active:bg-indigo-900 focus:outline-none focus:shadow-outline focus:border-indigo-500 focus:ring-gray-300">
                    {{ __('Crear Post') }}
                </button>

                <a href="{{route('posts.index')}}" class="w-full px-4 py-2 font-bold  bg-gray-200 rounded-md hover:bg-red-500 hover:text-white active:bg-red-600 focus:outline-none focus:shadow-outline focus:border-red-900 focus:ring-gray-300">                                        
                    {{ __('Cancelar') }}
                </a>
            </div>
            
        </form>
        @endforeach
    </div>
</div>