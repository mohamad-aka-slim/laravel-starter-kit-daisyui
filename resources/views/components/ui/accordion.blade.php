@props([
    'title' => 'Accordion item',
    'name' => 'accordion',
    'checked' => false,
    'open' => false,
    'icon' => null,
    'as' => 'div',
])

@php
    $classes = collect([
        'collapse bg-base-100 border border-base-300',
        $icon === 'arrow' ? 'collapse-arrow' : null,
        $icon === 'plus' ? 'collapse-plus' : null,
        $open ? 'collapse-open' : null,
    ])->filter()->implode(' ');
@endphp

@if ($as === 'details')
    <details name="{{ $name }}" @if ($checked || $open) open @endif {{ $attributes->class($classes) }}>
        <summary class="collapse-title font-semibold">{{ $title }}</summary>
        <div class="collapse-content text-sm">
            {{ $slot }}
        </div>
    </details>
@else
    <div {{ $attributes->class($classes) }}>
        <input type="radio" name="{{ $name }}" @checked($checked) />
        <div class="collapse-title font-semibold">{{ $title }}</div>
        <div class="collapse-content text-sm">
            {{ $slot }}
        </div>
    </div>
@endif
