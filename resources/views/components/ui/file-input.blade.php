@props([
    'name' => null,
    'id' => null,
    'variant' => 'default',
    'size' => null,
    'ghost' => false,
    'required' => false,
    'disabled' => false,
    'multiple' => false,
    'accept' => null,
])

@php
    $variants = [
        'default' => '',
        'neutral' => 'file-input-neutral',
        'primary' => 'file-input-primary',
        'secondary' => 'file-input-secondary',
        'accent' => 'file-input-accent',
        'info' => 'file-input-info',
        'success' => 'file-input-success',
        'warning' => 'file-input-warning',
        'error' => 'file-input-error',
        'danger' => 'file-input-error',
    ];

    $sizes = ['xs' => 'file-input-xs', 'sm' => 'file-input-sm', 'md' => 'file-input-md', 'lg' => 'file-input-lg', 'xl' => 'file-input-xl'];
@endphp

<input
    type="file"
    @if ($name) name="{{ $name }}" @endif
    @if ($id) id="{{ $id }}" @endif
    @if ($accept) accept="{{ $accept }}" @endif
    @if ($multiple) multiple @endif
    @required($required)
    @disabled($disabled)
    {{ $attributes->class(collect(['file-input', $variants[$variant] ?? '', $sizes[$size] ?? null, $ghost ? 'file-input-ghost' : null])->filter()->implode(' ')) }}
>
