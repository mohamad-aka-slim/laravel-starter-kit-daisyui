@props([
    'name' => null,
    'id' => null,
    'value' => null,
    'min' => 0,
    'max' => 100,
    'step' => null,
    'variant' => 'default',
    'size' => null,
    'disabled' => false,
])

@php
    $variants = [
        'default' => '',
        'neutral' => 'range-neutral',
        'primary' => 'range-primary',
        'secondary' => 'range-secondary',
        'accent' => 'range-accent',
        'info' => 'range-info',
        'success' => 'range-success',
        'warning' => 'range-warning',
        'error' => 'range-error',
        'danger' => 'range-error',
    ];

    $sizes = ['xs' => 'range-xs', 'sm' => 'range-sm', 'md' => 'range-md', 'lg' => 'range-lg', 'xl' => 'range-xl'];
@endphp

<input
    type="range"
    min="{{ $min }}"
    max="{{ $max }}"
    @if (! is_null($value)) value="{{ $value }}" @endif
    @if (! is_null($step)) step="{{ $step }}" @endif
    @if ($name) name="{{ $name }}" @endif
    @if ($id) id="{{ $id }}" @endif
    @disabled($disabled)
    {{ $attributes->class(collect(['range', $variants[$variant] ?? '', $sizes[$size] ?? null])->filter()->implode(' ')) }}
>
