<style>
    figure.is-loaded img {
        animation: fadeIn 0.38s linear 1s forwards;
    }
    figure.is-loading {
        position: relative;
    }
    figure.is-loading:after {
        content: '';
        display: block;
        color: #ddd;
        font-size: 30px;
        text-indent: -9999em;
        overflow: hidden;
        width: 1em;
        height: 1em;
        border-radius: 50%;
        margin: auto;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-left: -0.5em;
        margin-top: -0.5em;
        transform: translateZ(0);
        animation: loading 1.7s infinite ease;
    }
    @keyframes loading {
    0% {
        transform: rotate(0deg);
        box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
    }
    
    5%,
    95% {
        box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
    }
    10%,
    59% {
        box-shadow: 0 -0.83em 0 -0.4em, -0.087em -0.825em 0 -0.42em, -0.173em -0.812em 0 -0.44em, -0.256em -0.789em 0 -0.46em, -0.297em -0.775em 0 -0.477em;
    }
    20% {
        box-shadow: 0 -0.83em 0 -0.4em, -0.338em -0.758em 0 -0.42em, -0.555em -0.617em 0 -0.44em, -0.671em -0.488em 0 -0.46em, -0.749em -0.34em 0 -0.477em;
    }
    38% {
        box-shadow: 0 -0.83em 0 -0.4em, -0.377em -0.74em 0 -0.42em, -0.645em -0.522em 0 -0.44em, -0.775em -0.297em 0 -0.46em, -0.82em -0.09em 0 -0.477em;
    }
    100% {
        transform: rotate(360deg);
        box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
    }
    }
    @keyframes fadeIn {
        0% {
            opacity: 0;
        }
    
        100% {
            opacity: 1;
        }
    }
</style>
<div class="flex flex-col">
    <div class="mb-4">

        <div class="float-left text-gray-500 text-3xl font-semibold">
                Editar Post
        </div>
        
    </div>

    <div class="bg-white w-full shadow rounded-lg p-4 sm:p-12 overflow-auto static ">

        {!! Form::model($post,['route'=> ['posts.update', $post], 'autocomplete' => 'off', 'files' => true, 'method' => 'put']) !!}

            @include('blogs.posts.partials.form')

            {{-- Botones --}}
            <div class="mb-6 text-center mt-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-4">

                {!! Form::submit('Actualizar Post', ['class' => 'w-full px-4 py-2 font-bold text-white bg-indigo-500 rounded-md hover:bg-indigo-600 active:bg-indigo-900 focus:outline-none focus:shadow-outline focus:border-indigo-500 focus:ring-gray-300']) !!}


                <a href="{{route('posts.index')}}" class="w-full px-4 py-2 font-bold  bg-gray-200 rounded-md hover:bg-red-500 hover:text-white active:bg-red-600 focus:outline-none focus:shadow-outline focus:border-red-900 focus:ring-gray-300">                                        
                    {{ __('Cancelar') }}
                </a>
            </div>
            
        {!! Form::close() !!}
    </div>
</div>

{{-- Ruta del plugin para creacion de slug --}}
<script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

{{-- CDN SunEditor --}}
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

    // image resize sunEditor
    description.onImageUploadBefore = function (files, info, core, uploadHandler) {
        try {
            ResizeImage(files, uploadHandler)
        } catch (err) {
            uploadHandler(err.toString())
        }
    };

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

    inView( 'figure' ).on( 'enter', function( figure ) {
 
    var img = figure.querySelector( 'img' ); // 1

        if (  'undefined' !== typeof img.dataset.src ) { // 2

            figure.classList.add( 'is-loading' ); // 3

            // 4
            newImg = new Image();
            newImg.src = img.dataset.src;

            newImg.addEventListener( 'load', function() {

                figure.innerHTML = ''; // 5
                figure.appendChild( this );

                // 6
                setTimeout( function() {
                figure.classList.remove( 'is-loading' );
                figure.classList.add( 'is-loaded' );
                }, 300 );
            } );
        }
    } );
</script>