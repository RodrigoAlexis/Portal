<div class="text-white px-6 py-4 border-0 relative  bg-red-500">
    <span class="text-md md:ml-16 xl:ml-26 mr-6 align-middle hidden sm:hidden md:hidden lg:inline-block xl:inline-block">
        <svg class="h-8 w-8 text-white" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
        </svg>
    </span>

    <span class="inline-block align-middle mr-8 text-center ">
        Si es tu primera vez iniciando sesión, te recomendamos completar tu perfil y actualizar tu contraseña, da <a class="underline" href="{{ route('profile.show')}}">clic aquí</a>
    </span>
    <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none" onclick="closeAlert(event)">
        <span>×</span>
    </button>
</div>
