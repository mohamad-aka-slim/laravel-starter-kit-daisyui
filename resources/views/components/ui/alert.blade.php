@props([
    'variant' => 'default',
    'outline' => false,
    'soft' => false,
    'dash' => false,
    'vertical' => false,
    'horizontal' => false,
    'icon' => true,
    
])
@php
    $variants = [
        'default' => '',
        'info' => 'alert-info',
        'success' => 'alert-success',
        'warning' => 'alert-warning',
        'error' => 'alert-error',
    ];

    $classes = collect([
        'alert',
        $variants[$variant] ?? '',
        $outline ? 'alert-outline' : null,
        $soft ? 'alert-soft' : null,
        $dash ? 'alert-dash' : null,
        $vertical ? 'alert-vertical' : null,
        $horizontal ? 'alert-horizontal' : null,
    ])->filter()->implode(' ');
@endphp

<div role="alert" {{ $attributes->class($classes) }}>
    @if ($icon)
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
    @endif

    <span>{{ $slot }}</span>
</div>
