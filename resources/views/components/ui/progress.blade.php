@props(['value' => null, 'max' => 100, 'variant' => 'default'])

@php
    $variants = ['default' => '', 'neutral' => 'progress-neutral', 'primary' => 'progress-primary', 'secondary' => 'progress-secondary', 'accent' => 'progress-accent', 'info' => 'progress-info', 'success' => 'progress-success', 'warning' => 'progress-warning', 'error' => 'progress-error'];
@endphp

<progress
    max="{{ $max }}"
    @if (! is_null($value)) value="{{ $value }}" @endif
    {{ $attributes->class(collect(['progress', $variants[$variant] ?? null])->filter()->implode(' ')) }}
></progress>
