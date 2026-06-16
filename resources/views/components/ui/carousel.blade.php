@props([
    'snap' => null,
    'vertical' => false,
])

@php
    $snaps = [
        'center' => 'carousel-center',
        'end' => 'carousel-end',
    ];

    $classes = collect([
        'carousel',
        $snaps[$snap] ?? null,
        $vertical ? 'carousel-vertical' : null,
    ])->filter()->implode(' ');
@endphp

<div {{ $attributes->class($classes) }}>
    {{ $slot }}
</div>
