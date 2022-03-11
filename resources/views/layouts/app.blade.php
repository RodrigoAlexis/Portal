<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Aram-Luz') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">


        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/css/suneditor.min.css" rel="stylesheet">
        <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
        
        

        @livewireStyles

        <!-- Scripts -->   
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>    
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/mi.js') }}" defer></script>

       
    </head>
    <body class="font-sans antialiased bg-gray-100">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @if(Route::is('dashboard')) 
                
                @elseif(Route::is('posts*'))

                @elseif(Route::is('products*'))
                
                @elseif(Route::is('groups*'))

                @elseif(Route::is('lines*'))

                @else
                    @livewire('navigation')
            @endif

            {{-- <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif --}}

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
    <footer>
        @if(Route::is('dashboard')) 

            @elseif(Route::is('login'))

            @elseif(Route::is('register'))
                
            @elseif(Route::is('posts*'))

            @elseif(Route::is('products*'))

            @elseif(Route::is('groups*'))

            @elseif(Route::is('lines*'))

            

            @else
                @livewire('footer')
        @endif
    </footer>
</html>
