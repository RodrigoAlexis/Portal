<div class="container">

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-4">

        <div class="md:col-span-2 lg:col-span-4">
            {!! Form::label('group', 'Grupos', ['class' => 'block text-sm font-medium text-gray-700 font-bold']) !!}

        </div>

        @foreach ($groups as $group)
            <div class="mb-6">
                {!! Form::checkbox('groups[]', $group->id, null, ['class' => 'appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer']) !!}
                {!! Form::label('line', $group->name, ['class' => ' mb-2 text-sm font-medium text-gray-700 font-semibold']) !!}

            </div>
        @endforeach
        @error('groups')
                <small class="  text-red-600 mb-4">{{$message}}</small>
        @enderror
        

    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-4">
        {{-- Nombre --}}
        <div>
            {!! Form::label('name', 'Nombre', ['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) !!}
            {!! Form::text('name', null, ['class' => 'block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm text-black', 'placeholder' => 'Ingrese el nombre de la línea']) !!}
       
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
            @isset ($line->image)
                <img id="picture" src="{{Storage::url($line->image->url)}}" alt="Imagen por defecto" >
            @else
                <img id="picture" src=" https://cdn.pixabay.com/photo/2022/01/29/16/21/fisherman-6977946_960_720.jpg" alt="Imagen por defecto" >
            @endisset 
        </div>

        {{-- Imagen Principal--}}
        <div>
            {!! Form::label('file', 'Imagen', ['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) !!}
            {!! Form::file('file', ['class'=>'block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm text-black', 'accept' => 'image/*']) !!}    
        
            @error('file')
                <small class="text-red-600">{{$message}}</small>
            @enderror

            <p class="mt-6">1.- Acepta formatos JPG / JPEG / PNG.</p>
            <p class="mt-6">2.- Se recomienda que la imagen tenga una medida de *** x *** para su correcta visualización.</p>
        </div>

    </div> 
</div>