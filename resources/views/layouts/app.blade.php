<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Aram-Luz') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">


    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/myStyles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/css/suneditor.min.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


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


    <style>
        [x-cloak] {
            display: none;
        }

    </style>
    {!! htmlScriptTagJsApi(['lang' => 'es']) !!}


    {{-- Favicon --}}
    <link rel="shortcut icon" type="image/png" href="{{ asset('/img/veladoras-aramo-sm.png') }}">
    <link rel="shortcut icon" sizes="192x192" href="{{ asset('/img/veladoras-aramo-sm.png') }}">
    {{-- End Favicon --}}
</head>

<body class="font-sans antialiased bg-gray-100">
    <x-jet-banner />

    <div class="min-h-screen bg-white">
        @if (Route::is('dashboard'))
        @elseif(Route::is('posts*'))

        @elseif(Route::is('products*'))

        @elseif(Route::is('groups*'))

        @elseif(Route::is('lines*'))

        @elseif(Route::is('denuncia*'))

        @elseif (Route::is('roles*'))

        @elseif(Route::is('admin*'))
        @else
            @livewire('navigation')
        @endif

        <main>
            {{ $slot }}
        </main>
    </div>

    @stack('modals')

    @livewireScripts
</body>
<footer>
    @if (Route::is('dashboard'))
    @elseif(Route::is('login'))

    @elseif(Route::is('register'))

    @elseif(Route::is('posts*'))

    @elseif(Route::is('products*'))

    @elseif(Route::is('groups*'))

    @elseif(Route::is('lines*'))

    @elseif(Route::is('denuncia*'))

    @elseif (Route::is('roles*'))

    @elseif (Route::is('admin*'))
    @else
        @livewire('footer')
    @endif
</footer>

</html>
