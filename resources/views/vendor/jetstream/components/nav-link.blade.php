@props(['active'])

@php
$classes = ($active ?? false)
            ? 'bg-gray-500 opacity-50 text-white px-3 py-3 rounded-md text-sm font-semibold'
            : 'text-gray-600 hover:bg-blue-500 hover:text-white px-3 py-3 rounded-md text-sm font-semibold';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
