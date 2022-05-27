<nav class="bg-white menu sticky top-0 " x-data="{ open: false }" style="z-index: 2;">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 ">
        <div class="relative flex items-center justify-between h-16">

            <!-- Mobile menu button-->
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">

                <button x-on:click=" open = true" type="button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400  focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>


                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>


                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                {{-- logotipo --}}
                <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center">
                    <img class="block lg:hidden h-12 w-auto" src="{{ asset('img/veladoras-aramo-sm.png') }}"
                        alt="Veladoras Aramo">
                    <img class="hidden lg:block h-12 w-auto" src="{{ asset('img/logo-veladoras.png') }}"
                        alt="Veladoras Aramo">
                </a>


                {{-- Menu lg --}}
                <div class="hidden sm:block sm:ml-6">
                    <div class="flex space-x-4">

                        @foreach ($nav_links as $nav_link)
                            <x-jet-nav-link href="{{ $nav_link['route'] }}" :active="$nav_link['active']">
                                {{ $nav_link['name'] }}
                            </x-jet-nav-link>
                        @endforeach

                    </div>
                </div>
            </div>


            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                <!-- Profile dropdown -->
                @auth
                    <div class="ml-3 relative" x-data="{ open: false }" x-cloak>
                        <div>
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button x-on:click=" open = true"
                                    class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover"
                                        src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button x-on:click=" open = true" type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                        {{ Auth::user()->name }}
                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </div>

                        <div x-show="open" x-on:click.away="open = false"
                            class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">

                            {{-- Perfil --}}
                            <div class="flex  px-3 hover:bg-blue-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-2 text-gray-700" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>

                                <span><a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-gray-700"
                                        role="menuitem" tabindex="-1" id="user-menu-item-0">Perfil</a></span>
                            </div>

                            {{-- Dashboard --}}
                            <div class="flex  px-3 hover:bg-blue-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-2 text-gray-700" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                                </svg>

                                <span><a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm text-gray-700"
                                        role="menuitem" tabindex="-1" id="user-menu-item-1">Panel</a></span>
                            </div>

                            {{-- Logout --}}
                            <div class="flex  px-3 hover:bg-blue-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-2 text-gray-700" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>

                                <span>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700"
                                            role="menuitem" tabindex="-1" id="user-menu-item-2"
                                            onclick="event.preventDefault();
                                                                                                          this.closest('form').submit();">
                                            Cerrar Sesión
                                        </a>
                                    </form>
                                </span>

                            </div>

                        </div>
                    </div>
                @else
                    @if (Route::is('contacto.index'))
                        <a href="{{ route('login') }}"
                            class="hidden sm:hidden md:inline lg:inline xl:inline text-gray-700  px-3 py-2 rounded-md text-sm font-semibold">Iniciar
                            Sesión</a>
                        <a type="button" href="{{ route('register') }}"
                            class="hidden sm:hidden md:hidden lg:inline xl:inline ml-3 text-white bg-blue-500 hover:bg-blue-600 focus:ring-1 focus:ring-blue-300 font-semibold rounded-md text-sm px-3 py-2 text-center ">Registrarme</a>
                    @elseif (Route::is('login'))
                        <a type="button" href="{{ route('register') }}"
                            class="hidden sm:hidden md:hidden lg:inline xl:inline ml-3 text-white bg-blue-500 hover:bg-blue-600 focus:ring-1 focus:ring-blue-300 font-semibold rounded-md text-sm px-3 py-2 text-center ">Registrarme</a>
                    @elseif(Route::is('register'))
                        <a href="{{ route('login') }}"
                            class="hidden sm:hidden md:inline lg:inline xl:inline text-gray-700  px-3 py-2 rounded-md text-sm font-semibold">Iniciar
                            Sesión</a>
                    @else
                    @endif

                @endauth
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu" x-show="open" x-on:click.away=" open = false" x-cloak>
        <div class="px-2 pt-2 pb-3 space-y-1">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->

            <div>
                @auth
                @else
                    @if (Route::is('contacto.index'))
                        <a href="{{ route('login') }}"
                            class="text-gray-700  block px-3 py-2 rounded-md text-sm font-semibold ">Iniciar
                            Sesión</a>
                        <a type="button" href="{{ route('register') }}"
                            class="block text-white bg-blue-500 hover:bg-blue-600 focus:ring-1 focus:ring-blue-300 font-semibold rounded-md text-sm px-3 py-2">Registrarme</a>

                        <hr class="border-t mt-2" />
                    @elseif (Route::is('login'))
                        <a type="button" href="{{ route('register') }}"
                            class="block text-white bg-blue-500 hover:bg-blue-600 focus:ring-1 focus:ring-blue-300 font-semibold rounded-md text-sm px-3 py-2">Registrarme</a>

                        <hr class="border-t" />
                    @elseif(Route::is('register'))
                        <a href="{{ route('login') }}"
                            class="text-gray-700  block px-3 py-2 rounded-md text-sm font-semibold ">Iniciar
                            Sesión</a>

                        <hr class="border-t" />
                    @else
                    @endif
                @endauth
            </div>

            @foreach ($nav_links as $nav_link)
                <x-jet-responsive-nav-link href="{{ $nav_link['route'] }}" :active="$nav_link['active']">
                    {{ $nav_link['name'] }}
                </x-jet-responsive-nav-link>
            @endforeach
        </div>
    </div>
</nav>
