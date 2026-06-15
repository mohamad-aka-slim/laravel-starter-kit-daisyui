@props([
    'name' => null,
    'id' => null,
    'value' => '1',
    'variant' => 'default',
    'size' => null,
    'checked' => false,
    'required' => false,
    'disabled' => false,
])

@php
    $variants = [
        'default' => '',
        'neutral' => 'radio-neutral',
        'primary' => 'radio-primary',
        'secondary' => 'radio-secondary',
        'accent' => 'radio-accent',
        'info' => 'radio-info',
        'success' => 'radio-success',
        'warning' => 'radio-warning',
        'error' => 'radio-error',
        'danger' => 'radio-error',
    ];

    $sizes = ['xs' => 'radio-xs', 'sm' => 'radio-sm', 'md' => 'radio-md', 'lg' => 'radio-lg', 'xl' => 'radio-xl'];
@endphp

<input
    type="radio"
    value="{{ $value }}"
    @if ($name) name="{{ $name }}" @endif
    @if ($id) id="{{ $id }}" @endif
    @checked($checked)
    @required($required)
    @disabled($disabled)
    {{ $attributes->class(collect(['radio', $variants[$variant] ?? '', $sizes[$size] ?? null])->filter()->implode(' ')) }}
>
