<div class="text-white px-6 py-4 border-0 relative  bg-red-500">
    <span class="text-xl md:ml-16 lg:ml-20 xl:ml-52 mr-6 align-middle hidden sm:hidden md:hidden lg:inline-block xl:inline-block">
        <svg class="h-8 w-8 text-white"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  
            <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2" />  
            <line x1="12" y1="8" x2="12" y2="12" />  
            <line x1="12" y1="16" x2="12.01" y2="16" />
        </svg>
    </span>
    <span class="inline-block align-middle mr-8 text-center ">
      Si es tu primera vez iniciando sesión, te recomendamos completar tu perfil y actulizar tu contraseña, da <a class="underline" href="{{ route('profile.show')}}">clic aquí</a>
    </span>
    <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none" onclick="closeAlert(event)">
      <span>×</span>
  
    </button>
  </div>
  
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
