@props([
    'options' => [],
    'selected' => null,
    'placeholder' => null,
    'name' => null,
    'id' => null,
    'variant' => 'default',
    'size' => null,
    'ghost' => false,
    'required' => false,
    'disabled' => false,
    'multiple' => false,
])

@php
    $variants = [
        'default' => '',
        'neutral' => 'select-neutral',
        'primary' => 'select-primary',
        'secondary' => 'select-secondary',
        'accent' => 'select-accent',
        'info' => 'select-info',
        'success' => 'select-success',
        'warning' => 'select-warning',
        'error' => 'select-error',
        'danger' => 'select-error',
    ];

    $sizes = [
        'xs' => 'select-xs',
        'sm' => 'select-sm',
        'md' => 'select-md',
        'lg' => 'select-lg',
        'xl' => 'select-xl',
    ];

    $selectedValues = collect(is_array($selected) ? $selected : [$selected])
        ->filter(fn ($value) => ! is_null($value))
        ->map(fn ($value) => (string) $value)
        ->all();

    $classes = collect([
        'select',
        $variants[$variant] ?? $variants['default'],
        $sizes[$size] ?? null,
        $ghost ? 'select-ghost' : null,
    ])->filter()->implode(' ');
@endphp

<select
    @if ($name) name="{{ $name }}" @endif
    @if ($id) id="{{ $id }}" @endif
    @required($required)
    @disabled($disabled)
    @if ($multiple) multiple @endif
    {{ $attributes->class($classes) }}
>
    @if ($placeholder)
        <option disabled @selected(empty($selectedValues))>{{ $placeholder }}</option>
    @endif

    @foreach ($options as $value => $label)
        <option value="{{ $value }}" @selected(in_array((string) $value, $selectedValues, true))>{{ $label }}</option>
    @endforeach

    {{ $slot }}
</select>
