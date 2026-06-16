@props([
    'shape' => 'squircle',
    'src' => null,
    'alt' => '',
    'as' => 'div',
])

@php
    $shapes = [
        'squircle' => 'mask-squircle',
        'heart' => 'mask-heart',
        'hexagon' => 'mask-hexagon',
        'hexagon-2' => 'mask-hexagon-2',
        'decagon' => 'mask-decagon',
        'pentagon' => 'mask-pentagon',
        'diamond' => 'mask-diamond',
        'square' => 'mask-square',
        'circle' => 'mask-circle',
        'star' => 'mask-star',
        'star-2' => 'mask-star-2',
        'triangle' => 'mask-triangle',
        'triangle-2' => 'mask-triangle-2',
        'triangle-3' => 'mask-triangle-3',
        'triangle-4' => 'mask-triangle-4',
        'half-1' => 'mask-half-1',
        'half-2' => 'mask-half-2',
    ];

    $classes = ['mask', $shapes[$shape] ?? $shapes['squircle']];
@endphp

@if ($src)
    <img src="{{ $src }}" alt="{{ $alt }}" {{ $attributes->class($classes) }}>
@else
    <{{ $as }} {{ $attributes->class($classes) }}>
        {{ $slot }}
    </{{ $as }}>
@endif
