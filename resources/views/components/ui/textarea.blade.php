@props([
    'placeholder' => '',
    'value' => null,
    'name' => null,
    'id' => null,
    'variant' => 'default',
    'size' => null,
    'ghost' => false,
    'required' => false,
    'disabled' => false,
    'readonly' => false,
    'rows' => null,
    'minlength' => null,
    'maxlength' => null,
])

@php
    $variants = [
        'default' => '',
        'neutral' => 'textarea-neutral',
        'primary' => 'textarea-primary',
        'secondary' => 'textarea-secondary',
        'accent' => 'textarea-accent',
        'info' => 'textarea-info',
        'success' => 'textarea-success',
        'warning' => 'textarea-warning',
        'error' => 'textarea-error',
        'danger' => 'textarea-error',
    ];

    $sizes = [
        'xs' => 'textarea-xs',
        'sm' => 'textarea-sm',
        'md' => 'textarea-md',
        'lg' => 'textarea-lg',
        'xl' => 'textarea-xl',
    ];

    $classes = collect([
        'textarea',
        $variants[$variant] ?? $variants['default'],
        $sizes[$size] ?? null,
        $ghost ? 'textarea-ghost' : null,
    ])->filter()->implode(' ');
@endphp

<textarea
    @if ($name) name="{{ $name }}" @endif
    @if ($id) id="{{ $id }}" @endif
    @if ($placeholder) placeholder="{{ $placeholder }}" @endif
    @if (! is_null($rows)) rows="{{ $rows }}" @endif
    @if (! is_null($minlength)) minlength="{{ $minlength }}" @endif
    @if (! is_null($maxlength)) maxlength="{{ $maxlength }}" @endif
    @required($required)
    @disabled($disabled)
    @readonly($readonly)
    {{ $attributes->class($classes) }}
>{{ $value ?? $slot }}</textarea>
