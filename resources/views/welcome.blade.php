<x-app-layout>

    {{-- Hero Section --}}
    <div class="relative bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32"
                style="z-index: 1;">
                <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2"
                    fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                    <polygon points="50,0 100,0 50,100 0,100" />
                </svg>

                {{-- espacio en blanco funcionando como nav para espaciado --}}
                <div>
                    <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
                        <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start"
                            aria-label="Global">
                            <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">

                            </div>
                            <div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8">

                            </div>
                        </nav>
                    </div>
                </div>

                {{-- Contenido --}}
                <main class="mt-6 mx-auto max-w-7xl px-4 sm:mt-8 sm:px-6 md:mt-8 lg:mt-16 lg:px-8 xl:mt-20">
                    <div class="sm:text-center lg:text-left">

                        {{-- Titulo --}}
                        <h1 class="text-4xl tracking-tight sm:text-5xl md:text-6xl text-center">
                            <span
                                class="block xl:inline font-serif font-bold text-transparent bg-clip-text bg-gradient-to-br from-sky-400 to-blue-700">Tu
                                conexión con lo divino</span>
                            {{-- <span class="block text-orange-500 xl:inline font-serif font-bold">con lo divino</span> --}}
                        </h1>

                        {{-- Texto --}}
                        <p
                            class="mt-3 text-md text-gray-500 sm:mt-5  sm:max-w-xl sm:mx-auto md:mt-5  lg:mx-0 text-center font-serif">
                            Fabricamos velas y veladoras de gran calidad y variedad desde México para el mundo. Somos la
                            marca líder de veladoras en el sureste de México. Nuestras veladoras están presentes en las
                            principales cadenas comerciales, distribuidoras de abarrotes y tiendas de conveniencia del
                            país.
                        </p>

                        {{-- Botones --}}
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-center">
                            <div class="rounded-md shadow flex">
                                <a target="_blank" href="{{ asset('docs/politicaBuzon.pdf') }}"
                                    class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                                    Ver Catálogo
                                </a>

                            </div>
                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                <a href="{{ route('grupos.index') }}"
                                    class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
                                    Ir a Productos </a>
                            </div>
                        </div>

                    </div>
                </main>

            </div>
        </div>

        {{-- Carousel --}}
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            {{-- <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full"
                src="https://fondosmil.com/fondo/75618.jpg" alt=""> --}}

            {{-- slider --}}
            <div class="contenedor h-56 w-full sm:h-72 md:h-96 lg:w-full lg:h-full">
                <div class="slider-contenedor">

                    <section class="contenido-slider  object-cover ">


                    </section>

                    <section class="contenido-slider  object-cover ">


                    </section>

                    <section class="contenido-slider  object-cover ">


                    </section>

                    <section class="contenido-slider  object-cover ">


                    </section>
                </div>
            </div>
        </div>
    </div>

    {{-- Container --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-sky-500">
            Algunos de nuestros productos 
        </div>

        <div class=" w-full py-4 grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-6">

            {{-- Nosotros --}}
            <div class="font-serif text-md text-gray-600 mt-4">
                {{-- <h3 class="text-2xl mb-2 text-gray-800">Nosotros</h3> --}}
                <p class="mb-3">
                    Para poder describir la historia que refleja esta empresa harían falta más que solo unas cuantas
                    frases, en cada vela o veladora encendida también se encienden un millón de esfuerzos, un millón
                    de
                    sueños cumplidos y un millón de retos más por alcanzar, esta empresa que nació hace 30 años con
                    la
                    visión de un hombre que llegó a este país con mucho esfuerzo y que logró rápidamente crear una
                    marca
                    reconocida por todos los Mexicanos.
                </p>

                <p class="mb-3">
                    Productos Aramo, con el pasar de los años logró ser una marca lider en el ramo de las veladoras,
                    con
                    el
                    liderazgo y emprendimiento de un equipo consolidado se da paso a una nueva etapa en la vida de
                    la
                    marca Aramo, esta etapa es el fruto de un líder que creyó en su equipo de colaboradores, y los
                    hizo
                    participes del legado que con mucho esfuerzo había construido en 30 años junto a ellos, así se
                    da el
                    nacimiento de Veladoras Aramo, una nueva fabrica con toda la historia, las raíces y experiencia
                    de
                    tantos años en el mercado, pero con toda la inovación, tecnología y empuje de una nueva
                    generación
                    de
                    empresarios que a través de la historia vivida buscando romper todos los esquemas y generar una
                    marca líder.
                </p>
            </div>

            <div class="mt-4 md:h-60 lg:h-auto md:px-24 lg:px-0">
                <iframe class="h-full w-full" src="https://www.youtube.com/embed/ro2tm3rW6lc"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>


        </div>

    </div>



    <script>
        let slider = document.querySelector(".slider-contenedor")
        let sliderIndividual = document.querySelectorAll(".contenido-slider")
        let contador = 1;
        let width = sliderIndividual[0].clientWidth;
        let intervalo = 3000;

        window.addEventListener("resize", function() {
            width = sliderIndividual[0].clientWidth;
        })

        setInterval(function() {
            slides();
        }, intervalo);



        function slides() {
            slider.style.transform = "translate(" + (-width * contador) + "px)";
            slider.style.transition = "transform .8s";
            contador++;

            if (contador == sliderIndividual.length) {
                setTimeout(function() {
                    slider.style.transform = "translate(0px)";
                    slider.style.transition = "transform 0s";
                    contador = 1;
                }, 1500)
            }
        }
    </script>


</x-app-layout>
