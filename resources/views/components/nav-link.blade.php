@props(['active'])

@php
$classes = ($active ?? false)
            ? 'nav-link text-decoration-underline text-white'
            : 'nav-link text-decoration-none text-white';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
