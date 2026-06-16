@props([
    'orientation' => null,
    'placement' => null,
    'variant' => null,
])

@php
    $orientations = [
        'horizontal' => 'divider-horizontal',
        'vertical' => '',
    ];

    $placements = [
        'start' => 'divider-start',
        'end' => 'divider-end',
    ];

    $variants = [
        'neutral' => 'divider-neutral',
        'primary' => 'divider-primary',
        'secondary' => 'divider-secondary',
        'accent' => 'divider-accent',
        'success' => 'divider-success',
        'warning' => 'divider-warning',
        'info' => 'divider-info',
        'error' => 'divider-error',
    ];

    $classes = collect([
        'divider',
        $orientations[$orientation] ?? null,
        $placements[$placement] ?? null,
        $variants[$variant] ?? null,
    ])->filter()->implode(' ');
@endphp

<div {{ $attributes->class($classes) }}>
    {{ $slot }}
</div>
