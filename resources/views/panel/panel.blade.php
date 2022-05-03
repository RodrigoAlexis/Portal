<div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
    <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>
        {{-- Menu lateral --}}
        <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="fixed z-30 inset-y-0 left-0 w-64 transition duration-300 transform  bg-indigo-500 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">
            {{-- Logo del menu lateral --}}
            <a href="{{route('home')}}" class="flex items-center justify-center mt-8">
                <div class="flex items-center">
                    <img class="h-16 w-auto" src="http://veladorasaramo.com.mx/img/aramo.png"
                        alt="Veladoras Aramo">
                    
                    
                </div>
            </a>
            {{-- Opciones del menu lateral --}}
            <nav class="mt-10">
                <ul>
                    {{-- Inicio --}}
                    <li>
                        <a class="flex items-center mt-4 py-2 px-6 text-white font-bold text-md {{Route::is('dashboard') ? 'active': 'hover:bg-white hover:bg-opacity-25 hover:text-white text-green-300'}}" href="{{route('dashboard')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                            </svg>
            
                            <span class="mx-3">Inicio</span>
                        </a>
                    </li>
                    {{-- Blog --}}
                    <li>
                        <a class="flex items-center mt-4 py-2 px-6 text-white font-bold text-md {{Route::is('posts*') ? 'active': 'hover:bg-white hover:bg-opacity-25 hover:text-white text-green-300'}}" href="{{route('posts.index')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                              </svg>
            
                            <span class="mx-3">Blog</span>
                        </a>
                    </li>
                    {{-- Denuncias --}}
                    <li>
                        <a class="flex items-center mt-4 py-2 px-6 text-white font-bold text-md {{Route::is('denuncia*') ? 'active': 'hover:bg-white hover:bg-opacity-25 hover:text-white text-green-300'}}" href="{{route('denuncia.index')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                            </svg>
            
                            <span class="mx-3">Denuncias</span>
                        </a>
                    </li>
                    {{-- Usuarios --}}
                    <li>
                        <a class=" flex items-center mt-4 py-2 px-6 text-white hover:bg-white hover:bg-opacity-25 hover:text-white"
                            href="/forms">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
            
                            <span class="mx-3">Usuarios</span>
                        </a>
                    </li>
                    {{-- Productos --}}
                    <li>
                        {{-- Dropdown --}}
                        <div x-data="{ open: false }">
                            <button @click="open = !open" class=" w-full flex items-center mt-4 py-2 px-6 text-white font-bold text-md {{Route::is('products*') ? 'active': 'hover:bg-white hover:bg-opacity-25 hover:text-white text-green-300'}} ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>
                                <span class="mx-3">Productos</span>
                                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                            
                            {{-- Opciones del dropdown --}}
                            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                                <div class="px-2 py-2 bg-indigo-500 rounded-md shadow dark-mode:bg-gray-800">

                                    {{-- Articulos --}}
                                    <div class="flex items-center py-2 px-6 ">
                                        
                                        <a href="{{route('products.index')}}" class=" w-full flex items-center py-2 px-6 text-white font-semibold text-md {{Route::is('products*') ? 'active': 'hover:bg-white hover:bg-opacity-25 hover:text-white text-green-300'}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                            </svg>

                                            <span class="mx-3">Artículos</span>
                                        </a>
                                    </div>

                                    {{-- Lineas --}}
                                    <div class="flex items-center py-2 px-6 text-lg font-semibold w-full">
                                        <a href="{{route('lines.index')}}" class=" w-full flex items-center py-2 px-6 text-white font-semibold text-md {{Route::is('lines*') ? 'active': 'hover:bg-white hover:bg-opacity-25 hover:text-white text-green-300'}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                                            </svg>

                                              <span class="mx-3">Líneas</span>
                                        </a>
                                    </div>

                                    {{-- Grupo --}}
                                    <div class="flex items-center py-2 px-6 ">
                                        
                                        <a href="{{route('groups.index')}}" class=" w-full flex items-center py-2 px-6 text-white font-semibold text-md {{Route::is('groups*') ? 'active': 'hover:bg-white hover:bg-opacity-25 hover:text-white text-green-300'}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                            </svg>

                                              <span class="mx-3">Grupos</span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="flex-1 flex flex-col overflow-hidden">
            {{-- Alert --}}
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
                        @elseif (Route::is('products.index'))
                            @livewire('products-index')
                        @elseif (Route::is('products.create'))
                            @include('products.forms.form-create')
                        @elseif (Route::is('products.edit'))
                            @include('products.forms.form-edit')
                        @elseif (Route::is('groups.index'))
                            @livewire('groups-index')
                        @elseif (Route::is('groups.create'))
                            @include('products.groups.forms.form-create')
                        @elseif (Route::is('groups.edit'))
                            @include('products.groups.forms.form-edit')
                        @elseif (Route::is('lines.index'))
                            @livewire('lines-index')
                        @elseif (Route::is('lines.create'))
                            @include('products.lineas.forms.form-create')
                        @elseif (Route::is('lines.edit'))
                            @include('products.lineas.forms.form-edit')
                        @elseif (Route::is('denuncia.index'))
                            @livewire('buzon-index')
                    @endif
                      
                </div>
            </main>
        
    </div>
</div>