<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Error 404</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">


    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/myStyles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/css/suneditor.min.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" /> --}}

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


    <style>
        @import url('https://fonts.googleapis.com/css?family=Noto+Sans:700');
        @import url('https://fonts.googleapis.com/css?family=Lato');

        body {
            margin: 0;
            padding: 0;
            padding: 5%;
            font-family: 'Lato', sans-serif;
        }

        .err_page {
            width: 100%;
            height: 80%;
            margin: 4% auto;
            background: #fff;
            text-align: center;
            display: flex;
            align-items: center;
        }

        .err_page_right {
            width: 100%;
        }

        .err_page_left {
            width: 100%;
        }

        .err_page h1 {
            font-family: 'Noto Sans', sans-serif;
            font-size: 70pt;
            margin: 0;
            color: #002fff;
        }

        .err_page h4 {
            color: #002fff;
            font-size: 14pt;
        }

        .err_page p {
            font-size: 14pt;
            color: #737373;
        }

        .err_btn {
            background: #fff;
            border: 2px solid #002fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            font-size: 13pt;
            transition: background 0.5s;
            width: 180px;
        }

        .err_btn:hover {
            background: #002fff;
            box-shadow: 0px 8px 10px rgba(0, 0, 0, 0.2);
            color: #fff;
        }

        .credit {
            position: absolute;
            bottom: 0;
            right: 0;
        }

        /*-----------NOT NEEDED---------*/
        @media screen and (max-width: 350px) {
            .credit {
                visibility: hidden;
            }
        }

    </style>


    <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
    <meta name="robots" content="noindex, follow">
</head>

<body>
    <div class="err_page">
        <div class="err_page_left">
            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEi_td6QYAIZlb1Bhoo7it7f1OI8XGXQIdJ51xpYTJrk-94frvU0DZwK5AJn1luY60aKIAcw9J9theq3NVi9evrs329TtdPav30jw-E1lEjsp_T1QeAITbO4R0JxphTPTL4i0774-pNIM8RtmpVGujKrFWZbVt_W-zr8DAbJ0Btsg7anUXvgmNoolkD6"
                width=360px height=250px />
        </div>
        <div class="err_page_right">
            <h1>404</h1>
            <h4>UPS. Parece que la página que estás buscando no existe</h4>
            <p>No te preocupes. Como usted es valioso para nosotros, lo traeremos de vuelta a un lugar seguro.</p>
            <input ype="button" class="err_btn" value="Regresar al Inicio" onclick="history.back()">


        </div>

    </div>
    {{-- <div class="credit">
        Image downloaded and edited using <a href="#">codepen</a></div> --}}
</body>

</html>
