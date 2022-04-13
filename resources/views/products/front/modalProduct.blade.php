
   <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="{{$product->slug}}">
    <div class="relative w-auto my-6 mx-auto max-w-3xl">
      <!--content-->
      <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
        <!--header-->
        <div class="flex items-start justify-between p-5 border-b border-solid border-slate-200 rounded-t">
          <h3 class="text-3xl text-gray-600 font-semibold modal-title">
            {{$product->name}}
          </h3>
          <button class="p-1 ml-auto bg-transparent border-0 text-black  float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModal('{{$product->slug}}')">
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
        <div class=" items-center p-6 border-t border-solid border-slate-200 rounded-b">
          <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 text-center gap-4">

            @if($product->mercado && $product->amazon)
              <div>
                <a href="{{$product->mercado}}" type="button" class=" w-full border border-1 border-yellow-300 text-gray-900 bg-[#f2e22f] focus:ring-4 focus:outline-none focus:ring-[#F7BE38]/50 font-semibold rounded-lg text-sm px-24 py-2.5 text-center inline-flex items-center p " target="_blank">
                  {{-- <svg class="w-4 h-4 mr-2 -ml-1" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="paypal" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M111.4 295.9c-3.5 19.2-17.4 108.7-21.5 134-.3 1.8-1 2.5-3 2.5H12.3c-7.6 0-13.1-6.6-12.1-13.9L58.8 46.6c1.5-9.6 10.1-16.9 20-16.9 152.3 0 165.1-3.7 204 11.4 60.1 23.3 65.6 79.5 44 140.3-21.5 62.6-72.5 89.5-140.1 90.3-43.4 .7-69.5-7-75.3 24.2zM357.1 152c-1.8-1.3-2.5-1.8-3 1.3-2 11.4-5.1 22.5-8.8 33.6-39.9 113.8-150.5 103.9-204.5 103.9-6.1 0-10.1 3.3-10.9 9.4-22.6 140.4-27.1 169.7-27.1 169.7-1 7.1 3.5 12.9 10.6 12.9h63.5c8.6 0 15.7-6.3 17.4-14.9 .7-5.4-1.1 6.1 14.4-91.3 4.6-22 14.3-19.7 29.3-19.7 71 0 126.4-28.8 142.9-112.3 6.5-34.8 4.6-71.4-23.8-92.6z"></path></svg> --}}
                  <img src="{{ asset('img/logomercadolibre.png') }}" alt="Mercado Libre" class="w-7 h-5 mr-2 -ml-1">
                  Mercado Libre
                </a>
              </div>

              <div>
                <a href="{{$product->amazon}}" type="button" class="w-full text-black bg-slate-100 border border-1 border-gray-700  font-semibold rounded-lg text-sm px-28 py-2.5 text-center inline-flex items-center mr-2 mb-2" target="_blank">
                  {{-- <svg class="w-4 h-4 mr-2 -ml-1" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="paypal" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M111.4 295.9c-3.5 19.2-17.4 108.7-21.5 134-.3 1.8-1 2.5-3 2.5H12.3c-7.6 0-13.1-6.6-12.1-13.9L58.8 46.6c1.5-9.6 10.1-16.9 20-16.9 152.3 0 165.1-3.7 204 11.4 60.1 23.3 65.6 79.5 44 140.3-21.5 62.6-72.5 89.5-140.1 90.3-43.4 .7-69.5-7-75.3 24.2zM357.1 152c-1.8-1.3-2.5-1.8-3 1.3-2 11.4-5.1 22.5-8.8 33.6-39.9 113.8-150.5 103.9-204.5 103.9-6.1 0-10.1 3.3-10.9 9.4-22.6 140.4-27.1 169.7-27.1 169.7-1 7.1 3.5 12.9 10.6 12.9h63.5c8.6 0 15.7-6.3 17.4-14.9 .7-5.4-1.1 6.1 14.4-91.3 4.6-22 14.3-19.7 29.3-19.7 71 0 126.4-28.8 142.9-112.3 6.5-34.8 4.6-71.4-23.8-92.6z"></path></svg> --}}
                  <img src="{{ asset('img/logoA.png') }}" alt="Amazon" class="w-7 h-5 mr-2 -ml-1">
                  Amazon
                </a>
              </div>
            @elseif($product->mercado)
              <div>

              </div>
              <div>
                <a href="{{$product->mercado}}" type="button" class=" w-full border border-1 border-yellow-300 text-gray-900 bg-[#f2e22f] focus:ring-4 focus:outline-none focus:ring-[#F7BE38]/50 font-semibold rounded-lg text-sm px-24 py-2.5 text-center inline-flex items-center p" target="_blank">
                  {{-- <svg class="w-4 h-4 mr-2 -ml-1" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="paypal" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M111.4 295.9c-3.5 19.2-17.4 108.7-21.5 134-.3 1.8-1 2.5-3 2.5H12.3c-7.6 0-13.1-6.6-12.1-13.9L58.8 46.6c1.5-9.6 10.1-16.9 20-16.9 152.3 0 165.1-3.7 204 11.4 60.1 23.3 65.6 79.5 44 140.3-21.5 62.6-72.5 89.5-140.1 90.3-43.4 .7-69.5-7-75.3 24.2zM357.1 152c-1.8-1.3-2.5-1.8-3 1.3-2 11.4-5.1 22.5-8.8 33.6-39.9 113.8-150.5 103.9-204.5 103.9-6.1 0-10.1 3.3-10.9 9.4-22.6 140.4-27.1 169.7-27.1 169.7-1 7.1 3.5 12.9 10.6 12.9h63.5c8.6 0 15.7-6.3 17.4-14.9 .7-5.4-1.1 6.1 14.4-91.3 4.6-22 14.3-19.7 29.3-19.7 71 0 126.4-28.8 142.9-112.3 6.5-34.8 4.6-71.4-23.8-92.6z"></path></svg> --}}
                  <img src="{{ asset('img/logomercadolibre.png') }}" alt="Mercado Libre" class="w-7 h-5 mr-2 -ml-1">
                  Mercado Libre
                </a>
              </div>
            @elseif($product->amazon)
              <div>

              </div>
              <div>
                <a href="{{$product->amazon}}" type="button" class="w-full text-black bg-slate-100 border border-1 border-gray-700  font-semibold rounded-lg text-sm px-28 py-2.5 text-center inline-flex items-center mr-2 mb-2" target="_blank">
                  {{-- <svg class="w-4 h-4 mr-2 -ml-1" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="paypal" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M111.4 295.9c-3.5 19.2-17.4 108.7-21.5 134-.3 1.8-1 2.5-3 2.5H12.3c-7.6 0-13.1-6.6-12.1-13.9L58.8 46.6c1.5-9.6 10.1-16.9 20-16.9 152.3 0 165.1-3.7 204 11.4 60.1 23.3 65.6 79.5 44 140.3-21.5 62.6-72.5 89.5-140.1 90.3-43.4 .7-69.5-7-75.3 24.2zM357.1 152c-1.8-1.3-2.5-1.8-3 1.3-2 11.4-5.1 22.5-8.8 33.6-39.9 113.8-150.5 103.9-204.5 103.9-6.1 0-10.1 3.3-10.9 9.4-22.6 140.4-27.1 169.7-27.1 169.7-1 7.1 3.5 12.9 10.6 12.9h63.5c8.6 0 15.7-6.3 17.4-14.9 .7-5.4-1.1 6.1 14.4-91.3 4.6-22 14.3-19.7 29.3-19.7 71 0 126.4-28.8 142.9-112.3 6.5-34.8 4.6-71.4-23.8-92.6z"></path></svg> --}}
                  <img src="{{ asset('img/logoA.png') }}" alt="Amazon" class="w-7 h-5 mr-2 -ml-1" >
                  Amazon
                </a>
              </div>
            @endif

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="{{$product->slug}}-backdrop"></div>
