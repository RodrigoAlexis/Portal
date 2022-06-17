<x-app-layout>
    {{-- Banner --}}
    <div class="bg-purple w-full " style="z-index: 3;">

        {{-- div que carga imagen de fondo en el css --}}
        <div class="opacity-75 mx-auto rounded-t shadow bg-cover bg-bottom" id="historia">

            <div class="text-center text-white py-36 ">
                <div class="relative text-6xl font-serif underline boder-2 border-white font-semibold">Quienes Somos
                </div>
            </div>
        </div>

    </div>

    {{-- Container --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">


        {{-- Texto y SVG de Historia --}}
        <div class=" w-full py-4 grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 mt-4 gap-6">

            <div class="font-sans text-sm text-gray-600">
                <h3 class="text-2xl mb-4 text-gray-800 font-bold">Nuestra Historia</h3>
                <p class="mb-3 font-semibold">
                    Como todas las grandes historias, la nuestra empieza con un sueño y un gran propósito. <span
                        class="font-bold text-gray-800">Trascender</span>.
                </p>

                <p class="mb-3 font-semibold">
                    Somos una empresa ligada a las velas y veladoras por más de 3 generaciones. Las hemos creado,
                    fabricado, vendido y entregado en cientos de pueblos de México, de mano en mano, llegando a pequeños
                    y grandes negocios, haciendo entrañables amistades a lo largo de más de 60 años.
                </p>

                <p class="mb-3 font-semibold">
                    Nuestro trabajo y esfuerzo un día nos puso en el mismo camino del Sr. Juan Carlos, fundador de la
                    empresa Productos Aramo, quien nos da la oportunidad de representarla y comercializarla en todo el
                    centro y sureste del país.
                </p>

                <p class="mb-3 font-semibold">
                    30 años después, nuevamente damos un salto enorme hacia la consolidación de un sueño: fabricar
                    veladoras de la Marca Aramo, naciendo así este nuevo proyecto al que simple y lógicamente le hemos
                    llamado <span class="font-bold text-gray-800">"VELADORAS ARAMO"</span>.
                </p>

                <p class="mb-3 font-semibold">
                    Nuestra fábrica se encuentra en la ciudad de Puebla, muy convenientemente ubicada en la autopista
                    México-Puebla y entronque a Periférico Ecológico. En una superficie de más de 5000 m2 donde
                    fabricamos alrededor de 100,000 veladoras todos los días.
                </p>

                <p class="font-semibold">
                    Todo lo que somos y hemos logrado hasta hoy se lo debemos a nuestro equipo y capital humano. Somos
                    casi 200 personas, hombres y mujeres que todos los días fabrican con dedicación y entrega las velas
                    y veladoras que consumes en casa y que te acompañan en los momentos más íntimos y espirituales de tu
                    vida.
                </p>
            </div>

            <div class="pl-1 sm:pl-1 md:pl-16">
                <img class="w-auto h-30 rounded-lg" src="{{ asset('img/historia.jpg') }}" alt="Historia">
            </div>

        </div>

        {{-- Mision, Vision y politica de calidad --}}
        <div
            class="bg-orange-400 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-3 xl:grid-cols-3 gap-1 mt-6 w-full fadeTop scroll-content">

            {{-- Mision --}}
            <div class="p-6 bg-white">

                <h2 class="font-sans text-2xl text-center text-gray-800 mt-2 font-bold">
                    Misión
                </h2>

                <p class="mt-2 text-gray-800 text-center font-sans font-semibold text-sm">
                    Fabricar veladoras para iluminar caminos de esperanza.
                </p>
            </div>

            {{-- Vision --}}
            <div class="p-6 bg-white ">

                <h2 class="font-sans text-2xl text-center text-gray-800 mt-2 font-bold">
                    Visión
                </h2>

                <p class="mt-2 text-gray-800 text-center font-sans text-sm font-semibold">
                    Ser reconocidos por la confiabilidad, el servicio y la inovación de nuestra marca con crecimiento
                    rentable.
                </p>
            </div>

            {{-- Politica de calidad --}}
            <div class="p-6 bg-white ">

                <h2 class="font-sans text-2xl text-center text-gray-800 mt-2 font-bold">
                    Política de Calidad
                </h2>

                <p class="mt-2 text-gray-800 text-center font-sans text-sm font-semibold">
                    Alcanzamos y mantenemos la satisfacción de nuestros clientes, aplicando como filosofía y práctica la
                    mejora continua en cumplimiento de los requisitos, las normas aplicables las expectativas de cada
                    una de las partes interesadas en nuestros de veladoras y articulos de limpieza.
                </p>
            </div>

        </div>

        {{-- Titulo Valores --}}
        <div class="w-full text-center text-gray-800 p-6 mt-3">
            <p class="text-2xl font-sans font-bold">Nuestros Valores</p>
        </div>
        <div class="w-full text-center text-gray-800 mb-2 px-4 sm:px-5 md:px-20 lg:px-20">
            <p class="text-sm font-sans font-semibold">En Centro de Distribución Aram-Luz valoramos a las personas y a
                los
                empleados, buscamos los mejores
                beneficios asegurando los valores de:</p>
        </div>

        {{-- Valores --}}
        <div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine"
            class="px-2 py-6 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-6">
            <div class="grid gap-5 row-gap-5 grid-cols-1 sm:grid-cols-1 md:grid-cols-4 lg:grid-cols-4 mb-4">

                {{-- Integridad --}}
                <div class="px-12 text-center sm:px-0  fadeRight scroll-content">
                    <div
                        class="flex items-center justify-center w-10 h-10 mx-auto mb-4 rounded-full bg-indigo-50 sm:w-12 sm:h-12">
                        <img class="h-8 w-auto" src="{{ asset('img/integridad.png') }}" alt="Integridad">
                    </div>

                    <div class="mb-2 text-gray-800 font-serif text-md">
                        Integridad
                    </div>
                </div>

                {{-- Respeto --}}
                <div class="px-12 text-center sm:px-0  fadeLeft1 scroll-content">
                    <div
                        class="flex items-center justify-center w-10 h-10 mx-auto mb-4 rounded-full bg-indigo-50 sm:w-12 sm:h-12">
                        <img class="h-8 w-auto" src="{{ asset('img/respeto.png') }}" alt="Respeto">
                    </div>

                    <div class="mb-2 text-gray-800 font-serif text-md">
                        Respeto
                    </div>
                </div>

                {{-- Sencillez --}}
                <div class="px-12 text-center sm:px-0 fadeLeft2 scroll-content">
                    <div
                        class="flex items-center justify-center w-10 h-10 mx-auto mb-4 rounded-full bg-indigo-50 sm:w-12 sm:h-12">
                        <img class="h-8 w-auto" src="{{ asset('img/sencillez.png') }}" alt="Sencillez">
                    </div>

                    <div class="mb-2 text-gray-800 font-serif text-md">
                        Sencillez
                    </div>
                </div>

                {{-- Entusiasmo --}}
                <div class="px-12 text-center sm:px-0 fadeLeft3 scroll-content">
                    <div
                        class="flex items-center justify-center w-10 h-10 mx-auto mb-4 rounded-full bg-indigo-50 sm:w-12 sm:h-12">
                        <img class="h-8 w-auto" src="{{ asset('img/entusiasmo.png') }}" alt="Entusiasmo">
                    </div>

                    <div class="mb-2 text-gray-800 font-serif text-md">
                        Entusiasmo
                    </div>
                </div>

                {{-- Trabajo en equipo --}}
                <div class="px-12 text-center sm:px-0 mt-4 fadeRight scroll-content">
                    <div
                        class="flex items-center justify-center w-10 h-10 mx-auto mb-4 rounded-full bg-indigo-50 sm:w-12 sm:h-12">
                        <img class="h-8 w-auto" src="{{ asset('img/trabajoEquipo.png') }}" alt="Trabajo en equipo">
                    </div>

                    <div class="mb-2 text-gray-800 font-serif text-md">
                        Trabajo en equipo
                    </div>
                </div>

                {{-- Liderazgo --}}
                <div class="px-12 text-center sm:px-0 mt-4 fadeLeft1 scroll-content">
                    <div
                        class="flex items-center justify-center w-10 h-10 mx-auto mb-4 rounded-full bg-indigo-50 sm:w-12 sm:h-12">
                        <img class="h-8 w-auto" src="{{ asset('img/liderazgo.png') }}" alt="Liderazgo">
                    </div>

                    <div class="mb-2 text-gray-800 font-serif text-md">
                        Liderazgo
                    </div>
                </div>

                {{-- Pasion --}}
                <div class="px-12 text-center sm:px-0 mt-4 fadeLeft2 scroll-content">
                    <div
                        class="flex items-center justify-center w-10 h-10 mx-auto mb-4 rounded-full bg-indigo-50 sm:w-12 sm:h-12">
                        <img class="h-8 w-auto" src="{{ asset('img/servicio.png') }}" alt="Pasión por el servicio">
                    </div>

                    <div class="mb-2 text-gray-800 font-serif text-md">
                        Pasión por el servicio
                    </div>
                </div>

                {{-- Empoderamiento --}}
                <div class="px-12 text-center sm:px-0 mt-4 fadeLeft3 scroll-content">
                    <div
                        class="flex items-center justify-center w-10 h-10 mx-auto mb-4 rounded-full bg-indigo-50 sm:w-12 sm:h-12">
                        <img class="h-8 w-auto" src="{{ asset('img/empoderamiento.png') }}" alt="Empoderamiento">
                    </div>

                    <div class="mb-2 text-gray-800 font-serif text-md">
                        Empoderamiento
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-gray-100 py-4 px-5 sm:px-30 md:px-36 lg:px-56 rounded">
            {{-- Titulo Responsabilidad Social --}}
            <div class="w-full text-center text-gray-800 p-6">
                <p class="text-2xl font-sans font-bold">Responsabilidad Social</p>
            </div>

            <div class="w-full text-center text-gray-700 ">
                <p class="text-sm font-sans font-semibold">En Veladoras Aramo buscamos siempre contribuir activamente en
                    el mejoramiento social, económico y ambiental de nuestro entorno, ciudad y país.

                    Contribuir al Desarrollo Humano es primordial para nosotros. Buscamos de forma sostenida
                    comprometernos con nuestro capital humano para
                    encontrar juntos el mejor futuro para ellos y sus familias,
                    para nuestros vecinos y todas los puntos de contacto que tenemos hacia nuestro entorno.

                    Sabemos que con una sociedad segura y encaminada hacia el bienestar social, tendremos una mejor
                    calidad de vida en nuestra comunidad.
                </p>
            </div>

            <div class="w-full text-center text-gray-700 mt-3 ">
                <p class="text-sm font-sans font-semibold">
                    La Responsabilidad Social Empresarial (RSE): Es la contribución al desarrollo
                    humano sostenible, a través del compromiso y la confianza de la empresa hacia sus empleados y las
                    familias de éstos, hacia la sociedad en general y hacia la
                    comunidad local, en pos de mejorar el capital social y la calidad de vida de toda la comunidad.

                    Si tu tienes algún proyecto en donde creas que Veladoras Aramo puede contribuir socialmente, no
                    dudes en contactarnos.
                </p>

                <p class="text-sm font-serif mt-3">
                    Nos dará mucho gusto participar.
                </p>
            </div>

        </div>
        <!-- cards -->
        <div class="flex items-center justify-center py-12 ">

            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-8 lg:grid-cols-12 max-w-5xl gap-4">

                <!-- Card 1 -->
                <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000"
                    class="grid col-span-1 sm:col-span-1 md:col-span-4 lg:col-span-3 relative fadeRight scroll-content">
                    <div
                        class="group shadow-lg hover:shadow-2xl duration-200 delay-75 w-full bg-white rounded-sm py-6 pr-6 pl-9">

                        {{-- Titulo --}}
                        <p class="text-2xl text-gray-500 group-hover:text-gray-800 font-serif">
                            Apoyo ante la Desgracia
                        </p>

                        <!-- Descripcion -->
                        <p class="text-sm font-serif text-gray-600 group-hover:text-gray-700 mt-2 leading-6">
                            Contribuimos con muchas comunidades del estado de Puebla donando velas y veladoras durante
                            los pasados terremotos del 2017 y 2018. Sabiendo que en muchos lugares existen cortes de
                            energía eléctrica, nuestras veladoras ayudan a traer luz a muchos hogares que lo necesitan.
                        </p>

                        <!-- Color -->
                        <div class="bg-blue-400 group-hover:bg-blue-600 h-full w-4 absolute top-0 left-0"> </div>

                    </div>
                </div>

                <!-- Card 2 -->
                <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000"
                    class="grid col-span-1 sm:col-span-1 md:col-span-4 lg:col-span-3 relative fadeLeft1 scroll-content">
                    <div
                        class="group shadow-lg hover:shadow-2xl duration-200 delay-75 w-full bg-white rounded-sm py-6 pr-6 pl-9">

                        <!-- Titulo -->
                        <p class="text-2xl font-serif text-gray-500 group-hover:text-gray-800">
                            "Hechar una Mano"
                        </p>

                        <!-- Descripcion -->
                        <p class="text-sm font-serif text-gray-600 group-hover:text-gray-700 mt-2 leading-6">
                            Hemos hecho colectas, comprado despensas y víveres para comunidades enteras de donde
                            provienen compañeros de trabajo en momentos de desgracia.
                        </p>

                        <!-- Color -->
                        <div class="bg-blue-400 group-hover:bg-blue-600 h-full w-4 absolute top-0 left-0"> </div>

                    </div>
                </div>

                <!-- Card 3 -->
                <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000"
                    class="grid col-span-1 sm:col-span-1 md:col-span-4 lg:col-span-3 relative fadeLeft2 scroll-content">
                    <div
                        class="group shadow-lg hover:shadow-2xl duration-200 delay-75 w-full bg-white rounded-sm py-6 pr-6 pl-9">

                        <!-- Titulo -->
                        <p class="text-2xl font-serif text-gray-500 group-hover:text-gray-800">
                            En el Plano Laboral
                        </p>

                        <!-- Descripcion -->
                        <p class="text-sm font-serif text-gray-600 group-hover:text-gray-700 mt-2 leading-6">
                            Nos enorgullecemos de ser una de las principales fuentes de trabajo en San Francisco
                            Ocotlán, comunidad que aporta mano de obra comprometida y de calidad.
                        </p>

                        <!-- Color -->
                        <div class="bg-blue-400 group-hover:bg-blue-600 h-full w-4 absolute top-0 left-0"> </div>

                    </div>
                </div>

                <!-- Card 4 -->
                <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000"
                    class="grid col-span-1 sm:col-span-1 md:col-span-4 lg:col-span-3 relative fadeLeft3 scroll-content">
                    <div
                        class="group shadow-lg hover:shadow-2xl duration-200 delay-75 w-full bg-white rounded-sm py-6 pr-6 pl-9">

                        <!-- Titulo -->
                        <p class="text-2xl font-serif text-gray-500 group-hover:text-gray-800">
                            Cuidado del Medio Ambiente</p>

                        <!-- Descripcion -->
                        <p class="text-sm font-serif text-gray-600 group-hover:text-gray-700 mt-2 leading-6">
                            Los pabilos que utilizamos son ecológicos y no contienen plomo. Además, utilizamos sistemas
                            de recuperación de aguas pluviales lo que nos permite aprovechar el agua de lluvia. Y todo
                            nuestro desperdicio se reutiliza por nosotros mismos o por terceros para reciclaje.
                        </p>

                        <!-- Color -->
                        <div class="bg-blue-400 group-hover:bg-blue-600 h-full w-4 absolute top-0 left-0"> </div>

                    </div>
                </div>

            </div>

        </div>

    </div>

    <script>
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
    </script>
</x-app-layout>
