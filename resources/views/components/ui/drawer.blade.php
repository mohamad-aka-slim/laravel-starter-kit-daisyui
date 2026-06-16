@props([
    'id' => 'drawer',
    'open' => false,
    'end' => false,
])

@php
    $classes = collect([
        'drawer',
        $open ? 'drawer-open' : null,
        $end ? 'drawer-end' : null,
    ])->filter()->implode(' ');
@endphp

<div {{ $attributes->class($classes) }}>
    <input id="{{ $id }}" type="checkbox" class="drawer-toggle" @checked($open)>
    <div class="drawer-content">
        {{ $slot }}
    </div>
    <div class="drawer-side">
        <label for="{{ $id }}" aria-label="close sidebar" class="drawer-overlay"></label>
        @if (isset($drawer))
            {{ $drawer }}
        @else
            <ul class="menu min-h-full w-80 bg-base-200 p-4 text-base-content">
                <li><a>Sidebar item</a></li>
            </ul>
        @endif
    </div>
</div>
