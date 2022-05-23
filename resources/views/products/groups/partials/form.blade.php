<div class="container">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-4">
        {{-- Nombre --}}
        <div>
            {!! Form::label('name', 'Nombre', ['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) !!}
            {!! Form::text('name', null, ['class' => 'block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm text-black', 'placeholder' => 'Ingrese el nombre del grupo']) !!}
       
            @error('name')
                <small class="  text-red-600">{{$message}}</small>
            @enderror
        </div>
        
        {{-- Slug --}}
        <div>
            {!! Form::label('slug', 'Url Amigable (Slug)', ['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) !!}
            {!! Form::text('slug', null, ['class' => 'block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm text-black', 'readonly' => 'true']) !!}
       
            @error('slug')
                <small class="text-red-600">{{$message}}</small>
            @enderror
        </div>
         
        {{-- previsualizacion de la imagen --}}
        <div>  
            @isset ($group->image)
                <img id="picture" src="{{Storage::url($group->image->url)}}" alt="Imagen por defecto" >
            @else
                <img id="picture" src=" /img/defaultGrupo1.jpg" alt="Imagen por defecto" >
            @endisset 
        </div>

        {{-- Imagen Principal--}}
        <div>
            {!! Form::label('file', 'Imagen', ['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) !!}
            {!! Form::file('file', ['class'=>'block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm text-black', 'accept' => 'image/*']) !!}    
        
            @error('file')
                <small class="text-red-600">{{$message}}</small>
            @enderror

            <p class="mt-6 text-sm">1.- Acepta formatos JPG / JPEG / PNG.</p>
            <p class="mt-6 text-sm">2.- Se recomienda que la imagen tenga una medida de 600 x 300 para su correcta visualización.</p>
        </div>

    </div> 
</div>