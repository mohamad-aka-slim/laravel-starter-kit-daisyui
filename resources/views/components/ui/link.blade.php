@props([
    'href' => '#',
    'variant' => null,
    'hover' => false,
])

@php
    $variants = [
        'neutral' => 'link-neutral',
        'primary' => 'link-primary',
        'secondary' => 'link-secondary',
        'accent' => 'link-accent',
        'success' => 'link-success',
        'info' => 'link-info',
        'warning' => 'link-warning',
        'error' => 'link-error',
    ];
@endphp

<a href="{{ $href }}" {{ $attributes->class(['link', $variants[$variant] ?? null, $hover ? 'link-hover' : null]) }}>
    {{ $slot }}
</a>
