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

        {{-- Etiqueta 1 --}}
        <div>
            {!! Form::label('etiqueta1', 'Etiqueta #1', ['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) !!}
            {!! Form::text('etiqueta1', null, ['class'=>'block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200  rounded-md shadow-sm', 'placeholder' => 'Obligatorio']) !!}       
           
            @error('etiqueta1')
                <small class="text-red-600">{{$message}}</small>
            @enderror
        </div>

        {{-- Etiqueta 2 --}}
        <div>
            {!! Form::label('etiqueta2', 'Etiqueta #2', ['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) !!}
            {!! Form::text('etiqueta2', null, ['class'=>'block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200  rounded-md shadow-sm', 'placeholder' => 'Opcional']) !!}       
           
            @error('etiqueta2')
                <small class="text-red-600">{{$message}}</small>
            @enderror
        </div>

        {{-- Color 1 --}}
        <div>
            {!! Form::label('color1', 'Color #1', ['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) !!}
            {!! Form::text('color1', null, ['class'=>'block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200  rounded-md shadow-sm', 'placeholder' => 'Obligatorio']) !!}       
           
            @error('color1')
                <small class="text-red-600">{{$message}}</small>
            @enderror
        </div>

        {{-- Color 2 --}}
        <div>
            {!! Form::label('color2', 'Color #2', ['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) !!}
            {!! Form::text('color2', null, ['class'=>'block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200  rounded-md shadow-sm', 'placeholder' => 'Opcional']) !!}       
           
            @error('color2')
                <small class="text-red-600">{{$message}}</small>
            @enderror
        </div>

        {{-- Color 3 --}}
        <div>
            {!! Form::label('color3', 'Color #3', ['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) !!}
            {!! Form::text('color3', null, ['class'=>'block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200  rounded-md shadow-sm', 'placeholder' => 'Opcional']) !!}       
           
            @error('color3')
                <small class="text-red-600">{{$message}}</small>
            @enderror
        </div>

        {{-- Color 4 --}}
        <div>
            {!! Form::label('color4', 'Color #4', ['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) !!}
            {!! Form::text('color4', null, ['class'=>'block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200  rounded-md shadow-sm', 'placeholder' => 'Opcional']) !!}       
           
            @error('color4')
                <small class="text-red-600">{{$message}}</small>
            @enderror
        </div>

        {{-- Piezas --}}
        <div>
            {!! Form::label('piezas', 'Piezas por Caja', ['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) !!}
            {!! Form::number('piezas', null, ['class' => 'block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm text-black', 'min' => 1]) !!}

            @error('piezas')
                <small class="text-red-600">{{$message}}</small>
            @enderror
        </div>
         
        <div>
            {{-- {!! Form::label('piezas', 'Piezas por Caja', ['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) !!}
            {!! Form::number('piezas', null, ['class' => 'block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm text-black', 'min' => 1]) !!}

            @error('piezas')
                <small class="text-red-600">{{$message}}</small>
            @enderror --}}
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