@props(['tip' => null, 'position' => 'top', 'variant' => 'default', 'open' => false])

@php
    $positions = ['top' => 'tooltip-top', 'bottom' => 'tooltip-bottom', 'left' => 'tooltip-left', 'right' => 'tooltip-right'];
    $variants = ['default' => '', 'neutral' => 'tooltip-neutral', 'primary' => 'tooltip-primary', 'secondary' => 'tooltip-secondary', 'accent' => 'tooltip-accent', 'info' => 'tooltip-info', 'success' => 'tooltip-success', 'warning' => 'tooltip-warning', 'error' => 'tooltip-error'];
@endphp

<div
    @if ($tip) data-tip="{{ $tip }}" @endif
    {{ $attributes->class(collect(['tooltip', $positions[$position] ?? null, $variants[$variant] ?? null, $open ? 'tooltip-open' : null])->filter()->implode(' ')) }}
>
    {{ $slot }}
</div>
