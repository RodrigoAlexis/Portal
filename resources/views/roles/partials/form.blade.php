<div class="container">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-4 ">

        {{-- Nombre --}}
        <div class="col-span-1 sm:col-span-2 md:col-span-2 lg:col-span-3">
            {!! Form::label('name', 'Nombre', ['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) !!}
            {!! Form::text('name', null, ['class' => 'block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm text-black']) !!}

            @error('name')
                <small class="text-red-600">{{ $message }}</small>
            @enderror
        </div>


        <div class="md:col-span-2 lg:col-span-4">
            {!! Form::label('permissions', 'Permisos para el rol', ['class' => 'block text-sm font-medium text-gray-700 font-bold']) !!}

        </div>

        {{-- Permisos --}}
        @foreach ($permission as $value)
            <div class="mb-3 flex">
                {!! Form::checkbox('permission[]', $value->id, null, ['class' => 'appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer']) !!}
                {!! Form::label('permision', $value->name, ['class' => ' mb-2 text-sm font-medium text-gray-700 font-semibold']) !!}

            </div>
        @endforeach
        @error('permisos')
            <small class="  text-red-600 mb-4">{{ $message }}</small>
        @enderror
    </div>
</div>
