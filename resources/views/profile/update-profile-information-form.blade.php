<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Información del Perfil') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Actualice la información de perfil y la dirección de correo electrónico de su cuenta.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        {{-- @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                            wire:model="photo"
                            x-ref="photo"
                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-jet-label for="photo" value="{{ __('Foto') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview" style="display: none;">
                    <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                          x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Selecciona una Nueva Foto') }}
                </x-jet-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Eliminar foto') }}
                    </x-jet-secondary-button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif --}}

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
            <!-- Name -->
            <div>
                <x-jet-label for="name" value="{{ __('Nombre') }}" />
                <x-jet-input id="name" name="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
                <x-jet-input-error for="Nombre" class="mt-2" />
            </div>
            <!-- Paterno -->
            <div >
                <x-jet-label for="paterno" value="{{ __('Apellido Paterno') }}" />
                <x-jet-input id="paterno" name="paterno" type="text" class="mt-1 block w-full" wire:model.defer="state.paterno" autocomplete="paterno" />
                <x-jet-input-error for="Apellido Paterno" class="mt-2" />
            </div>
            <!-- Materno -->
            <div>
                <x-jet-label for="materno" value="{{ __('Apellido Materno') }}" />
                <x-jet-input id="materno" name="materno" type="text" class="mt-1 block w-full" wire:model.defer="state.materno" autocomplete="materno" />
                <x-jet-input-error for="Apellido Materno" class="mt-2" />
            </div>
            <!-- Email -->
            <div class="col-span-1 sm:col-span-1 md:col-span-1  lg:col-span-2">
                <x-jet-label for="email" value="{{ __('Correo Elecrónico') }}" />
                <x-jet-input id="email" name="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
                <x-jet-input-error for="Correo Electrónico" class="mt-2" />
            </div>
            <!-- Telefono -->
            <div>
                <x-jet-label for="telefono" value="{{ __('Teléfono') }}" />
                <x-jet-input id="telefono" name="telefono" type="text" class="mt-1 block w-full" wire:model.defer="state.telefono" autocomplete="telefono" />
                <x-jet-input-error for="Telefono" class="mt-2" />
            </div>
            {{-- IsClient? --}}
            <div>
                <x-jet-label for="isClient" value="{{ __('¿Es cliente o proveedor?') }}" />
                <div >
                    <select id="isClient" name="isClient" wire:model.defer="state.isClient" class="form-select w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" placeholder="Seleccione una opción">
                        <option value="Soy cliente o proveedor">Si, soy cliente o proveedor</option>
                        <option value="No soy cliente o proveedor">No soy cliente o proveedor</option>
                    </select>
                  </div>
            </div>
            <!-- Razon Social -->
            <div class="col-span-1 sm:col-span-2 md:col-span-2  lg:col-span-2">
                <x-jet-label for="razon_social" value="{{ __('Razón Social') }}" />
                <x-jet-input id="razon_social" name="razon_social" type="text" class="mt-1 block w-full" wire:model.defer="state.razon_social" autocomplete="razon_social" />
                <x-jet-input-error for="Razón Social" class="mt-2" />
            </div> 
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Guardado.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Guardar') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
