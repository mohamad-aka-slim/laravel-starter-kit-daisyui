@props([
    'as' => 'div',
    'size' => null,
    'border' => false,
    'dash' => false,
    'side' => false,
    'imageFull' => false,
    'shadow' => true,
])

@php
    $sizes = [
        'xs' => 'card-xs',
        'sm' => 'card-sm',
        'md' => 'card-md',
        'lg' => 'card-lg',
        'xl' => 'card-xl',
    ];

    $classes = collect([
        'card bg-base-100',
        $sizes[$size] ?? null,
        $border ? 'card-border' : null,
        $dash ? 'card-dash' : null,
        $side ? 'card-side' : null,
        $imageFull ? 'image-full' : null,
        $shadow ? 'shadow-sm' : null,
    ])->filter()->implode(' ');
@endphp

<{{ $as }} {{ $attributes->class($classes) }}>
    {{ $slot }}
</{{ $as }}>
