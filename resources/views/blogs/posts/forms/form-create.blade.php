<div class="flex flex-col">
    <div class="mb-4">

        <div class="float-left text-gray-500 text-3xl font-semibold">
                Crear Nuevo Post
        </div>
        
    </div>

    <div class="bg-white w-full shadow rounded-lg p-4 sm:p-12 overflow-auto static ">

        {!! Form::open(['route'=> 'posts.store', 'autocomplete' => 'off', 'files' => true]) !!}

        
        

            @include('blogs.posts.partials.form')

            {{-- Botones --}}
            <div class="mb-6 text-center mt-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-4">

                {!! Form::submit('Crear Post', ['class' => 'w-full px-4 py-2 font-bold text-white bg-indigo-500 rounded-md hover:bg-indigo-600 active:bg-indigo-900 focus:outline-none focus:shadow-outline focus:border-indigo-500 focus:ring-gray-300 dropzone', 'id' => 'myDropzone']) !!}


                <a href="{{route('posts.index')}}" class="w-full px-4 py-2 font-bold  bg-gray-200 rounded-md hover:bg-red-500 hover:text-white active:bg-red-600 focus:outline-none focus:shadow-outline focus:border-red-900 focus:ring-gray-300">                                        
                    {{ __('Cancelar') }}
                </a>
            </div>
            
        {!! Form::close() !!}
    </div>
</div>

{{-- Ruta del plugin para creacion de slug --}}
<script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

{{-- Dropzone --}}
{{-- <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script> --}}
{{-- <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" /> --}}

{{-- Filepond --}}
<link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />

<script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>

{{-- Suneditor --}}
<script src="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/suneditor.min.js"></script>
       
<script src="https://cdn.jsdelivr.net/npm/suneditor@latest/src/lang/ko.js"></script>



<script>
    //Creacion de slug
    $(document).ready( function() {
        $("#name").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
        });
    });


    //SunEditor
    const description2 = SUNEDITOR.create((document.getElementById('stract')),{
        buttonList: [
            ['undo', 'redo'],
            ['font','fontSize'],
            ['bold', 'underline', 'italic', 'strike'],
            ['removeFormat'],
            ['outdent', 'indent'],
            ['fontColor', 'hiliteColor'],
            ['link'],
        ],
        lang: SUNEDITOR_LANG['en']
    });
    $(window).click(function() {
        document.getElementById('stract').value = description2.getContents();
    });

    const description = SUNEDITOR.create((document.getElementById('body')),{
        buttonList: [
            ['undo', 'redo'],
            ['font','fontSize'],
            ['bold', 'underline', 'italic', 'strike'],
            ['removeFormat'],
            ['outdent', 'indent'],
            ['fontColor', 'hiliteColor'],
            ['link', 'image', 'video'],
            ['codeView', 'print'],
        ],
        lang: SUNEDITOR_LANG['en']
    });
    $(window).click(function() {
        document.getElementById('body').value = description.getContents();
    });

    

    description.onImageUploadBefore = function (files, info, core, uploadHandler) {
        try {
            ResizeImage(files, uploadHandler)
        } catch (err) {
            uploadHandler(err.toString())
        }
    };

    // image resize
    function ResizeImage (files, uploadHandler) {
        const uploadFile = files[0];
        const img = document.createElement('img');
        const canvas = document.createElement('canvas');
        const reader = new FileReader();

        reader.onload = function (e) {
            img.src = e.target.result
            img.onload = function () {
                let ctx = canvas.getContext("2d");
                ctx.drawImage(img, 0, 0);

                const MAX_WIDTH = 200;
                const MAX_HEIGHT = 100;
                let width = img.width;
                let height = img.height;

                if (width > height) {
                    if (width > MAX_WIDTH) {
                        height *= MAX_WIDTH / width;
                        width = MAX_WIDTH;
                    }
                } else {
                    if (height > MAX_HEIGHT) {
                        width *= MAX_HEIGHT / height;
                        height = MAX_HEIGHT;
                    }
                }

                canvas.width = width;
                canvas.height = height;

                ctx = canvas.getContext("2d");
                ctx.drawImage(img, 0, 0, width, height);

                canvas.toBlob(function (blob) {
                    uploadHandler([new File([blob], uploadFile.name)])
                }, uploadFile.type, 1);
            }
        }

        reader.readAsDataURL(uploadFile);
    }
        

    //Cambiar imagen al crear un post
    document.getElementById("file").addEventListener('change', cambiarImagenPost);

    function cambiarImagenPost(event){
        var file = event.target.files[0];

        var reader = new FileReader();
        reader.onload = (event) => {
            document.getElementById("picture").setAttribute('src', event.target.result);
        };

        reader.readAsDataURL(file);
    }

    // Get a reference to the file input element
    const inputElement = document.querySelector('input[id="photos"]');
    // Create a FilePond instance
    const pond = FilePond.create(inputElement);
    FilePond.setOptions({
        server: {
            url: '/upload',
            headers: {
                'X-CSRF-TOKEN': '{{csrf_token()}}'
            }
        }
    });


</script>