@props(['value'])

<label {{ $attributes->merge(['class' => 'block mb-2 text-sm font-medium text-gray-700 font-bold']) }}>
    {{ $value ?? $slot }}
</label>

{{-- font-medium text-sm text-gray-700 --}}
