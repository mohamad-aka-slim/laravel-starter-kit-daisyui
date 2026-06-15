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
        'neutral' => 'checkbox-neutral',
        'primary' => 'checkbox-primary',
        'secondary' => 'checkbox-secondary',
        'accent' => 'checkbox-accent',
        'info' => 'checkbox-info',
        'success' => 'checkbox-success',
        'warning' => 'checkbox-warning',
        'error' => 'checkbox-error',
        'danger' => 'checkbox-error',
    ];

    $sizes = [
        'xs' => 'checkbox-xs',
        'sm' => 'checkbox-sm',
        'md' => 'checkbox-md',
        'lg' => 'checkbox-lg',
        'xl' => 'checkbox-xl',
    ];

    $classes = collect([
        'checkbox',
        $variants[$variant] ?? $variants['default'],
        $sizes[$size] ?? null,
    ])->filter()->implode(' ');
@endphp

<input
    type="checkbox"
    value="{{ $value }}"
    @if ($name) name="{{ $name }}" @endif
    @if ($id) id="{{ $id }}" @endif
    @checked($checked)
    @required($required)
    @disabled($disabled)
    {{ $attributes->class($classes) }}
>
