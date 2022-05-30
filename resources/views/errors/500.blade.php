<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Error 500</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/myStyles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/css/suneditor.min.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    @livewireStyles

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"
        integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/mi.js') }}" defer></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    {{-- Favicon --}}
    <link rel="shortcut icon" type="image/png" href="{{ asset('/img/veladoras-aramo-sm.png') }}">
    <link rel="shortcut icon" sizes="192x192" href="{{ asset('/img/veladoras-aramo-sm.png') }}">
    {{-- End Favicon --}}

</head>

<body>

    <!-- component -->
    <style>
        @import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);

    </style>
    <div class="min-w-screen min-h-screen bg-yellow-100 flex items-center p-5  overflow-hidden relative">
        <div
            class="flex-1 min-h-full min-w-full rounded-3xl bg-white shadow-xl p-10 lg:p-20 text-gray-800 relative md:flex items-center text-center md:text-left">
            <div class="w-full md:w-1/2">
                <div class="mb-10 lg:mb-20">
                    <a href="{{ route('home') }}">
                        <img class="h-24 w-auto" src="{{ asset('img/logo-veladoras.png') }}" alt="Veladoras Aramo">
                    </a>
                </div>
                <div class="mb-10 md:mb-20 text-gray-600 font-light">
                    <h1 class="font-black uppercase text-3xl lg:text-5xl text-yellow-500 mb-10">Error del servidor interno
                    </h1>
                    <p>¡Ups! Parece que algo salió mal</p>
                    <p>Sentimos los inconvenientes ocasionados. Estamos trabajando en ello</p>
                    <p>Use el botón Volver a continuación.</p>
                </div>
                <div class="mb-20 md:mb-0">
                    <a href="javascript:window.history.back()"
                        class="text-lg font-light outline-none focus:outline-none transform transition-all hover:scale-110 text-yellow-500 hover:text-orange-600"><i
                            class="mdi mdi-arrow-left mr-2"></i>Volver</a>
                </div>
            </div>
            <div class="w-full md:w-1/2 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500">
                    <g id="freepik--background-complete--inject-2">
                        <rect x="417.41" y="60.85" width="26.48" height="11.19"
                            transform="translate(861.29 132.88) rotate(-180)"
                            style="fill:none;stroke:#ebebeb;stroke-miterlimit:10;stroke-width:0.75px"></rect>
                        <rect x="432.18" y="46.74" width="26.48" height="11.19"
                            transform="translate(890.84 104.66) rotate(180)"
                            style="fill:none;stroke:#ebebeb;stroke-miterlimit:10;stroke-width:0.75px"></rect>
                        <rect x="250" y="170.97" width="26.48" height="11.19"
                            transform="translate(526.48 353.13) rotate(180)"
                            style="fill:none;stroke:#ebebeb;stroke-miterlimit:10;stroke-width:0.75px"></rect>
                        <rect x="264.77" y="156.86" width="26.48" height="11.19"
                            transform="translate(556.02 324.91) rotate(180)"
                            style="fill:none;stroke:#ebebeb;stroke-miterlimit:10;stroke-width:0.75px"></rect>
                        <rect x="279.49" y="170.97" width="26.48" height="11.19"
                            transform="translate(585.45 353.13) rotate(180)"
                            style="fill:none;stroke:#ebebeb;stroke-miterlimit:10;stroke-width:0.75px"></rect>
                        <rect x="41.34" y="46.74" width="26.48" height="11.19"
                            transform="translate(109.16 104.66) rotate(180)"
                            style="fill:none;stroke:#ebebeb;stroke-miterlimit:10;stroke-width:0.75px"></rect>
                        <rect x="56.11" y="309.85" width="26.48" height="11.19"
                            transform="translate(138.71 630.89) rotate(180)"
                            style="fill:none;stroke:#ebebeb;stroke-miterlimit:10;stroke-width:0.75px"></rect>
                        <rect x="41.34" y="295.74" width="26.48" height="11.19"
                            transform="translate(109.16 602.67) rotate(180)"
                            style="fill:none;stroke:#ebebeb;stroke-miterlimit:10;stroke-width:0.75px"></rect>
                        <rect x="417.41" y="309.85" width="26.48" height="11.19"
                            transform="translate(861.29 630.89) rotate(-180)"
                            style="fill:none;stroke:#ebebeb;stroke-miterlimit:10;stroke-width:0.75px"></rect>
                        <polyline points="208.82 421.54 208.82 295.88 235.55 259.39 235.55 191.06"
                            style="fill:none;stroke:#ebebeb;stroke-miterlimit:10"></polyline>
                        <path d="M233.18,188.73a2.38,2.38,0,1,0,2.37-2.38A2.37,2.37,0,0,0,233.18,188.73Z"
                            style="fill:none;stroke:#ebebeb;stroke-miterlimit:10"></path>
                        <polyline points="215.71 421.54 215.71 300.29 242.44 263.8 242.44 216.06"
                            style="fill:none;stroke:#ebebeb;stroke-miterlimit:10"></polyline>
                        <path d="M240.06,213.72a2.38,2.38,0,1,0,2.38-2.37A2.38,2.38,0,0,0,240.06,213.72Z"
                            style="fill:none;stroke:#ebebeb;stroke-miterlimit:10"></path>
                        <line x1="202.19" y1="421.54" x2="202.19" y2="255.13"
                            style="fill:none;stroke:#ebebeb;stroke-miterlimit:10"></line>
                        <path d="M199.81,252.75a2.38,2.38,0,1,0,2.38-2.37A2.38,2.38,0,0,0,199.81,252.75Z"
                            style="fill:none;stroke:#ebebeb;stroke-miterlimit:10"></path>
                        <polyline points="195.8 421.54 195.8 336.96 177.66 302.74 177.66 241.37"
                            style="fill:none;stroke:#ebebeb;stroke-miterlimit:10"></polyline>
                        <path d="M175.28,239a2.38,2.38,0,1,0,2.38-2.38A2.37,2.37,0,0,0,175.28,239Z"
                            style="fill:none;stroke:#ebebeb;stroke-miterlimit:10"></path>
                        <polyline points="189.45 421.54 189.45 340.62 168.06 302.78 168.06 262.37"
                            style="fill:none;stroke:#ebebeb;stroke-miterlimit:10"></polyline>
                        <path d="M165.68,260a2.38,2.38,0,1,0,2.38-2.37A2.39,2.39,0,0,0,165.68,260Z"
                            style="fill:none;stroke:#ebebeb;stroke-miterlimit:10"></path>
                        <line x1="110.72" y1="37.56" x2="110.72" style="fill:none;stroke:#c7c7c7;stroke-miterlimit:10">
                        </line>
                        <polygon
                            points="133.93 59.92 132.06 64.03 89.38 64.03 87.52 59.92 105.69 47.35 115.76 47.35 133.93 59.92"
                            style="fill:#ebebeb"></polygon>
                        <polygon points="117.02 35.23 115.76 47.35 105.69 47.35 104.43 35.23 117.02 35.23"
                            style="fill:#dbdbdb"></polygon>
                        <polygon points="133.93 59.93 132.06 64.03 89.38 64.03 87.52 59.93 133.93 59.93"
                            style="fill:#dbdbdb"></polygon>
                        <line x1="203.58" y1="37.56" x2="203.58" style="fill:none;stroke:#c7c7c7;stroke-miterlimit:10">
                        </line>
                        <polygon
                            points="226.78 59.92 224.91 64.03 182.23 64.03 180.37 59.92 198.54 47.35 208.61 47.35 226.78 59.92"
                            style="fill:#ebebeb"></polygon>
                        <polygon points="209.87 35.23 208.61 47.35 198.54 47.35 197.28 35.23 209.87 35.23"
                            style="fill:#dbdbdb"></polygon>
                        <polygon points="226.78 59.93 224.91 64.03 182.23 64.03 180.37 59.93 226.78 59.93"
                            style="fill:#dbdbdb"></polygon>
                        <line x1="296.43" y1="37.56" x2="296.43" style="fill:none;stroke:#c7c7c7;stroke-miterlimit:10">
                        </line>
                        <polygon
                            points="319.63 59.92 317.77 64.03 275.08 64.03 273.22 59.92 291.39 47.35 301.46 47.35 319.63 59.92"
                            style="fill:#ebebeb"></polygon>
                        <polygon points="302.72 35.23 301.46 47.35 291.39 47.35 290.13 35.23 302.72 35.23"
                            style="fill:#dbdbdb"></polygon>
                        <polygon points="319.63 59.93 317.76 64.03 275.08 64.03 273.22 59.93 319.63 59.93"
                            style="fill:#dbdbdb"></polygon>
                        <line x1="389.28" y1="37.56" x2="389.28" style="fill:none;stroke:#c7c7c7;stroke-miterlimit:10">
                        </line>
                        <polygon
                            points="412.49 59.92 410.62 64.03 367.93 64.03 366.07 59.92 384.25 47.35 394.31 47.35 412.49 59.92"
                            style="fill:#ebebeb"></polygon>
                        <polygon points="395.57 35.23 394.31 47.35 384.25 47.35 382.98 35.23 395.57 35.23"
                            style="fill:#dbdbdb"></polygon>
                        <polygon points="412.48 59.93 410.62 64.03 367.93 64.03 366.07 59.93 412.48 59.93"
                            style="fill:#dbdbdb"></polygon>
                    </g>
                    <g id="freepik--Shadow--inject-2">
                        <ellipse cx="183.79" cy="443.41" rx="106.41" ry="16.99" style="fill:#ebebeb"></ellipse>
                    </g>
                    <g id="freepik--Server--inject-2">
                        <rect x="267.37" y="176.42" width="65.02" height="245.17" style="fill:#37474f"></rect>
                        <rect x="332.39" y="176.42" width="119.66" height="245.17" style="fill:#455a64"></rect>
                        <rect x="341.37" y="389.79" width="103.21" height="23.84" style="fill:#37474f"></rect>
                        <rect x="345.71" y="393.73" width="58.75" height="2.01" style="fill:#455a64"></rect>
                        <rect x="345.71" y="397.22" width="58.75" height="2.01" style="fill:#455a64"></rect>
                        <rect x="345.71" y="400.71" width="58.75" height="2.01" style="fill:#455a64"></rect>
                        <rect x="345.71" y="404.19" width="58.75" height="2.01" style="fill:#455a64"></rect>
                        <rect x="345.71" y="407.68" width="58.75" height="2.01" style="fill:#455a64"></rect>
                        <path d="M415.17,395.73a2,2,0,1,1-2-2A2,2,0,0,1,415.17,395.73Z" style="fill:#FFC727"></path>
                        <path d="M421.75,395.73a2,2,0,1,1-2-2A2,2,0,0,1,421.75,395.73Z" style="fill:#FFC727"></path>
                        <path d="M428.33,395.73a2,2,0,1,1-2-2A2,2,0,0,1,428.33,395.73Z" style="fill:#FFC727"></path>
                        <path d="M434.9,395.73a2,2,0,1,1-2-2A2,2,0,0,1,434.9,395.73Z" style="fill:#FFC727"></path>
                        <path d="M441.48,395.73a2,2,0,1,1-2-2A2,2,0,0,1,441.48,395.73Z" style="fill:#FFC727"></path>
                        <path d="M415.17,401.71a2,2,0,1,1-2-2A2,2,0,0,1,415.17,401.71Z" style="fill:#FFC727"></path>
                        <path d="M421.75,401.71a2,2,0,1,1-2-2A2,2,0,0,1,421.75,401.71Z" style="fill:#FFC727"></path>
                        <path d="M428.33,401.71a2,2,0,1,1-2-2A2,2,0,0,1,428.33,401.71Z" style="fill:#FFC727"></path>
                        <path d="M434.9,401.71a2,2,0,1,1-2-2A2,2,0,0,1,434.9,401.71Z" style="fill:#FFC727"></path>
                        <path d="M441.48,401.71a2,2,0,1,1-2-2A2,2,0,0,1,441.48,401.71Z" style="fill:#FFC727"></path>
                        <circle cx="413.18" cy="407.7" r="2" style="fill:#FFC727"></circle>
                        <path d="M421.75,407.7a2,2,0,1,1-2-2A2,2,0,0,1,421.75,407.7Z" style="fill:#FFC727"></path>
                        <circle cx="426.33" cy="407.7" r="2" style="fill:#FFC727"></circle>
                        <path d="M434.9,407.7a2,2,0,1,1-2-2A2,2,0,0,1,434.9,407.7Z" style="fill:#FFC727"></path>
                        <path d="M441.48,407.7a2,2,0,1,1-2-2A2,2,0,0,1,441.48,407.7Z" style="fill:#FFC727"></path>
                        <rect x="407.4" y="393.73" width="1.15" height="15.96" style="fill:#263238"></rect>
                        <rect x="341.37" y="361.07" width="103.21" height="23.84" style="fill:#37474f"></rect>
                        <rect x="345.71" y="365" width="58.75" height="2.01" style="fill:#455a64"></rect>
                        <rect x="345.71" y="368.49" width="58.75" height="2.01" style="fill:#455a64"></rect>
                        <rect x="345.71" y="371.98" width="58.75" height="2.01" style="fill:#455a64"></rect>
                        <rect x="345.71" y="375.47" width="58.75" height="2.01" style="fill:#455a64"></rect>
                        <rect x="345.71" y="378.95" width="58.75" height="2.01" style="fill:#455a64"></rect>
                        <path d="M415.17,367a2,2,0,1,1-2-2A2,2,0,0,1,415.17,367Z" style="fill:#FFC727"></path>
                        <path d="M421.75,367a2,2,0,1,1-2-2A2,2,0,0,1,421.75,367Z" style="fill:#FFC727"></path>
                        <path d="M428.33,367a2,2,0,1,1-2-2A2,2,0,0,1,428.33,367Z" style="fill:#FFC727"></path>
                        <path d="M434.9,367a2,2,0,1,1-2-2A2,2,0,0,1,434.9,367Z" style="fill:#FFC727"></path>
                        <path d="M441.48,367a2,2,0,1,1-2-2A2,2,0,0,1,441.48,367Z" style="fill:#FFC727"></path>
                        <path d="M415.17,373a2,2,0,1,1-2-2A2,2,0,0,1,415.17,373Z" style="fill:#FFC727"></path>
                        <path d="M421.75,373a2,2,0,1,1-2-2A2,2,0,0,1,421.75,373Z" style="fill:#FFC727"></path>
                        <path d="M428.33,373a2,2,0,1,1-2-2A2,2,0,0,1,428.33,373Z" style="fill:#FFC727"></path>
                        <path d="M434.9,373a2,2,0,1,1-2-2A2,2,0,0,1,434.9,373Z" style="fill:#FFC727"></path>
                        <path d="M441.48,373a2,2,0,1,1-2-2A2,2,0,0,1,441.48,373Z" style="fill:#FFC727"></path>
                        <path d="M415.17,379a2,2,0,1,1-2-2A2,2,0,0,1,415.17,379Z" style="fill:#FFC727"></path>
                        <path d="M421.75,379a2,2,0,1,1-2-2A2,2,0,0,1,421.75,379Z" style="fill:#FFC727"></path>
                        <path d="M428.33,379a2,2,0,1,1-2-2A2,2,0,0,1,428.33,379Z" style="fill:#FFC727"></path>
                        <path d="M434.9,379a2,2,0,1,1-2-2A2,2,0,0,1,434.9,379Z" style="fill:#FFC727"></path>
                        <path d="M441.48,379a2,2,0,1,1-2-2A2,2,0,0,1,441.48,379Z" style="fill:#FFC727"></path>
                        <rect x="407.4" y="365" width="1.15" height="15.96" style="fill:#263238"></rect>
                        <rect x="341.37" y="332.34" width="103.21" height="23.84" style="fill:#37474f"></rect>
                        <rect x="345.71" y="336.28" width="58.75" height="2.01" style="fill:#455a64"></rect>
                        <rect x="345.71" y="339.76" width="58.75" height="2.01" style="fill:#455a64"></rect>
                        <rect x="345.71" y="343.25" width="58.75" height="2.01" style="fill:#455a64"></rect>
                        <rect x="345.71" y="346.74" width="58.75" height="2.01" style="fill:#455a64"></rect>
                        <rect x="345.71" y="350.23" width="58.75" height="2.01" style="fill:#455a64"></rect>
                        <circle cx="413.18" cy="338.27" r="2" style="fill:#FFC727"></circle>
                        <path d="M421.75,338.27a2,2,0,1,1-2-2A2,2,0,0,1,421.75,338.27Z" style="fill:#FFC727"></path>
                        <circle cx="426.33" cy="338.27" r="2" style="fill:#FFC727"></circle>
                        <path d="M434.9,338.27a2,2,0,1,1-2-2A2,2,0,0,1,434.9,338.27Z" style="fill:#FFC727"></path>
                        <path d="M441.48,338.27a2,2,0,1,1-2-2A2,2,0,0,1,441.48,338.27Z" style="fill:#FFC727"></path>
                        <path d="M415.17,344.26a2,2,0,1,1-2-2A2,2,0,0,1,415.17,344.26Z" style="fill:#FFC727"></path>
                        <path d="M421.75,344.26a2,2,0,1,1-2-2A2,2,0,0,1,421.75,344.26Z" style="fill:#FFC727"></path>
                        <path d="M428.33,344.26a2,2,0,1,1-2-2A2,2,0,0,1,428.33,344.26Z" style="fill:#FFC727"></path>
                        <path d="M434.9,344.26a2,2,0,1,1-2-2A2,2,0,0,1,434.9,344.26Z" style="fill:#FFC727"></path>
                        <path d="M441.48,344.26a2,2,0,1,1-2-2A2,2,0,0,1,441.48,344.26Z" style="fill:#FFC727"></path>
                        <path d="M415.17,350.24a2,2,0,1,1-2-2A2,2,0,0,1,415.17,350.24Z" style="fill:#FFC727"></path>
                        <path d="M421.75,350.24a2,2,0,1,1-2-2A2,2,0,0,1,421.75,350.24Z" style="fill:#FFC727"></path>
                        <path d="M428.33,350.24a2,2,0,1,1-2-2A2,2,0,0,1,428.33,350.24Z" style="fill:#FFC727"></path>
                        <path d="M434.9,350.24a2,2,0,1,1-2-2A2,2,0,0,1,434.9,350.24Z" style="fill:#FFC727"></path>
                        <path d="M441.48,350.24a2,2,0,1,1-2-2A2,2,0,0,1,441.48,350.24Z" style="fill:#FFC727"></path>
                        <rect x="407.4" y="336.28" width="1.15" height="15.96" style="fill:#263238"></rect>
                        <rect x="341.37" y="303.61" width="103.21" height="23.84" style="fill:#37474f"></rect>
                        <rect x="345.71" y="307.55" width="58.75" height="2.01" style="fill:#455a64"></rect>
                        <rect x="345.71" y="311.03" width="58.75" height="2.01" style="fill:#455a64"></rect>
                        <rect x="345.71" y="314.52" width="58.75" height="2.01" style="fill:#455a64"></rect>
                        <rect x="345.71" y="318.01" width="58.75" height="2.01" style="fill:#455a64"></rect>
                        <rect x="345.71" y="321.5" width="58.75" height="2.01" style="fill:#455a64"></rect>
                        <path d="M415.17,309.54a2,2,0,1,1-2-2A2,2,0,0,1,415.17,309.54Z" style="fill:#FFC727"></path>
                        <path d="M421.75,309.54a2,2,0,1,1-2-2A2,2,0,0,1,421.75,309.54Z" style="fill:#FFC727"></path>
                        <path d="M428.33,309.54a2,2,0,1,1-2-2A2,2,0,0,1,428.33,309.54Z" style="fill:#FFC727"></path>
                        <path d="M434.9,309.54a2,2,0,1,1-2-2A2,2,0,0,1,434.9,309.54Z" style="fill:#FFC727"></path>
                        <path d="M441.48,309.54a2,2,0,1,1-2-2A2,2,0,0,1,441.48,309.54Z" style="fill:#FFC727"></path>
                        <circle cx="413.18" cy="315.53" r="2" style="fill:#FFC727"></circle>
                        <path d="M421.75,315.53a2,2,0,1,1-2-2A2,2,0,0,1,421.75,315.53Z" style="fill:#FFC727"></path>
                        <circle cx="426.33" cy="315.53" r="2" style="fill:#FFC727"></circle>
                        <path d="M434.9,315.53a2,2,0,1,1-2-2A2,2,0,0,1,434.9,315.53Z" style="fill:#FFC727"></path>
                        <path d="M441.48,315.53a2,2,0,1,1-2-2A2,2,0,0,1,441.48,315.53Z" style="fill:#FFC727"></path>
                        <circle cx="413.18" cy="321.51" r="2" style="fill:#FFC727"></circle>
                        <path d="M421.75,321.51a2,2,0,1,1-2-2A2,2,0,0,1,421.75,321.51Z" style="fill:#FFC727"></path>
                        <circle cx="426.33" cy="321.51" r="2" style="fill:#FFC727"></circle>
                        <path d="M434.9,321.51a2,2,0,1,1-2-2A2,2,0,0,1,434.9,321.51Z" style="fill:#FFC727"></path>
                        <path d="M441.48,321.51a2,2,0,1,1-2-2A2,2,0,0,1,441.48,321.51Z" style="fill:#FFC727"></path>
                        <rect x="407.4" y="307.55" width="1.15" height="15.96" style="fill:#263238"></rect>
                        <rect x="341.37" y="274.88" width="103.21" height="23.84" style="fill:#37474f"></rect>
                        <rect x="345.71" y="278.82" width="58.75" height="2.01" style="fill:#455a64"></rect>
                        <rect x="345.71" y="282.31" width="58.75" height="2.01" style="fill:#455a64"></rect>
                        <rect x="345.71" y="285.79" width="58.75" height="2.01" style="fill:#455a64"></rect>
                        <rect x="345.71" y="289.28" width="58.75" height="2.01" style="fill:#455a64"></rect>
                        <rect x="345.71" y="292.77" width="58.75" height="2.01" style="fill:#455a64"></rect>
                        <circle cx="413.18" cy="280.82" r="2" style="fill:#FFC727"></circle>
                        <path d="M421.75,280.82a2,2,0,1,1-2-2A2,2,0,0,1,421.75,280.82Z" style="fill:#FFC727"></path>
                        <circle cx="426.33" cy="280.82" r="2" style="fill:#FFC727"></circle>
                        <path d="M434.9,280.82a2,2,0,1,1-2-2A2,2,0,0,1,434.9,280.82Z" style="fill:#FFC727"></path>
                        <path d="M441.48,280.82a2,2,0,1,1-2-2A2,2,0,0,1,441.48,280.82Z" style="fill:#FFC727"></path>
                        <circle cx="413.18" cy="286.8" r="2" style="fill:#FFC727"></circle>
                        <path d="M421.75,286.8a2,2,0,1,1-2-2A2,2,0,0,1,421.75,286.8Z" style="fill:#FFC727"></path>
                        <circle cx="426.33" cy="286.8" r="2" style="fill:#FFC727"></circle>
                        <path d="M434.9,286.8a2,2,0,1,1-2-2A2,2,0,0,1,434.9,286.8Z" style="fill:#FFC727"></path>
                        <path d="M441.48,286.8a2,2,0,1,1-2-2A2,2,0,0,1,441.48,286.8Z" style="fill:#FFC727"></path>
                        <path d="M415.17,292.79a2,2,0,1,1-2-2A2,2,0,0,1,415.17,292.79Z" style="fill:#FFC727"></path>
                        <path d="M421.75,292.79a2,2,0,1,1-2-2A2,2,0,0,1,421.75,292.79Z" style="fill:#FFC727"></path>
                        <path d="M428.33,292.79a2,2,0,1,1-2-2A2,2,0,0,1,428.33,292.79Z" style="fill:#FFC727"></path>
                        <path d="M434.9,292.79a2,2,0,1,1-2-2A2,2,0,0,1,434.9,292.79Z" style="fill:#FFC727"></path>
                        <path d="M441.48,292.79a2,2,0,1,1-2-2A2,2,0,0,1,441.48,292.79Z" style="fill:#FFC727"></path>
                        <rect x="407.4" y="278.82" width="1.15" height="15.96" style="fill:#263238"></rect>
                        <rect x="341.37" y="246.15" width="103.21" height="23.84" style="fill:#37474f"></rect>
                        <rect x="345.71" y="250.09" width="58.75" height="2.01" style="fill:#455a64"></rect>
                        <rect x="345.71" y="253.58" width="58.75" height="2.01" style="fill:#455a64"></rect>
                        <rect x="345.71" y="257.07" width="58.75" height="2.01" style="fill:#455a64"></rect>
                        <rect x="345.71" y="260.55" width="58.75" height="2.01" style="fill:#455a64"></rect>
                        <rect x="345.71" y="264.04" width="58.75" height="2.01" style="fill:#455a64"></rect>
                        <path d="M415.17,252.09a2,2,0,1,1-2-2A2,2,0,0,1,415.17,252.09Z" style="fill:#FFC727"></path>
                        <path d="M421.75,252.09a2,2,0,1,1-2-2A2,2,0,0,1,421.75,252.09Z" style="fill:#FFC727"></path>
                        <path d="M428.33,252.09a2,2,0,1,1-2-2A2,2,0,0,1,428.33,252.09Z" style="fill:#FFC727"></path>
                        <path d="M434.9,252.09a2,2,0,1,1-2-2A2,2,0,0,1,434.9,252.09Z" style="fill:#FFC727"></path>
                        <path d="M441.48,252.09a2,2,0,1,1-2-2A2,2,0,0,1,441.48,252.09Z" style="fill:#FFC727"></path>
                        <path d="M415.17,258.07a2,2,0,1,1-2-2A2,2,0,0,1,415.17,258.07Z" style="fill:#FFC727"></path>
                        <path d="M421.75,258.07a2,2,0,1,1-2-2A2,2,0,0,1,421.75,258.07Z" style="fill:#FFC727"></path>
                        <path d="M428.33,258.07a2,2,0,1,1-2-2A2,2,0,0,1,428.33,258.07Z" style="fill:#FFC727"></path>
                        <path d="M434.9,258.07a2,2,0,1,1-2-2A2,2,0,0,1,434.9,258.07Z" style="fill:#FFC727"></path>
                        <path d="M441.48,258.07a2,2,0,1,1-2-2A2,2,0,0,1,441.48,258.07Z" style="fill:#FFC727"></path>
                        <path d="M415.17,264.06a2,2,0,1,1-2-2A2,2,0,0,1,415.17,264.06Z" style="fill:#FFC727"></path>
                        <path d="M421.75,264.06a2,2,0,1,1-2-2A2,2,0,0,1,421.75,264.06Z" style="fill:#FFC727"></path>
                        <path d="M428.33,264.06a2,2,0,1,1-2-2A2,2,0,0,1,428.33,264.06Z" style="fill:#FFC727"></path>
                        <path d="M434.9,264.06a2,2,0,1,1-2-2A2,2,0,0,1,434.9,264.06Z" style="fill:#FFC727"></path>
                        <path d="M441.48,264.06a2,2,0,1,1-2-2A2,2,0,0,1,441.48,264.06Z" style="fill:#FFC727"></path>
                        <rect x="407.4" y="250.09" width="1.15" height="15.96" style="fill:#263238"></rect>
                        <rect x="341.37" y="217.43" width="103.21" height="23.84" style="fill:#37474f"></rect>
                        <rect x="345.71" y="221.36" width="58.75" height="2.01" style="fill:#455a64"></rect>
                        <rect x="345.71" y="224.85" width="58.75" height="2.01" style="fill:#455a64"></rect>
                        <rect x="345.71" y="228.34" width="58.75" height="2.01" style="fill:#455a64"></rect>
                        <rect x="345.71" y="231.83" width="58.75" height="2.01" style="fill:#455a64"></rect>
                        <rect x="345.71" y="235.31" width="58.75" height="2.01" style="fill:#455a64"></rect>
                        <path d="M415.17,223.36a2,2,0,1,1-2-2A2,2,0,0,1,415.17,223.36Z" style="fill:#FFC727"></path>
                        <path d="M421.75,223.36a2,2,0,1,1-2-2A2,2,0,0,1,421.75,223.36Z" style="fill:#FFC727"></path>
                        <path d="M428.33,223.36a2,2,0,1,1-2-2A2,2,0,0,1,428.33,223.36Z" style="fill:#FFC727"></path>
                        <path d="M434.9,223.36a2,2,0,1,1-2-2A2,2,0,0,1,434.9,223.36Z" style="fill:#FFC727"></path>
                        <path d="M441.48,223.36a2,2,0,1,1-2-2A2,2,0,0,1,441.48,223.36Z" style="fill:#FFC727"></path>
                        <path d="M415.17,229.35a2,2,0,1,1-2-2A2,2,0,0,1,415.17,229.35Z" style="fill:#FFC727"></path>
                        <path d="M421.75,229.35a2,2,0,1,1-2-2A2,2,0,0,1,421.75,229.35Z" style="fill:#FFC727"></path>
                        <path d="M428.33,229.35a2,2,0,1,1-2-2A2,2,0,0,1,428.33,229.35Z" style="fill:#FFC727"></path>
                        <path d="M434.9,229.35a2,2,0,1,1-2-2A2,2,0,0,1,434.9,229.35Z" style="fill:#FFC727"></path>
                        <path d="M441.48,229.35a2,2,0,1,1-2-2A2,2,0,0,1,441.48,229.35Z" style="fill:#FFC727"></path>
                        <path d="M415.17,235.33a2,2,0,1,1-2-2A2,2,0,0,1,415.17,235.33Z" style="fill:#FFC727"></path>
                        <path d="M421.75,235.33a2,2,0,1,1-2-2A2,2,0,0,1,421.75,235.33Z" style="fill:#FFC727"></path>
                        <path d="M428.33,235.33a2,2,0,1,1-2-2A2,2,0,0,1,428.33,235.33Z" style="fill:#FFC727"></path>
                        <path d="M434.9,235.33a2,2,0,1,1-2-2A2,2,0,0,1,434.9,235.33Z" style="fill:#FFC727"></path>
                        <path d="M441.48,235.33a2,2,0,1,1-2-2A2,2,0,0,1,441.48,235.33Z" style="fill:#FFC727"></path>
                        <rect x="407.4" y="221.36" width="1.15" height="15.96" style="fill:#263238"></rect>
                        <rect x="341.37" y="188.7" width="103.21" height="23.84" style="fill:#37474f"></rect>
                        <rect x="345.71" y="192.64" width="58.75" height="2.01" style="fill:#455a64"></rect>
                        <rect x="345.71" y="196.12" width="58.75" height="2.01" style="fill:#455a64"></rect>
                        <rect x="345.71" y="199.61" width="58.75" height="2.01" style="fill:#455a64"></rect>
                        <rect x="345.71" y="203.1" width="58.75" height="2.01" style="fill:#455a64"></rect>
                        <rect x="345.71" y="206.59" width="58.75" height="2.01" style="fill:#455a64"></rect>
                        <path d="M415.17,194.63a2,2,0,1,1-2-2A2,2,0,0,1,415.17,194.63Z" style="fill:#FFC727"></path>
                        <path d="M421.75,194.63a2,2,0,1,1-2-2A2,2,0,0,1,421.75,194.63Z" style="fill:#FFC727"></path>
                        <path d="M428.33,194.63a2,2,0,1,1-2-2A2,2,0,0,1,428.33,194.63Z" style="fill:#FFC727"></path>
                        <path d="M434.9,194.63a2,2,0,1,1-2-2A2,2,0,0,1,434.9,194.63Z" style="fill:#FFC727"></path>
                        <path d="M441.48,194.63a2,2,0,1,1-2-2A2,2,0,0,1,441.48,194.63Z" style="fill:#FFC727"></path>
                        <circle cx="413.18" cy="200.62" r="2" style="fill:#FFC727"></circle>
                        <path d="M421.75,200.62a2,2,0,1,1-2-2A2,2,0,0,1,421.75,200.62Z" style="fill:#FFC727"></path>
                        <circle cx="426.33" cy="200.62" r="2" style="fill:#FFC727"></circle>
                        <path d="M434.9,200.62a2,2,0,1,1-2-2A2,2,0,0,1,434.9,200.62Z" style="fill:#FFC727"></path>
                        <path d="M441.48,200.62a2,2,0,1,1-2-2A2,2,0,0,1,441.48,200.62Z" style="fill:#FFC727"></path>
                        <path d="M415.17,206.6a2,2,0,1,1-2-2A2,2,0,0,1,415.17,206.6Z" style="fill:#FFC727"></path>
                        <path d="M421.75,206.6a2,2,0,1,1-2-2A2,2,0,0,1,421.75,206.6Z" style="fill:#FFC727"></path>
                        <path d="M428.33,206.6a2,2,0,1,1-2-2A2,2,0,0,1,428.33,206.6Z" style="fill:#FFC727"></path>
                        <path d="M434.9,206.6a2,2,0,1,1-2-2A2,2,0,0,1,434.9,206.6Z" style="fill:#FFC727"></path>
                        <path d="M441.48,206.6a2,2,0,1,1-2-2A2,2,0,0,1,441.48,206.6Z" style="fill:#FFC727"></path>
                        <rect x="407.4" y="192.64" width="1.15" height="15.96" style="fill:#263238"></rect>
                        <rect x="291.69" y="168.86" width="136.05" height="7.56" style="fill:#37474f"></rect>
                        <rect x="277.86" y="384.07" width="15.19" height="15.19" style="fill:#263238"></rect>
                    </g>
                    <g id="freepik--Texts--inject-2">
                        <path d="M63,226.7V212.31h2.27V226.7Z" style="fill:#263238"></path>
                        <path d="M70.79,216.57V226.7H68.52V212.31H70.3l8.23,10.38V212.33h2.29V226.7H78.94Z"
                            style="fill:#263238"></path>
                        <path d="M94.62,214.32H89.84V226.7H87.55V214.32h-4.8v-2H94.62Z" style="fill:#263238"></path>
                        <path d="M106.42,224.7v2H96.55V212.31h9.69v2H98.82v4.09h6.43v1.89H98.82v4.4Z"
                            style="fill:#263238"></path>
                        <path
                            d="M108.77,226.7V212.31H115a4,4,0,0,1,1.79.41,4.51,4.51,0,0,1,1.41,1.06,5,5,0,0,1,.92,1.5,4.66,4.66,0,0,1,.34,1.72,4.59,4.59,0,0,1-.21,1.39,4.52,4.52,0,0,1-.57,1.24,3.79,3.79,0,0,1-.89,1,3.47,3.47,0,0,1-1.15.62l3.38,5.47h-2.57l-3.12-5H111v5Zm2.27-7h4a1.87,1.87,0,0,0,.88-.21,2.12,2.12,0,0,0,.68-.59A3,3,0,0,0,117,218a3.17,3.17,0,0,0,.16-1,2.78,2.78,0,0,0-.19-1,3.23,3.23,0,0,0-.5-.85,2.53,2.53,0,0,0-.73-.58,1.92,1.92,0,0,0-.87-.21H111Z"
                            style="fill:#263238"></path>
                        <path d="M124.44,216.57V226.7h-2.27V212.31H124l8.23,10.38V212.33h2.29V226.7h-1.88Z"
                            style="fill:#263238"></path>
                        <path
                            d="M142,212.31h2l5.68,14.39h-2.4l-1.52-3.91h-5.55l-1.5,3.91h-2.41Zm3.31,8.8L143,214.93l-2.39,6.18Z"
                            style="fill:#263238"></path>
                        <path d="M151.4,226.7V212.31h2.27V224.7h7.72v2Z" style="fill:#263238"></path>
                        <path
                            d="M176.21,215.7a3.18,3.18,0,0,0-.59-.48,5,5,0,0,0-.9-.47,6.63,6.63,0,0,0-1.14-.37,5.86,5.86,0,0,0-1.26-.14,3.39,3.39,0,0,0-2.12.53,1.74,1.74,0,0,0-.68,1.46,1.61,1.61,0,0,0,.21.86,1.89,1.89,0,0,0,.66.58,5.21,5.21,0,0,0,1.12.45q.66.19,1.56.42a17.39,17.39,0,0,1,2,.58,5.64,5.64,0,0,1,1.49.79,3.39,3.39,0,0,1,.95,1.15,3.73,3.73,0,0,1,.33,1.65,4.12,4.12,0,0,1-.41,1.89,3.6,3.6,0,0,1-1.14,1.28,4.77,4.77,0,0,1-1.67.73,8.41,8.41,0,0,1-2.05.24,10.25,10.25,0,0,1-3.17-.5,9.05,9.05,0,0,1-2.77-1.45l1-2a3.79,3.79,0,0,0,.76.59,6.5,6.5,0,0,0,1.15.6,10.9,10.9,0,0,0,1.43.47,6.49,6.49,0,0,0,1.6.19,3.87,3.87,0,0,0,2.07-.47,1.52,1.52,0,0,0,.73-1.38,1.45,1.45,0,0,0-.28-.91,2.44,2.44,0,0,0-.78-.64,7,7,0,0,0-1.23-.49c-.49-.15-1-.31-1.66-.47a16.84,16.84,0,0,1-1.88-.6,4.69,4.69,0,0,1-1.33-.76,3,3,0,0,1-.8-1,3.51,3.51,0,0,1-.27-1.45,4.15,4.15,0,0,1,.4-1.87,3.94,3.94,0,0,1,1.11-1.38,4.77,4.77,0,0,1,1.65-.84,7.24,7.24,0,0,1,2.07-.29,7.56,7.56,0,0,1,2.69.47,8.74,8.74,0,0,1,2.17,1.15Z"
                            style="fill:#263238"></path>
                        <path d="M190,224.7v2h-9.87V212.31h9.69v2h-7.42v4.09h6.43v1.89h-6.43v4.4Z" style="fill:#263238">
                        </path>
                        <path
                            d="M192.3,226.7V212.31h6.27a4,4,0,0,1,1.79.41,4.51,4.51,0,0,1,1.41,1.06,5,5,0,0,1,.92,1.5A4.47,4.47,0,0,1,203,217a4.59,4.59,0,0,1-.21,1.39,4.8,4.8,0,0,1-.56,1.24,3.83,3.83,0,0,1-.9,1,3.47,3.47,0,0,1-1.15.62l3.38,5.47H201l-3.12-5h-3.33v5Zm2.27-7h4a1.84,1.84,0,0,0,.88-.21,2.12,2.12,0,0,0,.68-.59,2.8,2.8,0,0,0,.44-.86,3.18,3.18,0,0,0,.17-1,2.79,2.79,0,0,0-.2-1,3,3,0,0,0-.5-.85,2.53,2.53,0,0,0-.73-.58,1.91,1.91,0,0,0-.86-.21h-3.86Z"
                            style="fill:#263238"></path>
                        <path d="M206.27,212.31l4.34,11.54,4.32-11.54h2.41l-5.76,14.39h-2l-5.77-14.39Z"
                            style="fill:#263238"></path>
                        <path d="M229,224.7v2H219.1V212.31h9.69v2h-7.42v4.09h6.43v1.89h-6.43v4.4Z" style="fill:#263238">
                        </path>
                        <path
                            d="M231.32,226.7V212.31h6.27a4,4,0,0,1,1.79.41,4.51,4.51,0,0,1,1.41,1.06,5,5,0,0,1,.92,1.5,4.66,4.66,0,0,1,.34,1.72,4.59,4.59,0,0,1-.21,1.39,4.8,4.8,0,0,1-.56,1.24,4,4,0,0,1-.9,1,3.47,3.47,0,0,1-1.15.62l3.38,5.47H240l-3.12-5h-3.33v5Zm2.27-7h4a1.87,1.87,0,0,0,.88-.21,2.12,2.12,0,0,0,.68-.59,3,3,0,0,0,.44-.86,3.17,3.17,0,0,0,.16-1,2.78,2.78,0,0,0-.19-1,3.23,3.23,0,0,0-.5-.85,2.53,2.53,0,0,0-.73-.58,1.92,1.92,0,0,0-.87-.21h-3.85Z"
                            style="fill:#263238"></path>
                        <path d="M132.08,245.89v2.92H122V234.42h9.94v2.92h-6.61v2.79H131v2.7h-5.67v3.06Z"
                            style="fill:#263238"></path>
                        <path
                            d="M134.11,248.81V234.42h6.48a4.25,4.25,0,0,1,1.88.42A5.17,5.17,0,0,1,144,236a5.48,5.48,0,0,1,1,1.56,4.57,4.57,0,0,1,.35,1.76,5,5,0,0,1-.16,1.29,5.1,5.1,0,0,1-.46,1.16,4.57,4.57,0,0,1-.74,1,4.27,4.27,0,0,1-1,.74l3.16,5.35h-3.75l-2.75-4.64h-2.17v4.64Zm3.32-7.54h3a1.25,1.25,0,0,0,1-.56,2.25,2.25,0,0,0,.43-1.43,2,2,0,0,0-.49-1.42,1.4,1.4,0,0,0-1-.52h-2.94Z"
                            style="fill:#263238"></path>
                        <path
                            d="M147.69,248.81V234.42h6.48a4.25,4.25,0,0,1,1.88.42,5.17,5.17,0,0,1,1.49,1.12,5.27,5.27,0,0,1,1,1.56,4.58,4.58,0,0,1,.36,1.76,5,5,0,0,1-.17,1.29,5.1,5.1,0,0,1-.46,1.16,4.57,4.57,0,0,1-.74,1,4.27,4.27,0,0,1-1,.74l3.17,5.35h-3.75l-2.76-4.64H151v4.64Zm3.32-7.54h3a1.25,1.25,0,0,0,1-.56,2.25,2.25,0,0,0,.43-1.43,2,2,0,0,0-.49-1.42,1.4,1.4,0,0,0-1.05-.52H151Z"
                            style="fill:#263238"></path>
                        <path
                            d="M167.57,248.93a6.68,6.68,0,0,1-2.92-.63,7.21,7.21,0,0,1-2.25-1.65,7.61,7.61,0,0,1-1.45-2.34,7.46,7.46,0,0,1-.51-2.72,7.13,7.13,0,0,1,.53-2.73,7.31,7.31,0,0,1,3.78-3.93,7,7,0,0,1,2.88-.59,6.82,6.82,0,0,1,2.92.62,7.11,7.11,0,0,1,2.25,1.67,7.55,7.55,0,0,1,1.44,2.35,7.36,7.36,0,0,1,.51,2.67,7.16,7.16,0,0,1-.54,2.74,7.5,7.5,0,0,1-1.49,2.32,7.26,7.26,0,0,1-2.27,1.61A6.73,6.73,0,0,1,167.57,248.93Zm-3.75-7.3a5.53,5.53,0,0,0,.24,1.62,4.53,4.53,0,0,0,.72,1.38,3.66,3.66,0,0,0,1.19,1,3.51,3.51,0,0,0,1.62.36,3.4,3.4,0,0,0,2.84-1.39,4.49,4.49,0,0,0,.7-1.4,5.71,5.71,0,0,0,.23-1.59,5.46,5.46,0,0,0-.24-1.61,4.15,4.15,0,0,0-.73-1.38,3.68,3.68,0,0,0-1.19-.95,3.87,3.87,0,0,0-3.26,0,3.75,3.75,0,0,0-1.18,1,4.46,4.46,0,0,0-.71,1.39A5.71,5.71,0,0,0,163.82,241.63Z"
                            style="fill:#263238"></path>
                        <path
                            d="M176.67,248.81V234.42h6.49a4.2,4.2,0,0,1,1.87.42,5,5,0,0,1,1.49,1.12,5.3,5.3,0,0,1,1,1.56,4.76,4.76,0,0,1,.35,1.76,5,5,0,0,1-.16,1.29,5.13,5.13,0,0,1-.47,1.16,4.27,4.27,0,0,1-.74,1,4.43,4.43,0,0,1-1,.74l3.16,5.35h-3.75l-2.76-4.64H180v4.64Zm3.33-7.54h3a1.25,1.25,0,0,0,1-.56,2.32,2.32,0,0,0,.43-1.43,2.06,2.06,0,0,0-.49-1.42,1.44,1.44,0,0,0-1.05-.52H180Z"
                            style="fill:#263238"></path>
                        <path
                            d="M82.72,113.28v22.21a15.05,15.05,0,0,1,6.54-5.12,13.72,13.72,0,0,1,5.22-.91q10.26,0,15.15,7.18,4.22,6.2,4.22,17.51v22.29q0,11.48-7.27,18.83a23.45,23.45,0,0,1-17.5,7.1,22,22,0,0,1-17-7.43,24.71,24.71,0,0,1-6.52-17.34v-2.48L80.49,174l.33,3.55q.59,6.19,5,8.26a6.21,6.21,0,0,0,2.81.66q9.57,0,9.57-10V151.09a9.63,9.63,0,0,0-3.32-7.51,6.35,6.35,0,0,0-4.4-1.4,6.72,6.72,0,0,0-6.14,3.22,11.45,11.45,0,0,0-1.66,5.94v2.81H67.12V97.59h45.66v15.69Z"
                            style="fill:#FFC727"></path>
                        <path
                            d="M176.43,177.6a24.76,24.76,0,0,1-42.23,17.46A23.78,23.78,0,0,1,127,177.6V121.12a24.75,24.75,0,0,1,42.27-17.5,24,24,0,0,1,7.18,17.5Zm-16.18-56.81a9,9,0,0,0-9-9,8.55,8.55,0,0,0-6.32,2.64,8.77,8.77,0,0,0-2.6,6.36v56.56a8.75,8.75,0,0,0,2.6,6.36,8.55,8.55,0,0,0,6.32,2.64,9,9,0,0,0,9-9Z"
                            style="fill:#FFC727"></path>
                        <path
                            d="M239.35,177.6a24.73,24.73,0,0,1-49.46,0V121.12a24.76,24.76,0,0,1,42.28-17.5,24,24,0,0,1,7.18,17.5Zm-16.19-56.81a9,9,0,0,0-9-9,8.53,8.53,0,0,0-6.32,2.64,8.73,8.73,0,0,0-2.6,6.36v56.56a8.71,8.71,0,0,0,2.6,6.36,8.53,8.53,0,0,0,6.32,2.64,9,9,0,0,0,9-9Z"
                            style="fill:#FFC727"></path>
                    </g>
                    <g id="freepik--wall-plug--inject-2">
                        <rect x="43.46" y="353.74" width="26.56" height="26.56" style="fill:#37474f"></rect>
                        <circle cx="56.74" cy="367.01" r="8.87" style="fill:#455a64"></circle>
                        <rect x="53.12" y="363.43" width="2" height="7.32" style="fill:#263238"></rect>
                        <rect x="58.68" y="363.43" width="2" height="7.32" style="fill:#263238"></rect>
                    </g>
                    <g id="freepik--Floor--inject-2">
                        <polygon
                            points="36.85 421.59 90.14 421.35 143.43 421.26 250 421.09 356.57 421.26 409.86 421.35 463.15 421.59 409.86 421.84 356.57 421.93 250 422.09 143.43 421.92 90.14 421.83 36.85 421.59"
                            style="fill:#263238"></polygon>
                    </g>
                    <g id="freepik--Dog--inject-2">
                        <path
                            d="M128.08,396.52c1,2.12-2.84,17.31-4,20.43s-5.39,20.53-7.43,21.28-11.93.54-13.33,0,0-3.51,1.61-4.55,3.54-2.63,3.54-2.63-2.89-26.89-2.35-29.9S125.48,390.83,128.08,396.52Z"
                            style="fill:#FFC727"></path>
                        <path
                            d="M128.08,396.52c1,2.12-2.84,17.31-4,20.43s-5.39,20.53-7.43,21.28-11.93.54-13.33,0,0-3.51,1.61-4.55,3.54-2.63,3.54-2.63-2.89-26.89-2.35-29.9S125.48,390.83,128.08,396.52Z"
                            style="opacity:0.1"></path>
                        <path
                            d="M107.4,437.06a3.9,3.9,0,0,1,.65-1.49,5.6,5.6,0,0,1,1.13-1.15,3.68,3.68,0,0,1,1.42-.69.07.07,0,0,1,.07.12c-.18.16-.38.3-.55.47s-.36.35-.52.53a6.07,6.07,0,0,0-.85,1.16c-.25.41-.48.83-.7,1.27s-.33.91-.5,1.37a.1.1,0,0,1-.2,0A3.67,3.67,0,0,1,107.4,437.06Z"
                            style="opacity:0.1"></path>
                        <path
                            d="M104.51,435.48a5,5,0,0,1,2.41-2.11c.07,0,.14.05.08.1a8.13,8.13,0,0,0-1.92,2.17,3.66,3.66,0,0,0-.38,2.85s0,.06-.07,0A2.92,2.92,0,0,1,104.51,435.48Z"
                            style="opacity:0.1"></path>
                        <path
                            d="M106.94,416l13.59,12.86c1.5-4.93,2.9-10.29,3.51-11.88,1.2-3.12,5-18.31,4-20.43-2.61-5.69-21.48,1.62-22,4.63C105.83,402.57,106.33,409.27,106.94,416Z"
                            style="opacity:0.1"></path>
                        <path
                            d="M179.41,411.72c.55.52,5.9-4.54,6.72-6.91s-2.6-9.06-2-10.2,3.55-2.05,5.06-.3,5.38,11.34,4.58,15.44S184.74,423,183.87,423,179.41,411.72,179.41,411.72Z"
                            style="fill:#FFC727"></path>
                        <path
                            d="M179.41,411.72s3.61,11.2,4.46,11.25c.63,0,5.21-4.86,7.95-9.09l-7.49-6.31C182.44,409.8,179.79,412.08,179.41,411.72Z"
                            style="opacity:0.1"></path>
                        <path
                            d="M149.19,365.46h-44.4s-3.3,29.24-2.94,33.11,19.87,32.54,25.92,36.24,40.83,3.88,49.29,2c6.58-1.45,12.07-9.85,9.34-22.78-1.19-5.66-16.61-19.14-18.76-21.72S149.19,365.46,149.19,365.46Z"
                            style="fill:#c7c7c7"></path>
                        <path
                            d="M101.85,398.57c.36,3.87,19.87,32.54,25.93,36.24s40.82,3.88,49.29,2c6.57-1.45,12.07-9.85,9.33-22.79-1.19-5.65-16.6-19.13-18.75-21.71-1.32-1.58-7.94-11.3-12.88-18.6-3.13-4.62-5.58-8.27-5.58-8.27h-44.4s-.83,7.34-1.61,15.15S101.67,396.64,101.85,398.57Z"
                            style="fill:#FFC727"></path>
                        <path
                            d="M103.18,380.61c23.86,7.36,45.08-3.11,51.59-6.88-3.13-4.62-5.58-8.27-5.58-8.27h-44.4S104,372.8,103.18,380.61Z"
                            style="opacity:0.1"></path>
                        <path
                            d="M177.91,412.64s-12.22-7.67-20.79-6.29-11.6,19-7.49,28.89c0,0-7.82,2.32-7.82,6.1,0,2.15,4.47,2.84,10.91,2.68s19.26-.28,19.54-1.9a7.68,7.68,0,0,0-.84-3.85s11.57-1.3,13.84-9S179.84,413.93,177.91,412.64Z"
                            style="fill:#FFC727"></path>
                        <path
                            d="M161.22,436.11a31.06,31.06,0,0,0,10.29,2.28c.07,0,.09.12,0,.13a16.82,16.82,0,0,1-10.33-2.33C161.14,436.17,161.17,436.08,161.22,436.11Z"
                            style="opacity:0.1"></path>
                        <path
                            d="M146.84,444.07a6,6,0,0,1,2.66-3.44,9.23,9.23,0,0,1,2.26-1.14c.92-.31,1.86-.48,2.79-.77.07,0,.13.09,0,.12a15,15,0,0,0-2.3,1.06,22.45,22.45,0,0,0-2.17,1.28,13.51,13.51,0,0,0-3,3C147.05,444.31,146.8,444.24,146.84,444.07Z"
                            style="opacity:0.1"></path>
                        <path
                            d="M148.42,438a.06.06,0,0,1,0,.12,9.84,9.84,0,0,0-5.26,5.22c0,.1-.22.1-.2,0A6.27,6.27,0,0,1,148.42,438Z"
                            style="opacity:0.1"></path>
                        <path
                            d="M144.61,437.45s0,.06,0,.05a25.61,25.61,0,0,1,4.81-2.21c.2.35.41.7.64,1,0,.07.15,0,.11-.06a22.3,22.3,0,0,1-2.14-9.88,48.93,48.93,0,0,1,.32-5.41,0,0,0,0,1,0,0,26.51,26.51,0,0,1,2.9-9,10.84,10.84,0,0,1,3.77-4.34,10.46,10.46,0,0,1,5.65-1,26,26,0,0,1,5.9,1.09,45.74,45.74,0,0,1,5.72,2,31.69,31.69,0,0,0-11.56-3.87,10.58,10.58,0,0,0-6.16,1,11.77,11.77,0,0,0-4.2,4.64,27.93,27.93,0,0,0-3.07,11.88c0,.47,0,.95,0,1.42v0c0,.63,0,1.25,0,1.88a18.69,18.69,0,0,0,2.11,8.53A9.08,9.08,0,0,0,144.61,437.45Z"
                            style="opacity:0.1"></path>
                        <path
                            d="M142.43,400.29c1,2.11-2.84,17.3-4,20.42S133,441.24,131,442s-11.93.54-13.33,0,0-3.51,1.61-4.55,3.53-2.63,3.53-2.63-2.88-26.89-2.35-29.9S139.83,394.59,142.43,400.29Z"
                            style="fill:#FFC727"></path>
                        <path
                            d="M135.77,429.15c.91-2.74,2.1-5.4,3-8.13,0-.11.21-.06.17.05-.7,2.2-1.23,4.46-1.89,6.68.1-.15.19-.31.28-.46a10.87,10.87,0,0,0,1.57-2.77.09.09,0,0,1,.18.05,6.42,6.42,0,0,1-.59,1.34c-.26.49-.53,1-.8,1.47s-.71,1.26-1.1,1.87c0,.05,0,.09,0,.13a78.59,78.59,0,0,1-3,8.13.13.13,0,0,1-.24-.07A85.77,85.77,0,0,1,135.77,429.15Z"
                            style="opacity:0.1"></path>
                        <path
                            d="M120.05,409.2c0-.05.11-.07.12,0,.29,2,.41,4.1.62,6.15s.47,4.25.7,6.38c.47,4.23,1.18,8.45,1.52,12.69,0,.18-.31.2-.36,0A77.9,77.9,0,0,1,120.6,422c-.22-2.08-.35-4.16-.45-6.24A59.07,59.07,0,0,1,120.05,409.2Z"
                            style="opacity:0.1"></path>
                        <path
                            d="M121.27,440.61a3.73,3.73,0,0,1,.64-1.49,5.4,5.4,0,0,1,1.14-1.15,3.55,3.55,0,0,1,1.42-.69.07.07,0,0,1,.06.12c-.18.17-.38.3-.55.47l-.52.53a6.91,6.91,0,0,0-.85,1.16c-.24.41-.48.83-.69,1.27s-.34.91-.51,1.37a.1.1,0,0,1-.19,0A3.52,3.52,0,0,1,121.27,440.61Z"
                            style="opacity:0.1"></path>
                        <path
                            d="M118.37,439a5,5,0,0,1,2.42-2.11c.06,0,.13.05.07.1a7.92,7.92,0,0,0-1.91,2.17,3.57,3.57,0,0,0-.38,2.85s0,.06-.07,0A2.92,2.92,0,0,1,118.37,439Z"
                            style="opacity:0.1"></path>
                        <path
                            d="M121.78,324.81c.48-1.76-3.9-8-5.57-10.05s-10.86-5.22-13.8-3.61c-1.15.63-3.29,5.05-6.18,8.88-4.48,5.94-9.7,12.17-7.8,13.84,4.6,4.07,15.11-2.35,18.52-4.5s6.52-4.78,7.35-4.69c1.1.12,3.4,1.86,4.33,2A3.23,3.23,0,0,0,121.78,324.81Z"
                            style="fill:#FFC727"></path>
                        <path
                            d="M121.78,324.81c.48-1.76-3.9-8-5.57-10.05s-10.86-5.22-13.8-3.61c-1.15.63-3.29,5.05-6.18,8.88-4.48,5.94-9.7,12.17-7.8,13.84,4.6,4.07,15.11-2.35,18.52-4.5s6.52-4.78,7.35-4.69c1.1.12,3.4,1.86,4.33,2A3.23,3.23,0,0,0,121.78,324.81Z"
                            style="opacity:0.1"></path>
                        <path
                            d="M143,318.59c10.73,6.42,15.49,23.48,15.78,26.21.24,2.22,5.35,10.1,4.44,18.57-.59,5.44-10.37,12.67-18.33,12.6-1.46,0-13.85,4.48-24.32,3.76s-18.39-8.15-18.7-8.78S93,369.1,92.5,360.35c-.85-14,13.4-37.76,17.47-41C116.72,314,135.66,314.23,143,318.59Z"
                            style="fill:#FFC727"></path>
                        <path
                            d="M137.9,326c-.2-1.9,5.37-7.61,7.45-9.5s12.14-3.61,14.92-1.45c1.09.85,2.58,5.78,4.94,10.24,3.65,6.91,8,14.24,5.8,15.66-5.46,3.46-15.3-4.94-18.48-7.75s-6-6-6.85-6.08c-1.16-.06-3.84,1.36-4.81,1.31A3.41,3.41,0,0,1,137.9,326Z"
                            style="fill:#FFC727"></path>
                        <path
                            d="M137.9,326c-.2-1.9,5.37-7.61,7.45-9.5s12.14-3.61,14.92-1.45c1.09.85,2.58,5.78,4.94,10.24,3.65,6.91,8,14.24,5.8,15.66-5.46,3.46-15.3-4.94-18.48-7.75s-6-6-6.85-6.08c-1.16-.06-3.84,1.36-4.81,1.31A3.41,3.41,0,0,1,137.9,326Z"
                            style="opacity:0.1"></path>
                        <path
                            d="M118.3,349.93c6.58.06,9.58,7.11,10.37,8.94s4.86,6,5,10.43-8.23,9.3-17,7.75-13.4-6.49-13.35-10.95c0-3.59,3.42-6.7,3.8-7.64S112.31,349.87,118.3,349.93Z"
                            style="opacity:0.1"></path>
                        <path
                            d="M134.48,362.31a15.06,15.06,0,0,1,2.21,3.31,14,14,0,0,1,1.29,3.82,6.9,6.9,0,0,1-.43,4.1,4.83,4.83,0,0,1-1.28,1.65,5.75,5.75,0,0,1-1.79.92,5.67,5.67,0,0,0,2.35-2.87,7.45,7.45,0,0,0,.16-3.64,20.22,20.22,0,0,0-1-3.67C135.52,364.72,135,363.51,134.48,362.31Z"
                            style="opacity:0.1"></path>
                        <path
                            d="M104.33,359.68c-.57.71-1.11,1.4-1.61,2.1a13,13,0,0,0-1.27,2.18,7,7,0,0,0-.58,2.36,7.36,7.36,0,0,0,.47,2.51,4.41,4.41,0,0,1-1.25-2.46,5.51,5.51,0,0,1,.45-2.81,8.3,8.3,0,0,1,3.79-3.88Z"
                            style="opacity:0.1"></path>
                        <path
                            d="M207.14,453.86c-10.77,0-22.66-.19-34.61-.41-6.16-.11-11-.2-14.06-.2-15.53,0-20-20-24.32-39.26-.6-2.69-1.2-5.38-1.83-8-1.24-5.17-2.25-10.38-3.24-15.43-3-15.61-5.67-29.08-12.55-29.82-9.09-1-17.18,12.62-20.13,33.83l-2-.27c3.11-22.36,12.08-36.66,22.32-35.55,8.35.89,11.11,15,14.3,31.43,1,5,2,10.22,3.22,15.34.64,2.65,1.24,5.36,1.85,8.06,4.34,19.38,8.44,37.69,22.36,37.69,3.05,0,7.93.09,14.1.2,13.52.26,32,.6,47.7.29,25.42-.5,28.43-2.5,28.74-3.11,0-4.16-26.84-9.16-36.94-11.05s-10.6-2-10.49-3.23,1.35-1.13,3.25-1.13h41.94c13.15,0,17.39-18.92,19.93-30.23a42.34,42.34,0,0,1,1.93-7.13c2.94-6.12,10.38-5.23,10.69-5.19l-.26,2c-.26,0-6.32-.74-8.63,4.07a44,44,0,0,0-1.78,6.7c-2.67,11.89-7.12,31.79-21.88,31.79H210.35l2.09.39c24.42,4.56,38.56,8.17,38.56,13.1a1.94,1.94,0,0,1-.65,1.42C247.38,453.05,229.71,453.86,207.14,453.86Z"
                            style="fill:#263238"></path>
                        <rect x="89.27" y="392.73" width="12.28" height="7.37"
                            transform="translate(23.88 -5) rotate(3.43)" style="fill:#455a64"></rect>
                        <rect x="91.87" y="390.4" width="7.66" height="2.34"
                            transform="translate(23.58 -5.02) rotate(3.43)" style="fill:#37474f"></rect>
                        <rect x="91.51" y="399.92" width="1.45" height="5.62"
                            transform="translate(24.25 -4.79) rotate(3.43)" style="fill:#FFC727"></rect>
                        <rect x="97.06" y="400.25" width="1.44" height="5.62"
                            transform="translate(24.28 -5.13) rotate(3.43)" style="fill:#FFC727"></rect>
                        <rect x="279.59" y="388.98" width="12.28" height="5.37"
                            transform="translate(-105.93 677.4) rotate(-90)" style="fill:#455a64"></rect>
                        <rect x="277.05" y="389.5" width="7.66" height="4.34"
                            transform="translate(-110.78 672.55) rotate(-90)" style="fill:#37474f"></rect>
                        <path
                            d="M110,360.6s2.61,3,3.62,2.38,3.54-6.58,3.54-6.58.61,7.56,2.56,7.77,5.29-2.78,5.29-2.78l-7.89-5.47Z"
                            style="fill:#FFC727"></path>
                        <path
                            d="M110,360.6s2.61,3,3.62,2.38,3.54-6.58,3.54-6.58.61,7.56,2.56,7.77,5.29-2.78,5.29-2.78l-7.89-5.47Z"
                            style="opacity:0.1"></path>
                        <path
                            d="M148.65,351.21a18.76,18.76,0,0,0,.8-7.54,13.36,13.36,0,0,0-.91-3.83,9.38,9.38,0,0,0-1-1.79,8.76,8.76,0,0,0-1.34-1.58,7.2,7.2,0,0,0-.81-.65c-.29-.2-.59-.36-.88-.54l-.45-.25-.47-.19a8.56,8.56,0,0,0-1-.36,10.59,10.59,0,0,0-4-.38,13.75,13.75,0,0,0-7.08,2.79,20,20,0,0,1,7.13-1.31,10.52,10.52,0,0,1,3.37.6c.27.08.52.23.78.33l.38.17.36.23c.23.15.48.28.71.44a6,6,0,0,1,.63.52,8.14,8.14,0,0,1,1.94,2.69,14.77,14.77,0,0,1,1.09,3.33A35.93,35.93,0,0,1,148.65,351.21Z"
                            style="opacity:0.1"></path>
                        <path
                            d="M99.87,346.1a28.54,28.54,0,0,1,1-6.15,9.2,9.2,0,0,1,3-4.76,6.73,6.73,0,0,1,1.18-.69,4.66,4.66,0,0,1,1.27-.35,10.83,10.83,0,0,1,2.89.06,40.09,40.09,0,0,1,6.06,1.57,15.32,15.32,0,0,0-2.69-1.82c-.48-.25-1-.48-1.48-.7a16.12,16.12,0,0,0-1.57-.54,9.22,9.22,0,0,0-3.42-.38,5.58,5.58,0,0,0-1.8.44,7.54,7.54,0,0,0-1.56.9,7.93,7.93,0,0,0-2.26,2.71,10.63,10.63,0,0,0-1,3.23A14.87,14.87,0,0,0,99.87,346.1Z"
                            style="opacity:0.1"></path>
                        <path
                            d="M132.36,348.07c0-.11.26.15.25.28-.24,3,0,6.5,3,7.63.09,0,.07.19,0,.17C131.94,355.52,131.61,350.89,132.36,348.07Z"
                            style="fill:#263238"></path>
                        <path d="M135.46,345.05c5.34-.14,5.33,9.61.38,9.74S131,345.16,135.46,345.05Z"
                            style="fill:#263238"></path>
                        <path
                            d="M111.73,345.7c0-.11-.27.12-.28.25-.18,3-1,6.43-4,7.14-.09,0-.1.17,0,.17C111.12,353.14,112.09,348.6,111.73,345.7Z"
                            style="fill:#263238"></path>
                        <path d="M109.09,342.28c-5.26-.88-6.62,8.78-1.74,9.59S113.51,343,109.09,342.28Z"
                            style="fill:#263238"></path>
                        <path
                            d="M116.91,356.12c1,.31,7.54-1.77,7-3.77-.55-2.16-9.81-2.67-11-1.27S115.92,355.8,116.91,356.12Z"
                            style="fill:#263238"></path>
                        <path
                            d="M125.13,361.29a22.13,22.13,0,0,1-3.35,2.09,4.46,4.46,0,0,1-1.82.52c-.38.07-.7-.44-.92-.93a14.25,14.25,0,0,1-.83-3.19c-.2-1.09-.31-2.21-.43-3.3l-.31-3-.91,2.95c-.28.91-.61,1.82-.94,2.73a20.82,20.82,0,0,1-1.18,2.64,3.85,3.85,0,0,1-.39.6,1.77,1.77,0,0,1-.46.48.83.83,0,0,1-.55.06,3.15,3.15,0,0,1-.72-.3,10.27,10.27,0,0,1-2.37-2.13,7.52,7.52,0,0,0,2,2.46,2.86,2.86,0,0,0,.87.46,2.71,2.71,0,0,0,.59.08,1.4,1.4,0,0,0,.64-.15,2.72,2.72,0,0,0,.74-.6,5.94,5.94,0,0,0,.5-.65,16.62,16.62,0,0,0,1.43-2.69c.4-.91.74-1.83,1-2.76l-1.23-.09a29.65,29.65,0,0,0,.46,3.37,16.5,16.5,0,0,0,.42,1.68,8.7,8.7,0,0,0,.67,1.67,3.5,3.5,0,0,0,.59.82,1.71,1.71,0,0,0,.53.37,1.31,1.31,0,0,0,.41.12,1.51,1.51,0,0,0,.37,0,4.89,4.89,0,0,0,2.16-.77A13.91,13.91,0,0,0,125.13,361.29Z"
                            style="fill:#263238"></path>
                    </g>
                    <g id="freepik--Lines--inject-2">
                        <path d="M74.9,395.89a47.15,47.15,0,0,1,11.86.81,47.23,47.23,0,0,1-11.86-.81Z"
                            style="fill:#263238"></path>
                        <path
                            d="M103.69,402.22a42.64,42.64,0,0,1,5.47,2.34,41.43,41.43,0,0,1,5.13,3,47.1,47.1,0,0,1-10.6-5.35Z"
                            style="fill:#263238"></path>
                        <path
                            d="M81.25,416a46.89,46.89,0,0,1,7.14-9.5,41.37,41.37,0,0,1-3.27,5A41.53,41.53,0,0,1,81.25,416Z"
                            style="fill:#263238"></path>
                        <path
                            d="M70,384.07c1.55.49,3.06,1.05,4.56,1.63s3,1.2,4.48,1.83,3,1.28,4.41,2,2.92,1.39,4.34,2.17c-1.55-.5-3.06-1.06-4.56-1.64s-3-1.2-4.48-1.83-3-1.28-4.41-2S71.43,384.84,70,384.07Z"
                            style="fill:#263238"></path>
                        <path
                            d="M105.13,392.93a26.48,26.48,0,0,1,4.34-1.72,25.63,25.63,0,0,1,4.55-1,28.44,28.44,0,0,1-8.89,2.73Z"
                            style="fill:#263238"></path>
                        <path
                            d="M90.75,387.87c-.82-1.3-1.56-2.63-2.29-4s-1.43-2.7-2.12-4.07-1.35-2.74-2-4.14-1.25-2.79-1.79-4.23c.82,1.3,1.57,2.64,2.3,4s1.43,2.7,2.12,4.06,1.34,2.74,2,4.14S90.21,386.43,90.75,387.87Z"
                            style="fill:#263238"></path>
                        <path
                            d="M111,419.5c-.89-1-1.72-2.09-2.53-3.16s-1.59-2.18-2.37-3.28-1.51-2.23-2.22-3.38-1.42-2.3-2.06-3.49c.89,1,1.72,2.09,2.53,3.16s1.6,2.18,2.37,3.28,1.51,2.23,2.22,3.38S110.36,418.3,111,419.5Z"
                            style="fill:#263238"></path>
                    </g>
                    <g id="freepik--Device--inject-2">
                        <polygon points="379.94 168.86 297.28 168.86 290.88 112.72 373.54 112.72 379.94 168.86"
                            style="fill:#a6a6a6"></polygon>
                        <polygon points="375.44 165.1 300.93 165.1 295.39 116.49 369.9 116.49 375.44 165.1"
                            style="fill:#fff"></polygon>
                        <polygon points="329.42 142.06 328.23 143.48 316.51 133.36 317.7 131.94 329.42 142.06"
                            style="fill:#FFC727"></polygon>
                        <polygon points="326.4 131.94 328.04 133.36 319.53 143.48 317.89 142.06 326.4 131.94"
                            style="fill:#FFC727"></polygon>
                        <polygon points="354.48 142.06 353.29 143.48 341.57 133.36 342.76 131.94 354.48 142.06"
                            style="fill:#FFC727"></polygon>
                        <polygon points="351.46 131.94 353.1 133.36 344.59 143.48 342.95 142.06 351.46 131.94"
                            style="fill:#FFC727"></polygon>
                        <polygon points="315.01 151.79 314.69 149.79 360.12 149.79 360.44 151.79 315.01 151.79"
                            style="fill:#FFC727"></polygon>
                        <rect x="297.86" y="165.1" width="106.34" height="3.77" style="fill:#a6a6a6"></rect>
                        <rect x="320.96" y="165.1" width="92.22" height="3.77" style="fill:#c7c7c7"></rect>
                        <polygon points="370.17 118.85 369.9 116.49 295.39 116.49 295.66 118.85 370.17 118.85"
                            style="fill:#263238"></polygon>
                        <path
                            d="M301.66,117.67a.63.63,0,0,0,.59.58.48.48,0,0,0,.46-.58.63.63,0,0,0-.59-.59A.49.49,0,0,0,301.66,117.67Z"
                            style="fill:#c7c7c7"></path>
                        <path
                            d="M299.5,117.67a.64.64,0,0,0,.6.58.49.49,0,0,0,.46-.58.64.64,0,0,0-.59-.59A.5.5,0,0,0,299.5,117.67Z"
                            style="fill:#fff"></path>
                        <path
                            d="M297.35,117.67a.63.63,0,0,0,.59.58.48.48,0,0,0,.46-.58.63.63,0,0,0-.59-.59A.49.49,0,0,0,297.35,117.67Z"
                            style="fill:#FFC727"></path>
                    </g>
                </svg>
            </div>
        </div>
        <div
            class="w-64 md:w-96 h-96 md:h-full bg-yellow-200 bg-opacity-30 absolute -top-64 md:-top-96 right-20 md:right-32 rounded-full pointer-events-none -rotate-45 transform">
        </div>
        <div
            class="w-96 h-full bg-yellow-200 bg-opacity-20 absolute -bottom-96 right-64 rounded-full pointer-events-none -rotate-45 transform">
        </div>
    </div>

</body>

</html>