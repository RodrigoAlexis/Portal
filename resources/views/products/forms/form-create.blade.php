<div class="flex flex-col">
    <div class="mb-4">

        <div class="float-left text-gray-500 text-3xl font-semibold">
                Crear Nuevo Producto
        </div>
        
    </div>

    {{-- Formulario --}}
    <div class="bg-white w-full shadow rounded-lg p-4 sm:p-12 overflow-auto static ">

        {!! Form::open(['route'=> 'products.store', 'autocomplete' => 'off', 'files' => true]) !!}

            @include('products.partials.form')

            {{-- Botones --}}
            <div class="mb-6 text-center mt-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-4">

                <a href="{{route('products.index')}}" class="w-full px-4 py-2 font-bold  bg-gray-200 rounded-md hover:bg-red-500 hover:text-white active:bg-red-600 focus:outline-none focus:shadow-outline focus:border-red-900 focus:ring-gray-300">                                        
                    {{ __('Cancelar') }}
                </a>

                {!! Form::submit('Crear Producto', ['class' => 'w-full px-4 py-2 font-bold text-white bg-indigo-500 rounded-md hover:bg-indigo-600 active:bg-indigo-900 focus:outline-none focus:shadow-outline focus:border-indigo-500 focus:ring-gray-300 dropzone']) !!} 
            </div>
            
        {!! Form::close() !!}
    </div>
</div>

{{-- Ruta del plugin para creacion de slug --}}
<script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

<script>
    //Creacion de slug
    $(document).ready( function() {
        $("#name").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
        });
    });

    //Cambiar imagen al crear un grupo
    document.getElementById("file").addEventListener('change', cambiarImagenGroup);

    function cambiarImagenGroup(event){
         var file = event.target.files[0];

         var reader = new FileReader();
         reader.onload = (event) => {
             document.getElementById("picture").setAttribute('src', event.target.result);
         };

         reader.readAsDataURL(file);
    }
</script>