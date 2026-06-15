@props([
    'style' => null,
    'placement' => 'top',
    'size' => null,
])

@php
    $styles = [
        'box' => 'tabs-box',
        'border' => 'tabs-border',
        'lift' => 'tabs-lift',
    ];

    $placements = [
        'top' => 'tabs-top',
        'bottom' => 'tabs-bottom',
    ];

    $sizes = [
        'xs' => 'tabs-xs',
        'sm' => 'tabs-sm',
        'md' => 'tabs-md',
        'lg' => 'tabs-lg',
        'xl' => 'tabs-xl',
    ];

    $classes = collect([
        'tabs',
        $styles[$style] ?? null,
        $placements[$placement] ?? $placements['top'],
        $sizes[$size] ?? null,
    ])->filter()->implode(' ');
@endphp

<div role="tablist" {{ $attributes->class($classes) }}>
    {{ $slot }}
</div>
