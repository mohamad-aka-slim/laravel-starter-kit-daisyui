@props(['as' => 'ul', 'size' => null, 'horizontal' => false])

@php
    $sizes = ['xs' => 'menu-xs', 'sm' => 'menu-sm', 'md' => 'menu-md', 'lg' => 'menu-lg', 'xl' => 'menu-xl'];
@endphp

<{{ $as }} {{ $attributes->class(collect(['menu', $sizes[$size] ?? null, $horizontal ? 'menu-horizontal' : null])->filter()->implode(' ')) }}>
    {{ $slot }}
</{{ $as }}>
