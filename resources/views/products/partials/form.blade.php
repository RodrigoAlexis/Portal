<div class="container">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-4">
        {{-- Grupo --}}
        <div>
            {!! Form::label('group_id', 'Grupo', ['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) !!}
            {!! Form::select('group_id', $groups, null, ['class' => 'block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm text-black']) !!}
       
            @error('group_id')
                <small class="  text-red-600">{{$message}}</small>
            @enderror
        </div>
        
        {{-- Linea --}}
        <div>
            {!! Form::label('line_id', 'Linea', ['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) !!}
            {!! Form::select('line_id', $lines, null, ['class' => 'block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm text-black']) !!}
       
            @error('line_id')
                <small class="  text-red-600">{{$message}}</small>
            @enderror
        </div>
        
        {{-- Nombre --}}
        <div>
            {!! Form::label('name', 'Nombre', ['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) !!}
            {!! Form::text('name', null, ['class' => 'block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm text-black', 'placeholder' => 'Ingrese el nombre del producto']) !!}
       
            @error('name')
                <small class="  text-red-600">{{$message}}</small>
            @enderror
        </div>
        
        {{-- Slug --}}
        <div>
            {!! Form::label('slug', 'Url Amigable', ['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) !!}
            {!! Form::text('slug', null, ['class' => 'block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm text-black', 'readonly' => 'true']) !!}
       
            @error('slug')
                <small class="text-red-600">{{$message}}</small>
            @enderror
        </div>

        <div>
            {!! Form::label('piezas', 'Piezas por Caja', ['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) !!}
            {!! Form::number('piezas', null, ['class' => 'block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm text-black', 'min' => 1]) !!}

            @error('slug')
                <small class="text-red-600">{{$message}}</small>
            @enderror
        </div>

        <div  class="col-span-1 sm:col-span-2 md:col-span-2">
            {!! Form::label('etiqueta', 'Etiqueta', ['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) !!}
            {!! Form::textarea('etiqueta', null, ['class'=>'block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200  rounded-md shadow-sm']) !!}       
           
            @error('stract')
                <small class="text-red-600">{{$message}}</small>
            @enderror
        </div>

        <div  class="col-span-1 sm:col-span-2 md:col-span-2">
            {!! Form::label('color', 'Color', ['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) !!}
            {!! Form::textarea('color', null, ['class'=>'block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200  rounded-md shadow-sm']) !!}       
           
            @error('stract')
                <small class="text-red-600">{{$message}}</small>
            @enderror
        </div>
         
        {{-- previsualizacion de la imagen --}}
        <div>  
            @isset ($product->image)
                <img id="picture" src="{{Storage::url($product->image->url)}}" alt="Imagen por defecto" >
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