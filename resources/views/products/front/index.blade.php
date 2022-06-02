<x-app-layout>

    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        {{-- grid de los post publicados --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach ($products as $product)
                <div class="mb-4 md:mb-3 border-t-2 border-gray-100">
                    <a href="#{{ $product->slug }}" onclick="toggleModal('{{ $product->slug }}')"
                        class="block h-72 w-full bg-white bg-center bg-cover rounded-lg shadow-md"
                        style="background-size: 300px 300px; 
                                background-image: url(@if ($product->image) {{ Storage::url($product->image->url) }} @else /img/defaultProducto1.jpg @endif);
                                background-position: center center;
                                background-repeat: no-repeat;">
                    </a>
                    <div class="flex items-center justify-between mt-3">
                        <div>
                            <div class="font-bold text-gray-600 text-xs px-2 uppercase">{{ $product->name }}</div>

                        </div>
                        <a href="#{{ $product->slug }}" onclick="toggleModal('{{ $product->slug }}')"
                            class=" text-center py-1 h-7 px-6 bg-indigo-200 text-indigo-600 text-sm  rounded hover:bg-indigo-300">
                            Más
                        </a>
                    </div>


                    @if ($product->mercado && $product->amazon)
                        <div class="grid grid-cols-2 gap-3 mt-3">

                            {{-- mercado libre --}}
                            <a href="{{ $product->mercado }}" target="_blank"
                                class="items-center font-semibold text-center py-2 h-9 w-full bg-[#f2e22f] text-gray-800 text-sm rounded-md hover:bg-[#ebd916]  flex">
                                <img src="{{ asset('img/logomercadolibre.png') }}" alt="Mercado Libre" class="w-7 h-5 mx-3 sm:mx-6 md:mx-6 lg:ml-2 lg:mr-1 xl:mx-4">
                                
                                <span class="text-center">Comprar</span> 

                            </a>

                            {{-- amazon --}}
                            <a href="{{ $product->amazon }}" target="_blank"
                                class="font-semibold text-center py-2 h-9 w-full bg-slate-100 border border-black text-gray-900 text-sm rounded-md hover:bg-slate-200 flex">
                                <img src="{{ asset('img/logoA.png') }}" alt="Amazon" class="w-7 h-5 mx-3 sm:mx-6 md:mx-6 lg:mx-1 xl:mx-4">
                                Comprar
                            </a>

                        </div>
                    @elseif($product->mercado)
                        <div class="grid grid-cols-2 gap-3 mt-3">
                            {{-- mercado libre --}}
                            <a href="{{ $product->mercado }}" target="_blank"
                                class="font-semibold col-span-2 text-center py-2 h-9 w-full bg-[#f2e22f] text-gray-800 text-sm rounded-md hover:bg-[#ebd916]  flex">
                                <img src="{{ asset('img/logomercadolibre.png') }}" alt="Mercado Libre" class="w-7 h-5 ml-6 mr-4 sm:ml-12 sm:mr-8 md:ml-16 md:mr-8 lg:mx-1 xl:ml-8 xl:mr-4 ">
                                Comprar con Mercado Libre

                            </a>
                        </div>
                    @elseif($product->amazon)
                        <div class="grid grid-cols-2 gap-3 mt-3">
                            {{-- amazon --}}
                            <a href="{{ $product->amazon }}" target="_blank"
                                class=" font-semibold col-span-2 text-center py-2 h-9 w-full bg-slate-100 border border-black text-gray-900 text-sm rounded-md hover:bg-slate-200 flex">
                                <img src="{{ asset('img/logoA.png') }}" alt="Amazon" class="w-7 h-5 ml-8 mr-6 sm:ml-16 sm:mr-8 md:ml-20 md:mr-8 lg:ml-4 lg:mr-3 xl:ml-12 xl:mr-4 ">
                                Comprar con Amazon
                            </a>
                        </div>
                    @endif
                </div>

                @include('products.front.modalProduct')
            @endforeach

        </div>
    </div>

    <script type="text/javascript">
        function toggleModal(modalID) {

            document.getElementById(modalID).classList.toggle("hidden");
            document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
            document.getElementById(modalID).classList.toggle("flex");
            document.getElementById(modalID + "-backdrop").classList.toggle("flex");
        }
    </script>

</x-app-layout>
