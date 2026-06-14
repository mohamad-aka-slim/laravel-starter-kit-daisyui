@props([
    'as' => 'span',
    'variant' => 'default',
    'size' => null,
    'outline' => false,
    'dash' => false,
    'soft' => false,
    'ghost' => false,
])

@php
    $variants = [
        'default' => '',
        'neutral' => 'badge-neutral',
        'primary' => 'badge-primary',
        'secondary' => 'badge-secondary',
        'accent' => 'badge-accent',
        'info' => 'badge-info',
        'success' => 'badge-success',
        'warning' => 'badge-warning',
        'error' => 'badge-error',
    ];

    $sizes = [
        'xs' => 'badge-xs',
        'sm' => 'badge-sm',
        'md' => 'badge-md',
        'lg' => 'badge-lg',
        'xl' => 'badge-xl',
    ];

    $classes = collect([
        'badge',
        $variants[$variant] ?? $variants['default'],
        $sizes[$size] ?? null,
        $outline ? 'badge-outline' : null,
        $dash ? 'badge-dash' : null,
        $soft ? 'badge-soft' : null,
        $ghost ? 'badge-ghost' : null,
    ])->filter()->implode(' ');
@endphp

<{{ $as }} {{ $attributes->class($classes) }}>
    {{ $slot }}
</{{ $as }}>
