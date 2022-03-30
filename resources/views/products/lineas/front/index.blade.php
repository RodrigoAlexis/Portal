<x-app-layout>
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        
        {{-- @foreach ($lines as $line)
            <div class="text-gray-500 text-2xl lg:text-3xl font-semibold mb-4">
                {{$line->pivot->pivotParent->name }}
            </div>
        @endforeach --}}
        
        
        {{-- grid de las lineas --}}
        <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-8">

            

            @foreach ($lines as $line)


            <div class="flex flex-col items-center justify-center w-full">
                <a href="{{ url('/grupo/'. $line->pivot->pivotParent->slug .'/linea/'.$line->slug)}}" class="w-full h-64 bg-gray-300 bg-center bg-cover rounded-lg shadow-md object-cover" style="background-image: url(@if($line->image) {{Storage::url($line->image->url)}} @else https://cdn.pixabay.com/photo/2022/01/29/16/21/fisherman-6977946_960_720.jpg @endif)">
                </a>
        
                <div class="w-56 -mt-10 overflow-hidden bg-blue-500 rounded-t-lg shadow-lg md:w-64 ">
                    <h3 class="py-2 font-bold tracking-wide text-center text-white uppercase ">{{$line->name}}</h3>
                    
                </div>
            </div> 
            @endforeach
        </div>
    </div>
</x-app-layout>