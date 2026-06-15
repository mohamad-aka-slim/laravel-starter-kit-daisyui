@props([
    'id',
    'as' => 'dialog',
    'open' => false,
    'placement' => 'middle',
])

@php
    $placements = [
        'top' => 'modal-top',
        'middle' => 'modal-middle',
        'bottom' => 'modal-bottom',
        'start' => 'modal-start',
        'end' => 'modal-end',
    ];

    $classes = collect([
        'modal',
        $placements[$placement] ?? $placements['middle'],
        $open ? 'modal-open' : null,
    ])->filter()->implode(' ');
@endphp

<{{ $as }}
    id="{{ $id }}"
    @if ($as === 'dialog' && $open) open @endif
    {{ $attributes->class($classes) }}
>
    {{ $slot }}
</{{ $as }}>
