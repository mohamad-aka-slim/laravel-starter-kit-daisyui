@props([
    'variant' => null,
    'size' => null,
])

@php
    $variants = [
        'neutral' => 'status-neutral',
        'primary' => 'status-primary',
        'secondary' => 'status-secondary',
        'accent' => 'status-accent',
        'info' => 'status-info',
        'success' => 'status-success',
        'warning' => 'status-warning',
        'error' => 'status-error',
    ];

    $sizes = [
        'xs' => 'status-xs',
        'sm' => 'status-sm',
        'md' => 'status-md',
        'lg' => 'status-lg',
        'xl' => 'status-xl',
    ];
@endphp

<span {{ $attributes->class(['status', $variants[$variant] ?? null, $sizes[$size] ?? null]) }}></span>
