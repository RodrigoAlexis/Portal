<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
    id="{{ $bu->id }}">
    <div class="relative w-auto my-6 mx-auto max-w-3xl">
        <!--content-->
        <div
            class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
            <!--header-->
            <div class="flex items-start justify-between p-5 border-b border-solid border-slate-200 rounded-t">
                <h3 class="text-2xl text-gray-600 font-semibold modal-title">
                    Información de la Denuncia
                </h3>
                <button
                    class="p-1 ml-auto bg-transparent border-0 text-black  float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                    onclick="toggleModalInfo('{{ $bu->id }}')">
                    <span class="bg-transparent text-black  h-6 w-6 text-2xl block outline-none focus:outline-none">
                        ×
                    </span>
                </button>
            </div>
            <!--body-->
            <div class="overflow-y-auto h-64">
                <div class="relative p-6 flex-auto">
                    {{-- <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4">
                        <div
                            class="border-b col-span-1 sm:col-span-1 md:col-span-2 lg:col-span-2 text-lg font-bold text-indigo-500">
                            Folio: {{ $bu->folio }}
                        </div>
                        <div>
                            <x-jet-label value="{{ __('Modo de Canal') }}" />
                            <x-jet-input class="block mt-1 w-full" type="text" value="{{ $bu->canal }}" readonly />
                        </div>

                        <div>
                            <x-jet-label value="{{ __('Categoría') }}" />
                            <x-jet-input class="block mt-1 w-full" type="text" value="{{ $bu->categoria }}" readonly />
                        </div>

                        <div>
                            <x-jet-label value="{{ __('Tipo') }}" />
                            <x-jet-input class="block mt-1 w-full" type="text" value="{{ $bu->tipo }}" readonly />
                        </div>

                        <div>
                            
                        </div>

                        <div
                            class=" col-span-1 sm:col-span-1 md:col-span-2 lg:col-span-2 text-lg font-bold text-gray-600">
                            <x-jet-label value="{{ __('Información del Usuario') }}" />
                            >
                        </div>

                        <div>
                            <x-jet-label value="{{ __('Tipo') }}" />
                            <x-jet-input class="block mt-1 w-full" type="text" value="{{ $bu->tipo }}" readonly />
                        </div>




                    </div> --}}
                    <div class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">
                        <div class="flex flex-wrap" id="tabs-id">
                            <div class="w-full">
                                <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
                                    <div class="px-4 py-5 flex-auto">
                                        <div class="tab-content tab-space">
                                            <div class="block" id="tab-profile">
                                                <p>
                                                    Collaboratively administrate empowered markets via
                                                    plug-and-play networks. Dynamically procrastinate B2C users
                                                    after installed base benefits.
                                                    <br />
                                                    <br />
                                                    Dramatically visualize customer directed convergence
                                                    without revolutionary ROI.
                                                </p>
                                            </div>
                                            <div class="hidden" id="tab-settings">
                                                <p>
                                                    Completely synergize resource taxing relationships via
                                                    premier niche markets. Professionally cultivate one-to-one
                                                    customer service with robust ideas.
                                                    <br />
                                                    <br />
                                                    Dynamically innovate resource-leveling customer service for
                                                    state of the art customer service.
                                                </p>
                                            </div>
                                            <div class="hidden" id="tab-options">
                                                <p>
                                                    Efficiently unleash cross-media information without
                                                    cross-media value. Quickly maximize timely deliverables for
                                                    real-time schemas.
                                                    <br />
                                                    <br />
                                                    Dramatically maintain clicks-and-mortar solutions
                                                    without functional solutions.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer-->
            <div class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">
                <ul class="flex mb-0 list-none flex-wrap pt-3 pb-4 flex-row">
                    <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                        <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-white bg-pink-600"
                            onclick="changeAtiveTab(event,'tab-profile')">
                            <i class="fas fa-space-shuttle text-base mr-1"></i> Profile
                        </a>
                    </li>
                    <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                        <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-pink-600 bg-white"
                            onclick="changeAtiveTab(event,'tab-settings')">
                            <i class="fas fa-cog text-base mr-1"></i> Settings
                        </a>
                    </li>
                    <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                        <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-pink-600 bg-white"
                            onclick="changeAtiveTab(event,'tab-options')">
                            <i class="fas fa-briefcase text-base mr-1"></i> Options
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="{{ $bu->id }}-backdrop">

    
</div>

<script type="text/javascript">
    function changeAtiveTab(event, tabID) {
        let element = event.target;
        while (element.nodeName !== "A") {
            element = element.parentNode;
        }
        ulElement = element.parentNode.parentNode;
        aElements = ulElement.querySelectorAll("li > a");
        tabContents = document.getElementById("tabs-id").querySelectorAll(".tab-content > div");
        for (let i = 0; i < aElements.length; i++) {
            aElements[i].classList.remove("text-white");
            aElements[i].classList.remove("bg-pink-600");
            aElements[i].classList.add("text-pink-600");
            aElements[i].classList.add("bg-white");
            tabContents[i].classList.add("hidden");
            tabContents[i].classList.remove("block");
        }
        element.classList.remove("text-pink-600");
        element.classList.remove("bg-white");
        element.classList.add("text-white");
        element.classList.add("bg-pink-600");
        document.getElementById(tabID).classList.remove("hidden");
        document.getElementById(tabID).classList.add("block");
    }
</script>
