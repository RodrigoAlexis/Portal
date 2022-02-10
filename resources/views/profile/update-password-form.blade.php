<x-jet-form-section submit="updatePassword">
    <x-slot name="title">
        {{ __('Actualizar Contraseña') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Si inicio sesión registrandose, asegurese de ingresar una nueva contraseña. Si inicio sesión con Google o Facebook, asegurese de ingresar una contraseña para hacer uso de todas las funcionalidades. Asegúrese de que su cuenta esté usando una contraseña de 8 caracteres como máximo y con caracteres aleatorios para mantenerse seguro.') }}
    </x-slot>

    <x-slot name="form">
        {{-- <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="current_password" value="{{ __('Contraseña Actual') }}" />
            <x-jet-input id="current_password" type="password" class="mt-1 block w-full" wire:model.defer="state.current_password" autocomplete="current-password" />
            <x-jet-input-error for="current_password" class="mt-2" />
        </div> --}}

        <div class="col-span-6 sm:col-span-4 mt-6">
            <x-jet-label for="password" value="{{ __('Nueva Contraseña') }}" />
            <x-jet-input id="password" type="password" class="mt-1 block w-full" wire:model.defer="state.password" autocomplete="new-password" />
            <x-jet-input-error for="password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4 mt-6">
            <x-jet-label for="password_confirmation" value="{{ __('Confirmar Contraseña') }}" />
            <x-jet-input id="password_confirmation" type="password" class="mt-1 block w-full" wire:model.defer="state.password_confirmation" autocomplete="new-password" />
            <x-jet-input-error for="password_confirmation" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Guardado.') }}
        </x-jet-action-message>

        <x-jet-button>
            {{ __('Guardar') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
