<div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
    <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>
        {{-- Menu lateral --}}
        <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="fixed z-30 inset-y-0 left-0 w-64 transition duration-300 transform  bg-indigo-500 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">
            {{-- Logo del menu lateral --}}
            <a href="{{route('home')}}" class="flex items-center justify-center mt-8">
                <div class="flex items-center">
                    <svg class="h-12 w-12" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M364.61 390.213C304.625 450.196 207.37 450.196 147.386 390.213C117.394 360.22 102.398 320.911 102.398 281.6C102.398 242.291 117.394 202.981 147.386 172.989C147.386 230.4 153.6 281.6 230.4 307.2C230.4 256 256 102.4 294.4 76.7999C320 128 334.618 142.997 364.608 172.989C394.601 202.981 409.597 242.291 409.597 281.6C409.597 320.911 394.601 360.22 364.61 390.213Z" fill="#4C51BF" stroke="#4C51BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M201.694 387.105C231.686 417.098 280.312 417.098 310.305 387.105C325.301 372.109 332.8 352.456 332.8 332.8C332.8 313.144 325.301 293.491 310.305 278.495C295.309 263.498 288 256 275.2 230.4C256 243.2 243.201 320 243.201 345.6C201.694 345.6 179.2 332.8 179.2 332.8C179.2 352.456 186.698 372.109 201.694 387.105Z" fill="white"></path>
                    </svg>
                    
                    <span class="text-white text-2xl mx-2 font-semibold">Dashboard</span>
                </div>
            </a>
            {{-- Opciones del menu lateral --}}
            <nav class="mt-10">
                <ul>
                    <li>
                        <a class="flex items-center mt-4 py-2 px-6 text-white font-bold text-md {{Route::is('dashboard') ? 'active': 'hover:bg-white hover:bg-opacity-25 hover:text-white text-green-300'}}" href="{{route('dashboard')}}">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                            </svg>
            
                            <span class="mx-3">General</span>
                        </a>
                    </li>
                    
                    <li>
                        <a class="flex items-center mt-4 py-2 px-6 text-white font-bold text-md {{Route::is('posts*') ? 'active': 'hover:bg-white hover:bg-opacity-25 hover:text-white text-green-300'}}" href="{{route('posts.index')}}">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z">
                                </path>
                            </svg>
            
                            <span class="mx-3">Blog</span>
                        </a>
                    </li>
                    
        
                    <li>
                        <a class=" flex items-center mt-4 py-2 px-6 text-white hover:bg-white hover:bg-opacity-25 hover:text-white {{Route::is('products*') ? 'active': 'bg-white bg-opacity-25 text-white'}}" href="{{route('products.index')}}">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                </path>
                            </svg>
            
                            <span class="mx-3">Productos</span>
                        </a>
                    </li>
                    
                    <li>
                        <a class=" flex items-center mt-4 py-2 px-6 text-white hover:bg-white hover:bg-opacity-25 hover:text-white"
                            href="/forms">
                            <svg     xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
            
                            <span class="mx-3">Reportes</span>
                        </a>
                    </li>
                    
    
                    <li>
                        <a class=" flex items-center mt-4 py-2 px-6 text-white hover:bg-white hover:bg-opacity-25 hover:text-white"
                            href="/forms">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
            
                            <span class="mx-3">Usuarios</span>
                        </a>
                    </li>
                </ul>
                

            </nav>
        </div>

        <div class="flex-1 flex flex-col overflow-hidden">
            @if(Route::is('dashboard')) 
                @livewire('alert-login')
                @elseif(Route::is('posts*'))

                @else
                
            @endif
            
            {{-- Navbar (menu responsivo y perfil) --}}
            <header class="flex justify-between items-center py-4 px-6 bg-white border-b-4 border-indigo-600">
                {{-- Input de busqueda --}}
                <div class="flex items-center">
                    <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg>
                    </button>
                </div>

                {{-- Navbar del perfil --}}
                <div class="flex items-center">
                    @auth
                    <div x-data="{ open: false }" class="relative ">

                        {{-- Circulo del perfil --}}
                        <div >
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button x-on:click=" open = true" class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button x-on:click=" open = true" type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                        {{ Auth::user()->name }}
                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </div>

                        {{-- Opciones del perfil --}}
                        <div x-show="open" x-on:click.away="open = false" class="= origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            <!-- Active: "bg-gray-100", Not Active: "" -->
                            <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Perfil</a>
                            <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Panel</a>
                            
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                        Cerrar Sesión
                                </a>
                            </form>
                        </div>
                    </div>
                    @endauth
                </div>
            </header>


            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                <div class="container mx-auto px-6 py-8">
                    
                    @if (Route::is('dashboard'))
                        @livewire('general-user')
                    @elseif (Route::is('posts.index'))
                        @livewire('posts-index')
                    @elseif (Route::is('posts.create'))
                        @include('blogs.posts.forms.form-create')
                    @elseif (Route::is('posts.edit'))
                        @include('blogs.posts.forms.form-edit')
                    @elseif (Route::is('posts.image'))
                        @include('blogs.posts.image')
                    @elseif(Route::is('products.index'))
                    @livewire('products-index')
                    @endif
                    
                    
                </div>
            </main>
           
    </div>
</div>