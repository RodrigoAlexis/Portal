@can('editar-blogs')
<div class="flex flex-col">
    <div class="mb-4">

        <div class="float-left text-gray-500 text-3xl font-semibold">
            Editar Rol
        </div>

    </div>

    <div class="bg-white w-full shadow rounded-lg p-4 sm:p-12 overflow-auto static ">

        {!! Form::model($role, ['route' => ['roles.update', $role->id], 'autocomplete' => 'off', 'files' => true, 'method' => 'put']) !!}

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
                        {!! Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, ['class' => 'appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer']) !!}
                        {!! Form::label('permision', $value->name, ['class' => ' mb-2 text-sm font-medium text-gray-700 font-semibold']) !!}
                    </div>
                @endforeach
                @error('permisos')
                    <small class="  text-red-600 mb-4">{{ $message }}</small>
                @enderror
            </div>
        </div>

        {{-- Botones --}}
        <div class="mb-6 text-center mt-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-4">

            {!! Form::submit('Actualizar Rol', ['class' => 'w-full px-4 py-2 font-bold text-white bg-indigo-500 rounded-md hover:bg-indigo-600 active:bg-indigo-900 focus:outline-none focus:shadow-outline focus:border-indigo-500 focus:ring-gray-300']) !!}


            <a href="{{ route('roles.index') }}"
                class="w-full px-4 py-2 font-bold  bg-gray-200 rounded-md hover:bg-red-500 hover:text-white active:bg-red-600 focus:outline-none focus:shadow-outline focus:border-red-900 focus:ring-gray-300">
                {{ __('Cancelar') }}
            </a>
        </div>

        {!! Form::close() !!}
    </div>
</div>
@endcan
