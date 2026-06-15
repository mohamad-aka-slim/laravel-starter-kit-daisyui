@props([
    'as' => 'button',
    'href' => null,
    'active' => false,
    'disabled' => false,
    'size' => null,
    'type' => 'button',
])

@php
    $sizes = [
        'xs' => 'btn-xs',
        'sm' => 'btn-sm',
        'md' => 'btn-md',
        'lg' => 'btn-lg',
        'xl' => 'btn-xl',
    ];

    $classes = collect([
        'join-item btn',
        $sizes[$size] ?? null,
        $active ? 'btn-active' : null,
        $disabled ? 'btn-disabled' : null,
    ])->filter()->implode(' ');
@endphp

@if ($href)
    <a href="{{ $disabled ? '#' : $href }}" @if ($disabled) aria-disabled="true" tabindex="-1" @endif {{ $attributes->class($classes) }}>
        {{ $slot }}
    </a>
@else
    <{{ $as }} @if ($as === 'button') type="{{ $type }}" @endif @disabled($disabled && $as === 'button') {{ $attributes->class($classes) }}>
        {{ $slot }}
    </{{ $as }}>
@endif
