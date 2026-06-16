@props([
    'size' => null,
])

@php
    $sizes = [
        'xs' => 'kbd-xs',
        'sm' => 'kbd-sm',
        'md' => 'kbd-md',
        'lg' => 'kbd-lg',
        'xl' => 'kbd-xl',
    ];
@endphp

<kbd {{ $attributes->class(['kbd', $sizes[$size] ?? null]) }}>
    {{ $slot }}
</kbd>
