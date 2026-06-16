@props([
    'item' => null,
    'x' => 'end',
    'y' => 'top',
])

@php
    $positions = [
        'start' => 'indicator-start',
        'center' => 'indicator-center',
        'end' => 'indicator-end',
        'top' => 'indicator-top',
        'middle' => 'indicator-middle',
        'bottom' => 'indicator-bottom',
    ];
@endphp

<div {{ $attributes->class('indicator') }}>
    @if ($item)
        <span @class(['indicator-item badge badge-primary', $positions[$x] ?? $positions['end'], $positions[$y] ?? $positions['top']])>{{ $item }}</span>
    @elseif (isset($indicator))
        <span @class(['indicator-item', $positions[$x] ?? $positions['end'], $positions[$y] ?? $positions['top']])>{{ $indicator }}</span>
    @endif

    {{ $slot }}
</div>
