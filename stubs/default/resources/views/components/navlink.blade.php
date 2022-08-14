@props(['active'])

@php
$classes = $active ?? false ? 'inline-flex items-center px-2 font-semibold pb-4 pt-5 border-b-2 border-blue-400 font-medium leading-5 text-gray-900 focus:outline-none focus:border-blue-600 transition duration-150 ease-in-out' : 'inline-flex items-center px-2 pb-4 pt-5 border-b-2 border-transparent font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp
<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
