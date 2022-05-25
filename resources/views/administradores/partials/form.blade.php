<div class="container">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4 mb-4">
        {{-- Nombre --}}
        <div >
            {!! Form::label('name', 'Nombre', ['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) !!}
            {!! Form::text('name', null, ['class' => 'block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm text-black']) !!}
       
            @error('name')
                <small class="text-red-600">{{$message}}</small>
            @enderror
        </div>

        {{-- Paterno --}}
        <div >
            {!! Form::label('paterno', 'Apellido Paterno', ['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) !!}
            {!! Form::text('paterno', null, ['class' => 'block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm text-black']) !!}
       
            @error('paterno')
                <small class="text-red-600">{{$message}}</small>
            @enderror
        </div>

        {{-- Materno --}}
        <div >
            {!! Form::label('materno', 'Apellido Materno', ['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) !!}
            {!! Form::text('materno', null, ['class' => 'block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm text-black']) !!}
       
            @error('materno')
                <small class="text-red-600">{{$message}}</small>
            @enderror
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-4">

        {{-- email --}}
        <div >
            {!! Form::label('email', 'Correo Electrónico', ['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) !!}
            {!! Form::text('email', null, ['class' => 'block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm text-black']) !!}
       
            @error('email')
                <small class="text-red-600">{{$message}}</small>
            @enderror
        </div>

        {{-- password --}}
        <div >
            {!! Form::label('password', 'Contraseña', ['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) !!}
            {!! Form::password('password', ['class' => 'block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm text-black']) !!}
       
            @error('password')
                <small class="text-red-600">{{$message}}</small>
            @enderror
        </div>

        {{-- Departamento --}}
        <div>
            {!! Form::label('departamento', 'Departamento', ['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) !!}
            {!! Form::select('departamento',['Sistemas' => 'Sistemas','Ventas'=>'Ventas','Calidad'=>'Calidad'],' ',['class'=>'block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm text-black']) !!}    
        
            @error('departamento')
                <small class="text-red-600">{{$message}}</small>
            @enderror
        </div>

        {{-- Rol--}}
        <div>
            {!! Form::label('rol', 'Rol', ['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) !!}
            {!! Form::select('roles[]',$roles,[],['class'=>'block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm text-black']) !!}    
        
            {{-- @error('rol')
                <small class="text-red-600">{{$message}}</small>
            @enderror --}}
        </div>

        {{-- isAdmin --}}
        <div >
            {!! Form::text('isAdmin', 'Si', ['class' => 'block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm text-black hidden']) !!}
        </div>





    </div>
</div>