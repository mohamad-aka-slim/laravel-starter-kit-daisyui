@props([
    'type' => 'text',
    'placeholder' => '',
    'value' => null,
    'name' => null,
    'id' => null,
    'variant' => 'default',
    'size' => null,
    'bordered' => true,
    'ghost' => false,
    'required' => false,
    'disabled' => false,
    'readonly' => false,
    'min' => null,
    'max' => null,
    'step' => null,
    'minlength' => null,
    'maxlength' => null,
])

@php
    $sizes = [
        'xs' => 'input-xs',
        'sm' => 'input-sm',
        'md' => 'input-md',
        'lg' => 'input-lg',
        'xl' => 'input-xl',
    ];

    $variants = [
        'default' => '',
        'neutral' => 'input-neutral',
        'primary' => 'input-primary',
        'secondary' => 'input-secondary',
        'accent' => 'input-accent',
        'info' => 'input-info',
        'success' => 'input-success',
        'warning' => 'input-warning',
        'error' => 'input-error',
        'danger' => 'input-error',
    ];

    $classes = collect([
        'input',
        $bordered ? 'input-bordered' : null,
        $variants[$variant] ?? $variants['default'],
        $sizes[$size] ?? null,
        $ghost ? 'input-ghost' : null,
    ])->filter()->implode(' ');
@endphp

<input
    type="{{ $type }}"
    @if ($name) name="{{ $name }}" @endif
    @if ($id) id="{{ $id }}" @endif
    @if ($placeholder) placeholder="{{ $placeholder }}" @endif
    @if (! is_null($value)) value="{{ $value }}" @endif
    @if (! is_null($min)) min="{{ $min }}" @endif
    @if (! is_null($max)) max="{{ $max }}" @endif
    @if (! is_null($step)) step="{{ $step }}" @endif
    @if (! is_null($minlength)) minlength="{{ $minlength }}" @endif
    @if (! is_null($maxlength)) maxlength="{{ $maxlength }}" @endif
    @required($required)
    @disabled($disabled)
    @readonly($readonly)
    {{ $attributes->class($classes) }}
>
