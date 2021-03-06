<x-app-layout>

    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        {{-- grid de los post publicados --}}
        <div  class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach ($products as $product)

                    <div>
                        <a href="#{{$product->slug}}" onclick="toggleModal('{{$product->slug}}')" class="block h-72 w-full bg-gray-300 bg-center bg-cover rounded-lg shadow-md" style="background-size: 300px 300px; background-image: url(@if($product->image) {{Storage::url($product->image->url)}} @else /img/defaultProducto1.jpg @endif)"></a>
                        <div class="flex items-center justify-between mt-3">
                            <div>
                                <div  class="font-bold  text-gray-600 text-sm px-2">{{$product->name}}</div>
                                {{-- <div class="flex items-center">
                                    <span class="text-xs font-medium text-gray-600">por</span>
                                    <span class="text-xs font-medium ml-1 text-indigo-500">Veladoras Aramo</span>
                                </div> --}}
                            </div>
                            <a href="#{{$product->slug}}" onclick="toggleModal('{{$product->slug}}')" class=" text-center py-1 h-8 w-16 bg-indigo-200 text-indigo-600 text-sm  rounded hover:bg-blue-400 hover:text-white">
                                Más
                            </a>  
                        </div>
                    </div>

                    @include('products.front.modalProduct')
                    
            @endforeach
            
        </div>
    </div>
      
      <script type="text/javascript">

        function toggleModal(modalID){

          document.getElementById(modalID).classList.toggle("hidden");
          document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
          document.getElementById(modalID).classList.toggle("flex");
          document.getElementById(modalID + "-backdrop").classList.toggle("flex"); 
        }
      </script>
    
</x-app-layout>



