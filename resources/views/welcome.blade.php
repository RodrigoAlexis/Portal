<x-app-layout>

    {{-- Seccion Hero --}}
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
                <main class="mt-6 mx-auto max-w-7xl px-4 sm:mt-8 sm:px-6 md:mt-8 lg:mt-16 lg:px-8 xl:mt-20 ">
                    <div class="sm:text-center lg:text-left" data-aos="fade-up" data-aos-easing="linear"
                        data-aos-duration="1500">

                        {{-- Titulo --}}
                        <h1 class="text-4xl tracking-tight sm:text-5xl md:text-6xl text-center ">
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

                        {{-- Boton --}}
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-center ">
                            <div class="rounded-md shadow flex">
                                <a href="{{ route('nosotros') }}"
                                    class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600 md:py-4 md:text-lg md:px-10">
                                    Conócenos
                                </a>

                            </div>

                        </div>

                    </div>
                </main>

            </div>
        </div>

        {{-- Carousel --}}
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">

            {{-- slider con css pantallas lg y xl --}}
            <div class="hidden sm:hidden md:hidden lg:inline">
                <div class="contenedor">
                    <div class="slider-contenedor h-56 w-full sm:h-72 md:h-96 lg:w-full lg:h-full">

                        <section class="contenido-slider  object-cover h-56 w-full sm:h-72 md:h-96 lg:w-full lg:h-full">


                        </section>

                        <section class="contenido-slider  object-cover h-56 w-full sm:h-72 md:h-96 lg:w-full lg:h-full">


                        </section>

                        <section class="contenido-slider  object-cover h-56 w-full sm:h-72 md:h-96 lg:w-full lg:h-full">


                        </section>

                        <section class="contenido-slider  object-cover h-56 w-full sm:h-72 md:h-96 lg:w-full lg:h-full">


                        </section>
                    </div>
                </div>
            </div>

            {{-- slider con swiperJS pantallas xs, sm y md--}}
            <div class="h-full w-auto inline sm:inline md:inline lg:hidden">
                <!-- Slider main container -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide h-50">
                            <img class="" src="{{asset('img/principal1.jpg')}}" alt="Principal">
                        </div>
                        <div class="swiper-slide">
                            <img class="" src="{{asset('img/principal2.jpg')}}" alt="Principal">
                        </div>
                        <div class="swiper-slide">
                            <img class="" src="{{asset('img/principal3.jpg')}}" alt="Principal">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    {{-- Seccion Blogs --}}
    <div data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500"
        class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6 mb-6">
        @livewire('section-blog')
    </div>

    <!-- Seccion Productos -->
    <div class="relative bg-white overflow-hidden">
        <div class="pt-10 pb-80 sm:pt-24 md:pt-8 sm:pb-40  lg:pt-40 lg:pb-48">
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 sm:static ">
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500"
                    class="sm:max-w-lg text-center fadeTop scroll-content">
                    <h1
                        class="text-4xl font-serif font-extrabold tracking-tight text-transparent bg-clip-text bg-gradient-to-br from-yellow-500 to-orange-700 sm:text-6xl">
                        Toda la variedad que buscabas
                    </h1>
                    <p class="mt-4 text-md text-md text-gray-500 font-serif">Veladoras Aramo está comprometida a
                        conseguir la satisfacción
                        total de sus clientes, manteniendo altos estándares de fabricación y producción para la
                        comercialización de velas y veladoras de la más alta calidad.</p>
                </div>
                <div>
                    <div class="mt-10 lg:mt-10 ">

                        {{-- Velas decorativas --}}
                        <div aria-hidden="true"
                            class="pointer-events-none lg:absolute lg:inset-y-0 lg:max-w-7xl lg:mx-auto lg:w-full">
                            <div
                                class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">

                                <div class="flex items-center space-x-6 lg:space-x-8">

                                    <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500"
                                        class="flex-shrink-0 grid grid-cols-1 gap-y-6 lg:gap-y-8">

                                        <div
                                            class="w-44 h-64 rounded-lg overflow-hidden sm:opacity-0 lg:opacity-100 fadeTop scroll-content py-8">
                                            <img src="{{ asset('img/Cartovel_1.jpg') }}" alt=""
                                                class="w-full h-full object-center object-cover">
                                        </div>

                                        <div class="w-44 h-64 rounded-lg overflow-hidden fadeTop1 scroll-content">
                                            <img src="{{ asset('img/Coliseo_1.jpg') }}" alt=""
                                                class="w-full h-full object-center object-cover">
                                        </div>

                                    </div>
                                    <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500"
                                        class="flex-shrink-0 grid grid-cols-1 gap-y-6 lg:gap-y-8">

                                        <div class="w-44 h-64 rounded-lg overflow-hidden fadeTop2 scroll-content">
                                            <img src="{{ asset('img/Cubero.jpg') }}" alt=""
                                                class="w-full h-full object-center object-cover">
                                        </div>

                                        <div class="w-44 h-64 rounded-lg overflow-hidden fadeTop3 scroll-content">
                                            <img src="{{ asset('img/REcologico.jpg') }}" alt=""
                                                class="w-full h-full object-center object-cover">
                                        </div>

                                        <div class="w-44 h-64 rounded-lg overflow-hidden fadeTop4 scroll-content">
                                            <img src="{{ asset('img/RS.jpg') }}" alt=""
                                                class="w-full h-full object-center object-cover">
                                        </div>

                                    </div>
                                    <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500"
                                        class="flex-shrink-0 grid grid-cols-1 gap-y-6 lg:gap-y-8">
                                        <div class="w-44 h-64 rounded-lg overflow-hidden fadeTop5 scroll-content">
                                            <img src="{{ asset('img/R18.jpg') }}" alt=""
                                                class="w-full h-full object-center object-cover">
                                        </div>

                                        <div class="w-44 h-64 rounded-lg overflow-hidden fadeTop6 scroll-content">
                                            <img src="{{ asset('img/SanRamon.jpg') }}" alt=""
                                                class="w-full h-full object-center object-cover">
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>

                        <a data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500"
                            href="{{ route('grupos.index') }}"
                            class="fadeTop scroll-content mt-4 md:mt-0 md:py-4 md:text-lg md:px-10 ml-0 sm:ml-0 lg:ml-36 inline-block text-center bg-orange-400 border border-transparent rounded-md py-3 px-6 font-medium text-white hover:bg-orange-600">
                            Ver más Productos
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Buzon --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" data-aos="fade-up" data-aos-easing="linear"
        data-aos-duration="1500">


        {{-- texto --}}
        <div>
            <div class="flex flex-wrap justify-center -mx-4 py-4">
                <div class="w-full px-4">
                    <div class="text-center mx-auto mb-10 max-w-[510px] py-8 fadeLeft scroll-content">
                        <span class="font-semibold text-lg text-primary mb-2 block text-gray-800 ">
                            ¡Tu Opinión es Importante!
                        </span>
                        <h1
                            class="text-4xl font-serif font-extrabold tracking-tight  text-transparent bg-clip-text bg-gradient-to-br from-rose-400 to-red-700 sm:text-6xl">
                            Buzón
                        </h1>
                        <p class="text-base text-body-color text-md text-gray-500 font-serif">
                            Sabemos que no somos perfectos, es por esto por lo que ponemos a tu disposición un
                            apartado para que puedas
                            reportar cualquier tipo de incidente mediante una denuncia, queja o si lo deseas, brindarnos
                            sugerencias.
                        </p>

                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-center">
                            <div class="rounded-md shadow flex">

                                <a href="{{ route('buzon.index') }}"
                                    class="fadeTop scroll-content w-full flex items-cente  justify-center text-base mt-4 md:mt-0 md:py-4 md:text-lg md:px-10  text-center bg-rose-500 border border-transparent rounded-md py-3 px-6 font-medium text-white hover:bg-rose-600">
                                    Ir al Buzón
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
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


        window.addEventListener('scroll', function() {
            let elements = document.getElementsByClassName('scroll-content');
            let screenSize = window.innerHeight;

            for (var i = 0; i < elements.length; i++) {
                let element = elements[i];

                if (element.getBoundingClientRect().top < screenSize) {
                    element.classList.add('visible');
                } else {
                    element.classList.remove('visible');
                }
            }
        });

        AOS.init();

        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</x-app-layout>
