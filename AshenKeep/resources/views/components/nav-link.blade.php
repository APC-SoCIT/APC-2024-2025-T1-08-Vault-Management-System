@props(['active'])

@php
$classes = ($active ?? false)
    ? 'inline-flex items-center px-8 py-4 font-semibold rounded border-transparent text-xl leading-5 text-black dark:text-gray-400 hover:text-white focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 focus:border-gray-300 dark:focus:border-gray-700 transition duration-150 ease-in-out'
    : 'inline-flex items-center px-8 py-4 font-semibold rounded border-transparent text-xl leading-5 text-black dark:text-gray-400 hover:text-white focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 focus:border-gray-300 dark:focus:border-gray-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
