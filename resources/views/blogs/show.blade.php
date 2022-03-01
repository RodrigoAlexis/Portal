<x-app-layout>
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        <h1 class="text-4xl font-bold text-gray-600">{{$blog->name}}</h1>

        <div class="text-lg text-gray-500 mb-2">
            {!!$blog->stract!!}
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            {{-- Contenido principal --}}
            <div class="lg:col-span-2">
                <figure>
                    @if ($blog->image)
                        <img class="w-full h-80 object-cover object-center" src="{{Storage::url($blog->image->url)}}" alt="">
                    @else
                        <img class="w-full h-80 object-cover object-center" src="https://cdn.pixabay.com/photo/2022/01/29/16/21/fisherman-6977946_960_720.jpg" alt="">
                    @endif
                </figure>

                <div class="text-gray-500 mt-4">
                    {!!$blog->body!!}
                </div>
            </div>

            {{-- Contenido relacionado --}}
            <aside>
                <h1 class="text-2xl font-bold text-gray-600 mb-4">Más contenido</h1>

                <ul>
                    @foreach ($similares as $similar)
                        <li class="mb-4">
                            <a class="flex" href="{{ route('blogs.show', $similar)}}">
                                @if ($similar->image)
                                    <img class="w-36 h-24 object-cover object-center" src="{{Storage::url($similar->image->url)}}" alt="">
                                @else
                                    <img class="w-36 h-24 object-cover object-center" src="https://cdn.pixabay.com/photo/2022/01/29/16/21/fisherman-6977946_960_720.jpg" alt="">
                                @endif
                                {{-- <img class="object-cover object-center w-36 h-20 " src="{{Storage::url($similar->image->url)}}" alt=""> --}}
                                <span class="ml-2 text-gray-600">{{$similar->name}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </aside> 

            <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 grid-rows-2 col-span-2">
                {{-- Fotos de los post --}}
    
                <div class="lg:col-span-2">
                    <div class="w-full h-40 object-cover object-center">
                        @php
                            base64_decode($blog['foto1']);
                        @endphp
                    </div>
                </div>
                
                <div class="lg:col-span-2">
                    <div class="w-full h-40 object-cover object-center">
                        <img class="w-full h-40 object-cover object-center" src="https://cdn.pixabay.com/photo/2022/01/26/19/43/snowdrop-6969748_960_720.jpg" alt="">
                    </div> 
                </div>
                
    
                <div class="lg:col-span-2">
                    <div class="w-full h-40 object-cover object-center">
                        <img class="w-full h-40 object-cover object-center" src="https://cdn.pixabay.com/photo/2022/02/12/21/57/field-7009990_960_720.jpg" alt="">
                    </div> 
                </div>
    
                <div class="lg:col-span-2">
                    <div class="w-full h-40 object-cover object-center">
                        <img class="w-full h-40 object-cover object-center" src="https://cdn.pixabay.com/photo/2022/02/13/11/33/boat-7010962_960_720.jpg" alt="">
                    </div> 
                </div>
            </div>

        </div>
        
    </div>
</x-app-layout>