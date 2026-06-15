@props(['style' => 'spinner', 'size' => null])

@php
    $styles = ['spinner' => 'loading-spinner', 'dots' => 'loading-dots', 'ring' => 'loading-ring', 'ball' => 'loading-ball', 'bars' => 'loading-bars', 'infinity' => 'loading-infinity'];
    $sizes = ['xs' => 'loading-xs', 'sm' => 'loading-sm', 'md' => 'loading-md', 'lg' => 'loading-lg', 'xl' => 'loading-xl'];
@endphp

<span {{ $attributes->class(collect(['loading', $styles[$style] ?? $styles['spinner'], $sizes[$size] ?? null])->filter()->implode(' ')) }}></span>
