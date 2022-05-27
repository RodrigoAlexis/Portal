<div class="container">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-4">
        {{-- Nombre --}}
        <div class="col-span-1 sm:col-span-2 md:col-span-2">
            {!! Form::label('name', 'Nombre', ['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) !!}
            {!! Form::text('name', null, ['class' => 'block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm text-black', 'placeholder' => 'Ingrese el nombre del post']) !!}
       
            @error('name')
                <small class="text-red-600">{{$message}}</small>
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

        {{-- Estado del post --}}
        <div>
            {!! Form::label('status', 'Estado', ['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) !!}
            {!! Form::select('status',['1' => 'Borrador','2'=>'Publicado'],'Borrador',['class'=>'block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm text-black']) !!}    
        
            @error('status')
                <small class="text-red-600">{{$message}}</small>
            @enderror
        </div>
         
        {{-- previsualizacion de la imagen --}}
        <div>  
            @isset ($post->image)
                <img id="picture" src="{{Storage::url($post->image->url)}}" alt="Imagen por defecto" >
            @else
                <img id="picture" src=" {{asset('/img/defaultGrupo1.jpg')}}" alt="Imagen por defecto" >
            @endisset 
        </div>

        {{-- Imagen Principal--}}
        <div>
            {!! Form::label('file', 'Imagen Principal', ['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) !!}
            {!! Form::file('file', ['class'=>'block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm text-black']) !!}    
        
            @error('file')
                <small class="text-red-600">{{$message}}</small>
            @enderror

            <p class="mt-6 text-sm">1.- La imagen principal es <span class="text-red-500 uppercase">obligatoria</span>.</p>
            <p class="mt-6 text-sm">2.- Acepta formatos JPG / JPEG / PNG.</p>
            <p class="mt-6 text-sm">3.- Se recomienda que la imagen tenga una medida de 800 x 500 como mínimo para su correcta visualización.</p>
        </div>

        {{-- Estracto --}}
        <div  class="col-span-1 sm:col-span-2 md:col-span-2">
            {!! Form::label('stract', 'Extracto', ['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) !!}
            {!! Form::textarea('stract', null, ['class'=>'block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200  rounded-md shadow-sm']) !!}       
           
            @error('stract')
                <small class="text-red-600">{{$message}}</small>
            @enderror
        </div>
       

        {{-- Body --}}
        <div class="col-span-1 sm:col-span-2 md:col-span-2">
            {!! Form::label('body', 'Contenido', ['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) !!}
            {!! Form::textarea('body', null, ['class'=>'block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200  rounded-md shadow-sm']) !!}        
            
            @error('body')
                <small class="text-red-600">{{$message}}</small>
            @enderror
        </div>

    </div> 
</div>