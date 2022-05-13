<div>
    
    <div class="grid grid-cols-1 lg:grid-cols-2">
        {{-- Blogs --}}
        <div class="hidden sm:hidden md:hidden lg:inline fadeRight scroll-content">
            @foreach ($blogs as $blog)
                <!-- component -->
                <div class="w-full">
                    <div class="max-w-5xl mx-auto">
                        <div class=" w-full hover:bg-violet-100">
                            <div class="grid grid-cols-1 gap-8">
                                <div class="flex flex-col md:flex-row p-3">
                                    <a href="{{ route('blogs.show', $blog) }}"
                                        class="w-full md:w-6/12 rounded overflow-hidden">
                                        <img class="object w-full h-auto" src="{{ Storage::url($blog->image->url) }}">
                                    </a>

                                    <div class="w-full md:w-6/12 mt-4 md:mt-0 md:ml-4">
                                        <a href="{{ route('blogs.show', $blog) }}"
                                            class="text-lg font-semibold leading-tight text-gray-800">
                                            {{ $blog->name }}</a>
                                        <p class="leading-normal pt-2"><a
                                                href="{{ route('blogs.show', $blog) }}">{{ $blog->stract }}</a> </p>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- texto --}}
        <div class="hidden sm:hidden md:hidden lg:inline fadeRight1 scroll-content">
            <div class="flex flex-wrap justify-center -mx-4 py-4">
                <div class="w-full pl-4">
                    <div class="text-center mx-auto mb-10 max-w-[510px] py-8">
                        <span class="font-semibold text-lg text-primary mb-2 block text-gray-800 ">
                            Nuestras Noticias más Recientes
                        </span>
                        <h1
                            class="text-4xl font-serif font-extrabold tracking-tight  text-transparent bg-clip-text bg-gradient-to-br from-purple-400 to-violet-700 sm:text-6xl">
                            Responsabilidad Social
                        </h1>
                        <p class="text-base text-body-color">
                            En Veladoras Aramo buscamos siempre contribuir activamente en el mejoramiento social,
                            económico y ambiental de nuestro entorno, ciudad y país.
                        </p>

                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-center">
                            <div class="rounded-md shadow flex">
                                <a href="{{ route('blogs.index') }}"
                                    class="w-full flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-violet-500 hover:bg-violet-600 md:py-4 md:text-lg md:px-10">
                                    Ver más
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- texto --}}
        <div class="inline sm:inline md:inline lg:hidden fadeRight1 scroll-content">
            <div class="flex flex-wrap justify-center -mx-4 py-4">
                <div class="w-full px-4">
                    <div class="text-center mx-auto mb-10 max-w-[510px] py-8">
                        <span class="font-semibold text-lg text-primary mb-2 block text-gray-800 ">
                            Nuestras Noticias más Recientes
                        </span>
                        <h1
                            class="text-4xl font-serif font-extrabold tracking-tight  text-transparent bg-clip-text bg-gradient-to-br from-purple-400 to-violet-700 sm:text-6xl">
                            Responsabilidad Social
                        </h1>
                        <p class="text-base text-body-color">
                            En Veladoras Aramo buscamos siempre contribuir activamente en el mejoramiento social,
                            económico y ambiental de nuestro entorno, ciudad y país.
                        </p>

                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-center">
                            <div class="rounded-md shadow flex">
                                 

                                <a href="{{ route('blogs.index') }}"
                                    class="w-full flex items-cente  justify-center text-base mt-4 md:mt-0 md:py-4 md:text-lg md:px-10 inline-block text-center bg-violet-500 border border-transparent rounded-md py-3 px-6 font-medium text-white hover:bg-violet-600">
                                    Ver más
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Blogs --}}
        <div class="inline sm:inline md:inline lg:hidden fadeRight scroll-content">
            @foreach ($blogs as $blog)
                <!-- component -->
                <div class="w-full">
                    <div class="max-w-5xl mx-auto">
                        <div class=" w-full hover:bg-violet-100">
                            <div class="grid grid-cols-1 gap-8">
                                <div class="flex flex-col md:flex-row p-3">
                                    <a href="{{ route('blogs.show', $blog) }}"
                                        class="w-full md:w-6/12 rounded overflow-hidden">
                                        <img class="object w-full h-auto" src="{{ Storage::url($blog->image->url) }}">
                                    </a>

                                    <div class="w-full md:w-6/12 mt-4 md:mt-0 md:ml-4">
                                        <a href="{{ route('blogs.show', $blog) }}"
                                            class="text-lg font-semibold leading-tight text-gray-800">
                                            {{ $blog->name }}</a>
                                        <p class="leading-normal pt-2"><a
                                                href="{{ route('blogs.show', $blog) }}">{{ $blog->stract }}</a> </p>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

</div>
