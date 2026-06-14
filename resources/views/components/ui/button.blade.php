@props([
    'type' => 'button',
    'href' => null,
    'variant' => 'default',
    'size' => null,
    'outline' => false,
    'wide' => false,
    'block' => false,
    'square' => false,
    'circle' => false,
    'active' => false,
    'loading' => false,
    'disabled' => false,
])

@php
    $variants = [
        'default' => '',
        'neutral' => 'btn-neutral',
        'primary' => 'btn-primary',
        'secondary' => 'btn-secondary',
        'accent' => 'btn-accent',
        'ghost' => 'btn-ghost',
        'link' => 'btn-link',
        'info' => 'btn-info',
        'success' => 'btn-success',
        'warning' => 'btn-warning',
        'error' => 'btn-error',
    ];

    $sizes = [
        'xs' => 'btn-xs',
        'sm' => 'btn-sm',
        'md' => 'btn-md',
        'lg' => 'btn-lg',
        'xl' => 'btn-xl',
    ];

    $classes = collect([
        'btn',
        $variants[$variant] ?? $variants['default'],
        $sizes[$size] ?? null,
        $outline ? 'btn-outline' : null,
        $wide ? 'btn-wide' : null,
        $block ? 'btn-block' : null,
        $square ? 'btn-square' : null,
        $circle ? 'btn-circle' : null,
        $active ? 'btn-active' : null,
        $disabled ? 'btn-disabled' : null,
    ])->filter()->implode(' ');
@endphp

@if ($href)
    <a
        href="{{ $disabled ? '#' : $href }}"
        @if ($disabled) aria-disabled="true" tabindex="-1" @endif
        {{ $attributes->class($classes) }}
    >
        @if ($loading)
            <span class="loading loading-spinner"></span>
        @endif

        {{ $slot }}
    </a>
@else
    <button
        type="{{ $type }}"
        @disabled($disabled || $loading)
        {{ $attributes->class($classes) }}
    >
        @if ($loading)
            <span class="loading loading-spinner"></span>
        @endif

        {{ $slot }}
    </button>
@endif
