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
            {!! Form::label('status', 'Url Amigable (Slug)', ['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) !!}
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
                <img id="picture" src=" https://cdn.pixabay.com/photo/2022/01/29/16/21/fisherman-6977946_960_720.jpg" alt="Imagen por defecto" >
            @endisset 
        </div>

        {{-- Imagen Principal--}}
        <div>
            {!! Form::label('file', 'Imagen Principal', ['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) !!}
            {!! Form::file('file', ['class'=>'block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm text-black']) !!}    
        
            @error('file')
                <small class="text-red-600">{{$message}}</small>
            @enderror

            <p class="mt-6">1.- Acepta formatos JPG / JPEG / PNG.</p>
            <p class="mt-6">2.- Se recomienda que la imagen tenga una medida de *** x *** para su correcta visualización.</p>
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
            {!! Form::label('body', 'Contenido del post', ['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) !!}
            {!! Form::textarea('body', null, ['class'=>'block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200  rounded-md shadow-sm']) !!}        
            
            @error('body')
                <small class="text-red-600">{{$message}}</small>
            @enderror
        </div>

        {{-- <div class="col-span-1 sm:col-span-2 md:col-span-2 font-extrabold">
            <p class="mt-6">*Todas las imagenes secundarias deben ser en formato JPG/JPEG*</p>
        </div> --}}

        {{-- Imagen Secundaria 1--}}
        {{-- <div>
            {!! Form::label('foto1', 'Imagen Secundaria 1', ['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) !!}
            {!! Form::file('foto1', ['class'=>'block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm text-black']) !!}    
        
            @error('file')
                <small class="text-red-600">{{$message}}</small>
            @enderror

        </div> --}}

        {{-- Imagen Secundaria 2--}}
        {{-- <div>
            {!! Form::label('foto2', 'Imagen Secundaria 2', ['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) !!}
            {!! Form::file('foto2', ['class'=>'block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm text-black']) !!}    
        
            @error('file')
                <small class="text-red-600">{{$message}}</small>
            @enderror

           
        </div> --}}

        {{-- Imagen Secundaria 3--}}
        {{-- <div>
            {!! Form::label('foto3', 'Imagen Secundaria 3', ['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) !!}
            {!! Form::file('foto3', ['class'=>'block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm text-black']) !!}    
        
            @error('file')
                <small class="text-red-600">{{$message}}</small>
            @enderror

           
        </div> --}}

        {{-- Imagen Secundaria 4--}}
        {{-- <div>
            {!! Form::label('foto4', 'Imagen Secundaria 4', ['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) !!}
            {!! Form::file('foto4', ['class'=>'block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm text-black']) !!}    
        
            @error('file')
                <small class="text-red-600">{{$message}}</small>
            @enderror

           
        </div> --}}
        
    </div> 
</div>