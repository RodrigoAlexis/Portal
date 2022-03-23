<x-app-layout>
    <div x-data="{ open: true }" class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        {{-- grid de los post publicados --}}
        <div  class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-4 gap-8">
            @foreach ($products as $product)
            <div>

                <a type="button"  @click="open = true" href="" class="block h-64 w-full bg-gray-300 bg-center bg-cover rounded-lg shadow-md" style="background-image: url(@if($product->image) {{Storage::url($product->image->url)}} @else https://cdn.pixabay.com/photo/2022/01/29/16/21/fisherman-6977946_960_720.jpg @endif)"></a>
                <div class="flex items-center justify-between mt-3">
                    <div>
                        <div  class="font-bold uppercase text-gray-600 text-md">{{$product->name}}</div>
                        <div class="flex items-center">
                            <span class="text-xs font-medium text-gray-600">por</span>
                            <span class="text-xs font-medium ml-1 text-indigo-500">Veladoras Aramo</span>
                        </div>
                    </div>
                    <a  @click="open = !open"  type="button" href="javascript:void(0)" class="flex items-center h-8 bg-indigo-200 text-indigo-600 text-sm px-2 rounded">Ver más</a>  
                </div>
            </div>
            
            @endforeach
            
        </div>

        @include('products.front.modalProduct')
    </div>

    
</x-app-layout>



