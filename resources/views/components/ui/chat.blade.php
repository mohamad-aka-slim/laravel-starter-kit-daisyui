@props([
    'side' => 'start',
    'name' => null,
    'time' => null,
    'image' => null,
    'footer' => null,
    'variant' => null,
])

@php
    $sides = [
        'start' => 'chat-start',
        'end' => 'chat-end',
    ];

    $variants = [
        'primary' => 'chat-bubble-primary',
        'secondary' => 'chat-bubble-secondary',
        'accent' => 'chat-bubble-accent',
        'info' => 'chat-bubble-info',
        'success' => 'chat-bubble-success',
        'warning' => 'chat-bubble-warning',
        'error' => 'chat-bubble-error',
    ];
@endphp

<div {{ $attributes->class(['chat', $sides[$side] ?? $sides['start']]) }}>
    @if ($image)
        <div class="chat-image avatar">
            <div class="w-10 rounded-full">
                <img src="{{ $image }}" alt="{{ $name ?? 'Chat avatar' }}">
            </div>
        </div>
    @endif

    @if ($name || $time)
        <div class="chat-header">
            {{ $name }}
            @if ($time)
                <time class="text-xs opacity-50">{{ $time }}</time>
            @endif
        </div>
    @endif

    <div @class(['chat-bubble', $variants[$variant] ?? null])>
        {{ $slot }}
    </div>

    @if ($footer)
        <div class="chat-footer opacity-50">{{ $footer }}</div>
    @endif
</div>
