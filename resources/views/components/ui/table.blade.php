@props([
    'size' => null,
    'zebra' => false,
    'pinRows' => false,
    'pinCols' => false,
])

@php
    $sizes = [
        'xs' => 'table-xs',
        'sm' => 'table-sm',
        'md' => 'table-md',
        'lg' => 'table-lg',
        'xl' => 'table-xl',
    ];

    $classes = collect([
        'table',
        $sizes[$size] ?? null,
        $zebra ? 'table-zebra' : null,
        $pinRows ? 'table-pin-rows' : null,
        $pinCols ? 'table-pin-cols' : null,
    ])->filter()->implode(' ');
@endphp

<div class="overflow-x-auto">
    <table {{ $attributes->class($classes) }}>
        {{ $slot }}
    </table>
</div>
