<x-app-layout>
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        {{-- grid de los post publicados --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($blogs as $blog)
                <article class="w-full h-80 bg-cover bg-center  @if($loop->first) md:col-span-2 @endif" style="background-image: url(@if($blog->image) {{Storage::url($blog->image->url)}} @else https://cdn.pixabay.com/photo/2022/01/29/16/21/fisherman-6977946_960_720.jpg @endif)">
                    <div class="w-full h-full px-8 flex flex-col justify-center">

                        {{-- Titulo --}}
                        <h1 class="text-4xl text-white leading-8 font-bold">
                            <a href="{{ route('blogs.show', $blog)}}">
                                {{$blog->name}}
                            </a>
                        </h1>
                    </div>
                </article>      
            @endforeach
        </div>

        {{-- paginacion --}}
        <div class="mt-4">
            {{$blogs->links()}}
        </div>
    </div>
</x-app-layout>