<div>
    {{-- <section class="pb-5 lg:pb-5">
        <div class="container">
            <div class="flex flex-wrap justify-center -mx-4 py-4">
                <div class="w-full px-4">
                    <div class="text-center mx-auto mb-10 max-w-[510px]">
                        <span class="font-semibold text-lg text-primary mb-2 block  text-gray-800 ">
                            Responsabilidad Social
                        </span>
                        <h2
                            class="font-bold text-3xl sm:text-4xl md:text-[40px] text-gray-700 mb-4">
                            Nuestras Noticias Recientes
                        </h2>
                        <p class="text-base text-body-color">
                            En Veladoras Aramo buscamos siempre contribuir activamente en el mejoramiento social,
                            económico y ambiental de nuestro entorno, ciudad y país.
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap -mx-4">
                <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                    <div class="max-w-[370px] mx-auto mb-10">
                        <div class="rounded overflow-hidden mb-8">
                            <img src="https://cdn.tailgrids.com/1.0/assets/images/blogs/blog-01/image-01.jpg"
                                alt="image" class="w-full" />
                        </div>
                        <div>
                            <span
                                class="bg-primary rounded inline-block text-center py-1 px-4 text-xs leading-loose font-semibold text-white mb-5">
                                Dec 22, 2023
                            </span>
                            <h3>
                                <a href="javascript:void(0)"
                                    class="font-semibold text-xl sm:text-2xl lg:text-xl xl:text-2xl mb-4 inline-block text-dark hover:text-primary">
                                    Meet AutoManage, the best AI management tools
                                </a>
                            </h3>
                            <p class="text-base text-body-color">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <div class="grid grid-cols-1 lg:grid-cols-2">
        {{-- Blogs --}}
        <div class="hidden sm:hidden md:hidden lg:inline">
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
        <div class="hidden sm:hidden md:hidden lg:inline">
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
                                    class="w-full flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-violet-500 hover:bg-violet-600 md:py-4 md:text-lg md:px-10">
                                    Ver más Artículos
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- texto --}}
        <div class="inline sm:inline md:inline lg:hidden">
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
                                    class="w-full flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-violet-500 hover:bg-violet-600 md:py-4 md:text-lg md:px-10">
                                    Ver más Artículos
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Blogs --}}
        <div class="inline sm:inline md:inline lg:hidden">
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
