<x-guest-layout>
    <div class="pt-4 bg-white">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div class="mt-10">
                <img class="hidden lg:block h-32 w-auto" src="{{ asset('img/logo-veladoras.png') }}"
                        alt="Veladoras Aramo">
            </div>

            <div class="w-full sm:max-w-2xl mt-6 p-6 bg-white overflow-hidden sm:rounded-lg prose shadow-xl">
                {!! $policy !!}
            </div>
        </div>
    </div>
</x-guest-layout>
