@props([
    'size' => null,
])

@php
    $sizes = [
        'xs' => 'dock-xs',
        'sm' => 'dock-sm',
        'md' => 'dock-md',
        'lg' => 'dock-lg',
        'xl' => 'dock-xl',
    ];
@endphp

<div {{ $attributes->class(['dock', $sizes[$size] ?? null]) }}>
    {{ $slot }}
</div>
