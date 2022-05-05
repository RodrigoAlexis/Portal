@props(['active'])

@php
$classes = ($active ?? false)
            ? 'border-b-2 border-blue-500  text-gray-600 px-3 py-5 text-sm font-semibold'
            : 'text-gray-600 hover:border-b-2 hover:border-blue-500 px-3 py-5 text-sm font-semibold';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
