@foreach ($productos as $product)
<div x-show="open" class=" fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">


    {{-- En estos elementos no funciona Alpine  --}}
    <div  class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center " >
      
        {{-- Fondo que sale detras del modal --}}
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
    
        {{-- Elemento que centra el modal --}}
        <span class="hidden  align-middle h-screen" aria-hidden="true">&#8203;</span>
    {{-- Hasta aqui --}}

        {{-- body del modal --}}
        <div @click.away="open = false" class=" relative inline-block rounded-lg text-left overflow-hidden shadow-xl top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
            <div class="bg-white">
                {{-- Modal header --}}
                <div class="bg-gradient-to-r from-indigo-200 via-purple-200 to-pink-200 px-6 py-3 sm:px-6 mb-1 grid grid-cols-2" >

                    <div class=" text-gray-600 font-bold text-lg ">
                        Nombre del producto
                    </div>

                    <div>
                        <button @click="open = false" type="button" class=" text-gray-500 bg-transparent  rounded-lg text-sm  ml-auto float-right items-center" data-modal-toggle="large-modal">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                        </button>
                    </div>   
                </div>

                {{-- Modal body --}}
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4 grid grid-cols-1 md:grid-cols-2 gap-3">
                    
                    {{-- imagen --}}
                    <div>
                        {{-- <img class="w-full h-full bg-cover bg-center" style="background-image: https://cdn.pixabay.com/photo/2022/01/29/16/21/fisherman-6977946_960_720.jpg"> --}}
                        <img src="https://cdn.pixabay.com/photo/2022/01/29/16/21/fisherman-6977946_960_720.jpg" alt="Producto" class="w-full h-80 bg-cover bg-center">
                    </div>

                    {{-- Tabla de datos --}}
                    <div>
                        <table class="min-w-full border-solid border-1">
                            <thead>
                                
                                <tr>
                                    <th
                                        class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Piezas por caja
                                    </th>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="text-sm leading-5 text-gray-900">Software Engineer</div>
                                    </td>
                                </tr>
                                <tr>
                                    <th
                                        class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Etiqueta
                                    </th>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="text-sm leading-5 text-gray-900">Software Engineer</div>
                                        <div class="text-sm leading-5 text-gray-900">Software Engineer</div>
                                        <div class="text-sm leading-5 text-gray-900">Software Engineer</div>
                                        <div class="text-sm leading-5 text-gray-900">Software Engineer</div>
                                        <div class="text-sm leading-5 text-gray-900">Software Engineer</div>
                                    </td>
                                </tr>
                                <tr>
                                    <th
                                        class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Color
                                    </th>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="text-sm leading-5 text-gray-900">Software Engineer</div>
                                        <div class="text-sm leading-5 text-gray-900">Software Engineer</div>
                                        <div class="text-sm leading-5 text-gray-900">Software Engineer</div>
                                        <div class="text-sm leading-5 text-gray-900">Software Engineer</div>
                                    </td>
                                </tr>
                                    
                                
                            </thead>
                        </table>
                    </div>
                    
                </div>

            </div>
            
        </div>
    </div>
</div>
@endforeach
