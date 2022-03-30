<x-app-layout>
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        {{-- grid de los post publicados --}}
        <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-8">
            @foreach ($groups as $group)
            <div class="flex flex-col items-center justify-center w-full">
                
                <a href="{{route('grupos.show', $group)}}" class="w-full h-64 bg-gray-300 bg-center bg-cover rounded-lg shadow-md object-cover" style="background-image: url(@if($group->image) {{Storage::url($group->image->url)}} @else https://cdn.pixabay.com/photo/2022/01/29/16/21/fisherman-6977946_960_720.jpg @endif)">
                
                </a>
        
                <div class="w-56 -mt-10 overflow-hidden bg-orange-500 rounded-t-lg shadow-lg md:w-64 ">
                    <h3 class="py-2 font-bold tracking-wide text-center text-white uppercase ">{{$group->name}}</h3>
                    
                    
                </div>
            </div> 
            @endforeach
        </div>
    </div>
</x-app-layout>