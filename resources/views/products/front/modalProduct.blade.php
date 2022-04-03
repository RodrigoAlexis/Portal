
   <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="{{$product->slug}}">
    <div class="relative w-auto my-6 mx-auto max-w-3xl">
      <!--content-->
      <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
        <!--header-->
        <div class="flex items-start justify-between p-5 border-b border-solid border-slate-200 rounded-t">
          <h3 class="text-3xl font-semibold modal-title">
            {{$product->name}}
          </h3>
          <button class="p-1 ml-auto bg-transparent border-0 text-black  float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModal('{{$product->name}}')">
            <span class="bg-transparent text-black  h-6 w-6 text-2xl block outline-none focus:outline-none">
              ×
            </span>
          </button>
        </div>
        <!--body-->
        <div class="relative p-6 flex-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              {{-- imagen --}}
              <div>
                  <div>
                      <div class="block h-64 w-full bg-gray-300 bg-center bg-cover rounded-lg shadow-md" style="background-image: url(@if($product->image) {{Storage::url($product->image->url)}} @else https://cdn.pixabay.com/photo/2022/01/29/16/21/fisherman-6977946_960_720.jpg @endif)"></div>
                  </div>
              </div> 
              {{-- Tabla de datos --}}
              <div>
                <div >
                  <table class="min-w-full ">
                      <thead>
                          
                          <tr>
                              <th
                                  class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                  Piezas por caja
                              </th>
                              <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                  <div class="text-sm leading-5 text-gray-900">{{$product->piezas}}</div>
                              </td>
                          </tr>
                          <tr>
                              <th
                                  class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                  Etiqueta
                              </th>
                              <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                  <p class="text-sm leading-5 text-gray-900">{{$product->etiqueta1}}</p>
                                  <p class="text-sm leading-5 text-gray-900">{{$product->etiqueta2}}</p>
                              </td>
                          </tr>
                          <tr>
                              <th
                                  class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                  Color
                              </th>
                              <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                  <p class="text-sm leading-5 text-gray-900">{{$product->color1}}</p>
                                  <p class="text-sm leading-5 text-gray-900">{{$product->color2}}</p>
                                  <p class="text-sm leading-5 text-gray-900">{{$product->color3}}</p>
                                  <p class="text-sm leading-5 text-gray-900">{{$product->color4}}</p>
                              </td>
                          </tr>
                              
                          
                      </thead>
                  </table>
              </div>
              </div> 
            </div>
          
        </div>
        <!--footer-->
        <div class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">
          
        </div>
      </div>
    </div>
  </div>
  <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="{{$product->slug}}-backdrop"></div>
