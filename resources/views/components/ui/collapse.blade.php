@props([
    'title' => 'Collapse title',
    'open' => false,
    'close' => false,
    'icon' => null,
    'as' => 'details',
])

@php
    $classes = collect([
        'collapse bg-base-100 border border-base-300',
        $icon === 'arrow' ? 'collapse-arrow' : null,
        $icon === 'plus' ? 'collapse-plus' : null,
        $open ? 'collapse-open' : null,
        $close ? 'collapse-close' : null,
    ])->filter()->implode(' ');
@endphp

@if ($as === 'details')
    <details @if ($open) open @endif {{ $attributes->class($classes) }}>
        <summary class="collapse-title font-semibold">{{ $title }}</summary>
        <div class="collapse-content text-sm">
            {{ $slot }}
        </div>
    </details>
@else
    <div {{ $attributes->class($classes) }}>
        <input type="checkbox" @checked($open) />
        <div class="collapse-title font-semibold">{{ $title }}</div>
        <div class="collapse-content text-sm">
            {{ $slot }}
        </div>
    </div>
@endif
