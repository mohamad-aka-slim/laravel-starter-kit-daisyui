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
        'neutral' => 'toggle-neutral',
        'primary' => 'toggle-primary',
        'secondary' => 'toggle-secondary',
        'accent' => 'toggle-accent',
        'info' => 'toggle-info',
        'success' => 'toggle-success',
        'warning' => 'toggle-warning',
        'error' => 'toggle-error',
        'danger' => 'toggle-error',
    ];

    $sizes = [
        'xs' => 'toggle-xs',
        'sm' => 'toggle-sm',
        'md' => 'toggle-md',
        'lg' => 'toggle-lg',
        'xl' => 'toggle-xl',
    ];

    $classes = collect([
        'toggle',
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
