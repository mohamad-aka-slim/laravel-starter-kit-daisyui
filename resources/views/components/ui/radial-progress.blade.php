@props([
    'value' => 0,
    'size' => null,
    'thickness' => null,
])

@php
    $style = collect([
        "--value:{$value}",
        $size ? "--size:{$size}" : null,
        $thickness ? "--thickness:{$thickness}" : null,
    ])->filter()->implode('; ');
@endphp

<div
    role="progressbar"
    aria-valuenow="{{ $value }}"
    aria-valuemin="0"
    aria-valuemax="100"
    style="{{ $style }}"
    {{ $attributes->class('radial-progress') }}
>
    {{ $slot->isEmpty() ? "{$value}%" : $slot }}
</div>
