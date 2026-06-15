@props([
    'x' => 'end',
    'y' => 'bottom',
])

@php
    $xPositions = [
        'start' => 'toast-start',
        'center' => 'toast-center',
        'end' => 'toast-end',
    ];

    $yPositions = [
        'top' => 'toast-top',
        'middle' => 'toast-middle',
        'bottom' => 'toast-bottom',
    ];

    $classes = collect([
        'toast',
        $xPositions[$x] ?? $xPositions['end'],
        $yPositions[$y] ?? $yPositions['bottom'],
    ])->filter()->implode(' ');
@endphp

<div {{ $attributes->class($classes) }}>
    {{ $slot }}
</div>
