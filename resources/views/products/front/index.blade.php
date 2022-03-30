<x-app-layout>
    <div x-data="{ open: false }"  class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        {{-- grid de los post publicados --}}
        <div  class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-8">
            @foreach ($products as $product)

                    {{-- <div>
                        
                        <a type="button"  @click="open = true" href="" class="block h-64 w-full bg-gray-300 bg-center bg-cover rounded-lg shadow-md" style="background-image: url(@if($product->image) {{Storage::url($product->image->url)}} @else https://cdn.pixabay.com/photo/2022/01/29/16/21/fisherman-6977946_960_720.jpg @endif)"></a>
                        <div class="flex items-center justify-between mt-3">
                            <div>
                                <div  class="font-bold uppercase text-gray-600 text-md">{{$product->name}}</div>
                                <div class="flex items-center">
                                    <span class="text-xs font-medium text-gray-600">por</span>
                                    <span class="text-xs font-medium ml-1 text-indigo-500">Veladoras Aramo</span>
                                </div>
                            </div>
                            <button {{$product->id}}  @click="open = !open"  type="button" class="flex items-center h-8 bg-indigo-200 text-indigo-600 text-sm px-2 rounded">Ver más</button>  
                        </div>
                    </div> --}}


                    <div class="w-full lg:max-w-full lg:flex shadow-md">

                        {{-- Imagen  Agregar la palabra zoom a la propiedad class para hacer zoom a la imagen--}}
                        <div class="h-48 lg:h-72 lg:w-52 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden object-cover " style="background-image: url(@if($product->image) {{Storage::url($product->image->url)}} @else https://cdn.pixabay.com/photo/2022/01/29/16/21/fisherman-6977946_960_720.jpg @endif)" title="Product"></div>

                        <div class="w-full bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                            
                            <div class="mb-8">
                           
                                <div class="text-gray-600 font-bold text-xl mb-2 ">{{$product->name}}</div>

                                <div class="grid grid-cols-2">
                                    <div class="border-b border-gray-200">
                                        <table class="min-w-full ">
                                            <thead>
                                                <tr>
                                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                        Etiqueta
                                                    </th>                                                
                                                </tr>
                                            </thead>
                        
                                            <tbody class="bg-white">
                                                    <tr>
                                                        <td class="px-6 py-4  border-r border-gray-200 text-sm">
                                                            {!!$product->etiqueta!!}
                                                        </td>
                                                    </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="border-b border-gray-200">
                                        <table class="min-w-full ">
                                            <thead>
                                                <tr>
                                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                        Color
                                                    </th>                                                
                                                </tr>
                                            </thead>
                        
                                            <tbody class="bg-white">
                                                    <tr>
                                                        <td class="px-6 py-4  border-l border-gray-200 text-sm">
                                                            {!!$product->color!!}
                                                        </td>
                                                    </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            {{-- <hr class="mb-2 border-t"/> --}}

                            {{-- Piezas por caja --}}
                            <div class="flex items-center justify-between">
                                <div class="text-sm">
                                    <div class="flex items-center">
                                        <span class="text-sm font-medium text-gray-600">Piezas por Caja:</span>
                                        <span class="text-sm font-medium ml-1 text-indigo-500">{{$product->piezas}}</span>
                                    </div>
                                </div>
                                
                                <button  @click="open = !open"  type="button" class="hidden sm:hidden md:inline lg:inline 2xl:inline h-8 bg-indigo-200 text-indigo-600 text-sm px-2 rounded">Más información</button>  
                                <button  @click="open = !open"  type="button" class="inlilne sm:inline md:hidden lg:hidden 2xl:hidden h-8 bg-indigo-200 text-indigo-600 text-sm px-2 rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </button>  
                            </div>

                        </div>
                    </div>
            @endforeach
            
        </div>

        @include('products.front.modalProduct')
    </div>

    
</x-app-layout>



