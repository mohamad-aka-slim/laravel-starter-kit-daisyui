@props([
    'as' => 'div',
    'align' => 'start',
    'side' => 'bottom',
    'hover' => false,
    'open' => false,
    'close' => false,
])

@php
    $alignments = [
        'start' => 'dropdown-start',
        'center' => 'dropdown-center',
        'end' => 'dropdown-end',
    ];

    $sides = [
        'top' => 'dropdown-top',
        'bottom' => 'dropdown-bottom',
        'left' => 'dropdown-left',
        'right' => 'dropdown-right',
    ];

    $classes = collect([
        'dropdown',
        $alignments[$align] ?? $alignments['start'],
        $sides[$side] ?? $sides['bottom'],
        $hover ? 'dropdown-hover' : null,
        $open ? 'dropdown-open' : null,
        $close ? 'dropdown-close' : null,
    ])->filter()->implode(' ');
@endphp

<{{ $as }} {{ $attributes->class($classes) }}>
    {{ $slot }}
</{{ $as }}>
