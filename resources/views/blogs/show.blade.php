<x-app-layout>
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        <h1 class="text-4xl font-bold text-gray-600">{{$blog->name}}</h1>

        <div class="text-lg text-gray-500 mb-2">
            {{$blog->stract}}
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            {{-- Contenido principal --}}
            <div class="lg:col-span-2">
                <figure>
                    <img class="w-full h-80 object-cover object-center" src="{{Storage::url($blog->image->url)}}" alt="">
                </figure>

                <div class="text-base text-gray-500 mt-4">
                    {{$blog->body}}
                </div>

            </div>

            {{-- Contenido relacionado --}}
            <aside>
                <h1 class="text-2xl font-bold text-gray-600 mb-4">Mas en {{$blog->bcategory['name']}}</h1>

                <ul>
                    @foreach ($similares as $similar)
                        <li class="mb-4">
                            <a class="flex" href="{{ route('blogs.show', $similar)}}">
                                <img class="w-34 h-24 object-cover object-center" src="{{Storage::url($similar->image->url)}}" alt="">
                                {{-- <img class="object-cover object-center w-36 h-20 " src="{{Storage::url($similar->image->url)}}" alt=""> --}}
                                <span class="ml-2 text-gray-600">{{$similar->name}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </aside>

        </div>
    </div>
</x-app-layout>