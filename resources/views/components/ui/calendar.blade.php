@props([
    'as' => 'input',
    'library' => 'native',
    'type' => 'date',
    'value' => null,
    'placeholder' => null,
])

@php
    $libraries = [
        'native' => 'input',
        'cally' => 'cally',
        'pikaday' => 'input pika-single',
        'react-day-picker' => 'react-day-picker',
    ];

    $classes = $libraries[$library] ?? $libraries['native'];
@endphp

@if ($as === 'input')
    <input
        type="{{ $type }}"
        @if ($placeholder) placeholder="{{ $placeholder }}" @endif
        @if (! is_null($value)) value="{{ $value }}" @endif
        {{ $attributes->class($classes) }}
    >
@else
    <{{ $as }} {{ $attributes->class($classes) }}>
        {{ $slot }}
    </{{ $as }}>
@endif
