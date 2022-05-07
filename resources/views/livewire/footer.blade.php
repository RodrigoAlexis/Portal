<div class="border border-gray-100">
    <footer class="p-4 bg-white sm:p-6">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="{{route('home')}}" class="flex items-center">
                    <img class="block h-16 w-auto px-6" src="http://veladorasaramo.com.mx/img/aramo.png"
                    alt="Veladoras Aramo">
                    
                </a>

                
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-4">

                {{-- Recursos --}}
                <div>
                    <h2 class="mb-6 text-sm font-bold text-gray-900 uppercase ">Recursos</h2>
                    <ul class="text-gray-600 dark:text-gray-400">
                        <li class="mb-4">
                            <a href="javascript:void(0)" class="hover:underline text-gray-500">Inicio</a>
                        </li>
                        <li class="mb-4">
                            <a href="javascript:void(0)" class="hover:underline text-gray-500">Nosotros</a>
                        </li>
                        <li class="mb-4">
                            <a href="{{ route('blogs.index') }}" class="hover:underline text-gray-500">Blog</a>
                        </li>
                        <li>
                            <a href="{{ route('buzon.index') }}" class="hover:underline text-gray-500">Buzón</a>
                        </li>
                    </ul>
                </div>

                {{-- Productos --}}
                <div>
                    <h2 class="mb-6 text-sm font-bold text-gray-900 uppercase  hover:underline"> <a
                            href="{{ route('grupos.index') }}">Productos</a> </h2>
                    <ul >
                        <li class="mb-4">
                            <a href="javascript:void(0)" class="hover:underline text-gray-500">Refacciones</a>
                        </li>
                        <li class="mb-4">
                            <a href="javascript:void(0)" class="hover:underline text-gray-500">Vidrio</a>
                        </li>
                        <li class="mb-4">
                            <a href="javascript:void(0)" class="hover:underline text-gray-500">Velas y Cirios</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover:underline text-gray-500">Eco Velas</a>
                        </li>
                    </ul>
                </div>

                {{-- Contacto --}}
                <div>
                    <h2 class="mb-6 text-sm font-bold text-gray-900 uppercase hover:underline"><a
                            href="{{ route('contacto.index') }}">Contacto</a></h2>
                    <ul class="text-gray-600 dark:text-gray-400">

                        <li class="mb-4 text-gray-500">
                            <a href="tel:+522222168201" class="hover:underline">(222) 216 8201</a>
                        </li>
                        <li class="mb-4 text-gray-500">
                            <p>
                                Calle industria #236 B
                            </p>
                            <p>
                                Loc. San Francisco Ocotlán
                            </p>
                            <p>
                                Coronango, Puebla. C.P. 72680
                            </p>

                        </li>
                        <li class="text-sm sm:text-sm md:text-md lg:text-lg text-gray-500">
                            <a href="mailto:ventas@veladoras-aramo.com"
                                class="hover:underline"><p>ventas@veladoras-aramo.com</p></a>
                        </li>
                    </ul>
                </div>

                {{-- Informacion Legal --}}
                <div>
                    <h2 class="mb-6 text-sm font-bold text-gray-900 uppercase">Legal</h2>
                    <ul class="text-gray-600 dark:text-gray-400">
                        <li class="mb-4">
                            <a href="{{ route('policy.show') }}" class="hover:underline text-gray-500">Política de Privacidad</a>
                        </li>
                        <li>
                            <a href="{{ route('terms.show') }}" class="hover:underline text-gray-500">Términos de Servicio</a>
                        </li>
                    </ul>
                </div>

                

            </div>
        </div>


        <hr class="my-6 border-gray-200 sm:mx-auto  lg:my-8">

        <div class="sm:flex sm:items-center sm:justify-between">

            <span class="text-sm text-gray-500 sm:text-center ">
                © 2022 Veladoras Aramo. Todos los Derechos Reservados.
            </span>

            <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">

                {{-- Facebook --}}
                <a target="_blank" href="https://www.facebook.com/Veladoras-Aramo-439684746829699/"
                    class="text-gray-500 hover:text-gray-900 ">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>

                {{-- Instagram --}}
                <a target="_blank" href="https://www.instagram.com/veladorasaramo/?hl=es-la"
                    class="text-gray-500 hover:text-gray-900 ">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>

                {{-- Twitter --}}
                <a href="javascript:void(0)" class="text-gray-500 hover:text-gray-900 ">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                        </path>
                    </svg>
                </a>

                {{-- Linkedin --}}
                <a target="_blank" href="https://mx.linkedin.com/company/veladoras-aramo" class="text-gray-500 hover:text-gray-900 ">
                    <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 448 512">
                        <path
                            d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                        </path>
                    </svg>
                </a>

                {{-- <a target="_blank" href="https://www.youtube.com/channel/UC_uv5Kgt6gReFr_DTQboBEQ" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <svg viewBox="0 0 200 60" preserveAspectRatio="xMidYMid meet" focusable="false" class="w-16 h-5">
                        <g viewBox="0 0 200 60" preserveAspectRatio="xMidYMid meet">
                            <g>
                              <path fill="#FF0000" d="M63,14.87c-0.72-2.7-2.85-4.83-5.56-5.56C52.54,8,32.88,8,32.88,8S13.23,8,8.32,9.31
                                c-2.7,0.72-4.83,2.85-5.56,5.56C1.45,19.77,1.45,30,1.45,30s0,10.23,1.31,15.13c0.72,2.7,2.85,4.83,5.56,5.56
                                C13.23,52,32.88,52,32.88,52s19.66,0,24.56-1.31c2.7-0.72,4.83-2.85,5.56-5.56C64.31,40.23,64.31,30,64.31,30
                                S64.31,19.77,63,14.87z"></path>
                              <polygon fill="#FFFFFF" points="26.6,39.43 42.93,30 26.6,20.57"></polygon>
                            </g>
                            <g>
                              <g>
                                <path fill="#282828" d="M92.69,48.03c-1.24-0.84-2.13-2.14-2.65-3.91c-0.52-1.77-0.79-4.12-0.79-7.06v-4
                                  c0-2.97,0.3-5.35,0.9-7.15c0.6-1.8,1.54-3.11,2.81-3.93c1.27-0.82,2.94-1.24,5.01-1.24c2.04,0,3.67,0.42,4.9,1.26
                                  c1.23,0.84,2.13,2.15,2.7,3.93c0.57,1.78,0.85,4.16,0.85,7.12v4c0,2.94-0.28,5.3-0.83,7.08c-0.55,1.78-1.45,3.09-2.7,3.91
                                  c-1.24,0.82-2.93,1.24-5.06,1.24C95.65,49.29,93.93,48.87,92.69,48.03z M99.66,43.71c0.34-0.9,0.52-2.37,0.52-4.4v-8.59
                                  c0-1.98-0.17-3.42-0.52-4.34c-0.34-0.91-0.95-1.37-1.82-1.37c-0.84,0-1.43,0.46-1.78,1.37c-0.34,0.91-0.52,2.36-0.52,4.34v8.59
                                  c0,2.04,0.16,3.51,0.49,4.4c0.33,0.9,0.93,1.35,1.8,1.35C98.71,45.06,99.31,44.61,99.66,43.71z"></path>
                                <path fill="#282828" d="M188.16,37.13v1.39c0,1.77,0.05,3.09,0.16,3.98c0.1,0.88,0.32,1.53,0.65,1.93
                                  c0.33,0.4,0.84,0.61,1.53,0.61c0.93,0,1.57-0.36,1.91-1.08c0.34-0.72,0.53-1.92,0.56-3.6l5.35,0.31
                                  c0.03,0.24,0.04,0.57,0.04,0.99c0,2.55-0.7,4.45-2.09,5.71c-1.39,1.26-3.36,1.89-5.91,1.89c-3.06,0-5.2-0.96-6.43-2.88
                                  c-1.23-1.92-1.84-4.88-1.84-8.9v-4.81c0-4.14,0.64-7.15,1.91-9.06c1.27-1.9,3.45-2.85,6.54-2.85c2.13,0,3.76,0.39,4.9,1.17
                                  c1.14,0.78,1.94,1.99,2.41,3.64c0.46,1.65,0.7,3.93,0.7,6.83v4.72H188.16z M188.95,25.53c-0.31,0.39-0.52,1.03-0.63,1.91
                                  c-0.11,0.88-0.16,2.23-0.16,4.02v1.98h4.54v-1.98c0-1.77-0.06-3.11-0.18-4.02c-0.12-0.91-0.34-1.56-0.65-1.93
                                  c-0.31-0.37-0.8-0.56-1.46-0.56C189.75,24.94,189.26,25.14,188.95,25.53z"></path>
                                <path fill="#282828" d="M77.59,36.61l-7.06-25.49h6.16l2.47,11.55c0.63,2.85,1.09,5.27,1.39,7.28h0.18
                                  c0.21-1.44,0.67-3.85,1.39-7.24l2.56-11.6h6.16L83.7,36.61v12.23h-6.11V36.61z"></path>
                                <path fill="#282828" d="M126.45,21.28v27.55h-4.85l-0.54-3.37h-0.13c-1.32,2.55-3.3,3.82-5.93,3.82c-1.83,0-3.18-0.6-4.05-1.8
                                  c-0.87-1.2-1.3-3.07-1.3-5.62V21.28h6.2v20.23c0,1.23,0.13,2.11,0.4,2.63c0.27,0.52,0.72,0.79,1.35,0.79
                                  c0.54,0,1.06-0.16,1.55-0.49c0.49-0.33,0.86-0.75,1.1-1.26V21.28H126.45z"></path>
                                <path fill="#282828" d="M158.27,21.28v27.55h-4.85l-0.54-3.37h-0.13c-1.32,2.55-3.3,3.82-5.93,3.82c-1.83,0-3.18-0.6-4.05-1.8
                                  c-0.87-1.2-1.3-3.07-1.3-5.62V21.28h6.2v20.23c0,1.23,0.13,2.11,0.4,2.63c0.27,0.52,0.72,0.79,1.35,0.79
                                  c0.54,0,1.06-0.16,1.55-0.49c0.49-0.33,0.86-0.75,1.1-1.26V21.28H158.27z"></path>
                                <path fill="#282828" d="M143.31,16.11h-6.16v32.72h-6.07V16.11h-6.16v-4.99h18.38V16.11z"></path>
                                <path fill="#282828" d="M178.8,25.69c-0.38-1.74-0.98-3-1.82-3.78c-0.84-0.78-1.99-1.17-3.46-1.17c-1.14,0-2.2,0.32-3.19,0.97
                                  c-0.99,0.64-1.75,1.49-2.29,2.54h-0.05l0-14.52h-5.98v39.11h5.12l0.63-2.61h0.13c0.48,0.93,1.2,1.66,2.16,2.2
                                  c0.96,0.54,2.02,0.81,3.19,0.81c2.1,0,3.64-0.97,4.63-2.9c0.99-1.93,1.48-4.95,1.48-9.06v-4.36
                                  C179.36,29.84,179.17,27.43,178.8,25.69z M173.11,36.93c0,2.01-0.08,3.58-0.25,4.72c-0.16,1.14-0.44,1.95-0.83,2.43
                                  c-0.39,0.48-0.91,0.72-1.57,0.72c-0.51,0-0.98-0.12-1.42-0.36c-0.43-0.24-0.79-0.6-1.06-1.08V27.71
                                  c0.21-0.75,0.57-1.36,1.08-1.84c0.51-0.48,1.06-0.72,1.66-0.72c0.63,0,1.12,0.25,1.46,0.74c0.34,0.49,0.58,1.33,0.72,2.49
                                  c0.13,1.17,0.2,2.83,0.2,4.99V36.93z"></path>
                              </g>
                            </g>
                          </g></svg> 
                </a> --}}
            </div>
        </div>
    </footer>

</div>
